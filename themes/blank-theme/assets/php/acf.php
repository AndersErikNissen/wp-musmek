<?php
// Reference: https://www.advancedcustomfields.com/resources/local-json/

function custom_acf_json_filename( $filename, $post, $load_path ) {
  $filename = str_replace(
		array(
			' ',
			'_',
		),
		array(
			'-',
			'-'
		),
		$post['title']
  );

  $filename = strtolower( $filename ) . '.json';

  return $filename;
}
add_filter( 'acf/json/save_file_name', 'custom_acf_json_filename', 10, 3 );


// Reference: https://www.advancedcustomfields.com/resources/register-fields-via-php/
if( function_exists('acf_add_local_field_group') ):

// FIELD: TITLE
$groups_with_title = array ( 1 );

foreach( $groups_with_title as $number ) :
	acf_add_local_field( array(
		'key' 	 => 'field_1',
		'label'  => 'Titel',
		'name' 	 => 'title',
		'type' 	 => 'text',
		'parent' => 'group_' . $number,
	) );
endforeach;

// FIELD: TEXT AREA
$groups_with_text_area = array ( 1 );

foreach( $groups_with_text_area as $number ) :
	acf_add_local_field( array(
		'key' 	 => 'field_2',
		'label'  => 'Tekst felt',
		'name' 	 => 'text_area',
		'type' 	 => 'textarea',
		'parent' => 'group_' . $number,
	) );
endforeach;

// FIELD: LINK
$groups_with_link = array ( 1 );

foreach( $groups_with_link as $number ) :
	acf_add_local_field( array(
		'key' 	 => 'field_3',
		'label'  => 'Link',
		'name' 	 => 'link',
		'type' 	 => 'link',
		'instructions' => '(Vises som en knap)',
		'parent' => 'group_' . $number,
	) );
endforeach;



// SECTION: TEXT
acf_add_local_field_group( array (
	'key' 		 => 'group_1',
	'title' 	 => 'Sektion: Tekst',
	'fields' 	 => array (),
	'location' => array (
		array (
			array (
				'param'		 => 'post_type',
				'operator' => '==',
				'value' 	 => 'post',
			),
		),
	),
	'menu_order' => 0,
) );

// SECTION: GALLERY
for( $i = 1; $i <= 8; $i++ ) :
	acf_add_local_field( array(
		'key' 	 				=> 'field_' . $i + 3,
		'label'  				=> 'Billede: ' . $i,
		'name' 	 				=> 'image',
		'type' 	 				=> 'image',
		'return_format' => 'id',
		'parent' 				=> 'group_2',
	) );
endfor;

acf_add_local_field_group( array (
	'key' 		 => 'group_2',
	'title' 	 => 'Sektion: Galleri',
	'fields' 	 => array (),
	'location' => array (
		array (
			array (
				'param'		 => 'post_type',
				'operator' => '==',
				'value' 	 => 'post',
			),
		),
	),
) );


// LAV TIL INDSTILLINGER SIDEN!!!
// LAV TIL INDSTILLINGER SIDEN!!!
// LAV TIL INDSTILLINGER SIDEN!!!
// LAV TIL INDSTILLINGER SIDEN!!!
// LAV TIL INDSTILLINGER SIDEN!!!
// LAV TIL INDSTILLINGER SIDEN!!!
// LAV TIL INDSTILLINGER SIDEN!!!


endif;