

<?php $this->load->view('webmaster/header'); ?>








<!-- Modal [sign] -->
<div id="sign" class="p-0 modal fade show" role="dialog" aria-labelledby="sign" aria-hidden="false" style="display: block;">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                <i class="icon-close fas fa-arrow-right"></i>
            </div>
            <div class="modal-body">
                <form action="index.html" class="row">
                    <div class="col-12 p-0 align-self-center">
                        <div class="row">
                            <div class="col-12 p-0 pb-3">
                                <h2>Sign In</h2>
                                <p>Don't have an account? 
                                    <a href="" class="primary-color" data-toggle="modal" data-target="#register">
                                        Register now
                                    </a>.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="col-12 p-0 input-group">
                                <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group align-self-center">
                                <button class="btn primary-button">SIGN IN</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Automatically open the modal after page load
    $('#sign').modal('show');
  });
</script>


            <!-- Modal [register] -->
            <div id="register" class="p-0 modal fade" role="dialog" aria-labelledby="register" aria-hidden="true">
                <div class="modal-dialog modal-dialog-slideout" role="document">
                    <div class="modal-content full">
                        <div class="modal-header" data-dismiss="modal">
                            <i class="icon-close fas fa-arrow-right"></i>
                        </div>
                        <div class="modal-body">
                            <form action="index.html" class="row">
                                <div class="col-12 p-0 align-self-center">
                                    <div class="row">
                                        <div class="col-12 p-0 pb-3">
                                            <h2>Register</h2>
                                            <p>Have an account? <a href="home-1-one-page.html#" class="primary-color" data-toggle="modal" data-target="#sign">Sign In</a>.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 p-0 input-group">
                                            <input type="text" class="form-control" placeholder="Name" required>
                                        </div>
                                        <div class="col-12 p-0 input-group">
                                            <input type="email" class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="col-12 p-0 input-group">
                                            <input type="password" class="form-control" placeholder="Password" required>
                                        </div>
                                        <div class="col-12 p-0 input-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 p-0 input-group align-self-center">
                                            <button class="btn primary-button">REGISTER</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

















<?php $this->load->view('webmaster/footer');?>
