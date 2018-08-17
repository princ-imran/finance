<?php
namespace Finance\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * @since 1.1.0
 */
class Finance_Main_slider_Section extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'finance-slider';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Finance Main Slider', 'finance-toolkit' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-slider-push';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'finance' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.1.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
		// Content Controls
  		$this->start_controls_section(
  			'finance_slider',
  			[
  				'label' => esc_html_x( 'Main Slider','Admin Panel','finance-toolkit' )
  			]
  		); 
 
        $this->add_control(
			'count',
			[
				'label' => esc_html_x("Slider Per Page", 'Admin Panel','finance-toolkit'),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html_x("3", 'Admin Panel','finance-toolkit'),			
			]
		);
        
        $this->add_control(
			'height',
			[
				'label' => esc_html_x("Slider Height", 'Admin Panel','finance-toolkit'),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html_x("44%", 'Admin Panel','finance-toolkit'),			
			]
		);      
                
      $this->add_control(
			'category',
			[
				'label' => __( 'Select Category', 'finance-toolkit' ),
				'type' => Controls_Manager::SELECT,				
				'options' => finance_theme_slider_category()
			]
		); 
        
        $this->add_control(
			'pagination',
			[
				'label' => __( 'Pagination Option', 'finance-toolkit' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'false',
				'options' => [
					'true' => 'Yes',
                    'false' => 'No'
				],
				
			]
		);
        
          $this->add_control(
			'thumbnails',
			[
				'label' => __( 'Thumbnail Option', 'finance-toolkit' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'false',
				'options' => [
					'true' => 'Yes',
                    'false' => 'No'
				],
				
			]
		);
        
          $this->add_control(
			'navigation',
			[
				'label' => __( 'Slider Navigation', 'finance-toolkit' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'false',
				'options' => [
					'true' => 'Yes',
                    'false' => 'No'
				],
				
			]
		);
       
        $this->add_control(
			'slider_icon',
			[
				'label' => __( 'Slider Bottom Icon', 'finance-toolkit' ),
				'type' => Controls_Manager::ICON,
				'label_block' => true,
				'default' => 'fa fa-cog',
			]
		);
        
		$this->end_controls_section();

	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.1.0
	 *
	 * @access protected
	 */
	protected function render( ) {
        
		$settings = $this->get_settings();             

    echo finance_slider_shortcode($settings);            


	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.1.0
	 *
	 * @access protected
	 */
	protected function content_template() {
        
	}
    
}
