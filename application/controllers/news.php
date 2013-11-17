<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
		echo "Hello";
	}
	public function myfunction(){
		
		
			$data['test1']='hello array data';
			$this->load->view('news_myfunction',$data);
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */