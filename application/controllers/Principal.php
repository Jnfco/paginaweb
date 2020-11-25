<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		//Cambiar el nombre de moelo a modelo
        $this->load->model('Modelo');
        $this->load->helper('url');
        //$cantidadBlog = 2;
        header("Content-Type: text/html; charset=utf-8");
        header("Accept-Encoding: gzip | compress | deflate | br| identity| * ");
  }
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
		$this->load->view('header');
		//Cargar los datos para la pagina de inicio con los posts
		//$res['posts'] = $this->Modelo->obtenerPosts();
		$this->load->view("portafolio");
		$this->load->view('about');
		$this->load->view('contacto');
		$this->load->view('modal');
		$this->load->view('footer');
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */