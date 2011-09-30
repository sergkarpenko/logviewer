<?php

class Controller_Log extends Controller 
{

    public function action_index()
    {
        $this->response->body(View::factory('log/index'));
    }

	public function action_get()
	{
	    $this->response->body(json_encode(array('test'=>1111)));
	}

}
