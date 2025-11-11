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

            // Load SweetAlert JS once
            echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';

            $fieldEmail = trim($this->input->post('emailLogin', true));
            $fieldPassword = trim($this->input->post('passwordLogin', true));

            // --- Check email existence ---
            $user = $this->db->where('email', $fieldEmail)->get('register')->row();

            // --- Email Not Found ---
            if (!$user) {
                $this->sweetAlertRedirect(
                    'Email Not Registered!',
                    'Please sign up first.',
                    'error',
                    'login'
                );
                return;
            }

            // --- Password Verify ---
            if (password_verify($fieldPassword, $user->password)) {
                // ✅ Set session
                $this->session->set_userdata('activeDashboard', $user->email);

                $this->sweetAlertRedirect(
                    'Login Successful!',
                    'Welcome back!',
                    'success',
                    'welDashboard'
                );
            } else {
                // ❌ Wrong Password
                $this->sweetAlertRedirect(
                    'Invalid Password!',
                    'Please try again.',
                    'error',
                    'login'
                );
            }
        }
    }

    // ===== LOGOUT FUNCTION =====
    public function logoutDashboard()
    {
        // Load SweetAlert JS once
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';

        // Destroy session
        $this->session->unset_userdata('activeDashboard');
        $this->session->sess_destroy();

        // ✅ Show logout alert and redirect
        $this->sweetAlertRedirect(
            'Logged Out Successfully!',
            'You have been logged out of your account.',
            'success',
            'login'
        );
    }

    // ===== SWEETALERT HELPER FUNCTION (only title, text, icon) =====
    private function sweetAlertRedirect($title, $text, $icon, $redirectPage)
    {
        echo "
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                swal({
                    title: '$title',
                    text: '$text',
                    icon: '$icon'
                }).then(function() {
                    window.location.href = '" . base_url($redirectPage) . "';
                });
            });
        </script>
        ";
    }





}






?>