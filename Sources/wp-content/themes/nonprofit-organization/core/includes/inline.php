<?php


$nonprofit_organization_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$nonprofit_organization_text_transform = get_theme_mod( 'menu_text_transform_nonprofit_organization','UPPERCASE');
    if($nonprofit_organization_text_transform == 'CAPITALISE'){

		$nonprofit_organization_custom_css .='#main-menu ul li a{';

			$nonprofit_organization_custom_css .='text-transform: capitalize ; font-size: 12px;';

		$nonprofit_organization_custom_css .='}';

	}else if($nonprofit_organization_text_transform == 'UPPERCASE'){

		$nonprofit_organization_custom_css .='#main-menu ul li a{';

			$nonprofit_organization_custom_css .='text-transform: uppercase ; font-size: 12px';

		$nonprofit_organization_custom_css .='}';

	}else if($nonprofit_organization_text_transform == 'LOWERCASE'){

		$nonprofit_organization_custom_css .='#main-menu ul li a{';

			$nonprofit_organization_custom_css .='text-transform: lowercase ; font-size: 12px';

		$nonprofit_organization_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$nonprofit_organization_container_width = get_theme_mod('nonprofit_organization_container_width');

		$nonprofit_organization_custom_css .='body{';

			$nonprofit_organization_custom_css .='width: '.esc_attr($nonprofit_organization_container_width).'%; margin: auto';

		$nonprofit_organization_custom_css .='}';
