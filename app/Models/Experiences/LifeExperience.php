<?php
namespace App\Models\Experiences;

use App\Contracts\ExperienceContract;
use Illuminate\Database\Eloquent\Model;

abstract class LifeExperience extends Model implements ExperienceContract {
	protected string $title;
	protected string $description;
	protected string $startDate;
	protected string $endDate;

	public function __construct(
		string $title,
		string $description,
		string $startDate,
		string $endDate,
	) {
		$this->title = $title;
		$this->description = $description;
		$this->startDate = $startDate;
		$this->endDate = $endDate;
	}

	public function getLifeTime(): string {
		return "$this->startDate - $this->endDate";
	}
}
