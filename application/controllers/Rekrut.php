<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekrut extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$url = "http://103.226.55.159/json/data_rekrutmen.json";

		$json = file_get_contents($url);
		$json = json_decode($json, true);

		//print_r($json['Form Responses 1']);
		//die();

		$data = [
			'title' => 'Beranda',
			'datas' => $json['Form Responses 1'],
		];


		$this->load->view('rekrutment', $data);
	}
}
