<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->model('home_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->database();
    }


	public function index()
	{
		$data = array();
		$data['slider'] = $this->home_model->list('home_slider');
		$data['winner'] = $this->home_model->list('winners');
		$data['announce'] = $this->home_model->list('announcement');
		$this->db->select('*');
		$this->db->from('courses');
		$this->db->where('section', 'JEE');

		$data['courses'] = $this->db->get()->result();

		$this->db->select('*');
		$this->db->from('courses');
		$this->db->where('section', 'NEET');

		$data['courses2'] = $this->db->get()->result();

		$this->db->select('*');
		$this->db->from('courses');
		$this->db->where('section', 'Foundation');

		$data['courses3'] = $this->db->get()->result();
		$data['testimonial'] = $this->home_model->list('testimonial');
		// print_r($data);
		// exit;


		$this->load->view('header_view');
		$this->load->view('home/home_view',$data);
		$this->load->view('footer_view');
	}

}
