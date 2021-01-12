<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            'name' => 'DiagnoTruck',
            'email' => 'diagnotruck@admin.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('091218'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


    }
}
