<?php get_header() ?>
<div class="header-container"> </div>

<main class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post() ?>
                        <h1><?php the_title() ?></h1>
                        <p><?php the_content(); ?></p>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>No content found</p>
                <?php endif; ?>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/map.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CV</h5>
            <p class="adresse-felt">
                        <address>
                            Spangsbjerg Kirkevej 103<br>
                            6700 Esbjerg<br>
                            Denmark
                        </address>
                        <a target="_blank" href="https://www.google.com/maps/dir//Business+Academy+South+West,+Spangsbjerg+Kirkevej+103,+6700+Esbjerg/@55.4884327,8.3768397,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x464b20de04044937:0x93f28cf042117583!2m2!1d8.4470501!2d55.4884528" class="btn btn-primary">Get driving directions</a>
                        </p>
                        </div>
                </div>

</main>

<?php get_footer() ?>