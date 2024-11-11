<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                "name" => "Makin",
                "email" => "makin@tester.com",
                "password" => Hash::make("test@123"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Aisha",
                "email" => "aisha@tester.com",
                "password" => Hash::make("pass1234"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Kemi",
                "email" => "kemi@tester.com",
                "password" => Hash::make("password123"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "James",
                "email" => "james@tester.com",
                "password" => Hash::make("securePass123"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Sarah",
                "email" => "sarah@tester.com",
                "password" => Hash::make("mypass5678"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Chinedu",
                "email" => "chinedu@tester.com",
                "password" => Hash::make("mysecret123"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Blessing",
                "email" => "blessing@tester.com",
                "password" => Hash::make("blessme2023"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Mohammed",
                "email" => "mohammed@tester.com",
                "password" => Hash::make("mysecurepass"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Sade",
                "email" => "sade@tester.com",
                "password" => Hash::make("secretpass999"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Tom",
                "email" => "tom@tester.com",
                "password" => Hash::make("passw0rd2023"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Lucy",
                "email" => "lucy@tester.com",
                "password" => Hash::make("lucy12345"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Emeka",
                "email" => "emeka@tester.com",
                "password" => Hash::make("myemekapass"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Esther",
                "email" => "esther@tester.com",
                "password" => Hash::make("esther!123"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Tunde",
                "email" => "tunde@tester.com",
                "password" => Hash::make("tundepass123"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Fatima",
                "email" => "fatima@tester.com",
                "password" => Hash::make("fati12345"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Amaka",
                "email" => "amaka@tester.com",
                "password" => Hash::make("amakaPass!2023"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Ali",
                "email" => "ali@tester.com",
                "password" => Hash::make("alipass99"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Ngozi",
                "email" => "ngozi@tester.com",
                "password" => Hash::make("ngozipass111"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Yusuf",
                "email" => "yusuf@tester.com",
                "password" => Hash::make("yusuf2023pass"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ],
            [
                "name" => "Ada",
                "email" => "ada@tester.com",
                "password" => Hash::make("adapass123"),
                "referral_code" => $this->referral_Generate(),
                "email_verified_at" => date("Y-m-d H:i:s"),
                "role" => "user"
            ]
        ]);
        
    }

    public function referral_Generate(){
        $rand = Str::random(10);

        $users = User::all();;

        foreach($users as $user){
            while($rand == $user->referral_code){
                $rand = Str::random(10);
            }
        }

        return $rand;
    }
}
