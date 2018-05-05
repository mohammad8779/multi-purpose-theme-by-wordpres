<?php


add_action('cmb2_admin_init','custom_metabox');

function custom_metabox(){

$formats = new_cmb2_box(array(

			'title'       =>__('Additional Fields','ozun'),
			'id'          =>'formats-metabox',
			'object_types'=>array('post'),
));

$formats->add_field(array(

			'name'=>'Video URL',
			'id'=>'_for-video',
			'type'=>'text',


 ));

$formats->add_field(array(

			'name'=>'Audio URL',
			'id'=>'_for-audio',
			'type'=>'text',


 ));

$formats->add_field(array(

			'name'=>'Gallery Images',
			'id'=>'_for-gallery',
			'type'=>'file_list',


 ));



$slider = new_cmb2_box(array(

			'title'       =>__('Additional Fields','ozun'),
			'id'          =>'slider-metabox',
			'object_types'=>array('ozun-slider'),
));

$slider->add_field(array(

			'name'=>'Slider Subtitle',
			'id'=>'_slider-subtitle',
			'type'=>'text',


 ));

$slider->add_field(array(

			'name'=>'Slider First Button Text',
			'id'=>'_slider-f-text',
			'type'=>'text',


 ));

$slider->add_field(array(

			'name'=>'Slider First Button URL',
			'id'=>'_slider-f-url',
			'type'=>'text',


 ));

$slider->add_field(array(

			'name'=>'Slider First Button Type',
			'id'=>'_slider-f-type',
			'type'=>'select',
			'options'=>array(
					'white'=>'White Button',
					'transparent'=>'Transparent Button',

			
				) 


 ));

$slider->add_field(array(

			'name'=>'Slider Second Button Text',
			'id'=>'_slider-s-text',
			'type'=>'text',           


 ));

$slider->add_field(array(

			'name'=>'Slider Second Button URL',
			'id'=>'_slider-s-url',
			'type'=>'text',


 ));

$slider->add_field(array(

			'name'=>'Slider Second Button Type',
			'id'=>'_slider-s-type',
			'type'=>'select',
			'options'=>array(

					'white'=>'White Button',
					'transparent'=>'Transparent Button',


				)  
             

 ));

$welcome = new_cmb2_box(array(

			'title'       =>__('Additional Fields','ozun'),
			'id'          =>'welcome-metabox',
			'object_types'=>array('ozun-welcome-sec'),
));

$welcome->add_field(array(

			'name'=>'Section Icon',
			'id'=>'_welcome-icon',
			'type'=>'text',
	));


$tabs = new_cmb2_box(array(

			'title'       =>__('Additional Fields','ozun'),
			'id'          =>'tab-metabox',
			'object_types'=>array('ozun-tab-sec'),
));

$tabs->add_field(array(

			'name'=>'Tabs Menu',
			'id'=>'_tabs-menu',
			'type'=>'text',
	));

$tabs->add_field(array(

			'name'=>'Tabs Content Subtitle',
			'id'=>'_tabs-subtitle',
			'type'=>'text',
	));


$offer_icon = new_cmb2_box(array(

			'title'       =>__('Additional Fields','ozun'),
			'id'          =>'offer-metabox',
			'object_types'=>array('ozun-offer-sec'),
));

$offer_icon->add_field(array(

			'name'=>'Offer Icon',
			'id'=>'_offer-icon',
			'type'=>'text',
	));


};