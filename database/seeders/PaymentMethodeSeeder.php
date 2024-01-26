<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\PaymentMethode;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaymentMethodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentMethode::insert([
            [
                'name'=>'Bank BNI',
                'code'=>'bni_va', //code ini merefer ke midtrains karena di midtranis code untuk bank bni adalah bni_va
                'status'=>'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=>'Bank BCA',
                'code'=>'bca_va', //code ini merefer ke midtrains karena di midtranis code untuk bank bni adalah bni_va
                'status'=>'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=>'Bank Mandiri',
                'code'=>'mandiri_va', //code ini merefer ke midtrains karena di midtranis code untuk bank bni adalah bni_va
                'status'=>'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=>'Bank BNI',
                'code'=>'bni_va', //code ini merefer ke midtrains karena di midtranis code untuk bank bni adalah bni_va
                'status'=>'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=>'Bank OCBC',
                'code'=>'ocbc_va', //code ini merefer ke midtrains karena di midtranis code untuk bank bni adalah bni_va
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]
        ]);
    }
}
