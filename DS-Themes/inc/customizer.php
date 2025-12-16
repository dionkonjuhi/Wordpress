<?php

function wpdevs_customizer($wp_customize){
  $wp_customize->add_section(
    'sec_copyright',
    array(
        'title'=> 'Copyright Settings',
        'description' => 'Copyright Settings'
    )
    );
         $wp_customize->add_setting(
            'set_copyright',
            array(
                'type' => 'theme_mod',
                'default' => 'Copyrigt X - All Rights Reserved',
                'sanitize_callback' => 'sanitaze_text_filed'
            )
        );

        $wp_customize ->add_controll(
            'set_copyright',
            array(
                'label' => 'Copyright Information',
                'description' => 'Please type your copyright here',
                'section' => 'sec_copyright',
                'type' => 'text'
            )
        );
}
add_action('customize_register' , 'wpdevs_customizer');
?>