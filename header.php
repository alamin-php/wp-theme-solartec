<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo get_template_directory_uri(  ); ?>/assets/img/favicon.ico" rel="icon">
    <?php wp_head(); ?>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0">
        <?php 
            $location     = get_field('location', 'option');
            $open_time    = get_field('open_time', 'option');
            $mobile       = get_field('mobile', 'option');
            $social_link  = get_field('social_link', 'option');
        ?>
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <?php if($location) : ?>
                    <small><?php echo esc_html( $location ); ?></small>
                    <?php endif; ?>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <?php if($open_time) : ?>
                    <small><?php echo esc_html( $open_time ); ?></small>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <?php if($mobile) : ?>
                    <small><?php echo esc_html( $mobile ); ?></small>
                    <?php endif; ?>
                </div>
                <?php if($social_link) : ?>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <?php if($social_link['facebook']) : ?>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?php echo esc_url($social_link['facebook']); ?>"><i
                            class="fab fa-facebook-f"></i></a>
                    <?php endif; ?>
                    <?php if($social_link['twitter']) : ?>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?php echo esc_url($social_link['twitter']); ?>"><i
                            class="fab fa-twitter"></i></a>
                    <?php endif; ?>
                    <?php if($social_link['linkedin']) : ?>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?php echo esc_url($social_link['linkedin']); ?>"><i
                            class="fab fa-linkedin-in"></i></a>
                            <?php endif; ?>
                    <?php if($social_link['instagram']) : ?>
                    <a class="btn btn-square btn-link rounded-0" href="<?php echo esc_url($social_link['instagram']); ?>"><i class="fab fa-instagram"></i></a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="<?php echo site_url(); ?>" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 text-primary"><?php echo esc_html('Solartec', 'solartec'); ?></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <?php 
                wp_nav_menu( array(
                    'menu'              => 'topmenu', // match name to yours
                    'theme_location'    => 'topmenu',
                    'container'         => 'div', // no need to wrap `wp_nav_menu` manually
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbarCollapse',
                    'menu_class'        => 'navbar-nav ms-auto p-4 p-lg-0',
                    'fallback_cb'       => false,
                    'walker'            => new WP_Bootstrap_Navwalker() // Use different Walker
                ));
            ?>
            <a href="<?php echo esc_url('http://protheme.local.com/contact/', 'solartec'); ?>" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"><?php echo esc_html('Get A Quote', 'solartec'); ?><i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->