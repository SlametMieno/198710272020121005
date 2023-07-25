<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekrutment extends CI_Controller
{
    public function index()
    {
        $url = "http://103.226.55.159/json/data_rekrutmen.json";

        $hasil = file_get_contents($url);
        $data = json_encode($hasil, true);

        $data['datas'] = $data['Form Responses 1'];

        $this->load->view('rekrutment', $data);
    }

    public function getData()
    {
        $url = "http://103.226.55.159/json/data_rekrutmen.json";

        $data = file_get_contents($url);
        $data = json_encode($data);
        // echo $data;
    }
}
