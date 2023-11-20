<?php

namespace App\Http\Controllers\Api\Integration;

use App\Http\Controllers\ApiBaseController;
use App\Http\Controllers\AppClientController;
use Illuminate\Support\Facades\Auth;

class AgendaPimpinanController extends ApiBaseController
{
    /**
     * Check Access
     *
     * @return void
     */
    public function checkAccess(Bool $source = false){
        $result = (new AppClientController)->has_access('agenda-pimpinan',Auth::user()->nik);

        if($source) return $result['data'];

        if($result['status'])
            return $this->sendResponse($result['data']);

        return $this->sendError($result['data']['message'], null,400);
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
            $grantedLogin = (new AppClientController)->autologin('agenda-pimpinan', Auth::user()->nik);
            if($grantedLogin['status'])
            return $this->sendResponse($grantedLogin['data']);
        }

        return $this->sendResponse($result['data']);
    }
}
