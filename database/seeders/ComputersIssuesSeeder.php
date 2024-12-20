<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ComputersIssuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('computers')->insert([
            'computer_name' => 'May 1',
            'model' => 'Dell',
            'operating_system' => 'Linux',
            'processor' => 'intel I8',
            'memory' => 8,
            'avaiable' => true
        ]);
        DB::table('computers')->insert([
            'computer_name' => 'May 2',
            'model' => 'Legion',
            'operating_system' => 'Linux',
            'processor' => 'intel I8',
            'memory' => 16,
            'avaiable' => true
        ]);
        foreach (range(1, 50) as $index) {
            DB::table('issues')->insert([
                'computer_id' => $faker->numberBetween(1, 2),
                'reported_by' => $faker->sentence(3),
                'reported_date' => $faker->dateTime(),
                'description' => $faker->paragraph(),
                'urgency' => $faker->randomElement(['Low', 'Medium', 'Hight']),
                'status' => $faker->randomElement(['Open', 'In Progress', 'Resolved']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        DB::table('issues')->insert([
            'computer_id' => 1,
            'reported_by' => 'Nguen Van A',
            'reported_date' => now(),
            'description' => 'Hong ram',
            'urgency' => 'Low',
            'status' => 'Open'
        ]);

    }
}
