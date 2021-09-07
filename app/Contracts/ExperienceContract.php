<?php
namespace App\Contracts;


interface ExperienceContract {
	public function getLifeTime(): string;
	public function getType(): string;
}
