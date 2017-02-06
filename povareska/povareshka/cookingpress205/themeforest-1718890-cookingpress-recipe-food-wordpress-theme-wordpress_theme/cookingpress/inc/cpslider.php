<?php

/* ------------------------------------------------------------------------ *
 * Setting Registration
 * ------------------------------------------------------------------------ */

/**
 * Initializes the theme options page by registering the Sections,
 * Fields, and Settings.
 *
 * This function is registered with the 'admin_init' hook.
 */
add_action('admin_init', 'sandbox_initialize_theme_options');
function sandbox_initialize_theme_options() {

    // First, we register a section. This is necessary since all future options must belong to one.
    add_settings_section(
        'general_settings_section',         // ID used to identify this section and with which to register options
        'Sandbox Options',                  // Title to be displayed on the administration page
        'sandbox_general_options_callback', // Callback used to render the description of the section
        'general'                           // Page on which to add this section of options
        );

    // Next, we will introduce the fields for toggling the visibility of content elements.
    add_settings_field(
    'show_header',                      // ID used to identify the field throughout the theme
    'Header',                           // The label to the left of the option interface element
    'sandbox_toggle_header_callback',   // The name of the function responsible for rendering the option interface
    'general',                          // The page on which this option will be displayed
    'general_settings_section',         // The name of the section to which this field belongs
    array(                              // The array of arguments to pass to the callback. In this case, just a description.
        'Activate this setting to display the header.'
        )
    );

    register_setting(
        'general',
        'show_header'
        );
} // end sandbox_initialize_theme_options

/* ------------------------------------------------------------------------ *
 * Section Callbacks
 * ------------------------------------------------------------------------ */

/**
 * This function provides a simple description for the General Options page.
 *
 * It is called from the 'sandbox_initialize_theme_options' function by being passed as a parameter
 * in the add_settings_section function.
 */
function sandbox_general_options_callback() {
    echo '<p>Select which areas of content you wish to display.</p>';
} // end sandbox_general_options_callback

/**
 * This function renders the interface elements for toggling the visibility of the header element.
 *
 * It accepts an array of arguments and expects the first element in the array to be the description
 * to be displayed next to the checkbox.
 */
function sandbox_toggle_header_callback($args) {

    // Note the ID and the name attribute of the element should match that of the ID in the call to add_settings_field
    $html = '<input type="checkbox" id="show_header" name="show_header" value="1" ' . checked(1, get_option('show_header'), false) . '/>';

    // Here, we will take the first argument of the array and add it to a label next to the checkbox
    $html .= '<label for="show_header"> '  . $args[0] . '</label>';

    echo $html;

} // end sandbox_toggle_header_callback


?>
