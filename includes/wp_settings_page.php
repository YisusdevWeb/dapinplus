<?php
function registrar_dpc_dappins() {
   

    $labels = array(
        'name'               => esc_html__('Dappins', DPC_NS),
        'singular_name'      => esc_html__('Dappin', DPC_NS),
        'menu_name'          => esc_html__('Dappins', DPC_NS),
        'add_new'            => esc_html__('Añadir Nuevo', DPC_NS),
        'add_new_item'       => esc_html__('Añadir Nuevo Dappin', DPC_NS),
        'edit_item'          => esc_html__('Editar Dappin', DPC_NS),
        'new_item'           => esc_html__('Nuevo Dappin', DPC_NS),
        'view_item'          => esc_html__('Ver Dappin', DPC_NS),
        'search_items'       => esc_html__('Buscar Dappins', DPC_NS),
        'not_found'          => esc_html__('No se encontraron dappins', DPC_NS),
        'not_found_in_trash' => esc_html__('No se encontraron dappins en la papelera', DPC_NS),
        'parent_item_colon'  => esc_html__('Dappin Padre:', DPC_NS),
        'all_items'          => esc_html__('Todos los Dappins', DPC_NS),
        'archives'           => esc_html__('Archivo de Dappins', DPC_NS),
        'insert_into_item'   => esc_html__('Insertar en el Dappin', DPC_NS),
        'uploaded_to_this_item' => esc_html__('Subido a este Dappin', DPC_NS),
        'filter_items_list'  => esc_html__('Filtrar lista de dappins', DPC_NS),
        'items_list_navigation' => esc_html__('Navegación de lista de dappins', DPC_NS),
        'items_list'         => esc_html__('Lista de Dappins', DPC_NS),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'osnossosdappins'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-businessman',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'taxonomies'         => array('categoria_dappins'), // Asociación con varias taxonomías
    );

    register_post_type('dappin', $args);
}

add_action('init', 'registrar_dpc_dappins');
