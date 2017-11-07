<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();
        
                $faker = \Faker\Factory::create();
                
                for ($i = 0; $i < 50; $i++) {
                    Student::create([
                        'nome' => $faker->sentence,
                        'cpf' => $faker->sentence,
                        'endereco' => $faker->sentence,
                    ]);
                }
            }
}
