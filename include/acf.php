<?php

if(function_exists('acf')) {
    $acf = acf();
    $acf -> settings['dir'] = plugins_url() . '/advanced-custom-fields/';
}

if(function_exists("register_field_group")) {
    register_field_group(array(
        'id' => 'acf_artist',
        'title' => 'Artist',
        'fields' => array(
            array(
                'key' => 'field_54b7030175454',
                'label' => 'Artist Type',
                'name' => 'artist_type',
                'type' => 'select',
                'choices' => array(
                    'artist' => 'Artist',
                    'featured artist' => 'Featured Artist',
                    'office hours' => 'Office Hours',
                    'spotlight item' => 'Spotlight Item',
                ),
                'default_value' => '',
                'allow_null' => 1,
                'multiple' => 0,
            ),
            array(
                'key' => 'field_54b95bb123e45',
                'label' => 'Artist Subtitle',
                'name' => 'artist_subtitle',
                'type' => 'text',
                'instructions' => '[Example]<br>Title: John Roderick<br>Subtitle: The Long Winters',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
				'key' => 'field_55158a96020c0',
				'label' => 'Artist Facebook',
				'name' => 'artist_facebook',
				'type' => 'text',
				'instructions' => 'Link to artist Facebook',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55158ad5020c1',
				'label' => 'Artist Twitter',
				'name' => 'artist_twitter',
				'type' => 'text',
				'instructions' => 'Link to artist Twitter',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55158aeb020c2',
				'label' => 'Artist YouTube',
				'name' => 'artist_youtube',
				'type' => 'text',
				'instructions' => 'Link to artist YouTube',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55158aeb020c3',
				'label' => 'Artist Website',
				'name' => 'artist_website',
				'type' => 'text',
				'instructions' => 'Link to artist website',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
        ),
        'location' => array( array( array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'artist',
                    'order_no' => 0,
                    'group_no' => 0,
                ), ), ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
                0 => 'discussion',
                1 => 'comments',
                2 => 'revisions',
                3 => 'slug',
                4 => 'author',
                5 => 'format',
                6 => 'categories',
                7 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array(
        'id' => 'acf_city',
        'title' => 'City',
        'fields' => array(
            array(
                'key' => 'field_54b83b55ed730',
                'label' => 'City X Position',
                'name' => 'city_x_position',
                'type' => 'number',
                'instructions' => 'The horizontal distance from the left edge of the full-size map in pixels.',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array(
                'key' => 'field_54b83bbced731',
                'label' => 'City Y Position',
                'name' => 'city_y_position',
                'type' => 'number',
                'instructions' => 'The vertical distance from the top edge of the full-size map in pixels.',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array(
                'key' => 'field_54b83bdeed732',
                'label' => 'Invert Label Position',
                'name' => 'invert_label_position',
                'type' => 'true_false',
                'instructions' => 'Enable to show the city label under its point on the map.',
                'message' => '',
                'default_value' => 0,
            ),
            array(
                'key' => 'field_54c937c66bb8a',
                'label' => 'Invert Info Position',
                'name' => 'invert_info_position',
                'type' => 'true_false',
                'message' => '',
                'default_value' => 0,
            ),
            array(
                'key' => 'field_54c937d96bb8b',
                'label' => '',
                'name' => '',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array( array( array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'city',
                    'order_no' => 0,
                    'group_no' => 0,
                ), ), ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array(
        'id' => 'acf_faq',
        'title' => 'FAQ',
        'fields' => array(
            array(
                'key' => 'field_544c2ecd0555e',
                'label' => 'Show on Front Page',
                'name' => 'show_on_front_page',
                'type' => 'checkbox',
                'choices' => array('show on front page' => 'show on front page', ),
                'default_value' => '',
                'layout' => 'vertical',
            ),
            array(
                'key' => 'field_54caf8c8c0de8',
                'label' => 'FAQ Section Header',
                'name' => 'faq_section_header',
                'type' => 'radio',
                'choices' => array_combine($faq_section_headers_ordered, $faq_section_headers_ordered),
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => '',
                'layout' => 'vertical',
            ),
        ),
        'location' => array( array( array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'faq',
                    'order_no' => 0,
                    'group_no' => 0,
                ), ), ),
        'options' => array(
            'position' => 'acf_after_title',
            'layout' => 'no_box',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));

    // for the experience page
    register_field_group(array (
        'id' => 'acf_experience-page',
        'title' => 'Experience Page',
        'fields' => array (
            array (
                'key' => 'field_555280ec5a855',
                'label' => 'Featured Image Clickthrough File',
                'name' => 'exp_featured_image_clickthrough_file',
                'type' => 'file',
                'instructions' => 'This the file that will be displayed when people click through on the featured image. If none is provided, the image will not be clickable.',
                'save_format' => 'object',
                'library' => 'all',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'experience',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
	
	// Byline info for news posts
	register_field_group(array (
		'id' => 'acf_post-byline',
		'title' => 'Post byline',
		'fields' => array (
			array (
				'key' => 'field_555dee9bf3f57',
				'label' => 'Byline name',
				'name' => 'byline_name',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_555deec1f3f58',
				'label' => 'Byline image',
				'name' => 'byline_image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

}
?>