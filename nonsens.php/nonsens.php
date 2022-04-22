<div class="container">
        <div class="row">
            <div class="col-9 mb-5">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post() ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No content found</p>
                <?php endif; ?>
                <div class="container-fluid p-0 pt-3">
                    <div class="row">
                        <div class="col-4 p-0">
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/images/hotel1.jpg" alt="">
                        </div>
                        <div class="col-4 p-0">
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/images/hotel2.jpg" alt="">
                        </div>
                        <div class="col-4 p-0">
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/images/hotel3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <form class="d-flex navbar-form navbar-right">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <a href="search.html" class="btn btn-outline-success" type="submit">Search</a>
        </form>