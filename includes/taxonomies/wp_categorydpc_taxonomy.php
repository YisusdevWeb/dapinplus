<?php

function registrar_taxonomia_dappins_categoria()
{
/**	 * Taxonomy: Categorías de Dappins.	 */

	$labels = [
		"name" => esc_html__("Categorías de Dappins", DPC_NS),
		"singular_name" => esc_html__("Categoría de Dappins", DPC_NS),
		"menu_name" => esc_html__("Categorías de Dappins", DPC_NS),
		"all_items" => esc_html__("Todas las Categorías de Dappins", DPC_NS),
		"edit_item" => esc_html__("Editar Categoría de Dappins", DPC_NS),
		"view_item" => esc_html__("Ver Categoría de Dappins", DPC_NS),
		"update_item" => esc_html__("Actualizar", DPC_NS),
		"add_new_item" => esc_html__("Agregar nueva categoría ", DPC_NS),
		"new_item_name" => esc_html__("Nombre de la nueva Categoría de Dappins", DPC_NS),
		"parent_item" => esc_html__("Categoría de Dappins padre", DPC_NS),
		"parent_item_colon" => esc_html__("Categoría de Dappins padre:", DPC_NS),
		"search_items" => esc_html__("Buscar Categorías de Dappins", DPC_NS),
		"popular_items" => esc_html__("Categorías de Dappins populares", DPC_NS),
		"separate_items_with_commas" => esc_html__("Separar Categorías de Dappins con comas", DPC_NS),
		"add_or_remove_items" => esc_html__("Agregar o quitar Categorías ", DPC_NS),
		"choose_from_most_used" => esc_html__("Elegir de las Categorías de Dappins más usadas", DPC_NS),
		"not_found" => esc_html__("No se encontraron Categorías de Dappins", DPC_NS),
		"no_terms" => esc_html__("No hay Categorías de Dappins", DPC_NS),
		"items_list_navigation" => esc_html__("Navegación de lista de Categorías de Dappins", DPC_NS),
		"items_list" => esc_html__("Lista de Categorías de Dappins", DPC_NS),
		"back_to_items" => esc_html__("Volver a las Categorías de Dappins", DPC_NS),
		"name_field_description" => esc_html__("El nombre es cómo aparece en tu sitio.", DPC_NS),
		"parent_field_description" => esc_html__("Asigna un término padre para crear una jerarquía. Por ejemplo, el término Jazz sería el padre de Bebop y Big Band.", DPC_NS),
		"slug_field_description" => esc_html__("El slug es la versión del nombre que es amigable para URL. Normalmente está todo en minúsculas y solo contiene letras, números y guiones.", DPC_NS),
		"desc_field_description" => esc_html__("La descripción no es prominente por defecto; sin embargo, algunos temas pueden mostrarla.", DPC_NS),
	];

	$args = [
		"label" => esc_html__("Categorías de Dappins", DPC_NS),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => ['slug' => 'osnossosdappins', 'with_front' => true,  'hierarchical' => true,],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => true,
		"rest_base" => "osnossosdappins",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
    register_taxonomy('categoria_dappins', array('dappin'), $args);


	
}
add_action('init', 'registrar_taxonomia_dappins_categoria');