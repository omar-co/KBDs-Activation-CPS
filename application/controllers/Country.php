<?php

/**
 * Created by PhpStorm.
 * User: gonzalezcoronado.o
 * Date: 07/12/2016
 * Time: 01:03 PM
 */
class Country extends MY_Controller
{

    /**
     * Country constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Task_country_model');
        $this->load->model('Country_model');
    }

    public function index($pais = NULL)
    {
        array_push($this->_data['estilos'],'assets/plugins/flags/flags', 'assets/plugins/bootstrap3-editable/css/bootstrap-editable');
        array_push($this->_data['js_footer'], 'assets/plugins/bootstrap3-editable/js/bootstrap-editable.min');
        $this->_data['js_code'] = '
        $(function(){
    $(\'.table tbody tr td a\').editable({   
        source: [
              {value: \'On Track\', text: \'On Track\'},
              {value: \'Fair\', text: \'Fair\'},
              {value: \'Off Track\', text: \'Off Track\'},
              {value: \'Not Started\', text: \'Not Started\'}
           ],
           url:\'' . site_url('country/update') . '\',
           success: function(e, newValue) {
           var id = $(this).data(\'pk\');
    if(newValue === \'On Track\'){
    $(\'#\' + id).removeClass(\'label-warning label-danger bg-black\').addClass(\'label-success\');
    }
    if(newValue === "Off Track"){
    $(\'#\' + id).removeClass(\'label-warning label-success bg-black\').addClass(\'label-danger\');
    }
    if(newValue == "Fair"){
    $(\'#\' + id).removeClass(\'label-danger label-success bg-black\').addClass(\'label-warning\');
    }
    if(newValue == "Not Started"){
    $(\'#\' + id).removeClass(\'label-warning label-success label-danger\').addClass(\'bg-black\');
    }
}
           
    });
    
});
';

        if (is_null($pais))
        {
            $this->_data['title'] = 'Country Selection';
            $this->_data['view'] = 'country_view';
            $this->_render_page();
        }
        elseif($pais == 'general')
        {
            $this->_data['tasks'] = $this->get_country_data($pais);
            $this->_data['title'] = 'KBD Activation Status';
            $this->_data['view'] = 'general_view';
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

    public function update()
    {
        $pk = $this->input->post('pk');
        $value = $this->input->post('value');
        $user = $this->_user->id;

        $this->Task_country_model->update($pk,array('status' => $value, 'updated_by' =>$user));
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
}