<?php /* Call to action at bottom of page */
/* first add widget area */
function reach_widgets_init() {
  register_sidebar(
        array(
         'name' => __( 'Bottom Call to Action ', 'be-themes' ),
         'id'   => 'reach-bottom-cta',
         'description'   => __( 'Widget area (above footer)', 'be-themes' ),
         'before_widget' => '<div class="%2$s widget">',
         'after_widget'  => '</div>',
         'before_title'  => '<h6>',
         'after_title'   => '</h6>',
      )
  );
}
add_action( 'widgets_init', 'reach_widgets_init' );
