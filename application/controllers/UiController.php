<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UiController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    //////=======  UI PAGE LOADED HERE ========////
    // Load About page
    public function loadUIabout()
    {
        $this->load->view('ui/about');
    }

    // Load Contact page
    public function loadUIcontact()
    {
        $this->load->view('ui/contact');
    }

    // Load Services page
    public function loadUIservice()
    {
        $this->load->view('ui/service');
    }

    // Load Projects page
    public function loadUIproject()
    {
        $this->load->view('ui/project');
    }

    // Load Form page
    public function loadUIform()
    {
        $this->load->view('ui/form');
    }

    // Load Register Page

    public function loadUIregister()
    {
        $this->load->view('ui/signup');
    }





    //////=======  UI PAGE MODEL AND MODEL FUNCTION  LOADED HERE ========////


    // Handle Contact Form Submission
    public function datasubmit()
    {
        $this->load->model('Contact_Model');
        $this->Contact_Model->saveContact();
    }


    // Handle Form Submission
    public function loadFormModel()
    {
        $this->load->model('FormModel');
        $this->FormModel->saveUserData();
    }
}
