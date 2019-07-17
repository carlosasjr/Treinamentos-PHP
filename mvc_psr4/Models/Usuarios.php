<?php
namespace Models;

use \Core\Model;

class Usuarios extends Model {

	public function getAll() {
		$array = array();

        $array['name'] = 'Carlos';

		return $array;
	}

}