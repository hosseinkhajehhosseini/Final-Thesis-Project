<?php

use App\WorkoutCategory;
use Illuminate\Database\Seeder;

class WorkoutCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id' => 1 ,
                'title'=> 'سینه'
            ],
            [
                'id' => 2 ,
                'title'=> 'سرشانه'
            ],
            [
                'id' => 3 ,
                'title'=> 'زیربغل (پشت)'
            ],
            [
                'id' => 4 ,
                'title'=> 'بازو'
            ],
            [
                'id' => 5 ,
                'title'=> 'پا'
            ],
            [
                'id' => 6 ,
                'title'=> 'شکم'
            ],
            [
                'id' => 7,
                'title'=> 'تمرینات ترکیبی'
            ],
        ];

        WorkoutCategory::insert($categories);
    }
}
