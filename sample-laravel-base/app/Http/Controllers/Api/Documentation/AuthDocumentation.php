<?php

namespace App\Http\Controllers\Api\Documentation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthDocumentation extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/auth/login",
     *     tags={"Authentikasi"},
     *     summary="Mengembalikan Data User yang berhasil Login",
     *     description="Mengembalikan Data User yang berhasil Login",
     *     operationId="Login",
     *     @OA\RequestBody(
     *       required=true,
     *       description="Bulk products Body",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  @OA\Property(
     *                      property="username",
     *                      type="string",
     *                      example="foo",
     *                  ),
     *                  @OA\Property(
     *                     property="password",
     *                     type="string",
     *                     example="bar",
     *                  ),
     *              )
     *          )
     *     ),
     *     @OA\Response(response="200",description="Success"),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=422, description="Validation Error"),
     *
     * )
     */
    public function Login(){}

    /**
     * @OA\Get(
     *     path="/api/auth/logout",
     *     tags={"Authentikasi"},
     *     summary="Mengeluarkan user dan menghapus data token",
     *     description="Mengeluarkan user dan menghapus data token",
     *     operationId="Logout",
     *     security={ {"bearerAuth": {} }},
     *     @OA\Response(response="200",description="Success"),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=422, description="Validation Error"),
     *
     * )
     */
    public function Logout(){}

    /**
     * @OA\Get(
     *     path="/api/auth/user",
     *     tags={"Authentikasi"},
     *     summary="Mengeluarkan data user yang sedang login",
     *     description="Mengeluarkan data user yang sedang login",
     *     operationId="User",
     *     security={ {"bearerAuth": {} }},
     *     @OA\Response(response="200",description="Success"),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=422, description="Validation Error"),
     *
     * )
     */
    public function User(){}
}
