<?php

/**
 * Created by PhpStorm.
 * User: gonzalezcoronado.o
 * Date: 15/11/2016
 * Time: 02:02 PM
 */
final class Country_model extends MY_Model
{
    public $_table = 'Country';
    protected $soft_delete = TRUE;

    public $belongs_to = array('cliente' => array('model' => 'Cliente_model', 'primary_key' => 'customer_id'));
    public $has_many = array( 'cliente' => array( 'model' => 'Cliente_model', 'primary_key' => 'customer_id' ) );
    public $before_create = array('created_at', 'updated_at');
    public $before_update = array('updated_at');

    public function __construct()
    {
        parent::__construct();
    }

}