<?php 

class M_admin extends CI_Model{	
	function cek_login($table,$where){		
		$test = $this->db->get_where($table,$where);
		if( $test->row_array()) {
            $_SESSION['username'] = $test->row_array()['username'];
            $_SESSION['password'] = $test->row_array()['password'];
            $_SESSION['id'] = $test->row_array()['id'];
            $_SESSION['nama'] = $test->row_array()['nama'];
            $_SESSION['level'] = $test->row_array()['level'];
            return true;
        } else{
            return false;
        }
	}	
}