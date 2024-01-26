<?php

namespace Database\Seeders;

use App\Models\OperatorCard;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OperatorCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OperatorCard::insert([
            [
                'name'=>'Telkomsel',
                'status'=>'active',
                'thumbnail'=>'telkomsel.png'
            ],
            [
                'name'=>'Indosat',
                'status'=>'active',
                'thumbnail'=>'indosat.png'
            ],
            [
                'name'=>'Singtel',
                'status'=>'active',
                'thumbnail'=>'singtel.png'
            ],
        ]);
    }
}
