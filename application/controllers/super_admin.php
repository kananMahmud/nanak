<?php
session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Super_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('admin_login', 'refresh');
        }
    }

    public function index() {
        $data = array();
        $data['title'] = 'Admin Dashboard';
        $data['admin_content'] = $this->load->view('admin/admin_content', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    public function logout() {
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_id');
        $sdata = array();
        $sdata['message'] = 'You Are Sucessfully Logout !';
        $this->session->set_userdata($sdata);
        redirect('admin_login', 'refresh');
    }

}

?>
