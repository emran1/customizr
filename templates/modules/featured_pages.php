<div class="container marketing" <?php tc_echo('element_attributes') ?>>
  <?php 
    foreach ( tc_get( 'featured_pages' ) as $index => $featured_page ) {
      do_action( 'in_featured_pages_' . tc_get( 'id' ), $index, $featured_page );
      do_action( '__featured_page__' );
    }
  ?>
</div>
<hr class="featurette-divider <?php tc_echo( 'hook' ) ?>">
