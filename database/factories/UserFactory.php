<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Model\UserDetail::class, function (Faker $faker) {
    return [
        'nama_user' => $faker->name,
        'nama_perusahaan' => $faker->company,
        'alamat_perusahaan' => $faker->address,
        'bidang_perusahaan' => $faker->jobTitle,
        'email' => $faker->email,
		'deskripsi_perusahaan'	=> $faker->paragraph,
		'photo' => storage_path('public/User/user.jpeg'),
		'no_telp' => '085707799317'
    ];
});

$factory->define(App\Model\UserAccount::class, function(Faker $faker) {
	return [
		'userDetail_id' => $faker->randomElement(\App\Model\UserDetail::pluck('id')->toArray()),
		'username' => $faker->userName,
		'password' => bcrypt('password')
	];
});

$factory->define(\App\Model\UserRole::class, function(Faker $faker) {
	return [
		'role_id' => $faker->randomElement(\App\Model\Roles::pluck('id')->toArray()),
		'userAccount_id' => $faker->randomElement(\App\Model\UserAccount::pluck('id')->toArray())
	];
});

