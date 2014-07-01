<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h2>
                    <?php the_title(); ?>
                    <a class="btn btn-primary btn-lg">+&nbsp;&nbsp;Add a Moment</a>
                </h2>
            </div>
        </div>
    </div>
</div>
		
<?php endwhile; endif; ?>
<?php get_footer(); ?>