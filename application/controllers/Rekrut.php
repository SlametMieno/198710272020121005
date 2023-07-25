<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekrut extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$url = "http://103.226.55.159/json/data_rekrutmen.json";

		$json = file_get_contents($url);
		$json = json_decode($json, true);

		$data = [
			'title' => 'Beranda',
			'datas' => $json['Form Responses 1'],
		];

		$this->load->view('rekrutment', $data);
	}

	public function detil($id)
	{
		$url_detil = "http://103.226.55.159/json/data_attribut.json";

		$json_detil = file_get_contents($url_detil);
		$json_detil = json_decode($json_detil, true);

		$items = array();

		foreach ($json_detil as $item) {
			if ($item['id_pendaftar'] == $id) {
				$items[] = $item;
			}
		}

		$data['detil'] = $items;

		$this->load->view('data_rekrutment_detil', $data);
	}
}
