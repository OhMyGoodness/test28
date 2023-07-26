<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auto_marks')->insert([
            [
                'id'   => 1,
                'name' => 'BMW'
            ],
            [
                'id'   => 2,
                'name' => 'Ferrari'
            ],
            [
                'id'   => 3,
                'name' => 'Mercedes'
            ]
        ]);

        DB::table('auto_models')->insert([
            [
                'id'      => 1,
                'mark_id' => 1,
                'name'    => 'Модель 1 | BMW'
            ],
            [
                'id'      => 2,
                'mark_id' => 2,
                'name'    => 'Модель 2 | Ferrari'
            ],
            [
                'id'      => 3,
                'mark_id' => 3,
                'name'    => 'Модель 3 | Mercedes'
            ]
        ]);

        DB::table('auto')->insert([
            [
                'mark_id'  => 1,
                'model_id' => 1,
                'year'     => 2000,
                'mileage'  => 100,
                'color'    => null,
                'user_id'  => null
            ],
            [
                'mark_id'  => 2,
                'model_id' => 1,
                'mileage'  => 100000,
                'color'    => null,
                'year'     => null,
                'user_id'  => null
            ],
            [
                'mark_id'  => 3,
                'year'     => 2000,
                'color'    => 'Синий',
                'model_id' => 2,
                'mileage'  => null,
                'user_id'  => null
            ],
            [
                'mileage'  => 100,
                'color'    => null,
                'year'     => null,
                'mark_id'  => 3,
                'model_id' => 1,
                'user_id'  => null
            ],
            [
                'mileage'  => 100,
                'color'    => null,
                'year'     => null,
                'mark_id'  => 3,
                'model_id' => 1,
                'user_id'  => 1
            ]
        ]);
    }
}
