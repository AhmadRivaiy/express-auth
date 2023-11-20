<?php

namespace App\Http\Controllers;

use App\Models\AppClient;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AppClientController extends Controller
{
    /**
     * Search for Client
     *
     * @param String $client_slug
     * @return void
     */
    public function searchAppClient(String $client_slug)
    {
        return AppClient::where('slug', $client_slug)->first();
    }

    /**
     * Check Has Access Client
     *
     * @param String $client_slug
     * @param String $nik
     * @return boolean
     */
    public function has_access(String $client_slug, String $username)
    {
        $appClient = $this->searchAppClient($client_slug);
        // Di DB Tambahin Slug
        // Nama Table 'app_clients'
        if (!$appClient) return false;

        $requester = Http::accept('application/json');

        $this->authenticator_style($appClient, $requester, $username);

        $response = $requester->post($appClient->url . $appClient->check_access_path, [
            'username' => $username,
            'anotation_key' => Carbon::now()->timestamp
        ]);

        $result = [
            'status' => false,
            'data' => null
        ];

        if ($response->successful()) {
            $tmpJson = $response->json();
            $result['status'] = true;
            $result['data'] = $tmpJson['data'];
        } else {
            $result['data'] = $response->json();
        };

        return $result;
    }

    /**
     * Set the Authenticator Style
     *
     * @param AppClient $appClient
     * @param PendingRequest $requester
     * @return void
     */
    public function authenticator_style(AppClient $appClient, PendingRequest &$requester, $username)
    {
        switch ($appClient->auth_type) {
            case 'bearer':
                $requester->withToken(Hash::make($username . $appClient->secret));
                break;
        }
    }

    /**
     * Autologin
     *
     * @param String $client_slug
     * @param String $nik
     * @return boolean
     */
    public function autologin(String $client_slug, String $username)
    {
        $appClient = $this->searchAppClient($client_slug);
        if (!$appClient) return false;

        $requester = Http::accept('application/json');

        $this->authenticator_style($appClient, $requester, $username);

        $response = $requester->post($appClient->url . $appClient->autologin_path, [
            'username' => $username,
            'anotation_key' => Carbon::now()->timestamp
        ]);

        $result = [
            'status' => false,
            'data' => null
        ];

        if ($response->successful()) {
            $tmpJson = $response->json();
            $result['status'] = true;
            $result['data'] = $tmpJson['data'];
        } else {
            $result['data'] = $response->json();
        };

        return $result;
    }
}
