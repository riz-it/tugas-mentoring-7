<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	public function __construct(){
		parent::__construct();
		$this->load->helper('roman');
		$this->load->library('DateFormat');
	}

	public function index()
	{
		$roman = 2023;
		$number = "MMXXIII";
		$data = [
			'number' => 'Hasil roman dari ' . $roman . ' adalah : ' .  toRoman($roman),
			'roman' => 'Hasil romawi dari ' . $number . ' adalah : ' .  toNumber($number),
			'letterDate' => 'Hasil letter date dari tanggal sekarang adalah : ' . $this->dateformat->letterDate(),
			'numericDate' => 'Hasil numeric date dari tanggal sekarang adalah : ' . $this->dateformat->numericDate(),
		];
		
		$this->load->view('welcome_message', $data);
	}
}
