<?php

class WP_slider extends WP_Widget
{

    function __construct()
    {

        parent::__construct(
            'Text-banner',  // Base ID
            'WP_Slider'   // Name
        );

        add_action('widgets_init', function () {
            register_widget('WP_slider');
        });
    }

    public function widget($args, $instance)
    {

        echo $args['before_widget'];
        echo $args['before_container_inner'];
        echo $args['before_inner'];

        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        echo $args['before_sub_title'] . $instance['sub_title'] . $args['after_sub_title'];

        echo '<p class="fs-14">';

        echo esc_html__($instance['text'], 'text_domain');

        echo '</p>';
        echo $args['before_button'];
        echo '<a href="#">';
        echo $instance['button'];
        echo "</a>";
        echo $args['after_button'];
        echo $args['after_inner'];
        echo $args['after_container_inner'];
        echo $args['after_widget'];
    }

    public function form($instance)
    {

        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('', 'text_domain');
        $sub_title = !empty($instance['sub_title']) ? $instance['sub_title'] : esc_html__('', 'text_domain');
        $text = !empty($instance['text']) ? $instance['text'] : esc_html__('', 'text_domain');
        $button = !empty($instance['button']) ? $instance['button'] : esc_html__('', 'text_domain');
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php echo esc_html__('Title :', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <label for="<?php echo esc_attr($this->get_field_id('sub_title')); ?>"><?php echo esc_html__('Sub_title :', 'text_domain'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('sub_title')); ?>" name="<?php echo esc_attr($this->get_field_name('sub_title')); ?>" type="text" value="<?php echo esc_attr($sub_title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('Text')); ?>"><?php echo esc_html__('Text :', 'text_domain'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('text')); ?>" name="<?php echo esc_attr($this->get_field_name('text')); ?>" type="text" cols="30" rows="10"><?php echo esc_attr($text); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('Button')); ?>"><?php echo esc_html__('Button :', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('button')); ?>" name="<?php echo esc_attr($this->get_field_name('button')); ?>" value="<?php echo esc_attr($button); ?>" type="text">
        </p>

<?php

    }

    public function update($new_instance, $old_instance)
    {

        $instance = array();

        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['sub_title'] = (!empty($new_instance['sub_title'])) ? strip_tags($new_instance['sub_title']) : '';
        $instance['text'] = (!empty($new_instance['text'])) ? $new_instance['text'] : '';
        $instance['button'] = (!empty($new_instance['button'])) ? $new_instance['button'] : '';

        return $instance;
    }
}
$wp_slider = new WP_slider();
?>