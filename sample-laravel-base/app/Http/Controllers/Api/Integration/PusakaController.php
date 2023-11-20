<?php

namespace App\Http\Controllers\Api\Integration;

use App\Http\Controllers\ApiBaseController;
use App\Http\Controllers\AppClientController;
use App\Models\Sekolah;
use App\Models\UserSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PusakaController extends ApiBaseController
{
     /**
     * Check Access
     *
     * @return void
     */
    public function checkAccess(Bool $source = false){
        $userSekolah = UserSekolah::select(['id','sekolah_id'])->where('user_id',Auth::user()->id)->first();
        $result = [
            'status' => false,
            'data' =>[
                'message' => 'User Sekolah Not Found'
            ]
        ];

        if($userSekolah){
            $sekolah = Sekolah::select('npsn')->find($userSekolah->sekolah_id);
            $result = (new AppClientController)->has_access('pusaka',$sekolah->npsn);
        }

        if($source) return $result['data'];

        if($result['status'])
            return $this->sendResponse($result['data']);

        return $this->sendError($result['data']['message'], $result,400);
    }

     /**
     * Granted Login
     *
     * @return void
     */
    public function autologin(){
        $hasAccess = $this->checkAccess(true);

        $result = [
            'status' => false,
            'data' => null
        ];

        if($hasAccess){
            $grantedLogin = (new AppClientController)->autologin('pusaka', Auth::user()->nik);
            if($grantedLogin['status'])
            return $this->sendResponse($grantedLogin['data']);
        }

        return $this->sendResponse($result['data']);
    }
}
