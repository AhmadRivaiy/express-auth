<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'nik' => '3273181201980003',
                'name' => 'CHANDRA RAMDHAN PURNAMA',
                'email' => 'chandraramdhanpurnama@gmail.com',
                'mobile_phone' => '6283821896126',
                'mobile_phone_has_whatsapp' => TRUE,
                'password' => 'jabarjuara'
            ],
            [
                'nik' => '3217081505630009',
                'name' => 'MAMAN DARMATIN',
                'email' => 'suryana06051961@gmail.com',
                'mobile_phone' => '85659163708',
                'mobile_phone_has_whatsapp' => TRUE,
                'password' => 'jabarjuara'
            ],
            [
                'nik' => '3250241708900001',
                'name' => 'Admin Disdik Jabar',
                'email' => 'disdik@jabarprov.go.id',
                'mobile_phone' => '081',
                'mobile_phone_has_whatsapp' => TRUE,
                'password' => 'jabarjuara'
            ]
        ];

        foreach($datas as $user){
            $model = User::where('nik', $user['nik'])->first();
            if(!$model) $model = new User();
            $model->nik = $user['nik'];
            $model->name = $user['name'];
            $model->email = $user['email'];
            $model->mobile_phone = $user['mobile_phone'];
            $model->mobile_phone_has_whatsapp = $user['mobile_phone_has_whatsapp'];
            $model->password = Hash::make($user['password']);
            $model->save();
        }
    }
}
