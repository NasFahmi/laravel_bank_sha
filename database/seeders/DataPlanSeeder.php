<?php

namespace Database\Seeders;

use App\Models\DataPlan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataPlan::insert([
            [
                'name'=>'10 GB',
                'price'=>35000,
                'operator_card_id'=>1,//telkomsel 
            ],
            [
                'name'=>'2 GB',
                'price'=>12000,
                'operator_card_id'=>1,//telkomsel 
            ],
            [
                'name'=>'5 GB',
                'price'=>25000,
                'operator_card_id'=>1,//telkomsel 
            ],
            [
                'name'=>'8 GB',
                'price'=>30000,
                'operator_card_id'=>1,//telkomsel 
            ],

            [
                'name'=>'3 GB',
                'price'=>23000,
                'operator_card_id'=>2,//indosat 
            ],
            [
                'name'=>'5 GB',
                'price'=>35000,
                'operator_card_id'=>2,//indosat 
            ],
            [
                'name'=>'35 GB',
                'price'=>115000,
                'operator_card_id'=>2,//indosat 
            ],
            [
                'name'=>'12 GB',
                'price'=>58000,
                'operator_card_id'=>2,//indosat 
            ],


            [
                'name'=>'3 GB',
                'price'=>25000,
                'operator_card_id'=>3,//singtel 
            ],
            [
                'name'=>'5 GB',
                'price'=>32000,
                'operator_card_id'=>3,//singtel 
            ],
            [
                'name'=>'35 GB',
                'price'=>11000,
                'operator_card_id'=>3,//singtel 
            ],
            [
                'name'=>'12 GB',
                'price'=>50000,
                'operator_card_id'=>3,//singtel 
            ],
        ]);
    }
}
