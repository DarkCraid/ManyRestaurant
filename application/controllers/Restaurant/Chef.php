<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chef extends CI_Controller 
{
	public function __construct()
	{	parent::__construct();
		$this->load->model("Restaurant/Menus");
	}

	public function LoadData()
	{
		return $this->GeneralesModal->LoadDatas();
	}

}