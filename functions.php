<?php
/**
 * outputs an input elament with the given attribute values
 * this function examines SESSION data
 * @param unknown_type $name
 * @param unknown_type $placeholders
 * @return HTML input element
 */
function input($name, $placeholder, $value=null) {
	if($value == null && isset($_SESSION['POST'][$name])) {
		$value = $_SESSION['POST'][$name];

		unset($_SESSION['POST'][$name]);

		if($value == '') {
			$class = 'class="error"';
		} else {
			$class = '';
		} 
	}elseif($value != null) {
		$class = '';
	} else {
		$value = '';
		$class = '';
	}
	return "<input $class type=\"text\"name=\"$name\"placeholder=\"$placeholder\"value=\"$value\" />";
}

/**
 * Makes an HTML select alement with the given name
 * function examines session data for submitted value
 * @param String $name Name attribute
 * @param Array $options Array of options in the form value => text
 * @return HTML select element
 */
function dropdown ($name, $options) {
	$select = "<select name=\"$name\">";
	foreach($options as $value => $text) {
		if(isset($_SESSION['POST'][$name]) && $_SESSION['POST'][$name] == $value) {
			unset($_SESSION['POST'][$name]);
			$selected = 'selected="selected"';
		} else {
			$selected = '';
		}
		$select .="<option $selected value=\"$value\">$text</option>";
	}
	$select .="</select>";
	return $select;
}

/**
 * Makes an HTML radio buttons with the given name
 * function examines session data for submitted value
 * @param String $name Name attribute
 * @param Array $options Array of options in the form value => text
 * @return HTML input[type=radio]
 */
function radio($name, $options) {
	$radio = '';
	foreach($options as $value => $text) {
		if(isset($_SESSION['POST'][$name]) && $_SESSION['POST'][$name] == $value) {
			unset($_SESSION['POST'][$name]);
			$checked = 'checked="checked"';
		} else {
			$checked = '';
		}
		$radio .="<label><input type=\"radio\"name=\"$name\" value=\"$value\" $checked />$text</label>";
	}
	return $radio;
}

?>
