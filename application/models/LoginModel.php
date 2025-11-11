<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    // ===== LOGIN CHECK FUNCTION =====
    public function loginCred()
    {


        // Load SweetAlert JS
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';

        // Get input fields safely
        $fieldEmail = trim($this->input->post('emailLogin', true));
        $fieldPassword = trim($this->input->post('passwordLogin', true));

        // Validate empty fields
        if (empty($fieldEmail) || empty($fieldPassword)) {
            $this->sweetAlertRedirect(
                'Missing Information!',
                'Please enter both email and password.',
                'warning',
                'login'
            );
            return;
        }

        // Check if email exists
        $user = $this->db->where('email', $fieldEmail)->get('register')->row();

        if (!$user || empty($user->email)) {
            $this->sweetAlertRedirect(
                'Email Not Found!',
                'No account exists with this email. Please sign up first.',
                'error',
                'login'
            );
            return;
        }

        // Verify password (hashed)
        if (password_verify($fieldPassword, $user->password)) {

            // Create session
            $this->session->set_userdata([
                'activeDashboard' => true,
                'user_email' => $user->email,
                'user_name' => $user->first_name
            ]);

            // Success redirect
            $this->sweetAlertRedirect(
                'Login Successful!',
                'Welcome back, ' . ucfirst($user->first_name ?? 'User') . '!',
                'success',
                'welDashboard'
            );
        } else {
            // Wrong password
            $this->sweetAlertRedirect(
                'Invalid Password!',
                'Please enter the correct password.',
                'error',
                'login'
            );
        }
    }










    // ===== LOGOUT FUNCTION =====
    public function logoutDashboard()
    {
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

    // ===== SWEETALERT HELPER FUNCTION =====
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
