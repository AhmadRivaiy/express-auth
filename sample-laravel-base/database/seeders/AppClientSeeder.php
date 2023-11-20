<?php

namespace Database\Seeders;

use App\Models\AppClient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'name' => 'Sigesit Juara',
                'slug' => 'sigesit-juara',
                'secret' => '[wxY[u%}=gg*4b(2x;4,eB}L+X]4Qz@f4Q:Njw]GLyGSvcny+U;bC?pp$GDW]i:@J+5,yg;LGyZ%PS$,y%3dMyLxHC@G#?C5k7t9)cqdRj0N}+RX*UAnNyi;@{CJ1[Fd2/fX@FT7@]0nGFEr/bim{A;wG}_H%NW.A6N3@FX-8U$-8g!CndcRQNeKvc$3{!@m2qMP[6Q}D@i,iwbpaY3e[H2hx#}h!m64n[F0d',
                'url' => 'https://dev-sigesitjuara.jabarprov.go.id/api',
                'check_access_path' => '/sso/disdik/access',
                'autologin_path' => '/sso/disdik/autologin',
                'auth_type' => 'bearer'
            ],
            [
                'name' => 'Jabar Future Leaders Scholarship',
                'slug' => 'jfls',
                'secret' => 'TGMiiZWUkfxNXI8HQ9DLkziIaCPGEqFWTsQc2DScJPBx1iWiRVSglSh',
                'url' => 'https://dev-api-jfls.jabarprov.go.id/api',
                'check_access_path' => '/sso/jfls/access',
                'autologin_path' => '/sso/jfls/auto-login',
                'auth_type' => 'bearer'
            ],
            [
                'name' => 'Dashboard Pendidikan',
                'slug' => 'dashboard-pendidikan',
                'secret' => '81e6caa04b24bbe3453a0764957168a5e09',
                'url' => 'http://10.200.54.3/dashboard-api/auth_service',
                'check_access_path' => '/v1/sso/access',
                'autologin_path' => '/v1/sso/autologin',
                'auth_type' => 'bearer'
            ],
            [
                'name' => 'Agenda Pimpinan',
                'slug' => 'agenda-pimpinan',
                'secret' => 'f090a78a2cea69df6afcc7738d258c4',
                'url' => 'https://api.webdisdik.jabarprov.go.id/api-app/v1',
                'check_access_path' => '/auth_service/sso/access',
                'autologin_path' => '/auth_service/sso/autologin',
                'auth_type' => 'bearer'
            ],
            // [
            //     'name' => 'Simantap',
            //     'slug' => 'simantap',
            //     'secret' => '1b029fd8e7d689912efb800874fee0d61f090a78a2cea69df6afcc7738d258c4',
            //     'url' => 'https://api.webdisdik.jabarprov.go.id/api-app/v1',
            //     'check_access_path' => '/auth_service/sso/access',
            //     'autologin_path' => '/auth_service/sso/autologin',
            //     'auth_type' => 'bearer'
            // ]
        ];

        foreach($clients as $client){
            $model = AppClient::where('slug', $client['slug'])->first();
            if(!$model) $model = new AppClient();

            $model->name = $client['name'];
            $model->slug = $client['slug'];
            $model->secret = $client['secret'];
            $model->url = $client['url'];
            $model->check_access_path = $client['check_access_path'];
            $model->autologin_path = $client['autologin_path'];
            $model->auth_type = $client['auth_type'];
            $model->save();
        }
    }
}
