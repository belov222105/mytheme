<?php

class avados_time_work extends WP_Widget {
   function avados_time_work() {
           parent::
	   __construct
	   (false, $widget_name = __('Avados Time Work', 'avados') );
       }
            function form($instance) {
            if( $instance) {
                $text_title = esc_attr($instance['text_title']);
                $text1 = esc_attr($instance['text1']);
                $text2 = esc_attr($instance['text2']);
                $text3 = esc_attr($instance['text3']);
                $text4 = esc_attr($instance['text4']);
                $text5 = esc_attr($instance['text5']);
                $text6 = esc_attr($instance['text6']);
                $text7 = esc_attr($instance['text7']);
                $textarea1 = esc_textarea($instance['textarea1']);
                $textarea2 = esc_textarea($instance['textarea2']);
                $textarea3 = esc_textarea($instance['textarea3']);
                $textarea4 = esc_textarea($instance['textarea4']);
                $textarea5 = esc_textarea($instance['textarea5']);
                $textarea6 = esc_textarea($instance['textarea6']);
                $textarea7 = esc_textarea($instance['textarea7']);
            } else {
                $text_title = '';
                $text1 = '';
                $text2 = '';
                $text3 = '';
                $text4 = '';
                $text5 = '';
                $text6 = '';
                $text7 = '';
                $textarea1 = '';
                $textarea2 = '';
                $textarea3 = '';
                $textarea4 = '';
                $textarea5 = '';
                $textarea6 = '';
                $textarea7 = '';
            }
            ?>
   <!-- This is the HTML form which appear in the widget  area -->
   
   
   
   <p>
	 <label for="<?php echo $this->get_field_id('text_title'); ?>"><?php esc_html_e('Widget Title', 'avados'); ?></label>
	   <input class="widefat" id="<?php echo $this->get_field_id('text_title'); ?>" name="<?php echo $this->get_field_name('text_title'); ?>" type="text" value="<?php echo $text_title; ?>" /></p>
   
   
   <p>
   <label for="<?php echo $this->get_field_id('text1'); ?>"><?php esc_html_e('Example: Monday', 'avados'); ?></label>
   <input class="widefat" id="<?php echo $this->get_field_id('text1'); ?>" name="<?php echo $this->get_field_name('text1'); ?>" type="text" value="<?php echo $text1; ?>" />
   </p>
   
    
   <p>
   <label for="<?php echo $this->get_field_id('textarea1'); ?>"><?php esc_html_e('Example: 7:30am - 5:30pm', 'avados'); ?></label>
   <textarea class="widefat" id="<?php echo $this->get_field_id('textarea1'); ?>" name="<?php echo $this->get_field_name('textarea1'); ?>"><?php echo $textarea1; ?></textarea>
   </p>
   
 
   
    <p>
   <label for="<?php echo $this->get_field_id('text2'); ?>"><?php esc_html_e('Example: Tuesday', 'avados'); ?></label>
   <input class="widefat" id="<?php echo $this->get_field_id('text2'); ?>" name="<?php echo $this->get_field_name('text2'); ?>" type="text" value="<?php echo $text2; ?>" />
   </p>
   
    <p>
   <label for="<?php echo $this->get_field_id('textarea2'); ?>"><?php esc_html_e('Example: 7:30am - 3:00pm', 'avados'); ?></label>
   <textarea class="widefat" id="<?php echo $this->get_field_id('textarea2'); ?>" name="<?php echo $this->get_field_name('textarea2'); ?>"><?php echo $textarea2; ?></textarea>
   </p>
   
   
  
    <p>
   <label for="<?php echo $this->get_field_id('text3'); ?>"><?php esc_html_e('Example: Wednesday', 'avados'); ?></label>
   <input class="widefat" id="<?php echo $this->get_field_id('text3'); ?>" name="<?php echo $this->get_field_name('text3'); ?>" type="text" value="<?php echo $text3; ?>" />
   </p>
   
    <p>
   <label for="<?php echo $this->get_field_id('textarea3'); ?>"><?php esc_html_e('Example: 7:30am - 3:00pm', 'avados'); ?></label>
   <textarea class="widefat" id="<?php echo $this->get_field_id('textarea3'); ?>" name="<?php echo $this->get_field_name('textarea3'); ?>"><?php echo $textarea3; ?></textarea>
   </p>
   
   
   
   
   
   
      <p>
   <label for="<?php echo $this->get_field_id('text4'); ?>"><?php esc_html_e('Example: Thursday', 'avados'); ?></label>
   <input class="widefat" id="<?php echo $this->get_field_id('text4'); ?>" name="<?php echo $this->get_field_name('text4'); ?>" type="text" value="<?php echo $text4; ?>" />
   </p>
   
    <p>
   <label for="<?php echo $this->get_field_id('textarea4'); ?>"><?php esc_html_e('Example: 7:30am - 3:00pm', 'avados'); ?></label>
   <textarea class="widefat" id="<?php echo $this->get_field_id('textarea4'); ?>" name="<?php echo $this->get_field_name('textarea4'); ?>"><?php echo $textarea4; ?></textarea>
   </p>
   
   
   
   
   
   
      <p>
   <label for="<?php echo $this->get_field_id('text5'); ?>"><?php esc_html_e('Example: Friday', 'avados'); ?></label>
   <input class="widefat" id="<?php echo $this->get_field_id('text5'); ?>" name="<?php echo $this->get_field_name('text5'); ?>" type="text" value="<?php echo $text5; ?>" />
   </p>
   
    <p>
   <label for="<?php echo $this->get_field_id('textarea5'); ?>"><?php esc_html_e('Example: 7:30am - 3:00pm', 'avados'); ?></label>
   <textarea class="widefat" id="<?php echo $this->get_field_id('textarea5'); ?>" name="<?php echo $this->get_field_name('textarea5'); ?>"><?php echo $textarea5; ?></textarea>
   </p>
   
   
   
   
   
      <p>
   <label for="<?php echo $this->get_field_id('text6'); ?>"><?php esc_html_e('Example: Saturday', 'avados'); ?></label>
   <input class="widefat" id="<?php echo $this->get_field_id('text6'); ?>" name="<?php echo $this->get_field_name('text6'); ?>" type="text" value="<?php echo $text6; ?>" />
   </p>
   
    <p>
   <label for="<?php echo $this->get_field_id('textarea6'); ?>"><?php esc_html_e('Example: Close', 'avados'); ?></label>
   <textarea class="widefat" id="<?php echo $this->get_field_id('textarea6'); ?>" name="<?php echo $this->get_field_name('textarea6'); ?>"><?php echo $textarea6; ?></textarea>
   </p>
   
   
   
   
      <p>
   <label for="<?php echo $this->get_field_id('text7'); ?>"><?php esc_html_e('Example: Sunday', 'avados'); ?></label>
   <input class="widefat" id="<?php echo $this->get_field_id('text7'); ?>" name="<?php echo $this->get_field_name('text7'); ?>" type="text" value="<?php echo $text7; ?>" />
   </p>
   
    <p>
   <label for="<?php echo $this->get_field_id('textarea7'); ?>"><?php esc_html_e('Example: Close', 'avados'); ?></label>
   <textarea class="widefat" id="<?php echo $this->get_field_id('textarea7'); ?>" name="<?php echo $this->get_field_name('textarea7'); ?>"><?php echo $textarea7; ?></textarea>
   </p>
   
   
   
   
<?php 
            }
            // Update function update the insert value in input field in DB
            function update($new_instance, $old_instance) {
            $instance = $old_instance;
             // Fields which use to insert data in DB
             

             $instance['text_title'] = strip_tags($new_instance['text_title']); 
            
             $instance['text1'] = strip_tags($new_instance['text1']);             
             $instance['textarea1'] = strip_tags($new_instance['textarea1']);
             
             $instance['textarea2'] = strip_tags($new_instance['textarea2']);
             $instance['text2'] = strip_tags($new_instance['text2']);
             
             $instance['textarea3'] = strip_tags($new_instance['textarea3']);
             $instance['text3'] = strip_tags($new_instance['text3']);
             
             $instance['textarea4'] = strip_tags($new_instance['textarea4']);
             $instance['text4'] = strip_tags($new_instance['text4']);
             
             $instance['textarea5'] = strip_tags($new_instance['textarea5']);
             $instance['text5'] = strip_tags($new_instance['text5']);
             
             $instance['textarea6'] = strip_tags($new_instance['textarea6']);
             $instance['text6'] = strip_tags($new_instance['text6']);
             
             $instance['textarea7'] = strip_tags($new_instance['textarea7']);
             $instance['text7'] = strip_tags($new_instance['text7']);
             
            return $instance;
            }
            // display widget value
            function widget($args, $instance) {
       extract( $args );
       
       
          $text_title = $instance['text_title'];   

          $text1 = $instance['text1'];         
          $textarea1 = $instance['textarea1'];
          
          $text2 = $instance['text2'];
          $textarea2 = $instance['textarea2'];

          $text3 = $instance['text3'];
          $textarea3 = $instance['textarea3'];
          
          $text4 = $instance['text4'];
          $textarea4 = $instance['textarea4'];
                   
          $text5 = $instance['text5'];
          $textarea5 = $instance['textarea5'];
          
          $text6 = $instance['text6'];
          $textarea6 = $instance['textarea6'];
          
          $text7 = $instance['text7'];
          $textarea7 = $instance['textarea7'];
          
          
          echo $before_widget;
          
          
          echo '<div class="week-day">';
       
          // Conditional check 1
           if( $text_title ) {
             echo '<h4 class="widget-title">'.$text_title.'</h4>';
          }
          
          
          if( $text1 ) {
             echo '<div class="col-2 avados-week-day"><p>'.$text1.'</p></div>';
          }
           if( $textarea1 ) {
            echo '<div class="col-2"><p>'.$textarea1.'</p></div>';
          }
          
           echo '';
           
           
          // Conditional check
           if( $text2 ) {
             echo '<div class="col-2 avados-week-day"><p>'.$text2.'</p></div>';
          }
           if( $textarea2 ) {
            echo '<div class="col-2"><p>'.$textarea2.'</p></div>';
          }
          
           echo '';
          
           // Conditional check
           if( $text3 ) {
             echo '<div class="col-2 avados-week-day"><p>'.$text3.'</p></div>';
          }
           if( $textarea3 ) {
            echo '<div class="col-2"><p>'.$textarea3.'</p></div>';
          }
          
           echo '';
           
           // Conditional check
           if( $text4 ) {
             echo '<div class="col-2 avados-week-day"><p>'.$text4.'</p></div>';
          }
           if( $textarea4 ) {
            echo '<div class="col-2"><p>'.$textarea4.'</p></div>';
          }
          
           echo '';
          
           // Conditional check
           if( $text5 ) {
             echo '<div class="col-2 avados-week-day"><p>'.$text5.'</p></div>';
          }
           if( $textarea5 ) {
            echo '<div class="col-2"><p>'.$textarea5.'</p></div>';
          }
          
           echo '';
          
          
           // Conditional check
           if( $text6 ) {
             echo '<div class="col-2 avados-week-day"><p>'.$text6.'</p></div>';
          }
           if( $textarea6 ) {
            echo '<div class="col-2"><p>'.$textarea6.'</p></div>';
          }
          
          echo '';
          
           // Conditional check
           if( $text7 ) {
             echo '<div class="col-2 avados-week-day"><p>'.$text7.'</p></div>';
          }
           if( $textarea7 ) {
            echo '<div class="col-2"><p>'.$textarea7.'</p></div>';
          }
        
           echo '</div>';
          echo $after_widget;
            }
}
// register widget
add_action('widgets_init', create_function('', 'return register_widget("avados_time_work");'));











