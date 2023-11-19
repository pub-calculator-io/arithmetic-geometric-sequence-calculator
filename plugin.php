<?php
/*
Plugin Name: Arithmetic and Geometric Sequence Calculator by www.calculator.io
Plugin URI: https://www.calculator.io/arithmetic-geometric-sequence-calculator/
Description: Number sequence calculator to find the nth term of arithmetic, geometric, and Fibonacci sequences. The calculator also finds the sum of the terms of a sequence.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_arithmetic_geometric_sequence_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Arithmetic and Geometric Sequence Calculator by Calculator.iO";

function display_ci_arithmetic_geometric_sequence_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Arithmetic and Geometric Sequence Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_arithmetic_geometric_sequence_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_arithmetic_geometric_sequence_calculator', 'display_ci_arithmetic_geometric_sequence_calculator' );