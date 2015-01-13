<?php

class HomeController extends BaseController {

	
	public function getIndex()
	{
		return View::make('hello', array(
                    
                ));
	}
public function getFriends($user)
	{
		return View::make('friends', array(
                    'username' => $user
                ));
	}
}
