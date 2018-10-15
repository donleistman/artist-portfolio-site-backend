<?php

// GOT THIS ONLINE TO SHOW ACF FIELDS -- MAY NOT ACTUALLY BE NECESSARY

$post_type = "painting";

function my_rest_prepare_post($data, $post, $request) {
    $_data = $data->data;

    $fields = get_fields($post->ID);

    foreach ($fields as $key => $value){
        $_data[$key] = get_field($key, $post->ID);
    }

    $data->data = $_data;
    return $data;
}

add_filter("rest_prepare_{$post_type}", 'my_rest_prepare_post', 10, 3);

//// END CODE FROM ONLINE FOR ACF FIELDS

/*
 * Add columns to writing post list
 */
function add_acf_columns ( $columns ) {
  return array_merge ( $columns, array (
    'display_text' => __ ( 'Text' ),
    'pub_date'   => __ ( 'Publication Date' )
  ) );
}
add_filter ( 'manage_writing_posts_columns', 'add_acf_columns' );

/*
 * Add columns to writing post list
 */
function writing_custom_column ( $column, $post_id ) {
  switch ( $column ) {
    case 'display_text':
      echo get_post_meta ( $post_id, 'display_text', true );
      break;
    case 'pub_date':
      echo get_post_meta ( $post_id, 'pub_date', true );
      break;
  }
}
add_action ( 'manage_writing_posts_custom_column', 'writing_custom_column', 10, 2 );


?>
