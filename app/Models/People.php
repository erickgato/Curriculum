<?php
namespace App\Models;

use App\Support\HasExperiencesTrait;
use App\Support\HasReferenceTrait;
use Illuminate\Database\Eloquent\Model;

final class People extends Model {
	use HasExperiencesTrait, HasReferenceTrait;

	protected $fillable = [
		'name',
		'shortDescription',
		'bio',
		'avatar'
	];

	public function __construct($attributes = []) {
		$this
			->attachExperiences(
				$attributes['experiences'] ?? [],
			)->attachReferences(
				$attributes['references'] ?? [],
			);

		parent::__construct($attributes);
	}
}
