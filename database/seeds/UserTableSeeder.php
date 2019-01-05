<?php

use App\Model\UserAccount;
use App\Model\UserDetail;
use App\Model\UserRole;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UserDetail::class, 10)->create()->each(function($userAccount) {
			$userAccount->UserAccount()->saveMany(factory(UserAccount::class, 1)->create()
            ->each(function($userRole) {
                $userRole->UserRole()->save(factory(UserRole::class)->make());
            }));
        });
    }
}
