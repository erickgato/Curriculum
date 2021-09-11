<?php
namespace App\Services;

use App\Models\Person;
use Illuminate\Contracts\View\View;
use Barryvdh\DomPDF\Facade as PDF;

class DocumentGeneratorService {
	protected Person $person;
	protected string $template;

	public function usePerson(Person $person): self {
		$this->person = $person;

		return $this;
	}


	public function injectTemplate(string $template): self {
		$this->template = $template;

		return $this;
	}


	public function generate() {
		$document = PDF::loadView($this->template, [
			'person' => $this->person,
		]);

		return $document->stream();
	}
}
