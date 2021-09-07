<?php
namespace App\Support;

use App\Contracts\ExperienceContract;
use Illuminate\Support\Collection;

trait HasExperiencesTrait {
	public Collection $lifeExperiences;


	public function attachExperiences(array $experiences = []) {
		$this->clearExperiences();
		foreach($experiences as $experience) {
			$this->addExperience($experience);
		}

		return $this;
	}


	private function clearExperiences() {
		$this->lifeExperiences = collect([]);

		return $this;
	}

	public function addExperience(ExperienceContract $experience) {
		$this->lifeExperiences->push($experience);

		return $this;
	}

}
