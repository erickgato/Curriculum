<?php
namespace App\Models\Experiences;


class Education extends LifeExperience {
	public function getType(): string {
		return 'education';
	}
}
