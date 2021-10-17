<?php

class WP_Footer_Top extends WP_Widget
{

    function __construct()
    {

        parent::__construct(
            'footer_top',  // Base ID
            'WP_Footer_Top'   // Name
        );

        add_action('widgets_init', function () {
            register_widget('WP_Footer_Top');
        });
    }
    public function widget($args, $instance)
    {
        echo '<img src="' . $instance['logo'] . '" class ="footer_header--logo">';
        echo '<p class="footer__header--text-desc">';
        echo $instance['description'];
        echo '</p>';

    }

    public function form($instance)
    {

        $logo = !empty($instance['logo']) ? $instance['logo'] : esc_html__('', 'text_domain');
        $description = !empty($instance['description']) ? $instance['description'] : esc_html__('', 'text_domain');
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('logo')); ?>"><?php echo esc_html__('Logo Uri :', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('logo')); ?>" name="<?php echo esc_attr($this->get_field_name('logo')); ?>" placeholder="http://" type="text" value="<?php echo esc_attr($logo); ?>">

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
        $instance['description'] = (!empty($new_instance['description'])) ? $new_instance['description'] : '';

        return $instance;
    }
}
$WP_banner = new WP_Footer_Top();
?>