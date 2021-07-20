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
    public function __construct()
    {
        parent::__construct();	
        $this->load->model('welcome_model','dModel');
  
    }
    public function index()
    {
        $data['flock'] = $this->dModel->getFlock();
        $data['feed'] = $this->dModel->getFeed();
        $this->load->view('index', $data);
    }
    
    public function fetch_flockById(){
        $flock = $this->input->post('flock');
        $result = $this->dModel->getFlockById($flock);
        echo json_encode($result['0']);
    }
    
    public function save_data(){
        $flock = $this->input->post('flock');
        $date = $this->input->post('date');
        $age = $this->input->post('age');
        $mort = $this->input->post('mort');
        $culls = $this->input->post('culls');
        $bwt = $this->input->post('bwt');
        $ewt = $this->input->post('ewt');
        $water = $this->input->post('water');
        $feed = $this->input->post('feed');
        $kgs = $this->input->post('kgs');
        $bbe = $this->input->post('bbe');
        $bde = $this->input->post('bde');
        $bje = $this->input->post('bje');
        $ble = $this->input->post('ble');
        $bme = $this->input->post('bme');
        $bse = $this->input->post('bse');
        $bxle = $this->input->post('bxle');
        $lbe = $this->input->post('lbe');
        $pwe = $this->input->post('pwe');
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('flock[]','Flock','required');
        $this->form_validation->set_rules('date[]','Date','required');
        $this->form_validation->set_rules('age[]','Age','required|numeric');
        $this->form_validation->set_rules('feed[]','Feed','required');
        $this->form_validation->set_rules('kgs[]','Kgs','required');
        
        if($this->form_validation->run() == FALSE){
            redirect('welcome');
        }else{
            foreach($flock as $key=>$val){
                $data = array(
                    'flock' =>$flock[$key],
                    'date' => $date[$key],  
                    'age' => $age[$key],   
                    'mort' => $mort[$key],   
                    'culls' => $culls[$key],   
                    'bwt' => $bwt[$key],   
                    'ewt' => $ewt[$key],   
                    'water' => $water[$key],   
                    'feed' => $feed[$key],   
                    'kgs' => $kgs[$key],   
                    'bbe' => $bbe[$key],   
                    'bde' => $bde[$key],   
                    'bje' => $bje[$key],   
                    'ble' => $ble[$key],   
                    'bme' => $bme[$key],   
                    'bse' => $bse[$key],   
                    'bxle' => $bxle[$key],   
                   'lbe' => $lbe[$key], 
                   'pwe' => $pwe[$key] 
                );
                
                $result = $this->dModel->save_data($data);
            }//print_r($data);exit;
            if ($result){
                
                $this->session->set_flashdata('status','<div class="alert alert-info">Data Successfully Saved!</div>');
            }else{
                $this->session->set_flashdata('status','<div class="alert alert-danger">Opps! Unable to Save!</div>');
            }
              
        }
      redirect('welcome');  
    }
    
    public function autoload_gategory(){
        $feed = $this->input->post('feed');
        $result = $this->dModel->getCatItem($feed);
        echo json_encode($result);
    }
}