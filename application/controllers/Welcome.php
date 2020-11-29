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



		if($this->input->post('submit')){
            $inputCaptcha = $this->input->post('captcha');
            $sessCaptcha = $this->session->userdata('captchaCode');
            if($inputCaptcha === $sessCaptcha){
                echo 'Captcha code matched.';
            }else{
                echo 'Captcha code does not match, please try again.';
            }
        }
        
        // Captcha configuration
        $config = array(
            'img_path'      => 'captcha_images/',
            'img_url'       => base_url().'captcha_images/',
            'font_path'     => 'F:\Programs\xampp\htdocs\paginaweb\system\fonts\texb.ttf',
            'img_width'     => '160',
            'img_height'    => 50,
            'word_length'   => 8,
            'font_size'     => 18
        );
        $captcha = create_captcha($config);
        
        // Unset previous captcha and set new captcha word
        $this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode', $captcha['word']);
        
        // Pass captcha image to view
        $data['captchaImg'] = $captcha['image'];
        

		$this->load->view('contacto',$data);
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

	public function visita(){
		$id =$this->input->post("id");
		$visitas=$this->input->post("visitas");
		$res =$this->Modelo->visitas($id,$visitas);
	}
	public function refresh(){
        // Captcha configuration
        $config = array(
            'img_path'      => 'captcha_images/',
            'img_url'       => base_url().'captcha_images/',
            'font_path'     => 'system/fonts/texb.ttf',
            'img_width'     => '160',
            'img_height'    => 50,
            'word_length'   => 8,
            'font_size'     => 18
        );
        $captcha = create_captcha($config);
        
        // Unset previous captcha and set new captcha word
        $this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode',$captcha['word']);
        
        // Display captcha image
        echo $captcha['image'];
	}
	
	public function blog(){
		$res['posts'] = $this->Modelo->obtenerPosts();
		$this->load->view("blog",$res);
	}
}