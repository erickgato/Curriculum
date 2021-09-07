<?php
namespace App\Models\References;

class SocialNetworkReference extends IconedReference  {
	public function getType(): string {
		return 'socialNetwork';
	}
}
