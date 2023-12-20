<?php

/**
 * Template Name: Home - Demo site
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/page-templates/
 * 
 * @package _s
 */


get_header(); // Include header.php
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <!-- Hero Section -->
    <section class="hero-section" style="display: grid; grid-template-columns: 1fr; position: relative;">
      <img src="https://images.unsplash.com/photo-1543039717-b4d407223b4c?q=80&w=1804&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" style="width: 100%; height: 80vh; object-fit: cover;">
      <div class="container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">
        <h1>Welcome to Our Demo Website</h1>
        <p>This is a simple demo homepage template for WordPress.</p>
      </div>
    </section>


    <!-- Icon Section -->
    <section style="display: flex; flex-direction:row; margin: 5em;">
      <div>
        <i class="fa-regular fa-heart" style="font-size: 2rem; display: flex; justify-content: center;"></i>
        <h2 style="text-align: center;">Easily Customizable</h2>
        <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, officiis?</p>
      </div>
      <div>
        <i class="fa-solid fa-flag" style="font-size: 2rem; display: flex; justify-content: center;"></i>
        <h2 style="text-align: center;">Fast</h2>
        <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, officiis?</p>
      </div>
      <div>
        <i class="fa-solid fa-code" style="font-size: 2rem; display: flex; justify-content: center;"></i>
        <h2 style="text-align: center;">Coding standards</h2>
        <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, officiis?</p>
      </div>
      <div>
        <i class="fa-solid fa-shield-halved" style="font-size: 2rem; display: flex; justify-content: center;"></i>
        <h2 style="text-align: center;">Security</h2>
        <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, officiis?</p>
      </div>
    </section>


    <!-- Featured Services Section -->
    <section class="featured-services" style="margin: 25px 30px">
      <h2>Featured Services:</h2>
      <div class="container" style="display: flex; flex-direction: row; gap: 25px; justify-content: center;">
        <div class="service-item" style="background-color: lightgray; padding: 15px 50px;">
          <h3>Service 1</h3>
          <p>Description of Service 1.</p>
          <p>Description of Service 2.</p>
          <p>Description of Service 3.</p>
          <p>Description of Service 4.</p>
          <p>Description of Service 5.</p>
        </div>
        <div class="service-item" style="background-color: lightgray; padding: 15px 50px;">
          <h3>Service 2</h3>
          <p>Description of Service 1.</p>
          <p>Description of Service 2.</p>
          <p>Description of Service 3.</p>
          <p>Description of Service 4.</p>
          <p>Description of Service 5.</p>
        </div>
      </div>
    </section>

    <!-- Latest Blog Posts Section -->
    <section class=" latest-posts" style="margin: 25px 30px">
      <h2>Latest Blog Posts:</h2>
      <div class="container" style="display: flex; flex-direction: row; gap: 30px;">
        <?php
        // Loop to display latest blog posts
        $args = array(
          'post_type'      => 'post',
          'posts_per_page' => 3,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
            <article style="width: 33%;">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

              <?php if (has_post_thumbnail()) : ?>
                <div>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                  </a>
                </div>
              <?php endif; ?>

              <div><?php the_excerpt(); ?></div>
              <a href="<?php the_permalink(); ?>" style="padding: 10px 35px; background-color:lightgray; border-radius:5px">
                View
              </a>
            </article>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </section>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer(); // footer.php