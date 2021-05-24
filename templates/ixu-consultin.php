<?php

/* Template Name: Ixu-blog*/

get_header();

?>

<?php if( have_posts() ): ?>

<div id="page" class="site grid-container container">

    <div id="content" class="site-content">

   	 <?php while( have_posts() ) : the_post(); ?>

   	 <div id="primary" class="content-area">

   		 <main id="main" class="site-main">

   		 <article class="page type-page status-publish">

   			 <div class="inside-article">

   				 <header class="entry-header">
   					 <h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
   				 </header>

   				 <div class="entry-content" itemprop="text">

   					 <?php the_content(); ?>

   				 </div>

   			 </div>

   		 </article>

   		 <?php

   		 $args = array(
   			 'posts_per_page' => -1,
   			 'post_type' => 'services',
   			 'post_status' => 'publish',
   			 'orderby' => 'title',
   			 'order' => 'ASC',
   		 );

   		 $our_services = get_posts( $args );

   		 if( is_array( $our_services ) && !empty( $our_services ) ) {

   			   foreach( $our_services as $postdata ) {

   				 echo '
   				 <h2><a href="'.get_permalink( $postdata->ID ).'">'.$postdata->post_title.'</a></h2>
   				 <p>'.$postdata->post_excerpt.'</p>';

   			   }

   		 }

   		 ?>

   		 </main>

   	 </div>

   	 <?php endwhile; ?>

    </div>

</div>

<?php endif; ?>

<?php get_footer(); ?>






?>
