<?php 

function display_menu($location)
{
    if ( isset( get_nav_menu_locations()[$location] ) )
    {
        wp_nav_menu( 
            array( 
            'theme_location' => $location, 
            'container_class' => 'main-menu' 
            )
        ); 
    }
}

function display_pagination($className = 'pagination')
{
    global $wp_query;
    $allPages = $wp_query->max_num_pages;

    if( $allPages > 0 )
    {

        $currentPage = max(1,get_query_var('paged'));
        $args = array(
            'base'          => get_pagenum_link(1).'%_%',
            'current'       => $currentPage,
            'prev_next'     => true,
            'prev_text'     => '&lt;',
            'next_text'     => '&gt;',
            'total'         =>  $allPages
        );

        echo `<div class="${className}">` . paginate_links($args) . `</div>`;
    }
}