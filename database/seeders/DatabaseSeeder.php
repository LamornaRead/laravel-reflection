<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

   
    public function run(): void
    {
        User::truncate();
        Company::truncate();
        Employee::truncate();
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

       Employee::factory(5)->create(['company_id' => '1']);
    //    Employee::factory(3)->create(['company_id' => '2']);
    //    Employee::factory(2)->create(['company_id' => '3']);
    //    Employee::factory(10)->create(['company_id' => '4']);
    //    Employee::factory(6)->create(['company_id' => '5']);
    //    Employee::factory(7)->create(['company_id' => '6']);
    //    Employee::factory(3)->create(['company_id' => '7']);
    //    Employee::factory(5)->create(['company_id' => '8']);
    //    Employee::factory(2)->create(['company_id' => '9']);
    //    Employee::factory(2)->create(['company_id' => '10']);
    //    Employee::factory(5)->create(['company_id' => '11']);
    //    Employee::factory(3)->create(['company_id' => '12']);
    //    Employee::factory(2)->create(['company_id' => '13']);
    //    Employee::factory(10)->create(['company_id' => '14']);
    //    Employee::factory(6)->create(['company_id' => '15']);
    //    Employee::factory(7)->create(['company_id' => '16']);
    //    Employee::factory(3)->create(['company_id' => '17']);
    //    Employee::factory(5)->create(['company_id' => '18']);
    //    Employee::factory(2)->create(['company_id' => '19']);
    //    Employee::factory(2)->create(['company_id' => '20']);

       Company::factory(20)->create();
    }
}
