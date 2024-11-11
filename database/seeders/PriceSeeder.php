<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("plans_metas")->insert([
            "plan_name" => "Bronze",
            "ROI" => 5,
            "initial_minimum_fee" => 5000,
            "initial_maximum_fee" => 10000,
            "time_rate" => 86400
        ]);


        DB::table("plans_metas")->insert([
            "plan_name" => "Silver",
            "ROI" => 10,
            "initial_minimum_fee" => 50000,
            "initial_maximum_fee" => 100000,
            "time_rate" => 86400
        ]);


        DB::table("plans_metas")->insert([
            "plan_name" => "Gold",
            "ROI" => 15,
            "initial_minimum_fee" => 150000,
            "initial_maximum_fee" => 200000,
            "time_rate" => 86400
        ]);


        DB::table("plans_metas")->insert([
            "plan_name" => "Ruby",
            "ROI" => 20,
            "initial_minimum_fee" => 200000,
            "initial_maximum_fee" => 250000,
            "time_rate" => 86400
        ]);

        DB::table("plans_metas")->insert([
            "plan_name" => "Emerald",
            "ROI" => 25,
            "initial_minimum_fee" => 300000,
            "initial_maximum_fee" => 350000,
            "time_rate" => 86400
        ]);

        DB::table("plans_metas")->insert([
            "plan_name" => "Diamond",
            "ROI" => 30,
            "initial_minimum_fee" => 400000,
            "initial_maximum_fee" => 450000,
            "time_rate" => 86400
        ]);
    }
}
