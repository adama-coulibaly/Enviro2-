<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('nonprofit-organization-footer-sidebar')) {
        echo '<div class="row sidebar-area footer-area">';
          dynamic_sidebar('nonprofit-organization-footer-sidebar');
        echo '</div>';
      }
    ?>
    <div class="row">
      <div class="col-md-12">
        <p class="mb-0 py-3 text-center text-md-left">
          <?php
            if (!get_theme_mod('nonprofit_organization_footer_text') ) { ?>
                <a href="<?php echo esc_url(__('https://www.misbahwp.com/themes/free-nonprofit-wordpress-theme/', 'nonprofit-organization' )); ?>" target="_blank">
              <?php esc_html_e('Nonprofit Organization WordPress Theme','nonprofit-organization'); ?></a>
            <?php } else {
              echo esc_html(get_theme_mod('nonprofit_organization_footer_text'));
            }
          ?>
          <?php if ( get_theme_mod('nonprofit_organization_copyright_enable', true) == true ) : ?>
            <?php
            /* translators: %s: Misbah WP */
            printf( esc_html__( 'by %s', 'nonprofit-organization' ), 'Misbah WP' ); ?>
            <a href="<?php echo esc_url(__('https://wordpress.org', 'nonprofit-organization' )); ?>" rel="generator"><?php  /* translators: %s: WordPress */  printf( esc_html__( ' | Proudly powered by %s', 'nonprofit-organization' ), 'WordPress' ); ?></a>
          <?php endif; ?>
        </p>
      </div>
    </div>
    <?php if ( get_theme_mod('nonprofit_organization_scroll_enable_setting')) : ?>
      <div class="scroll-up">
        <a href="#tobottom"><i class="fa fa-arrow-up"></i></a>
      </div>
    <?php endif; ?>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
