<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataRekrutment extends CI_Controller
{
    public function index()
    {
        $url = "http://localhost/test/ujian1.json";

        $hasil = file_get_contents($url);
        $data = json_decode($hasil, true);


        $data['rekrutment'] = $data['Form Responses 1'];

        $this->load->view('data_rekrutment', $data);
    }

    public function detil()
    {
        $url = "http://localhost/test/ujian2.json";

        $hasil = file_get_contents($url);
        $data = json_decode($hasil, true);

        // $items = '';

        // foreach ($data as $item) {
        //     if ($item['id_pendaftar'] == $id) {
        //         $items = $item;
        //     }
        // }
        // $data['detil'] = $items;

        $this->load->view('data_rekrutment_detil', $data);
    }
}
