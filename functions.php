<?php

require 'functions/assets.php';


// Tar bort URL kraven i comments
  function we_unset_url_field( $fields ){

   	 if( isset( $fields[ 'url' ] ) ) {

   		 unset( $fields[ 'url' ] );

   	 }

   	 return $fields;

    }

    add_filter( 'comment_form_default_fields', 'we_unset_url_field' );


	add_filter( 'generate_post_author_output', function( $output ) {    
   	 return 'Detta tas bort';
    } );

    // Change "Built with" text in footer

    add_filter( 'generate_copyright', function( $output ) {    
   	 return 'Ixu Consulting and Computers';
    } );

?>