<?php

namespace Corcel\Database\Models;

use Config;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
		protected $connection;

		public function __construct(array $attributes = array())
		{
				$this->setConnection(Config::get('corcel.connection'));

				return parent::__construct($attributes);
		}
}