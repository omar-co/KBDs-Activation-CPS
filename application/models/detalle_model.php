<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class detalle_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //read the department list from db
     function get_sumary_list()
     {
          $sql = "SELECT * FROM cps order by pais";
          $query = $this->db->query($sql);
          $result = $query->result();
          return $result;
     }

    
}