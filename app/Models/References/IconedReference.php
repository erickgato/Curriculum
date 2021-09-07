<?php
namespace App\Models\References;

use App\Contracts\IconedRecordContract;

abstract class IconedReference extends TitledReference implements IconedRecordContract {
	protected string $icon;

	public function __construct( string $icon, string $title ) {
		$this->icon = $icon;
		parent::__construct($title);
	}

	public function getIcon(): string {
		return $this->icon;
	}
}
