<?php

function avados_breadcrumbs() {

  $avados_text['home'] = __( 'Home', 'avados' ); 				
  $avados_text['blog'] = __( 'Blog', 'avados' );
  $avados_text['category'] = __( '%s', 'avados' );  
  $avados_text['search'] = __( 'Search results', 'avados' );
  $avados_text['tag'] = __( 'Articles with tags "%s"', 'avados' );
  $avados_text['author'] = __( 'Authors articles %s', 'avados' ); 
  $avados_text['404'] = __( 'Error 404', 'avados' );
  $avados_text['page'] = __( 'Page %s', 'avados' );
  $avados_text['cpage'] = __( 'Comments page %s', 'avados' ); 
  $avados_wrap_before = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">';
  $avados_wrap_before_text = __( '', 'avados' ); //Example - You are here
  $avados_wrap_after = '</div><!-- .breadcrumbs -->'; 
  $avados_sep = '>'; 
  $avados_sep_before = '<span class="sep">'; 
  $avados_sep_after = '</span>'; 
  $avados_show_home_link = 1; 
  $avados_show_on_home = 1;
  $avados_show_current = 1; 
  $avados_before = '<span class="current">'; 
  $avados_after = '</span>'; 
  global $post;
  $avados_home_url = home_url('/');
  $avados_link_before = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
  $avados_link_after = '</span>';
  $avados_link_attr = ' itemprop="item"';
  $avados_link_in_before = '<span itemprop="name">';
  $avados_link_in_after = '</span>';
  $avados_link = $avados_link_before . '<a href="%1$s"' . $avados_link_attr . '>' . $avados_link_in_before . '%2$s' . $avados_link_in_after . '</a>' . $avados_link_after;
  $avados_frontpage_id = get_option('page_on_front');
  $avados_parent_id = ($post) ? $post->post_parent : '';
  $avados_sep = ' ' . $avados_sep_before . $avados_sep . $avados_sep_after . ' ';
  $avados_home_link = $avados_link_before . '<a href="' . $avados_home_url . '"' . $avados_link_attr . ' class="home">' . $avados_link_in_before . $avados_text['home'] . $avados_link_in_after . '</a>' . $avados_link_after;

  if (is_home() || is_front_page()) {

    if ($avados_show_on_home) echo $avados_wrap_before . $avados_wrap_before_text . $avados_home_link . $avados_wrap_after;

  } else {
  
    echo $avados_wrap_before;
    echo $avados_wrap_before_text;
    
    if ($avados_show_home_link) echo $avados_home_link;

    if ( is_category() ) {
      $cat = get_category(get_query_var('cat'), false);
      if ($cat->parent != 0) {
        $cats = get_category_parents($cat->parent, TRUE, $avados_sep);
        $cats = preg_replace("#^(.+)$avados_sep$#", "$1", $cats);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $avados_link_before . '<a$1' . $avados_link_attr .'>' . $avados_link_in_before . '$2' . $avados_link_in_after .'</a>' . $avados_link_after, $cats);
        if ($avados_show_home_link) echo $avados_sep;
        echo $cats;
      }
      if ( get_query_var('paged') ) {
        $cat = $cat->cat_ID;
        echo $avados_sep . sprintf($avados_link, get_category_link($cat), get_cat_name($cat)) . $avados_sep . $avados_before . sprintf($avados_text['page'], get_query_var('paged')) . $avados_after;
      } else {
        if ($avados_show_current) echo $avados_sep . $avados_before . sprintf($avados_text['category'], single_cat_title('', false)) . $avados_after;
      }

    } elseif ( is_search() ) {
      if (have_posts()) {
        if ($avados_show_home_link && $avados_show_current) echo $avados_sep;
        if ($avados_show_current) echo $avados_before . sprintf($avados_text['search'], get_search_query()) . $avados_after;
      } else {
        if ($avados_show_home_link) echo $avados_sep;
        echo $avados_before . sprintf($avados_text['search'], get_search_query()) . $avados_after;
      }

    } elseif ( is_day() ) {
      if ($avados_show_home_link) echo $avados_sep;
      echo sprintf($avados_link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $avados_sep;
      echo sprintf($avados_link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
      if ($avados_show_current) echo $avados_sep . $avados_before . get_the_time('d') . $avados_after;

    } elseif ( is_month() ) {
      if ($avados_show_home_link) echo $avados_sep;
      echo sprintf($avados_link, get_year_link(get_the_time('Y')), get_the_time('Y'));
      if ($avados_show_current) echo $avados_sep . $avados_before . get_the_time('F') . $avados_after;

    } elseif ( is_year() ) {
      if ($avados_show_home_link && $avados_show_current) echo $avados_sep;
      if ($avados_show_current) echo $avados_before . get_the_time('Y') . $avados_after;

    } 
    elseif ( is_single() && !is_attachment() ) {
      if ($avados_show_home_link) echo $avados_sep;
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        printf($avados_link, $avados_home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
        if ($avados_show_current) echo $avados_sep . $avados_before . get_the_title() . $avados_after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, $avados_sep);
        if (!$avados_show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$avados_sep$#", "$1", $cats);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $avados_link_before . '<a$1' . $avados_link_attr .'>' . $avados_link_in_before . '$2' . $avados_link_in_after .'</a>' . $avados_link_after, $cats);
        echo $cats;
        if ( get_query_var('cpage') ) {
          echo $avados_sep . sprintf($avados_link, get_permalink(), get_the_title()) . $avados_sep . $avados_before . sprintf($avados_text['cpage'], get_query_var('cpage')) . $avados_after;
        } else {
          if ($avados_show_current) echo $avados_before . get_the_title() . $avados_after;
        }
      }

    // custom post type
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      if ( get_query_var('paged') ) {
        echo $avados_sep . sprintf($avados_link, get_post_type_archive_link($post_type->name), $post_type->label) . $avados_sep . $avados_before . sprintf($avados_text['page'], get_query_var('paged')) . $avados_after;
      } else {
        if ($avados_show_current) echo $avados_sep . $avados_before . $post_type->label . $avados_after;
      }

    } elseif ( is_attachment() ) {
      if ($avados_show_home_link) echo $avados_sep;
      $parent = get_post($avados_parent_id);
      $cat = get_the_category($parent->ID); 
      $cat = $cat[0];
      if ($cat) {
        $cats = get_category_parents($cat, TRUE, $avados_sep);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $avados_link_before . '<a$1' . $avados_link_attr .'>' . $avados_link_in_before . '$2' . $avados_link_in_after .'</a>' . $avados_link_after, $cats);
        echo $cats;
      }
      printf($avados_link, get_permalink($parent), $parent->post_title);
      if ($avados_show_current) echo $avados_sep . $avados_before . get_the_title() . $avados_after;

    } elseif ( is_page() && !$avados_parent_id ) {
      if ($avados_show_current) echo $avados_sep . $avados_before . get_the_title() . $avados_after;

    } elseif ( is_page() && $avados_parent_id ) {
      if ($avados_show_home_link) echo $avados_sep;
      if ($avados_parent_id != $avados_frontpage_id) {
        $breadcrumbs = array();
        while ($avados_parent_id) {
          $page = get_page($avados_parent_id);
          if ($avados_parent_id != $avados_frontpage_id) {
            $breadcrumbs[] = sprintf($avados_link, get_permalink($page->ID), get_the_title($page->ID));
          }
          $avados_parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        for ($i = 0; $i < count($breadcrumbs); $i++) {
          echo $breadcrumbs[$i];
          if ($i != count($breadcrumbs)-1) echo $avados_sep;
        }
      }
      if ($avados_show_current) echo $avados_sep . $avados_before . get_the_title() . $avados_after;

    } elseif ( is_tag() ) {
      if ( get_query_var('paged') ) {
        $tag_id = get_queried_object_id();
        $tag = get_tag($tag_id);
        echo $avados_sep . sprintf($avados_link, get_tag_link($tag_id), $tag->name) . $avados_sep . $avados_before . sprintf($avados_text['page'], get_query_var('paged')) . $avados_after;
      } else {
        if ($avados_show_current) echo $avados_sep . $avados_before . sprintf($avados_text['tag'], single_tag_title('', false)) . $avados_after;
      }

    } elseif ( is_author() ) {
      global $author;
      $author = get_userdata($author);
      if ( get_query_var('paged') ) {
        if ($avados_show_home_link) echo $avados_sep;
        echo sprintf($avados_link, get_author_posts_url($author->ID), $author->display_name) . $avados_sep . $avados_before . sprintf($avados_text['page'], get_query_var('paged')) . $avados_after;
      } else {
        if ($avados_show_home_link && $avados_show_current) echo $avados_sep;
        if ($avados_show_current) echo $avados_before . sprintf($avados_text['author'], $author->display_name) . $avados_after;
      }

    } elseif ( is_404() ) {
      if ($avados_show_home_link && $avados_show_current) echo $avados_sep;
      if ($avados_show_current) echo $avados_before . $avados_text['404'] . $avados_after;

    } elseif ( has_post_format() && !is_singular() ) {
      if ($avados_show_home_link) echo $avados_sep;
      echo get_post_format_string( get_post_format() );
    }

    echo $avados_wrap_after;

  }
} // end of avados_breadcrumbs()




?>