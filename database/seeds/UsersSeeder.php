<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create(
        	array(
        		'name' => 'Admin',
        		'email' => 'admin@trace.com.local',
        		'password' => Hash::make('password'),
        		'birthdate' => '2016-01-01' 
    		)
    	);

        User::create(
            array(
                'name' => 'Benok Sapalicio',
                'email' => 'bnk@trace.com.local',
                'password' => Hash::make('password'),
                'birthdate' => '2016-01-01' 
            )
        );

        User::create(
            array(
                'name' => 'Renz Fernandez',
                'email' => 'zner@trace.com.local',
                'password' => Hash::make('password'),
                'birthdate' => '2016-01-01' 
            )
        );
    }
}
