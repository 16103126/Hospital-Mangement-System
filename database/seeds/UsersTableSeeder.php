<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime=Carbon\Carbon::now();
    	$data=[
    		[
	    		'name' => 'admin',
	            'email' => 'user@admin.com',
	            'role'=>"admin",
	            'password' => bcrypt('123456'),
	            'created_at'=>$datetime,
	            'updated_at'=>$datetime
    		],
    		[
	    		'name' => 'reception',
	            'email' => 'user@reception.com',
	            'role'=>"reception",
	            'password' => bcrypt('123456'),
	            'created_at'=>$datetime,
	            'updated_at'=>$datetime
    		],
    		[
	    		'name' => 'doctor',
	            'email' => 'user@doctor.com',
	            'role'=>"doctor",
	            'password' => bcrypt('123456'),
	            'created_at'=>$datetime,
	            'updated_at'=>$datetime
	        ]
    	];

        DB::table('users')->insert($data);

    }
    
}
