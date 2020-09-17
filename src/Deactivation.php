<?php

namespace EBP_Deliver;

class Deactivation {

  public function removeDashboardPage() {

    $args = array(
      'name'        => 'dashboard',
      'post_type'   => 'page',
      'post_status' => 'publish',
      'numberposts' => 1
    );
    $posts = get_posts( $args );

    if( empty( $posts )) {
      return;
    }

    wp_delete_post( $posts[0]->ID );

  }

}
