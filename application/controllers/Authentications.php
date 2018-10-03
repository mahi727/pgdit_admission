<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentications extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

    }


    public function index()
    {
        $data = [];
        $this->layout('Authentications/login', $data);
    }

    function registration(){
        $data = [];
        $this->layout('Authentications/registration', $data);
    }

    function dashboard(){
        $data = [];
        $this->layout('Authentications/dashboard', $data);
    }

    function form(){
        $data = [];
        $this->layout('Authentications/form', $data);
    }

}
