<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: srokde
 * Date: 7/14/17
 * Time: 3:45 PM
 */
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('home');
        $this->load->view('templates/footer');
    }
}