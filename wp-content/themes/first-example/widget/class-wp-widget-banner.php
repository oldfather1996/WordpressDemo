<?php

class WP_banner extends WP_Widget
{

    function __construct()
    {

        parent::__construct(
            'banner',  // Base ID
            'WP_banner'   // Name
        );

        add_action('widgets_init', function () {
            register_widget('WP_banner');
        });
    }
    public function widget($args, $instance)
    {
        echo '<div class="container__banner--inside row-3 mobile__row-2 mobile__row">';
        echo '<div class="banner__inside--content">';
        echo '<img src="' . $instance['logo'] . '">';
        echo '<p class="text-heading__strength">';
        echo $instance['header_title'];
        echo '</p>';
        echo '<p class="text-desc">';
        echo $instance['description'];
        echo '</p>';
        echo '</div>';
        echo '</div>';
    }

    public function form($instance)
    {

        $logo = !empty($instance['logo']) ? $instance['logo'] : esc_html__('', 'text_domain');
        $header_title = !empty($instance['header_title']) ? $instance['header_title'] : esc_html__('', 'text_domain');
        $description = !empty($instance['description']) ? $instance['description'] : esc_html__('', 'text_domain');
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('logo')); ?>"><?php echo esc_html__('Logo Uri :', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('logo')); ?>" name="<?php echo esc_attr($this->get_field_name('logo')); ?>" placeholder="http://" type="text" value="<?php echo esc_attr($logo); ?>">

        </p>
        <label for="<?php echo esc_attr($this->get_field_id('header_title')); ?>"><?php echo esc_html__('header_title :', 'text_domain'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('header_title')); ?>" name="<?php echo esc_attr($this->get_field_name('header_title')); ?>" type="text" value="<?php echo esc_attr($header_title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php echo esc_html__('description :', 'text_domain'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>" type="text" cols="30" rows="10"><?php echo esc_attr($description); ?></textarea>
        </p>

<?php

    }

    public function update($new_instance, $old_instance)
    {

        $instance = array();

        $instance['logo'] = (!empty($new_instance['logo'])) ? strip_tags($new_instance['logo']) : '';
        $instance['header_title'] = (!empty($new_instance['header_title'])) ? strip_tags($new_instance['header_title']) : '';
        $instance['description'] = (!empty($new_instance['description'])) ? $new_instance['description'] : '';

        return $instance;
    }
}
$WP_banner = new WP_banner();
?>