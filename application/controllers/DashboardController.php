<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    // ===== Dashboard Page Load =====
    public function loadDashboarddashboard()
    {
        $this->load->view('dashboard/weldash');
    }


}


?>