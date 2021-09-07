<?php
namespace App\Models;

use Illuminate\Support\Collection;

class People {
	public Collection $educations;
	// protected $name;
	// protected $bio;
	// protected

	public function __construct(array $educations = []) {
		$this->addManyEducations($educations);
	}

	public function addManyEducations(array $educations) {
		$this->educations = collect($educations)->map(function ($education) {
			if($education instanceOf Education == false) {
				throw new \InvalidArgumentException(
					"Please, provide valid education Instance"
				);
			}

			return $education;
		});
	}

	public function addEducation(Education $education): People {

		return $this;
	}

}
