<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // ===== LOGIN CHECK FUNCTION =====
    public function checkLogin()
    {
        if ($this->input->post('LoginBtn')) {

            echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';

            $fieldEmail = trim($this->input->post('emailLogin', true));
            $fieldPassword = trim($this->input->post('passwordLogin', true));

            $user = $this->db->where('email', $fieldEmail)->get('register')->row();

            // --- Email Not Found ---
            if (!$user) {
                echo '<script>
                    swal({
                        title: "Email Not Registered!",
                        text: "Please sign up first.",
                        icon: "error"
                    }).then(function() {
                        window.location.href = "' . base_url('login') . '";
                    });
                </script>';
                return;
            }

            // --- Password Verify ---
            if (password_verify($fieldPassword, $user->password)) {

                // ✅ SET SESSION (only email)
                $this->session->set_userdata('activeDashboard', $user->email);

                echo '<script>
                    swal({
                        title: "Login Successful!",
                        text: "Welcome back!",
                        icon: "success"
                    }).then(function() {
                        window.location.href = "' . base_url('dashBoard') . '";
                    });
                </script>';
            } else {
                // ❌ Wrong Password
                echo '<script>
                    swal({
                        title: "Invalid Password!",
                        text: "Please try again.",
                        icon: "error"
                    }).then(function() {
                        window.location.href = "' . base_url('login') . '";
                    });
                </script>';
            }
        }
    }

    // ===== LOGOUT FUNCTION =====
    public function logoutDashboard()
    {
        // Destroy session
        $this->session->unset_userdata('activeDashboard');
        $this->session->sess_destroy();

        // SweetAlert logout message
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script>
            swal({
                title: "Logged Out!",
                text: "You have successfully logged out.",
                icon: "success"
            }).then(function() {
                window.location.href = "' . base_url('login') . '";
            });
        </script>';
    }
}


?>