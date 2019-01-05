<?php

namespace App\Model;

use App\Model\UserAccount;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{

    protected $guarded = [];

    public function UserAccount() {
    	return $this->hasOne(UserAccount::class, 'userDetail_id', 'id');
    }
}
