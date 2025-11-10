
<?php $this->load->view('webmaster/header'); ?>





<section id="form" class="section-1 form form">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 pr-md-5 align-self-center text">
                <div class="row intro">
                    <div class="col-12 p-0">
                        <span class="pre-title m-0">Send a message</span>
                        <h2>Get in <span class="featured"><span>Touch</span></span></h2>
                        <p>We will respond to your message as soon as possible.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0">
                        <form action="<?php echo base_url('Portal'); ?>" method="POST">


                            <div class="row form-group-margin">
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <input type="text" name="uName" id="uName" class="form-control field-name" placeholder="Name" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <input type="email" name="uEmail" id="uEmail" class="form-control field-email" placeholder="Email" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <input type="text" name="uPhone" id="uPhone" class="form-control field-phone" placeholder="Phone" required>
                                </div>

                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <input type="password" name="uPassword" id="uPassword" class="form-control field-phone" placeholder="Password" required>
                                </div>

                                <div class="col-12 m-0 p-2 input-group">
                                    <textarea name="uMessage" id="uMessage" class="form-control field-message" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-12 input-group m-0 p-2">
                                    <!-- Keep the button style the same but make it functional -->
                                    <button type="submit" class="btn primary-button" name="Submit">SEND</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="forms">
                    <h4>Example Inc.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Curabitur convallis, diam a egestas iaculis, neque lorem interdum felis, in viverra lacus tortor in leo.</p>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="page-form-1.html#" class="nav-link">
                                <i class="fas fa-phone-alt mr-2"></i>
                                +1 (305) 1234-5678
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="page-form-1.html#" class="nav-link">
                                <i class="fas fa-envelope mr-2"></i>
                                hello@example.com
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="page-form-1.html#" class="nav-link">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Main Avenue, 987
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="page-form-1.html#" class="mt-2 btn outline-button" data-toggle="modal" data-target="#map">VIEW MAP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>














<?php $this->load->view('webmaster/footer'); ?>