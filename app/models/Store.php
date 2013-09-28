<?php

use Illuminate\Auth\UserInterface;

class Store extends Eloquent implements UserInterface{
    // Required for Auth
    public function getAuthIdentifier(){
		return $this->id;
	}

    // Required for Auth
	public function getAuthPassword(){
		return null;
	}
}
