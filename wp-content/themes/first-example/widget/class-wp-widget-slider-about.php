<?php

class WP_slider_about extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'slider_about',
            'WP_slider_about'
        );
        add_action('widgets_init', function () {
            register_widget('WP_slider_about');
        });
    }
    public function widget($args, $instance)
    {
        echo '<div class="slider_about__item">';
        echo '<p class="slider_about__text-heading">'.$instance['header_title'] .'</p>';
        echo '<img src="' . $instance['logo'] . '" class="slider_about__img">';
        echo '<p class="slider_about__text-desc">'.$instance['description'].'</p>';
        echo '<p class="slider_about__text-name">'.$instance['text_name'].'</p>';
        echo '<p class="slider_about__text-wish">'.$instance['text_wish'].'</p>';
        echo "</div>";
    }
    public function form($instance)
    {
        $header_title = !empty($instance['header_title']) ? $instance['header_title'] : esc_html__('', 'text_domain');
        $logo = !empty($instance['logo']) ? $instance['logo'] : esc_html__('', 'text_domain');
        $description = !empty($instance['description']) ? $instance['description'] : esc_html__('', 'text_domain');
        $text_name = !empty($instance['text_name']) ? $instance['text_name'] : esc_html__('', 'text_domain');
        $text_wish = !empty($instance['text_wish']) ? $instance['text_wish'] : esc_html__('', 'text_domain');
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('header_title')); ?>"><?php echo esc_html__('Header_title :', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('header_title')); ?>" name="<?php echo esc_attr($this->get_field_name('header_title')); ?>" type="text" value="<?php echo esc_attr($header_title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('logo')); ?>"><?php echo esc_html__('Logo Uri :', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('logo')); ?>" name="<?php echo esc_attr($this->get_field_name('logo')); ?>" placeholder="http://" type="text" value="<?php echo esc_attr($logo); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php echo esc_html__('Description :', 'text_domain'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>" type="text" cols="30" rows="10"><?php echo esc_attr($description); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_name')); ?>"><?php echo esc_html__('Name :', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_name')); ?>" name="<?php echo esc_attr($this->get_field_name('text_name')); ?>" type="text" value="<?php echo esc_attr($text_name); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_wish')); ?>"><?php echo esc_html__('Wish :', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_wish')); ?>" name="<?php echo esc_attr($this->get_field_name('text_wish')); ?>" type="text" value="<?php echo esc_attr($text_wish); ?>">
        </p>
<?php
    }
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['logo'] = (!empty($new_instance['logo'])) ? strip_tags($new_instance['logo']) : '';
        $instance['header_title'] = (!empty($new_instance['header_title'])) ? strip_tags($new_instance['header_title']) : '';
        $instance['description'] = (!empty($new_instance['description'])) ? $new_instance['description'] : '';
        $instance['text_name'] = (!empty($new_instance['text_name'])) ? $new_instance['text_name'] : '';
        $instance['text_wish'] = (!empty($new_instance['text_wish'])) ? $new_instance['text_wish'] : '';
        return $instance;
    }
}
$WP_slider_about = new WP_slider_about();
