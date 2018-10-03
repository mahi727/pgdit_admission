<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applications extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

    }


    public function index()
    {
        $data = [];
        $this->layout('Applications/form', $data);
    }

    function registration(){
        $data = [];
        $this->layout('Authentications/registration', $data);
    }

}
