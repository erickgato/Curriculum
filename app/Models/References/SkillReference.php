<?php
namespace App\Models\References;

class SkillReference extends RangeReference {
	public function getType(): string {
		return 'skill';
	}
}
