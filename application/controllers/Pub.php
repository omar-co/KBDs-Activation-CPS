<?php

/**
 * Created by PhpStorm.
 * User: gonzalezcoronado.o
 * Date: 07/12/2016
 * Time: 01:03 PM
 */
class Pub extends CI_Controller
{

    public $_data = array();

    public $_user;



    /**
     * Country constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Task_country_model');
        $this->load->model('Country_model');

        $this->_data['estilos'] = array(
            'assets/bootstrap/css/bootstrap.min',
            'assets/dist/css/AdminLTE.min',
            'assets/dist/css/skins/_all-skins.min'
        );
        $this->_data['js_head'] = array(

        );
        $this->_data['js_footer'] = array(
            'assets/plugins/jQuery/jquery-2.2.3.min',
            'assets/bootstrap/js/bootstrap.min',
            'assets/plugins/slimScroll/jquery.slimscroll.min',
            'assets/plugins/fastclick/fastclick'
        );
        $this->_data['js_footer_final'] = array(
            'assets/dist/js/app.min',
            'assets/dist/js/demo'
        );
        $this->_data['js_code'] = NULL;

         $this->_user = new StdClass;

        $this->_user->first_name = 'Unregistered';
        $this->_user->last_name = 'User';
        $this->_user->email = 'User whitout email';

    }

    public function index($pais = NULL)
    {
        array_push($this->_data['estilos'],'assets/plugins/flags/flags');

        if (is_null($pais))
        {
            $this->_data['title'] = 'Country Selection';
            $this->_data['view'] = 'pub_country_view';
            $this->_render_page();
        }
        elseif($pais == 'general')
        {
            $this->_data['tasks'] = $this->get_country_data($pais);
            $this->_data['title'] = 'KBD Activation Status';
            $this->_data['view'] = 'pub_general_view';
            $this->_render_page();
        }
        else
        {
            $this->_data['tasks'] = $this->get_country_data($pais);
            $this->_data['title'] = ucfirst($pais) . ' Detail';
            $this->_data['view'] = 'detail_view';
            $this->_render_page();
        }
    }

    private function get_country_data($pais)
    {

        $pais = $this->get_country($pais);

        return $this->Task_country_model
                    ->with('task')
                    ->with('country')
                    ->get_many_by('country_id', $pais);
    }

    private function get_country($pais)
    {
        $result = $this->Country_model
                    ->get_by('name', $pais);

        return $result->id;
    }

    protected function _render_page($data = null, $returnhtml = false)//I think this makes more sense
    {
        if (!empty($data))
        {
            $this->viewdata = $data;
        }else{
            $this->viewdata =  $this->_data;
        }

        $view_html = $this->load->view('base/general_view', $this->viewdata, $returnhtml);

        if ($returnhtml) return $view_html;//This will return html on 3rd argument being true
    }


}