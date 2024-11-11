<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SitedetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("site_details")->insert([
            [
                "field" => "address",
                "value" => "15, Ararinda, Victortrade street, Arana Land, Milan."
            ],
            [
                "field" => "phone",
                "value" => "+1234567890"
            ],
            [
                "field" => "email",
                "value" => "cekom45565@anypng.com"
            ]
        ]);
    }
}
