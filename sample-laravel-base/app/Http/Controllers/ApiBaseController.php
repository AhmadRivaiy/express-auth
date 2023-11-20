<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @OA\Info(
 *     description="DISDIK SSO API Documentation For Integration",
 *     version="1.0.0",
 *     title="DISDIK SSO Documentation",
 *     termsOfService="http://swagger.io/terms/",
 *     @OA\Contact(
 *         email="disdik@jabarprov.go.id"
 *     ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 *
 * @OA\SecurityScheme(
 *    securityScheme="bearerAuth",
 *    in="header",
 *    name="bearerAuth",
 *    type="http",
 *    scheme="bearer",
 *    description="Enter token in format (Bearer <token>)",
 * ),
 */

class ApiBaseController extends Controller
{
    /**
     * success response method.
     *
     * @return JsonResponse
     */
    public function sendResponse($result, $message = 'success')
    {
        $response = [
            'success' => true,
            'message' => $message,
            'data' => $result,
        ];

        return response()->json($response, 200);
    }

    /**
     * return error response.
     *
     * @return JsonResponse
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $this->isStatusCode($code) ? $code : 500);
    }

    /**
     * Check Status Code
     *
     * @param [type] $code
     * @return boolean
     */
    function isStatusCode($code)
    {
        $previousCode = http_response_code();

        http_response_code($code);
        $valid = ($code === http_response_code());

        http_response_code($previousCode); // Restore the previous code

        return $valid;
    }

    /**
     * Pagination Mapping
     * @param $data
     * @param $query
     * @param bool $source
     * @return void
     */
    public function paginationMap(&$data, $query, $request)
    {
        if ($request->source)
            $data = $query->get();
        else {
            $orderDirection = $request->order_direction ?? 'ASC';
            $orderName = $request->order_column ?? 'id';

            $data = $query->orderByRaw($orderName . " " . $orderDirection)
                ->paginate(
                    $request->perPage ?? 10,
                    ['*'],
                    'page',
                    $request->page ?? 1
                );
        }
    }
}
