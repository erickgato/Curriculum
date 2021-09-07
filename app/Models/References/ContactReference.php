<?php
namespace App\Models\References;

class ContactReference extends IconedReference  {
	public function getType(): string {
		return 'contact';
	}
}
