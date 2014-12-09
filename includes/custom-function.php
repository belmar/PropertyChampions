<?php
	// Loads child theme textdomain
	load_child_theme_textdomain( CURRENT_THEME, CHILD_DIR . '/languages' );

	// Loads custom scripts.
	// require_once( 'custom-js.php' );
	
		if (! class_exists('description_walker')) {
		class property_champions_description_walker extends Walker_Nav_Menu {
			function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
				global $wp_query;
				$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

				$class_names = $value = '';

				$classes = empty( $item->classes ) ? array() : (array) $item->classes;

				$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
				$class_names = ' class="'. esc_attr( $class_names ) . '"';

				$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

				$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
				$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
				$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
				$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

				$description  = ! empty( $item->description ) ? '<span class="desc">'.esc_attr( $item->description ).'</span>' : '';

				if($depth != 0) {
					$description = $append = $prepend = "";
				}

				$item_output = $args->before;
				$item_output .= '<a'. $attributes .'>';
				$item_output .= $args->link_before;

				if (isset($prepend))
					$item_output .= $prepend;

				$item_output .= apply_filters( 'the_title', $item->title, $item->ID );
				$checkchildren = $item->classes;
				if(isset($checkchildren['4']))
					$item_output .= '<i class="icon-chevron-down add-margin"></i>';				
				if (isset($append))
					$item_output .= $append;

				$item_output .= $description.$args->link_after;
				$item_output .= '</a>';
				$item_output .= $args->after;
				$checkchildren = $item->classes;

				$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			}
		}
	}
	
	add_filter( 'cherry_slider_params', 'my_rewrite_slider_params' );
	function my_rewrite_slider_params( $params ) {
			$params['height'] = "'58%'";
			$params['minHeight'] = "'200px'";
			return $params;
	}  
/* Gravity Forms Custom Layout */
 
/* Add a custom field to the field editor */
add_action("gform_field_standard_settings", "my_standard_settings", 10, 2);
 
function my_standard_settings($position, $form_id){
 
// Create settings on position 25 (right after Field Label)
 
if($position == 25){
?>
         
<li class="admin_label_setting field_setting" style="display: list-item; ">
<label for="field_placeholder">Placeholder Text
 
<!-- Tooltip to help users understand what this field does -->
<a href="javascript:void(0);" class="tooltip tooltip_form_field_placeholder" tooltip="&lt;h6&gt;Placeholder&lt;/h6&gt;Enter the placeholder/default text for this field.">(?)</a>
             
</label>
         
<input type="text" id="field_placeholder" class="fieldwidth-3" size="35" onkeyup="SetFieldProperty('placeholder', this.value);">
         
</li>
<?php
}
}
 
/* Now we execute some javascript technicalitites for the field to load correctly */
 
add_action("gform_editor_js", "my_gform_editor_js");
 
function my_gform_editor_js(){
?>
<script>
//binding to the load field settings event to initialize the checkbox
jQuery(document).bind("gform_load_field_settings", function(event, field, form){
jQuery("#field_placeholder").val(field["placeholder"]);
});
</script>
 
<?php
}
 
/* We use jQuery to read the placeholder value and inject it to its field */
 
add_action('gform_enqueue_scripts',"my_gform_enqueue_scripts", 10, 2);
 
function my_gform_enqueue_scripts($form, $is_ajax=false){
?>
<script>
 
jQuery(function(){
<?php
 
/* Go through each one of the form fields */
 
foreach($form['fields'] as $i=>$field){
 
/* Check if the field has an assigned placeholder */
             
if(isset($field['placeholder']) && !empty($field['placeholder'])){
                 
/* If a placeholder text exists, inject it as a new property to the field using jQuery */
                 
?>
                 
jQuery('#input_<?php echo $form['id']?>_<?php echo $field['id']?>').attr('placeholder','<?php echo $field['placeholder']?>');
                 
<?php
}
}
?>
});
</script>
<?php
}
?>