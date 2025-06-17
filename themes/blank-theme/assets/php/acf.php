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

function acf_group( string $name, ...$fields ) {

	acf_add_local_field_group( array (
		'key' 		 => 'group_' . $name,
		'title' 	 => 'Sektion: ' . $name,
		'fields' 	 => array ( $fields ),
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
}


$field_number = 1;

// FIELD: TITLE
$groups_with_title = array ( 1, 3 );

foreach( $groups_with_title as $number ) :
	acf_add_local_field( array(
		'key' 	 => 'field_' . $field_number,
		'label'  => 'Titel',
		'name' 	 => 'title',
		'type' 	 => 'text',
		'parent' => 'group_' . $number,
	) );
endforeach;


// FIELD: TEXT AREA
$field_number++;

$groups_with_text_area = array ( 1, 3 );

foreach( $groups_with_text_area as $number ) :
	acf_add_local_field( array(
		'key' 	 => 'field_' . $field_number,
		'label'  => 'Tekst felt',
		'name' 	 => 'text_area',
		'type' 	 => 'textarea',
		'parent' => 'group_' . $number,
	) );
endforeach;

// FIELD: LINK
$field_number++;
$groups_with_link = array ( 1, 3 );

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

// FIELD: IMAGES
$images_conditional_logic = array ();

for( $i = 1; $i <= 10; $i++ ) :
	$field_number++;

	$image = array (  
		'key' 	 				=> 'field_' . $field_number,
		'label'  				=> 'Billede (' . $i . ')',
		'name' 	 				=> 'image',
		'type' 	 				=> 'image',
		'return_format' => 'id',
		'parent' 				=> 'group_2',
	);

	if ( $i > 1 ) :
		$images_conditional_logic[] = array (
			'field' 	 => 'field_' . $field_number - 1,
			'operator' => '!=empty',
		);

		$image['conditional_logic'] = array( $images_conditional_logic );
	endif;

	if ($i !== 10) :
		$image['instructions'] = 'Vælg billede for at vise nyt billede felt (' . 10 - $i . ' felter tilbage).';
	endif;

	acf_add_local_field( $image );
endfor;

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

// SECTION: LIST
acf_add_local_field_group( array (
	'key' 		 => 'group_3',
	'title' 	 => 'Sektion: Liste',
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