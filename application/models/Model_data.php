
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_Model {


    public function get_data() {
        return $this->db->get('data')->result_array();
    }


}

/* End of file ModelName.php */
