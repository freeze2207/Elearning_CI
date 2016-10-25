<?php
class Blog extends CI_Controller {

   public function index()
    {
        echo 'Hello World!';
    }

    public function comments()
    {
        echo 'Look at this!';
    }
	
	public function type($tech,$id)
	{
		echo $tech;
		echo $id;
	}
}