/**
 * Adds Avados_Social_Profile widget.
 */
class Avados_Social_Profile extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
                'Avados_Social_Profile',
                __('Avados Social Networks Profiles', 'avados'), // Name
                array('description' => __('Links to Author social media profile', 'avados'),)
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {

        $title = apply_filters('widget_title', $instance['title']);
        $facebook = $instance['facebook'];
        $twitter = $instance['twitter'];
        $google = $instance['google'];
        $linkedin = $instance['linkedin'];

        // social profile link
        $facebook_profile = '<a class="facebook" href="' . $facebook . '"><i class="fa fa-facebook"></i></a>';
        $twitter_profile = '<a class="twitter" href="' . $twitter . '"><i class="fa fa-twitter"></i></a>';
        $google_profile = '<a class="google" href="' . $google . '"><i class="fa fa-google-plus"></i></a>';
        $linkedin_profile = '<a class="linkedin" href="' . $linkedin . '"><i class="fa fa-linkedin"></i></a>';

        echo $args['before_widget'];

        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        echo '<div class="avados-social-icons">';
        echo (!empty($facebook) ) ? $facebook_profile : null;
        echo (!empty($twitter) ) ? $twitter_profile : null;
        echo (!empty($google) ) ? $google_profile : null;
        echo (!empty($linkedin) ) ? $linkedin_profile : null;
        echo '</div>';

        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) {
        isset($instance['title']) ? $title = $instance['title'] : null;
        empty($instance['title']) ? $title = '' : null;

        isset($instance['facebook']) ? $facebook = $instance['facebook'] : null;
        isset($instance['twitter']) ? $twitter = $instance['twitter'] : null;
        isset($instance['google']) ? $google = $instance['google'] : null;
        isset($instance['linkedin']) ? $linkedin = $instance['linkedin'] : null;
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title:', 'avados'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php esc_html_e('Facebook:', 'avados'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php esc_html_e('Twitter:', 'avados'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('google'); ?>"><?php esc_html_e('Google+:', 'avados'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('google'); ?>" name="<?php echo $this->get_field_name('google'); ?>" type="text" value="<?php echo esc_attr($google); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php esc_html_e('Linkedin:', 'avados'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>">
        </p>

        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        $instance['facebook'] = (!empty($new_instance['facebook']) ) ? strip_tags($new_instance['facebook']) : '';
        $instance['twitter'] = (!empty($new_instance['twitter']) ) ? strip_tags($new_instance['twitter']) : '';
        $instance['google'] = (!empty($new_instance['google']) ) ? strip_tags($new_instance['google']) : '';
        $instance['linkedin'] = (!empty($new_instance['linkedin']) ) ? strip_tags($new_instance['linkedin']) : '';

        return $instance;
    }

}

