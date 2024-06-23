<?php
add_action('customize_register', 'my_customize_register');
function my_customize_register($wp_customize)
{/*
    $wp_customize->add_panel();
    $wp_customize->get_panel();
    $wp_customize->remove_panel();

    $wp_customize->add_section();
    $wp_customize->get_section();
    $wp_customize->remove_section();

    $wp_customize->add_setting();
    $wp_customize->get_setting();
    $wp_customize->remove_setting();

    $wp_customize->add_control();
    $wp_customize->get_control();
    $wp_customize->remove_control();
    */
    $wp_customize->add_section('johnmackey_new_section_name', array(

        'title'      => __('Visible Section Name', 'johnmackey'),

        'priority'   => 30,

    ));

    $wp_customize->add_setting('setting_id', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage 
    ));

    $wp_customize->add_control('setting_id', array(
        'type' => 'date',
        'priority' => 10, // Within the section.
        'section' => 'title_tagline', // Required, core or custom.
        'label' => __('Date'),
        'description' => __('This is a date control with a red border.'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => 'border: 1px solid #900',
            'placeholder' => __('mm/dd/yyyy'),
        ),
    ));
}
