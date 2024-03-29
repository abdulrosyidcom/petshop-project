<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/Base.php");


class Home extends CI_Controller {

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

	public function __construct()
    {
        // Construct the parent class
        parent::__construct();
         $this->load->library('session');
        // load model
        $this->load->model('m_home');
    }

	public function index()
	{
		// get last product
		$data['last_prod'] = $this->m_home->get_last_product();
		$data['count_cart'] = $this->m_home->get_count_cart();
		$data['ready_adopt'] = $this->m_home->get_ready_adopt_home();

		// get categories with product
		$data['cat_prod'] = $this->m_home->get_category_product();
		$data['pets'] = $this->m_home->get_category_pets();
		$data['title'] = 'Petshop';
        $this->load->view('layouts/header', $data);
        $this->load->view('public/home');
        $this->load->view('layouts/footer');
 
	}
}
