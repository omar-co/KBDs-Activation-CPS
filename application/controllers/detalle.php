<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Detalle extends CI_Controller {
     public function __construct()
     {
          parent::__construct();
          $this->load->helper('url');
          $this->load->database();
     }

     public function index()
     {
          //load the department_model
          $this->load->model('detalle_model');  
          //call the model function to get the department data
          $deptresult = $this->detalle_model->get_sumary_list();           
          $data['detalles'] = $deptresult;

          

          //load the department_view
          $this->load->view('header');
          $this->load->view('detalle_view',$data);
          $this->load->view('footer');
     }
}