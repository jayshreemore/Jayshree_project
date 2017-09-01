<?php
class Gridmodel extends CI_Model {


  public function __construct()
         {
                 parent::__construct();
                 // Your own constructor code
				 $this->load->database('customer');
         }

        public function display_list()
        {
                $query = $this->db->get('cumstomer_deatils');

                return $query->result();
        }
        public function search_method($name,$phone)
        {
            //$this->db->get('cumstomer_deatils');
            $search_options = array();
            if($name!='')
            $search_options['c_name'] = $name;
            if($phone!='')
            $search_options['c_telephone'] = $phone;
          $query =   $this->db->get_where('cumstomer_deatils', $search_options);
        //  echo $this->db->last_query();
            return $query->result();



        }


}

?>
