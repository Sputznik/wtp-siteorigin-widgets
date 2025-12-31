<?php
/*
	Widget Name: WTP AI Prompt
	Description: AI Prompt Widget.
	Author: Stephen Anil, Sputznik
	Author URI:	https://sputznik.com
	Widget URI:
	Video URI:
*/
class WTP_AI_PROMPT extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'so-ai-prompt',
			// The name of the widget for display purposes.
			__('WTP AI Prompt', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('WTP AI Prompt.'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'html_prompt' => array(
					'type' => 'tinymce',
					'label' => __( 'HTML Prompt', 'siteorigin-widgets' ),
					'default' => '',
					'rows' => 10,
					'default_editor' => 'tinymce'
				),
				'markdown_prompt' => array(
					'type' 	=> 'textarea',
					'label' => __( 'Markdown Prompt', 'siteorigin-widgets' ),
					'rows'	=> 15
				)

			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/so-ai-prompt"
		);
	}

	function get_template_name($instance) {
		return 'template';
	}

	function get_template_dir($instance) {
		return 'templates';
	}

  function get_style_name($instance) {
      return '';
  }

}

siteorigin_widget_register('so-ai-prompt', __FILE__, 'WTP_AI_PROMPT');
