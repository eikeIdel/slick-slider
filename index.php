<?php get_header() ?>

<section class="eik-slider-section">
    <div class="eik-slider">

        <?php
        $query = new WP_Query([
            'category_name' => 'slider',
            ]);

        if($query->have_posts()):
            while($query->have_posts()):
                $query->the_post();
        ?>

        <div class="eik-slide-wrapper">
            <div class="eik-slide">
                <img class="eik-slide-img" src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>" />
                <div class="eik-slide-textblock">
                    <h1 class="eik-slide-textblock-title"><?php the_title()?></h1>
                    <p class="eik-slide-textblock-text"><?php the_content()?></p>
                    <a href="http://www.google.de" class="eik-slide-textblock-btn">weiterlesen...</a>
                </div>
            </div>
        </div>

        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer() ?>