<?php
namespace App\Repositories;

use App\Contracts\RepositoryContract;
use App\Models\People;
use Illuminate\Database\Eloquent\Model;

class PeopleRepository implements RepositoryContract {
	public function create(array $attributes) {
		return new People($attributes);
	}
}
