<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users extends CI_Controller {

    public $viewFolder = "";
    public $theme 	   = "";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "users_v";
        $this->theme = "front";
    }

    public function index()
    {
        $this->load->view("{$this->theme}/{$this->viewFolder}/index");
    }

    public function profil()
	{
		$this->load->view("{$this->theme}/{$this->viewFolder}/profil");
	}

    public function login()
    {
        $this->load->view("{$this->theme}/{$this->viewFolder}/login");
    }
    public function register()
    {
        $this->load->view("{$this->theme}/{$this->viewFolder}/register");
    }

}
