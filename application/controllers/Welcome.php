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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('admin/boya_yapma');
	}
        public function index1()
	{
		$this->load->view('admin/empty_page');
	}
        public function index2()
	{
		$this->load->view('admin/index');
	}
        public function index3()
	{
		$this->load->view('admin/login');
	}
        public function index4()
	{
		$this->load->view('admin/musteri');
	}
        public function index5()
	{
		$this->load->view('admin/personel_ayarlari');
	}
        public function index6()
	{
		$this->load->view('admin/renk_ara');
	}
        public function index7()
	{
		$this->load->view('admin/renk_ekle');
	}public function index8()
	{
		$this->load->view('admin/renk_gorunurlugu');
	}
        public function index9()
	{
		$this->load->view('admin/z_bos_sayfa');
	}
}
