<?php
// Función para crear una taxonomía
function crear_taxonomia_jerarquica() {

    // Definimos un array para las traducciones de la taxonomía

    $labels = array(
        'name' => __( 'Informacion' ),
        'singular_name' => __( 'Informacion' ),
        'search_items' =>  __( 'Buscar informacion' ),
        'all_items' => __( 'Todas las informaciones' ),
        'parent_item' => __( 'Parent' ),
        'parent_item_colon' => __( 'Parent' ),
        'edit_item' => __( 'Editar' ), 
        'update_item' => __( 'Actualizar' ),
        'add_new_item' => __( 'Agregar uno nuevo' ),
        'add_new_item'      => __('Agregar nueva'),
        'menu_name' => __( 'Informacion' ),
    ); 	

    // Función WordPress para registrar la taxonomía

    $args = [
        'hierarchical'      => true, // True para taxonomías del tipo "Categoría" y false para el tipo "Etiquetas"
        'labels'            => $labels, // La variable con las traducciones de las etiquetas
        'show_ui' => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => ['slug' => 'info-home'],
    ];

    register_taxonomy( 'info-home', ['post'], $args );
}
add_action( 'init', 'crear_taxonomia_jerarquica' );

?>