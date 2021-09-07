<?php
namespace App\Support;

use App\Contracts\ReferenceContract;
use Illuminate\Support\Collection;

trait HasReferenceTrait {
	protected Collection $references;

	public function attachReferences(array $references = []) {
		$this->clearReferences();
		foreach($references as $reference) {
			$this->addReference($reference);
		}

		return $this;
	}


	private function clearReferences() {
		$this->references = collect([]);
		return $this;
	}

	public function addReference(ReferenceContract $reference) {
		$this->references->push($reference);
		return $this;
	}
}
