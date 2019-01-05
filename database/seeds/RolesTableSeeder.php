<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$roles = ['pengusaha', 'pemasok'];
        for ($i=0; $i < count($roles) ; $i++) {
        	DB::table('roles')->insert([
				'nama_role' =>$roles[$i]
	        ]);
        }
    }
}
