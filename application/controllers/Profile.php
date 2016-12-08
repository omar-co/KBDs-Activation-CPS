<?php

/**
 * Created by PhpStorm.
 * User: gonzalezcoronado.o
 * Date: 28/11/2016
 * Time: 09:19 AM
 */
final class Profile extends MY_Controller
{
    /**
     * Profile constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->_data['view'] = 'profile_view';
        $this->_data['title'] = 'Profile';

        $this->form_validation->set_rules('old', $this->lang->line('change_password_validation_old_password_label'), 'required');
        $this->form_validation->set_rules('new', $this->lang->line('change_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
        $this->form_validation->set_rules('new_confirm', $this->lang->line('change_password_validation_new_password_confirm_label'), 'required');

        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }

        $user = $this->ion_auth->user()->row();

        if ($this->form_validation->run() == false)
        {
            // display the form
            // set the flash data error message if there is one
            $this->_data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');


            $this->_data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
            $this->_data['old_password'] = array(
                'name' => 'old',
                'id'   => 'old',
                'class'=> 'form-control',
                'type' => 'password',
            );
            $this->_data['new_password'] = array(
                'name'    => 'new',
                'id'      => 'new',
                'class'=> 'form-control',
                'type'    => 'password',
                'pattern' => '^.{'.$this->_data['min_password_length'].'}.*$',
            );
            $this->_data['new_password_confirm'] = array(
                'name'    => 'new_confirm',
                'id'      => 'new_confirm',
                'type'    => 'password',
                'class'=> 'form-control',
                'pattern' => '^.{'.$this->_data['min_password_length'].'}.*$',
            );
            $this->_data['user_id'] = array(
                'name'  => 'user_id',
                'id'    => 'user_id',
                'type'  => 'hidden',
                'value' => $user->id,
            );

            // render
            $this->_render_page();
            //$this->data['view'] = 'auth/change_password';
            //$this->_render_page('base/general_view', $this->data);

        }
        else
        {
            $identity = $this->session->userdata('identity');

            $change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

            if ($change)
            {
                //if the password was successfully changed
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                $this->ion_auth->logout();
                redirect('profile', 'refresh');
            }
            else
            {
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('profile', 'refresh');
            }
        }



    }
}