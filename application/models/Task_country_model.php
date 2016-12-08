<?php

/**
 * Created by PhpStorm.
 * User: gonzalezcoronado.o
 * Date: 15/11/2016
 * Time: 02:02 PM
 */
final class Task_country_model extends MY_Model
{
    public $_table = 'country_task';
    protected $soft_delete = TRUE;

    public $belongs_to = array(
        'country' => array(
            'model'       => 'Country_model',
            'primary_key' => 'country_id'
        ),
        'task'    => array(
            'model'       => 'Task_model',
            'primary_key' => 'task_id'
        ));
    //public $has_many = array( 'cliente' => array( 'model' => 'Cliente_model', 'primary_key' => 'customer_id' ) );
    public $before_create = array('created_at', 'updated_at');
    public $before_update = array('updated_at');

    public function __construct()
    {
        parent::__construct();
    }

}