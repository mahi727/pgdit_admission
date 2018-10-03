<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboards extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

    }


    public function index()
    {
        $data = [];
        $this->layout('Dashboards/index', $data);
    }


}
