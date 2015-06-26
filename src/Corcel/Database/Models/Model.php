<?php

namespace Corcel\Database\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
		protected $connection;

		public function __construct(array $attributes = array())
		{
				$this->setConnection('corcel');

				return parent::__construct($attributes);
		}
}