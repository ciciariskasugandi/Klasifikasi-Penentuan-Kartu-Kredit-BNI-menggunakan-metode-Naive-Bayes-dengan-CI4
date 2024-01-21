<?php
 
namespace App\Controllers;
 
use App\Controllers\BaseController;
 
class Berkas extends BaseController
{
	public function berkas()
	{
		//
	}
 
	public function create()
	{
		return view('form_upload');
	}
}