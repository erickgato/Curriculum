<?php
namespace App\Models\Experiences;

class WorkExperience extends LifeExperience {
	public function getType(): string {
		return 'workExperience';
	}
}
