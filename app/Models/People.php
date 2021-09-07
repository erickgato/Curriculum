<?php
namespace App\Models;

use App\Support\HasExperiencesTrait;
use App\Support\HasReferenceTrait;

class People {
	use HasExperiencesTrait, HasReferenceTrait;

	protected string $name;
	protected string $shortDescription;
	protected string $bio;
	protected string $avatar;

	public function __construct(
		string $name,
		string $shortDescription,
		string $bio,
		string $avatar = "",
	) {
		$this->name = $name;
		$this->shortDescription = $shortDescription;
		$this->bio = $bio;
		$this->avatar = $avatar;
	}
}
