<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\Experiences\Education;
use App\Models\References\ContactReference;
use App\Models\References\HobbieReference;
use App\Models\References\LanguageReference;
use App\Models\References\SkillReference;
use App\Models\References\SocialNetworkReference;

class CurriculumGeneratorController extends Controller
{
	public function generate()
	{
		$people = new People(
			"Erick de souza Gato",
			"Desenvolvedor Full stack",
			"	Laboris adipisicing voluptate duis adipisicing fugiat eiusmod mollit aliqua minim.
				Eu ex ad tempor ullamco irure aliquip proident velit ea veniam quis.
				Magna minim et enim ex ea. Deserunt labore nostrud sunt id anim reprehenderit do.
				Sint do fugiat esse eiusmod est laborum ipsum veniam consectetur quis.
				Ea eu voluptate minim velit ut aute aliquip ipsum irure laborum laboris eu ea occaecat.
				Et labore cupidatat fugiat reprehenderit laboris aute.
			",
		);

		$people->attachExperiences([
			new Education(
				"SCHOOL NAME 1",
				"lorem ipsum dolor sit amet, consectetur adipiscing el",
				today(),
				today(),
			),
		]);

		$people->attachReferences([
			new ContactReference("location", "Rua rosildo rocco 257"),
			new SocialNetworkReference("facebook", "https://www.facebook.com"),
			new LanguageReference("Português", 5),
			new LanguageReference("Inglês", 2),
			new SkillReference("Css", 5),
			new SkillReference("Javascript", 5),
			new HobbieReference("Dançar"),
		]);


		dd($people);
	}
}
