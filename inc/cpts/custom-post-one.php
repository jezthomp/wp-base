<?php
register_extended_post_type( 'collection', array(

    # Add the post type to the site's main RSS feed:
    'show_in_feed' => true,
    
    'menu_icon' => 'dashicons-format-aside',

    # Show all posts on the post type archive:
    'archive' => array(
        'nopaging' => true
    ),

    # Add some custom columns to the admin screen:
    'admin_cols' => array(

       
        'acf' => array(
        	'title'          => 'Sub Title',
           'meta_key'    => 'sub_title'
        ),
        
        'Mens/Boys' => array(
             'taxonomy' => 'area'
         ),
         
         'Finish' => array(
              'taxonomy' => 'finish'
          ),
         
          'date' => array(
        	'title'          => 'Date',
            'date'       => 'Date',

        )
        
    ),

    # Add a dropdown filter to the admin screen:
    'admin_filters' => array(
        'ens/Boys' => array(
            'taxonomy' => 'area'
        )
    )

), array(

    # Override the base names used for labels:
    'singular' => 'Collection',
    'plural'   => 'Colletions',
    'slug'     => 'collections'

) );



register_extended_taxonomy( 'finish',  array( 

'collection' 

), 
array(

    # Override the base names used for labels:
    'singular' => 'Finish',
    'plural'   => 'Finish',
    'slug'     => 'finish'

) );

?>