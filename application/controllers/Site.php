<?php

error_reporting(0);
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends CI_Controller {

    public function index() {
        $this->shurjopay();
    }

    public function shurjopay() {
        $this->load->view('home');
    }

    public function multitabs() {
        $this->load->view('header');
        if (isset($_POST['finalsub'])) {
            unset($_POST['finalsub']);
            $this->load->model('questions_model');
            if ($this->questions_model->get_tabs() == 1) {
                echo '<script type="text/javascript">
                        alert("Data entered successfully");
                      </script>';
            }
        }
        $this->load->view('multitabs');
        $this->load->view('footer');
    }

    public function threeinputsapi() {
        //echo 'Three inputs API';
        $jwt = new JWT();
        $JwtSecretKey = "sdfgdfgfggfd";
        $data = array(
            'name' => 'smhrashid',
            'password' => 'Altec#4356',
            'IP' => '192.168.1.33',
        );
        $token = $jwt->encode($data, $JwtSecretKey, 'HS256');
        header("jwttoken:".$token);
    }

    public function decode_token() {
        $this->load->view('header');
        $this->load->view('decode_token');
        $this->load->view('footer');
    }

    public function workflow() {
        $this->load->view('header');
        $this->load->view('workflow');
        $this->load->view('footer');
    }

    public function pulsewave() {
        $this->load->view('header');
        $this->load->view('pulsewave');
        $this->load->view('footer');
    }

    public function curlshurjopay() {
        $this->load->view('header');
        $data['html'] = file_get_html('https://shurjopay.com.bd/#service');
        $this->load->view('curlshurjopay',$data);
        $this->load->view('footer');
    }

    public function mysqlevent() {
        $this->load->view('header');
        $this->load->view('mysqlevent');
        $this->load->view('footer');
    }

}
