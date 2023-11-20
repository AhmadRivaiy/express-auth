<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\ApiBaseController;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\PasswordSekolah;
use App\Models\Sekolah;
use App\Models\User;
use App\Models\UserSekolah;
use Database\Seeders\SimantapUserSeeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends ApiBaseController
{
    /**
     * Login Algorithm Passport for SSO Disdik Jabar
     *
     * @param LoginRequest $request
     * @return \App\Http\Controllers\JsonResponse
     *
     */
    public function login(LoginRequest $request)
    {
        $credentials = [
            'nik' => $request->username,
            'password' => $request->password,
            'account_status' => TRUE
        ];

        $user = null;

        if (Auth::attempt($credentials)) $user = Auth::user();

        //Check Access from another Password
        $sekolah = Sekolah::select('id', 'npsn')->where('npsn', $request->username)->first();
        if ($sekolah) {
            $PasswordSekolahs = PasswordSekolah::where('sekolah_id', $sekolah->id)->get();
            foreach ($PasswordSekolahs as $check) {
                if (Hash::check($request->password, $check->password)) {
                    $user = User::where('nik', $sekolah->npsn)->first();
                    if (!$user) {
                        $user = new User();
                        foreach (SimantapUserSeeder::SIMANTAP_USER as $key => $value) {
                            if ($value['npsn'] === $sekolah->npsn && $value['ops_nama']) {
                                $user->nik = $value['npsn'];
                                $user->name = $value['ops_nama'];
                                $user->mobile_phone = $value['ops_hp'];
                                $user->password = Hash::make($request->password);
                                $user->mobile_phone_has_whatsapp = false;
                                $user->save();

                                $userSekolah = new UserSekolah();
                                $userSekolah->user_id = $user->id;
                                $userSekolah->sekolah_id = $sekolah->id;
                                $userSekolah->save();
                                break;
                            }
                        }
                    }
                    break;
                }
            }
        }

        if ($user) {
            Auth::loginUsingId($user->id);
            $user->tokens->each(function ($token, $key) {
                $token->delete();
            });
            $token = $user->createToken('Personal Access Token SSO')->accessToken;
            $response = $user;
            $response->token = $token;
            return $this->sendResponse($response, 'Token Generated');
        }

        return $this->sendError('Username atau Password salah', [], 400);
    }

    /**
     * Logout Method to Revoke all Token
     *
     * @param Request $request
     * @return void
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return $this->sendResponse(null, 'Logout Success');
    }

    /**
     * To Get Current User
     *
     * @param Request $request
     * @return void
     */
    public function user(Request $request)
    {
        return $this->sendResponse(Auth::user(), 'Current User');
    }
}
