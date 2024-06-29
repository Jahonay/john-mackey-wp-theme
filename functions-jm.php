<?php
add_action('customize_register', 'my_customize_register');
function my_customize_register($wp_customize)
{


    $wp_customize->add_section('example', array(

        'title' => __('Add Your Logo Name', 'TextDomain'),
        'priority' => 201
    ));

    $wp_customize->add_setting('logo_name');
    $wp_customize->add_control('logo_name', array(
        'id' => 'logo_name',
        'label' => __('Logo Name:', 'TextDomain'),
        'section' => 'example'
    ));
}
