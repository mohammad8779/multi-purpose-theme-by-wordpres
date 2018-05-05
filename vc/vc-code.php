<?php

add_action('vc_before_init','removing_default');

function removing_default(){
	vc_set_as_theme();
}


if(function_exists('vc_map')):

vc_map(array(

			'name'       =>'Ozun Slider',
			'base'       =>'ozun-slider',
			'description'=>'this is for ozun slider',
			'show_settings_on_create'=>false,


	));

vc_map(array(

		'name'=>'Ozun Portfolio',
		'base'=>'ozun-portfolio',
		'description'=>'this is for ozun portfolio',
		'params'=>array(

			array(

					'heading' =>'Subtitle',
					'value'   =>'Tempor incididunt labore dolore veniam',
					'param_name'=>'works_subtitle',
					'type'    =>'textfield',


				),

			array(

					'heading' =>'Title',
					'value'   =>'projects we do',
					'param_name'=>'works_title',
					'type'    =>'textfield',


				),

		),



	));


vc_map(array(

		'name'=>'Ozun Welcome Section',
		'base'=>'ozun-welcome',
		'description'=>'this is for ozun welcome section',
		'params'=>array(

			array(

					'heading' =>'Subtitle',
					'value'   =>'Tempor incididunt labore dolore veniam',
					'param_name'=>'subtitle',
					'type'    =>'textfield',


				),

			array(

					'heading' =>'Title',
					'value'   =>'welcome to ozun',
					'param_name'=>'title',
					'type'    =>'textfield',


				),

		),



	));

vc_map(array(

		'name'=>'Ozun Tabs Section',
		'base'=>'ozun-tab',
		'description'=>'this is for ozun tabs section',
		'show_settings_on_create'=>false,



	));

vc_map(array(

		'name'=>'Ozun offer Section',
		'base'=>'ozun-offer',
		'description'=>'this is for ozun offer section',
		'params'=>array(

			array(

					'heading' =>'Subtitle',
					'value'   =>'Incididunt labore dolore veniam',
					'param_name'=>'offer_subtitle',
					'type'    =>'textfield',


				),

			array(

					'heading' =>'Title',
					'value'   =>'we offer',
					'param_name'=>'offer_title',
					'type'    =>'textfield',


				),

		),



	));





endif;