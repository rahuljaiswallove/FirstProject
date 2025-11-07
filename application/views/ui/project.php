
<?php $this->load->view('webmaster/header'); ?>


      <!-- Hero -->
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- Media -->
                        <img src="modules/assets/images/bg-wide.jpg" alt="Full Image" class="full-image" data-mask="80">  

                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Projects</li>
                                    </ol>
                                </nav>

                                <h1 class="mb-0 title effect-static-text">Projects</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Projects -->
        <section id="projects" class="section-1 showcase blog-grid filter-section projects">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row text-center intro">
                        <div class="col-12">
                            <span class="pre-title">We do more for everyone</span>
                            <h2 class="mb-0">Actions & <span class="featured"><span>Projects</span></span></h2>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-12">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn active">
                                    <input type="radio" value="all" checked class="btn-filter-item">
                                    <span>All</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="institutional" class="btn-filter-item">
                                    <span>Institutional</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="social" class="btn-filter-item">
                                    <span>Social</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="events" class="btn-filter-item">
                                    <span>Events</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="innovation" class="btn-filter-item">
                                    <span>Innovation</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="environment" class="btn-filter-item">
                                    <span>Environment</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="technology" class="btn-filter-item">
                                    <span>Technology</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row items filter-items">                       
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["innovation","social","technology"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="modules/assets/images/project-1.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="<?php echo base_url('project'); ?>">
                                            <h4>Academic professional program in social media</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('project'); ?>"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>            
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["institutional","events","environment"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="modules/assets/images/project-2.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="<?php echo base_url('project'); ?>">
                                            <h4>President's speech at the annual meeting</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('project'); ?>"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>     
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["environment","institutional","social"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="modules/assets/images/project-3.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="<?php echo base_url('project'); ?>">
                                            <h4>International business trip in Shanghai</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('project'); ?>"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","events","innovation"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="modules/assets/images/project-4.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="<?php echo base_url('project'); ?>">
                                            <h4>Technology workshop with education theme</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('project'); ?>"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["social","environment","events"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="modules/assets/images/project-5.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="<?php echo base_url('project'); ?>">
                                            <h4>Donation of clothes and food to the partner NGO</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('project'); ?>"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["innovation","institutional","technology"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="modules/assets/images/project-6.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="<?php echo base_url('project'); ?>">
                                            <h4>Confraternization of the procurement team</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('project'); ?>"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-1 filter-sizer"></div>
                    </div>
                </div>
            </div>
        </section>





















<?php $this->load->view('webmaster/footer'); ?>