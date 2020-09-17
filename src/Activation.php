<?php

namespace EBP_Deliver;

class Activation {

  public function makeDashboardPage() {

    $args = array(
      'name'        => 'dashboard',
      'post_type'   => 'page',
      'post_status' => 'publish',
      'numberposts' => 1
    );
    $posts = get_posts( $args );
    if( !empty( $posts )) {
      return; // found existing dashboard page
    }

    $args = array(
      'post_title'    => 'Dashboard',
      'post_content'  => '',
      'post_status'   => 'publish',
      'post_author'   => 1,
      'post_type'     => 'page'
    );
    wp_insert_post( $args );

  }


}
