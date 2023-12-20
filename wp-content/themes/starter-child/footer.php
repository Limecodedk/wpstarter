<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

<footer id="colophon" class="site-footer">
  <div class="site-info">
    <a href="<?php echo esc_url(__('https://limecode.dk/', '_s')); ?>">
      <?php
      /* translators: %s: CMS name, i.e. WordPress. */
      printf(esc_html__('%1$s %2$s %3$s.', '_s'), 'Starter Themes', 'by', 'Emil');
      ?>
    </a>
    <span class="sep"> | </span>
    <?php
    /* translators: 1: Theme name, 2: Theme author. */

    printf(esc_html__('%s', '_s'), 'Copyright 2023 &copy;');

    ?>
  </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>