<?php

namespace App\Model;

use App\Model\Roles;
use App\Model\UserAccount;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $guarded = [];

    public function UserAccount() {
    	return $this->belongsTo(UserAccount::class, 'userAccount_id', 'id');
    }

    public function Roles() {
    	return $this->belongsTo(Roles::class, 'role_id', 'id');
    }
}
