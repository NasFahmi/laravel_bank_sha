<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\TransactionType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TransactionType::insert([
            [
                'name'=>'Transfer',
                'code'=>'transfer',
                'action'=>'debit', //
                //thubnail nullable
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'name'=>'Internet',
                'code'=>'internet',
                'action'=>'debit', //uang keluar
                //thubnail nullable
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'name'=>'Top Up',
                'code'=>'top up',
                'action'=>'credit', //saldo nambah maka kredit
                //thubnail nullable
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'name'=>'Recieve',
                'code'=>'recieve',
                'action'=>'credit', //saldo nambah di wallet maka menggunakan kredit
                //thubnail nullable
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
    }
}
