<?php $this->load->view('dashboardMaster/header'); ?>


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
                                <li class="breadcrumb-item"><a href="<?php echo base_url('logout'); ?>" class="btn btn-danger">Logout</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">HOME PAGE </li>
                            </ol>
                        </nav>

                        <h1 class="mb-0 title effect-static-text">Welcome to Home Page Dashboard</h1>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>






<?php $this->load->view('dashboardMaster/footer'); ?>