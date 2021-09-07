<?php
namespace App\Models\References;

class LanguageReference extends RangeReference {
	public function getType(): string {
		return 'language';
	}
}
