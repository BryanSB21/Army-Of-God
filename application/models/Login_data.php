<?php 

class Login_data extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
//Login
public function userterdaftar( $username ){
        $test = $this->db->get_where( 'user', array( 'username' => $username) );
        if( $test->row_array()) {
            $_SESSION['username'] = $test->row_array()['username'];
            $_SESSION['phone'] = $test->row_array()['phone'];
            $_SESSION['password'] = $test->row_array()['password'];
            $_SESSION['email'] = $test->row_array()['email'];
            $_SESSION['id'] = $test->row_array()['id'];
            $_SESSION['nama'] = $test->row_array()['namalengkap'];
            $_SESSION['admin'] = $test->row_array()['admin'];
            return true;
        } else{
            return false;
        }
        
    }

    public function passwordok( $pass ){
        if( password_verify( $this->input->post('password') , $_SESSION['password'] ) ){
            return true;
        }

        else{
            return false;
        }
    }
} 