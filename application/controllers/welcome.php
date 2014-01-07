<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	
	public function cs() {
        
        $name = $this->input->get('_name');
        $value = $this->input->get('_value');
         
        $this->load->model('cs_model');
        
        echo json_encode( $this->cs_model->get_dropdown($name, $value) );
    }
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */