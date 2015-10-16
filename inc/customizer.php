<?php
/**
 * Create the customizer panels and sections
 */
function brasa_kirki_add_panel( $wp_customize ) {
    /**
     * Add sections
     */
    $wp_customize->add_section( 'biblioteca_footer', array(
        'title'       => __( 'Seção Nossa Biblioteca', 'ibap-theme' ),
        'priority'    => 10,
    ) );
}
add_action( 'customize_register', 'brasa_kirki_add_panel' );
/**
 * Create the setting
 */
function brasa_kirki_fields( $fields ) {
    $fields[] = array(
        'type'     => 'text',
        'setting'  => 'biblioteca_footer_title',
        'label'    => __( 'Título da Seção', 'ibap-theme' ),
        'section'  => 'biblioteca_footer',
        'default'  => '',
        'priority' => 1,
    );
    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'biblioteca_footer_description',
        'label'    => __( 'Descrição da Seção', 'ibap-theme' ),
        'section'  => 'biblioteca_footer',
        'default'  => '',
        'priority' => 2,
    );
    $fields[] = array(
        'type'     => 'text',
        'setting'  => 'biblioteca_footer_title_1',
        'label'    => __( 'Título do primeiro link', 'ibap-theme' ),
        'section'  => 'biblioteca_footer',
        'default'  => '',
        'priority' => 3,
    );
    $fields[] = array(
        'type'     => 'image',
        'setting'  => 'biblioteca_footer_title_img_1',
        'label'    => __( 'Icone do primeiro link', 'ibap-theme' ),
        'section'  => 'biblioteca_footer',
        'default'  => '',
        'priority' => 4,
    );
    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'biblioteca_footer_description_1',
        'label'    => __( 'Descrição do primeiro link', 'ibap-theme' ),
        'section'  => 'biblioteca_footer',
        'default'  => '',
        'priority' => 5,
    );
    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'biblioteca_footer_link_1',
        'label'    => __( 'URL do primeiro link', 'ibap-theme' ),
        'section'  => 'biblioteca_footer',
        'default'  => '',
        'priority' => 6,
    );
    return $fields;
}
add_filter( 'kirki/fields', 'brasa_kirki_fields' );