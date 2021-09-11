<?php
namespace App\Services;

use App\Models\Person;
use App\Repositories\PersonRepository;

class PersonService {
	protected PersonRepository $personRepository;

	public function __construct(PersonRepository $personRepository) {
		$this->personRepository = $personRepository;
	}

	public function create(array $attributes): Person {
		return $this->personRepository->create($attributes);
	}
}
