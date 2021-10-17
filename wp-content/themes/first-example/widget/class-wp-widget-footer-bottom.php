<?php

class WP_Footer_Bottom extends WP_Widget
{

    function __construct()
    {

        parent::__construct(
            'footer_bottom',  // Base ID
            'WP_Footer_Bottom'   // Name
        );

        add_action('widgets_init', function () {
            register_widget('WP_Footer_Bottom');
        });
    }
    public function widget($args, $instance)
    {   
        echo '<div class="col-fourth mobile__row-2">';
        echo '<div class="col-inner">';
        echo '<p class="footer__bottom--header-text">';
        echo $instance['text_header'];
        echo '</p>';

        echo '<a href ="#"><p class="footer__bottom--info-text">';
        echo $instance['text_1'];
        echo '</p>';
        echo '</a>';
        echo '<a href ="#"><p class="footer__bottom--info-text">';
        echo $instance['text_2'];
        echo '</p>';
        echo '</a>';
        echo '<a href ="#"><p class="footer__bottom--info-text">';
        echo $instance['text_3'];
        echo '</p>';
        echo '</a>';
        echo '<a href ="#"><p class="footer__bottom--info-text">';
        echo $instance['text_4'];
        echo '</p>';
        echo '</a>';
        echo '</div> </div>';
    }

    public function form($instance)
    {

        $text_header = !empty($instance['text_header']) ? $instance['text_header'] : esc_html__('', 'text_domain');
        $text_1 = !empty($instance['text_1']) ? $instance['text_1'] : esc_html__('', 'text_domain');
        $text_2 = !empty($instance['text_2']) ? $instance['text_2'] : esc_html__('', 'text_domain');
        $text_3 = !empty($instance['text_3']) ? $instance['text_3'] : esc_html__('', 'text_domain');
        $text_4 = !empty($instance['text_4']) ? $instance['text_4'] : esc_html__('', 'text_domain');
?>
      
        </p>
        <label for="<?php echo esc_attr($this->get_field_id('text_header')); ?>"><?php echo esc_html__('text_header :', 'text_domain'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_header')); ?>" name="<?php echo esc_attr($this->get_field_name('text_header')); ?>" type="text" value="<?php echo esc_attr($text_header); ?>">
        </p>
        </p>
        <label for="<?php echo esc_attr($this->get_field_id('text_1')); ?>"><?php echo esc_html__('text_1 :', 'text_domain'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_1')); ?>" name="<?php echo esc_attr($this->get_field_name('text_1')); ?>" type="text" value="<?php echo esc_attr($text_1); ?>">
        </p>
        </p>
        <label for="<?php echo esc_attr($this->get_field_id('text_2')); ?>"><?php echo esc_html__('text_2 :', 'text_domain'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_2')); ?>" name="<?php echo esc_attr($this->get_field_name('text_2')); ?>" type="text" value="<?php echo esc_attr($text_2); ?>">
        </p>
        </p>
        <label for="<?php echo esc_attr($this->get_field_id('text_3')); ?>"><?php echo esc_html__('text_3 :', 'text_domain'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_3')); ?>" name="<?php echo esc_attr($this->get_field_name('text_3')); ?>" type="text" value="<?php echo esc_attr($text_3); ?>">
        </p>
        </p>
        <label for="<?php echo esc_attr($this->get_field_id('text_4')); ?>"><?php echo esc_html__('text_4 :', 'text_domain'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_4')); ?>" name="<?php echo esc_attr($this->get_field_name('text_4')); ?>" type="text" value="<?php echo esc_attr($text_4); ?>">
        </p>
<?php

    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['text_header'] = (!empty($new_instance['text_header'])) ? strip_tags($new_instance['text_header']) : '';
        $instance['text_1'] = (!empty($new_instance['text_1'])) ? $new_instance['text_1'] : '';
        $instance['text_2'] = (!empty($new_instance['text_2'])) ? $new_instance['text_2'] : '';
        $instance['text_3'] = (!empty($new_instance['text_3'])) ? $new_instance['text_3'] : '';
        $instance['text_4'] = (!empty($new_instance['text_4'])) ? $new_instance['text_4'] : '';
        return $instance;
    }
}
$WP_banner = new WP_Footer_Bottom();
?>