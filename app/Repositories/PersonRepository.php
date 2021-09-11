<?php
namespace App\Repositories;

use App\Contracts\RepositoryContract;
use App\Models\Person;

class PersonRepository implements RepositoryContract {
	public function create(array $attributes) {
		return new Person($attributes);
	}
}
