
<?php
defined('BASEPATH') or exit('No direct script access allowed.');

class RegModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function saveReg()
    {
        // Check if Form is Submitted

        if (isset($_POST['Submit'])) {

            // colletion and sanitize input
            $F_Name = trim($this->input->post('firstName', true));
            $L_Name = trim($this->input->post('lastName', true));
            $Email = trim($this->input->post('email', true));
            $Password = trim($this->input->post('password', true));
            $Phone = trim($this->input->post('phone', true));
            $Dob = trim($this->input->post('dob', true));
            $Gender = trim($this->input->post('gender', true));
            $Address = trim($this->input->post('address', true));

            // Hashed password befor saving

            $Rahul = password_hash($Password, PASSWORD_DEFAULT);

            // prepare data for Database

            $userData = array(
                'first_name' => $F_Name,
                'last_name' => $L_Name,
                'email' => $Email,
                'password' => $Rahul,
                'phone' => $Phone,
                'dob' => $Dob,
                'gender' => $Gender,
                'address' => $Address,
            );

            // InsertData into Database
            $insertData = $this->db->insert('register', $userData);

            // ✅ Load SweetAlert
            echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';

            // Succes Condition
            if ($insertData) {
                echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        swal({
                            title: "Data Submitted Successfully!",
                            text: "Your information has been saved.",
                            icon: "success",
                            button: "OK"
                        }).then(function() {
                            window.location.href = "' . base_url('login') . '";
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
                            window.location.href = "' . base_url('registration') . '";
                        });
                    });
                </script>';
            }

            exit; // Stop further PHP execution after showing alert
        }

        return false; // No submission
    }
}
