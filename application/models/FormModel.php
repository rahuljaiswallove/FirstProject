<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FormModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function saveUserData()
    {
        // Check if form is submitted
        if (isset($_POST['uSubmitData'])) {

            // Collect and sanitize form input
            $Name = trim($this->input->post('uName', true));
            $Email = trim($this->input->post('uEmail', true));
            $Phone = trim($this->input->post('uPhone', true));
            $PasswordPlain = trim($this->input->post('uPassword', true));
            $Message = trim($this->input->post('uMessage', true));

            // ✅ Hash the password before saving
            $PasswordHashed = password_hash($PasswordPlain, PASSWORD_DEFAULT);

            // Prepare data array for insertion
            $userData = array(
                'name'     => $Name,
                'email'    => $Email,
                'phone'    => $Phone,
                'password' => $PasswordHashed,
                'message'  => $Message
            );

            // Insert into database
            $inserted = $this->db->insert('form', $userData);

            // ✅ Load SweetAlert
            echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';

            // ✅ Success condition
            if ($inserted) {
                echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        swal({
                            title: "Data Submitted Successfully!",
                            text: "Your information has been saved.",
                            icon: "success",
                            button: "OK"
                        }).then(function() {
                            window.location.href = "' . base_url('form') . '";
                        });
                    });
                </script>';
            } 
            // ❌ Error condition
            else {
                echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        swal({
                            title: "Submission Failed!",
                            text: "Something went wrong. Please try again.",
                            icon: "error",
                            button: "OK"
                        }).then(function() {
                            window.location.href = "' . base_url('form') . '";
                        });
                    });
                </script>';
            }

            exit; // Stop further PHP execution after showing alert
        }

        return false; // No submission
    }
}
