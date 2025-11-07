<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function saveContact()
    {
        // Check if form is submitted
        if (isset($_POST['submitData'])) {
            // Collect and sanitize form input
            $Name = trim($this->input->post('name', true));
            $Email = trim($this->input->post('email', true));
            $Phone = trim($this->input->post('phone', true));
            $Info = trim($this->input->post('info', true));
            $Message = trim($this->input->post('message', true));

            // Prepare data array for insertion
            $contactData = array(
                'name'     => $Name,
                'email'    => $Email,
                'phone'    => $Phone,
                'moeInfo'  => $Info,
                'message'  => $Message
            ); 

            // Insert into database
            $inserted = $this->db->insert('code', $contactData);

            // Check result and show SweetAlert
            if ($inserted) {
                echo "<script>
        alert('Data has been registered successfully.');
        window.location.href='" . base_url('contact') . "';
    </script>";
            } else {
                echo "<script>
        alert('Data registration failed.');
        window.location.href='" . base_url('contact') . "';
    </script>";
            }
            exit; // Stop further PHP execution after redirect

        }

        return false; // No submission
    }
}
?>