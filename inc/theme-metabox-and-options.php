<?php

get_template_part('/inc/finance-options/cs-framework');


// framework Metabox options filter example

function finance_cs_framework_options($options)
{
    
    $options = array(); // remove old options
    
    
    $options[] = array(
        'id' => 'finance_slide_meta',
        'title' => 'Slide Options',
        'post_type' => 'finance-main-slide',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'finance_slide_metabox',
                'title' => 'Slide Options',
                'fields' => array(
                    // begin: a field          
                    
                    array(
                        'id' => 'text_color',
                        'type' => 'color_picker',
                        'title' => 'Slider text color',
                        'default' => '#fff'
                    ),
                    // end: a field
                    
                    array(
                        'id' => 'slider_button_link',
                        'type' => 'text',
                        'title' => 'Slider Botton Link',
                        'default' => '#'
                    )
                )
            )
        )
    );
    
    
    //All page option meta    
    $options[] = array(
        'id' => 'finance_page_meta',
        'title' => 'Page Options',
        'post_type' => 'page',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'finance_page_metabox',
                'title' => 'Page Options',
                'fields' => array(
                    // begin: a field
                    array(
                        'id' => 'enable_title',
                        'type' => 'switcher',
                        'title' => 'Enable Page Title',
                        'default' => 'false'
                    ),
                    // end: a field  
                    array(
                        'id' => 'custom_title',
                        'type' => 'textarea',
                        'title' => 'Add Page custom Title',
                        'dependency' => array(
                            'enable_title',
                            '==',
                            'true'
                        )
                    ),
                    // end: a field
                    array(
                        'id' => 'text_title_direction',
                        'type' => 'select',
                        'title' => 'Select Text Align',
                        'options' => array(
                            'center' => 'Center',
                            'left' => 'Left',
                            'right' => 'Right'
                        ),
                        'default' => 'left',
                        'dependency' => array(
                            'enable_title',
                            '==',
                            'true'
                        )
                    )
                    // end: a field      
                    
                )
            )
        )
    );
    
    return $options;
    
}
add_filter('cs_metabox_options', 'finance_cs_framework_options');



// framework Theme options filter example
function finance_cs_theme_options($options)
{
    
    $options = array();
    /*remove old options*/
    
    //Add acording option
    $options[] = array(
        'name' => 'header_top_options',
        'title' => 'Header Top Options',
        'icon' => 'fa fa-minus',
        'sections' => array(
            
            //Header top Left start  
            array(
                'name' => 'header_top_left',
                'title' => 'Header Top Left',
                'icon' => 'fa fa-minus',
                'fields' => array(
                    
                    array(
                        'id' => 'header_top_left_text',
                        'type' => 'text',
                        'title' => 'Header Top Left Text'
                    ),                                   
                    
                )
            ),
            //Header top Left End  

            //Header top Right start            
            array(
                'name' => 'header_top_right',
                'title' => 'Header Top Right',
                'icon' => 'fa fa-minus',
                'fields' => array(
                    
                    array(
                        'id' => 'header_top_right_array',
                        'type' => 'group',
                        'title' => 'Header Top Icon',
                        'button_title' => 'Add New',
                        'accordion_title' => 'Add New Header Link',
                        'fields' => array(
                            array(
                                'id' => 'header_sub_title',
                                'type' => 'text',
                                'title' => 'Header Sub Title'
                            ),
                            array(
                                'id' => 'header_top_icon',
                                'type' => 'icon',
                                'default' => 'fa fa-heart',
                                'title' => 'Header Icon'
                            ),
                            array(
                                'id' => 'header_top_icon_color',
                                'type' => 'color_picker',
                                'title' => 'Icon Color',
                                'default' => '#f4cc14'
                            )
                        )
                    )
                    
                )
            ),
            //End Right section
            //            
            array(
                'name' => 'header_logo',
                'title' => 'Header Logo',
                'icon' => 'fa fa-minus',
                'fields' => array(
                    
                    array(
                        'id' => 'header_logo_text',
                        'type' => 'text',
                        'title' => 'Header Logo Text'
                    )
                    
                )
            )
        )
    );
    //End header acordian option
    
    
    //Add acording option
    $options[] = array(
        'name' => 'footer_options',
        'title' => 'Footer Options',
        'icon' => 'fa fa-minus',
        'sections' => array(
            
            //Header top left start            
            array(
                'name' => 'footer_top_options',
                'title' => 'Footer Top',
                'icon' => 'fa fa-minus',
                'fields' => array(

                    array(
                        'id' => 'company_info_text_link',
                        'type' => 'fieldset',
                        'title' => 'Conmapny Info And Link',
                        'un_array' => true,
                        'fields' => array(
                            
                                    
                                    array(
                                        'id' => 'company_info_title',
                                        'type' => 'text',
                                        'title' => 'Footer Company Info',
                                        'default' => 'A Design by'                                        
                                    ),
                                    
                                    array(
                                        'id' => 'company_info_link',
                                        'type' => 'text',
                                        'title' => 'Company Info Link',
                                        'default' => 'https://facebook.com/spyimran4u'
                                    ),

                                    array(
                                        'id' => 'company_info_link_text',
                                        'type' => 'text',
                                        'title' => 'Company Info Link Text',
                                        'default' => 'Imran Hoshain'
                                    ),

                                    array(
                                        'id' => 'footer_copyright_text',
                                        'type' => 'text',
                                        'title' => 'Copyright Text',
                                        'default' => 'Copyright 2018. All Rights Reserved.'
                                    ),                           
                               
                        )
                    ),
  
                    array(
                        'id' => 'footer_social_icon_section',
                        'type' => 'fieldset',
                        'title' => 'Footer Social Icon Section',
                        'un_array' => true,
                        'fields' => array(
                            array(
                                'id' => 'footer_social_icon_options',
                                'type' => 'group',
                                'title' => 'Social Information',
                                'button_title' => 'Add New Social Info',
                                'accordion_title' => 'Add detail social information',
                                'fields' => array(
                                    
                                    array(
                                        'id' => 'footer_social_icon',
                                        'type' => 'icon',
                                        'title' => 'add social icon',
                                        'default' => 'fa fa-heart'
                                    ),
                                    
                                    array(
                                        'id' => 'footer_social_icon_link',
                                        'type' => 'text',
                                        'title' => 'Enter your social link',
                                        'default' => 'https://facebook.com'
                                    )
                                    
                                )
                            )
                            
                            
                        )
                    ),                                    
   
                ),                   
                    
            ),
            //End left sectio
            
        )
    );
    //End header acordian option

    $options[] = array(
        'name' => 'script_section',
        'title' => 'Script Section',
        'fields' => array(
            array(
                'id' => 'custom_css',
                'type' => 'textarea',
                'sanitize' => false,
                'title' => 'Custom Css'
            )
        )
    );
    
    return $options;
    
}
add_filter('cs_framework_options', 'finance_cs_theme_options');



// framework Custom options filter example
function finance_custom_framework_options($options)
{
    
    $options = array(); // remove old options
    
    return $options;
    
}
add_filter('cs_customize_options', 'finance_custom_framework_options');