// register Avados_Social_Profile widget
function register_avados_social_profile() {
    register_widget('Avados_Social_Profile');
}

add_action('widgets_init', 'register_avados_social_profile');

// enqueue css stylesheet
function avados_social_profile_widget_css() {
    wp_enqueue_style('avados-social-profile-widget', get_theme_file_uri( '/css/avados-social-icon.css' )); 

}

add_action('wp_enqueue_scripts', 'avados_social_profile_widget_css');










if (!class_exists('avados_popular_post')) {
	
class avados_popular_post extends WP_Widget {

	// constructor
	function __construct() {
		parent::__construct(false, $name = __('Avados - Popular Post', 'avados'));
	}

	// widget form creation
	function form($instance) {	
	// Check values
	
		if($instance) {
			 $title    = esc_attr($instance['title']);
	
		} else {
			 $title    = 'Popular Post';		
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title', 'avados'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
       
       
		<?php
	}

	// widget update
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title']    = strip_tags($new_instance['title']);
	
	}

	// widget display
	function widget($args, $instance) {
		$title    = apply_filters('widget_title', $instance['title']);
	
		
		echo '<div class="widget avados_sidebar_widget widget-post-like">';	 
		echo '<h4 class="widget-title">Popular Post'. $title .'</h4>';
		?>
		

		<ol id="popular-posts">
<?php
$pp = new WP_Query('orderby=comment_count&posts_per_page=2'); ?>
<?php while ($pp->have_posts()) : $pp->the_post(); ?>
<li>


<a class="popular-post-image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

<div class="popular-post-overlay color-bg">+</div>

<?php if ( has_post_thumbnail() ) {
the_post_thumbnail('thumbnail');
} else { ?>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/placeholder.jpg" alt="" />

<?php } ?>

</a>

<div class="popular-post-right">
<a class="popular-post-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>

<div class="popular-post-view"><i class="fa fa-eye" aria-hidden="true"></i><?php echo getPostViews(get_the_ID()); ?></div>


</div>


</li>

<?php endwhile; ?>
</ol>


<?php
		
		echo '</div>';
	}
	
}
add_action('widgets_init', create_function('', 'return register_widget("avados_popular_post");'));

}


