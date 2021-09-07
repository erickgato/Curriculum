<?php
namespace App\Models\References;

class HobbieReference extends TitledReference {
	public function getType(): string
	{
		return 'hobbie';
	}
}
