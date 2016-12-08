<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sumary_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //read the department list from db
     function get_sumary_list()
     {
          $sql = "SELECT * FROM cps  WHERE Phase ='Phase 1. Foundation' and pais='Mexico' and nivel=1";
          $query = $this->db->query($sql);
          $result = $query->result();
          return $result;
     }

     function get_sumary_list2()
     {
          
     $sql = "SELECT * FROM cps  WHERE Phase ='Phase 2. Operationalization' and pais='Mexico' and nivel=1";
          $query = $this->db->query($sql);
          $result = $query->result();
          return $result;
     }

     function get_sumary_list3()
     {
         
          $sql = "SELECT * FROM cps  WHERE Phase ='Phase 3. Optimization' and pais='Mexico' and nivel=1";
          $query = $this->db->query($sql);
          $result = $query->result();
          return $result;
     }
}