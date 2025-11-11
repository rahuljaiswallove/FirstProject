<?php $this->load->view('webmaster/header'); ?>



<div class="container mt-5 ">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <h3 class="text-center mb-4">Login</h3>
            <form method="POST" action="<?php echo base_url('verifyChecking'); ?>">
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="emailLogin" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="passwordLogin" class="form-control" required>
                </div>

                <div class="mb-3">
                    <button type="submit" name="LoginBtn" class="btn btn-primary w-100">Login</button>

                </div>
            </form>


        </div>
    </div>
</div>





<?php $this->load->view('webmaster/footer'); ?>