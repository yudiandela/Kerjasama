<?php

namespace App\Model;

use App\Model\UserDetail;
use App\Model\UserRole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserAccount extends Authenticatable
{
	protected $guarded = [];

	public function UserRole() {
		return $this->hasOne(UserRole::class, 'userAccount_id', 'id');
	}

	public function UserDetail() {
		return $this->belongsTo(UserDetail::class, 'userDetail_id', 'id');
	}
}
