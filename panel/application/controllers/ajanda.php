<?phpif ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ajanda extends CI_Controller {

	
	public function index()
	{
		

        $this->load->view('category_list',$data);
		

		
	}
	
	

}



?>