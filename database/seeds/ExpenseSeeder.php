<?php

use App\Expense;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $expenses = [
            [
                'id' => 1 ,
                'type' => 'برنامه تمرینی',
                'price' => '3000'
            ],
            [
                'id' => 2 ,
                'type' => 'برنامه غذایی',
                'price' => '2500'
            ]
        ];

        Expense::insert($expenses);
    }
}
