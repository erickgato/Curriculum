<?php
namespace App\Models\References;

use App\Contracts\ReferenceContract;

abstract class TitledReference implements ReferenceContract {
	protected string $title;
	public function __construct(string $title) {
		$this->title = $title;
	}

	public function getTitle() {
		return $this->title;
	}
}
