<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class movies extends CI_Controller {

    public $viewFolder = "";
    public $theme 	   = "";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "movies_v";
        $this->theme = "front";
    }

    public function index()
    {
        $this->load->view("{$this->theme}/{$this->viewFolder}/index");
    }

    public function movies()
	{
		$this->load->view("{$this->theme}/{$this->viewFolder}/movie-page");
	}
        public function details()
    {
        $this->load->view("{$this->theme}/{$this->viewFolder}/details");
    }

}
