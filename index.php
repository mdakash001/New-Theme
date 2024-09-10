<?php 
get_header(); 

global $wpdb;


$results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}posts WHERE post_type = 'post' AND  post_status= 'publish'", OBJECT );

// foreach($results as $post){
//     // echo '<pre>';
//     // print_r($post->post_title);
//     // echo '</pre>';
//     echo "<h1>$post->post_title</h1>";
// }
// home work qeury with this data while loop 

while(have_posts()) :  the_post();
    
  the_title('<h2><a class="readmore" href="'.get_the_permalink().'">', '</a></h2>');
  if(is_single()){
    the_content();
  }else{
    the_excerpt();
  }

  ?>
  <a href="<?php the_permalink(); ?>"></a>
  <?php 
  the_posts_pagination();
endwhile;


get_footer();