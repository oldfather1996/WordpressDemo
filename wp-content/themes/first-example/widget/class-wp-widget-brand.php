<?php

class WP_brand extends WP_Widget
{

    function __construct()
    {

        parent::__construct(
            'brand',  // Base ID
            'WP_brand'   // Name
        );

        add_action('widgets_init', function () {
            register_widget('WP_brand');
        });
    }
    public function widget($args, $instance)
    {
        echo '<div class="col-sixth">
        <div class="item--inner">';
        echo '<img src="' . $instance['logo'] . '">';
        echo '</div></div>';
    }

    public function form($instance)
    {

        $logo = !empty($instance['logo']) ? $instance['logo'] : esc_html__('', 'text_domain');
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('logo')); ?>"><?php echo esc_html__('Logo Uri :', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('logo')); ?>" name="<?php echo esc_attr($this->get_field_name('logo')); ?>" placeholder="http://" type="text" value="<?php echo esc_attr($logo); ?>">

        </p>
<?php

    }

    public function update($new_instance, $old_instance)
    {

        $instance = array();

        $instance['logo'] = (!empty($new_instance['logo'])) ? strip_tags($new_instance['logo']) : '';

        return $instance;
    }
}
$WP_banner = new WP_brand();
?>