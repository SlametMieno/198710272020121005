<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekrutment extends CI_Controller
{
    public function index()
    {
        $this->load->view('rekrutment');
    }

    public function getData()
    {
        $url = "http://103.226.55.159/json/data_rekrutmen.json";

        $data = file_get_contents($url);
        $data = json_encode($data);
        echo $data;
    }
}
