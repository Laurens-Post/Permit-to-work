<?php

namespace App\Services\v1;

use App\Permits;

class PermitService {
	public function getPermits() {
		return Permits::all();
	}
	
	public function createPermit($req) {

		
	}
}

