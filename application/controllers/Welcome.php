<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
public function __construct() {
		parent::__construct();
		//Cambiar el nombre de moelo a modelo
        $this->load->model('Modelo');
        $this->load->helper('url');
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
		
		
		$res['posts'] = $this->Modelo->obtenerPosts();
		$res['post']= $this->Modelo->obtenerPostArray();
		$this->load->view("post",$res);
		$this->load->view("portafolio");
		$this->load->view('about');
		$this->load->view('contacto');
		$this->load->view('modal');
		$this->load->view('footer');
	}
	public function verPost(){
	
		$id = $this->input->post("id");
		$res['fullPost'] = $this->Modelo->verPost($id);
		$this->load->view("fullPost",$res);
		
	}

	public function valorar(){
		$id = $this->input->post("id");
		$valoracion =$this->input->post("valoracion");
		$res =$this->Modelo->valorar($id,$valoracion);
	}
}
