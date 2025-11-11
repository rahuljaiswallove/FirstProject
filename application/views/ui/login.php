<?php $this->load->view('webmaster/header'); ?>



    <div class="container mt-5 ">
        <div class="row justify-content-center">
            <div class="col-md-4">

                <h3 class="text-center mb-4">Login</h3>

                <form method="POST" action="<?php echo base_url('verifyChecking'); ?>">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="emailLogin" placeholder="Enter email" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="passwordLogin" placeholder="Enter password" required>
                    </div>


                    <button type="submit" class="btn btn-primary w-100" name="LoginBtn">Login</button>

                    <div class="text-center mt-3">
                        <small>Don't have an account? <a href="<?php echo base_url('registration'); ?>">Register</a></small>
                    </div>
                </form>

            </div>
        </div>
    </div>





<?php $this->load->view('webmaster/footer'); ?>