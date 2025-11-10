
<?php
defined('BASEPATH') or exit('No direct script access allowed.');

class SendModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function saveSend()
    {
        // Check if Form is submitted
        if (isset($_POST['Submit'])) {

            // collect and sanitize input
            $Name = trim($this->input->post('uName', true));
            $Email = trim($this->input->post('uEmail', true));
            $Phone = trim($this->input->post('uPhone', true));
            $Password = trim($this->input->post('uPassword', true));
            $Message = trim($this->input->post('uMessage', true));



            // Hash the Password before saving
            $PasswordHashed = password_hash($Password, PASSWORD_DEFAULT);

            // prepare data array for insert

            $userData = array(
                'name' => $Name,
                'email' => $Email,
                'phone' => $Phone,
                'password' => $PasswordHashed,
                'message' => $Message,
            );

            // Insert into Data base
            $insertData = $this->db->insert('secondForm', $userData);


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
                            window.location.href = "' . base_url('send') . '";
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
                            window.location.href = "' . base_url('send') . '";
                        });
                    });
                </script>';
            }

            exit; // Stop further PHP execution after showing alert
        }

        return false; // No submission
    }
}
