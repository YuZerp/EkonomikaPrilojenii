<?php
add_action( 'init', 'create_info_teacher' );
function create_info_teacher() {
    register_post_type( 'info_teacher',
		array(
			'labels' => array(
				'name' => 'Инфа о преподавателях',
				'singular_name' => 'Инфа о преподавателе',
				'add_new_item' => 'Добавление инфы',
				'edit_item' => 'Редактирование инфы',
				'new_item' => 'Новая инфа',
				'view_item' => 'Смотреть инфу',
			),
			'public' => true,
			'menu_position' => 15,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'has_archive' => false
		)
	);
}
add_filter( 'template_include', 'include_template_function', 1 );
function include_template_function( $template_path ) {
    if ( get_post_type() == 'info_teacher' ) {
        if ( is_single() ) {
            if ( $theme_file = locate_template( array ( 'single_info_teacher.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single_info_teacher.php';
            }
        }
    }
    return $template_path;
}
?>