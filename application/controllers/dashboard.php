<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public $viewFolder = "";
    public $theme 	   = "";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "dashboard_v";
        $this->theme = "front";
    }

    public function index()
	{
		$this->load->view("{$this->theme}/{$this->viewFolder}/index");
	}
 

}
