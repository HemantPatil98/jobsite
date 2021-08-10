<?php

namespace App\Controllers;

class Home extends BaseController
{
	// INDEX PAGE
	public function index()
	{
		return view('index');
	}
	// Remap
	 public function _remap($method)
    {
        if (method_exists($this,$method)) {
            return $this -> $method();
        }
        else {
            $this->index();
        }
    }

	// Candidate Profile
	public function cand_profile()
	{
		return view('employee-profile');
	}

	// Job List
	public function job_list()
	{
		return view('listing');
	}

	//
	public function resume()
	{
		return view('view-resume');
	} 
}