// enqueue css stylesheet
function avados_popular_post_widget_css() {
    wp_enqueue_style('avados-popular-post-widget', get_theme_file_uri( '/css/avados-popular-post.css' )); 

}

add_action('wp_enqueue_scripts', 'avados_popular_post_widget_css');

















/**
 * Adds avados_contact_widget widget.
 */
class avados_contact_widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
                'avados_contact_widget',
                __('Avados Contact Widget', 'avados'), // Name
                array('description' => __('Links to contact information', 'avados'),)
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {

        $title = apply_filters('widget_title', $instance['title']);
        
        $adress = $instance['adress'];
        $email = $instance['email'];
        
        $phone = $instance['phone'];
        $skype = $instance['skype'];
        
        $telegram = $instance['telegram'];
        $whatsapp = $instance['whatsapp'];
        
        

        // social profile link
        
       
         


        $adress_p = '<div class="avados-contact-widget-row flearfix"><i class="fa fa-home" aria-hidden="true"></i><p>' . $adress . '</p></div>';
        $email_p = '<div class="avados-contact-widget-row flearfix"><i class="fa fa-envelope" aria-hidden="true"></i><p> ' . $email . '</p></div>';
        
        
        
        $phone_p = '<div class="avados-contact-widget-row flearfix"><i class="fa fa-skype" aria-hidden="true"></i><p>' . $phone . '</p></div>';
        $skype_p = '<div class="avados-contact-widget-row flearfix"><i class="fa fa-phone" aria-hidden="true"></i><p>' . $skype . '</p></div>';       
        

        $telegram_p = '<div class="avados-contact-widget-row flearfix"><i class="fa fa-telegram" aria-hidden="true"></i><p>' . $telegram . '</p></div>';
        $whatsapp_p = '<div class="avados-contact-widget-row flearfix"><i class="fa fa-whatsapp" aria-hidden="true"></i><p>' . $whatsapp . '</p></div>';   
        
              
        echo $args['before_widget'];

        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        echo '<div class="avados-contact-widget">';
        echo (!empty($adress) ) ? $adress_p : null;
        echo (!empty($email) ) ? $email_p : null;
        
        echo (!empty($phone) ) ? $phone_p : null;
        echo (!empty($skype) ) ? $skype_p : null;

        echo (!empty($telegram) ) ? $telegram_p : null;
        echo (!empty($whatsapp) ) ? $whatsapp_p : null;
        
        echo '</div>';

        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) {
        isset($instance['title']) ? $title = $instance['title'] : null;
        empty($instance['title']) ? $title = '' : null;

        isset($instance['adress']) ? $adress = $instance['adress'] : null;
        isset($instance['email']) ? $email = $instance['email'] : null;
        
        isset($instance['phone']) ? $phone = $instance['phone'] : null;
        isset($instance['skype']) ? $skype = $instance['skype'] : null;
        
        isset($instance['telegram']) ? $telegram = $instance['telegram'] : null;
        isset($instance['whatsapp']) ? $whatsapp = $instance['whatsapp'] : null;
        
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title:', 'avados'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('adress'); ?>"><?php esc_html_e('Adress:', 'avados'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('adress'); ?>" name="<?php echo $this->get_field_name('adress'); ?>" type="text" value="<?php echo esc_attr($adress); ?>">
        </p>
		 <p>
            <label for="<?php echo $this->get_field_id('email'); ?>"><?php esc_html_e('email:', 'avados'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo esc_attr($email); ?>">
        </p>
        
        
         <p>
            <label for="<?php echo $this->get_field_id('phone'); ?>"><?php esc_html_e('phone:', 'avados'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo esc_attr($phone); ?>">
        </p>
         <p>
            <label for="<?php echo $this->get_field_id('skype'); ?>"><?php esc_html_e('skype:', 'avados'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('skype'); ?>" name="<?php echo $this->get_field_name('skype'); ?>" type="text" value="<?php echo esc_attr($skype); ?>">
        </p>
        
        
        
         <p>
            <label for="<?php echo $this->get_field_id('telegram'); ?>"><?php esc_html_e('telegram:', 'avados'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('telegram'); ?>" name="<?php echo $this->get_field_name('telegram'); ?>" type="text" value="<?php echo esc_attr($telegram); ?>">
        </p>
         <p>
            <label for="<?php echo $this->get_field_id('whatsapp'); ?>"><?php esc_html_e('whatsapp:', 'avados'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('whatsapp'); ?>" name="<?php echo $this->get_field_name('whatsapp'); ?>" type="text" value="<?php echo esc_attr($whatsapp); ?>">
        </p>
       
       

        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        
        $instance['adress'] = (!empty($new_instance['adress']) ) ? strip_tags($new_instance['adress']) : '';
        $instance['email'] = (!empty($new_instance['email']) ) ? strip_tags($new_instance['email']) : '';
        
        $instance['phone'] = (!empty($new_instance['phone']) ) ? strip_tags($new_instance['phone']) : '';
        $instance['skype'] = (!empty($new_instance['skype']) ) ? strip_tags($new_instance['skype']) : '';

        $instance['telegram'] = (!empty($new_instance['telegram']) ) ? strip_tags($new_instance['telegram']) : '';
        $instance['whatsapp'] = (!empty($new_instance['whatsapp']) ) ? strip_tags($new_instance['whatsapp']) : '';
        
        return $instance;
    }

}

// register avados_contact_widget widget
function register_avados_contact_widget() {
    register_widget('avados_contact_widget');
}

add_action('widgets_init', 'register_avados_contact_widget');

// enqueue css stylesheet
function avados_contact_widget_widget_css() {
    wp_enqueue_style('avados-contact-widget', get_theme_file_uri( '/css/widget/avados-contact-widget.css' )); 

}

add_action('wp_enqueue_scripts', 'avados_contact_widget_widget_css');








?>