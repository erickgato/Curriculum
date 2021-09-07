<?php
namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;

interface RepositoryContract  {
	public function create(array $data);
}
