<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dictionary extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();	
        $this->load->model('dictionary_model','dModel');
        session_start();
    }
    
    public function SearchWord(){
       
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            //$MyFile = file_get_contents(base_url()."/assets/dictionary.txt");// or die("Unable to open file!");
            //$MyFile = file_get_contents(base_url()."application/controllers/readme.txt");
            //var_dump($MyFile);exit;
            
            $keyword = htmlspecialchars(trim($this->input->post('search_string')));
            if(!empty($keyword)){
                if($this->dModel->save_search($keyword)){
                    $lines = file(base_url()."/assets/dictionary.txt", FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES); // lines as array

                    $search = preg_quote($keyword, '~');
                    $matches = preg_grep('~\b' . $search . '\b~', $lines);
                    if(empty($matches)){
                        $data['display']=2;
                    }else{
                        foreach($matches as $line => $match) {
                            $data['result'] = explode(':',$match);
                            $data['display']=1;

                        }
                    }
                }
            }
            
           
        }else{
              $data['display']=0;
        }
        
        $this->load->view('search_word',$data);
    }
    
    public function SearchLogs(){
        $data['result'] = $this->dModel->fetch_logs();
        $this->load->view('view_logs',$data);
    }
    
    public function addWord(){
        
         $this->load->view('view_add_word');
    }
    
    public function saveWord(){
        $word = htmlspecialchars(trim($this->input->post('wordname')));
        $meaning = htmlspecialchars(trim($this->input->post('wordmeaning')));
        $data_str = $word.':'.$meaning;
        if($word && $meaning){
            $success = file_put_contents("assets/dictionary.txt", $data_str . "\n", FILE_APPEND);
        }
        if ($success === FALSE){
            $this->session->set_flashdata('status','<div class="alert alert-danger">Unable to write!</div>');
        }else{
            $this->session->set_flashdata('status','<div class="alert alert-info">Word Successfully added to Dictionary</div>');
        }
        redirect('addword');
    }

        
}