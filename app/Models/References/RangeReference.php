<?php
namespace App\Models\References;


abstract class RangeReference extends TitledReference {
	protected int $range;

	public function __construct(string $title, int $range) {
		$this->range = $range;

		parent::__construct($title);
	}

	public function getRange(): int {
		return $this->range;
	}
}
