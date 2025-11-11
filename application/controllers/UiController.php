<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UiController extends CI_Controller
{
    public function __construct()
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

    // Load Reg Page
    public function loadUIsend()
    {
        $this->load->view('ui/send');
    }

    // Load Start Page
    public function loadUIStart()
    {
        $this->load->view('ui/start');
    }

    // Load Registration Page

    public function loadUIregistration()
    {
        $this->load->view('ui/registration');
    }

    // Load Login Page
    public function loadUIlogin()
    {
        $this->load->view('ui/login');
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

    //Handle Send Submission
    public function loadSendModel()
    {
        $this->load->model('SendModel');
        $this->SendModel->saveSend();
    }

    // Hand Start Submission
    public function loadStartModel()
    {
        $this->load->model('StartModel');
        $this->StartModel->saveStart();
    }

    // Handle Registration Submission
    public function loadRegistrationModel()
    {
        $this->load->model('RegModel');
        $this->RegModel->SaveReg();
    }



        // ===== Logout Function Call =====
    public function loaDlogoutDashboard()
    {
        $this->load->model('LoginModel');
        $this->LoginModel->logoutDashboard();
    }


    // ===== LOGIN HANDLER =====
    public function loadLoginModel()
    {
        // Load LoginModel
        $this->load->model('LoginModel');
        
        // Call model function for login check
        $this->LoginModel->loginCred();
    }



}


?>