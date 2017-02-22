<?php 

class M_data extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
//Registrasi
    public function registeruser(){
        $data = [
                'id' => date('U'),
                'username' =>  $this->input->post('username'),
                'namalengkap' =>  $this->input->post('nama'),
                'nim' =>  $this->input->post('nim'),
                'email' => $this->input->post('email'),
                'password' =>  password_hash( $this->input->post('password'), PASSWORD_BCRYPT ),
                'phone' =>  $this->input->post('phone')
                ];

        $this->db->insert( 'user', $data );
    } 

    public function tampil_data(){
        return $this->db->get('jadwal');
    }
    public function tampil_data_atk(){
        return $this->db->get('artikel');
    }

} 