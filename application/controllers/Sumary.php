<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sumary extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sumary_model');
    }

    public function index()
    {


        redirect('country/general');

        $deptresult = $this->Sumary_model->get_sumary_list();
        $this->_data['detalles'] = $deptresult;

        $deptresult2 = $this->Sumary_model->get_sumary_list2();
        $this->_data['detalles2'] = $deptresult2;

        $deptresult3 = $this->Sumary_model->get_sumary_list3();
        $this->_data['detalles3'] = $deptresult3;

        $this->_data['title'] = 'General Sumary';
        $this->_data['view'] = 'dashboard_view';


        $this->_render_page();
    }

    /**
     * @return object
     */
    public function paises()
    {
        $this->_data['title'] = 'Country Selection';
        $this->_data['view'] = 'country_view';


        $this->_render_page();
    }
}