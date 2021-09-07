<?php
namespace App\Services;

use App\Models\People;
use App\Repositories\PeopleRepository;

class PeopleService {
	protected PeopleRepository $peopleRepository;

	public function __construct(PeopleRepository $peopleRepository) {
		$this->peopleRepository = $peopleRepository;
	}

	public function create(array $attributes): People {
		return $this->peopleRepository->create($attributes);
	}
}
