<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdminUser::insert(
            [
                'name'=>'admin',
                'email'=>'admin@admin.com',
                'password'=>bcrypt('admin'),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]
            
        );
    }
}
