<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\People;
use Illuminate\Http\Request;

class CurriculumGeneratorController extends Controller
{
	public function generate() {
		$people = new People([
			new Education(
				"SCHOOL NAME 1",
				"lorem ipsum dolor sit amet, consectetur adipiscing el",
				today(),
				today(),
			),
			new Education(
				"SCHOOL NAME 1",
				"lorem ipsum dolor sit amet, consectetur adipiscing el",
				today(),
				today(),
			),
			new Education(
				"SCHOOL NAME 1",
				"lorem ipsum dolor sit amet, consectetur adipiscing el",
				today(),
				today(),
			),
			new Education(
				"SCHOOL NAME 1",
				"lorem ipsum dolor sit amet, consectetur adipiscing el",
				today(),
				today(),
			),
			new Education(
				"SCHOOL NAME 1",
				"lorem ipsum dolor sit amet, consectetur adipiscing el",
				today(),
				today(),
			),
			new Education(
				"SCHOOL NAME 1",
				"lorem ipsum dolor sit amet, consectetur adipiscing el",
				today(),
				today(),
			),
			new Education(
				"SCHOOL NAME 1",
				"lorem ipsum dolor sit amet, consectetur adipiscing el",
				today(),
				today(),
			),
		]);


		dd($people);

	}
}
