<?php /* 23Jun17 zig - remove breadcrumbs */
$output = '';
$output .= '<div class="title-module-wrap page-title-module-custom"><div class="be-wrap clearfix">';
// zig was: $output .= '<div class="left page-title-custom">';
//$output .= '<div class="page-title-custom">'; // zig - use h1 for page titles.
$output .= '<h1 class="page-title-custom">';
ob_start();
get_template_part( 'page', 'title' );
$output .= ob_get_contents();
ob_end_clean();
//$output .= '</div>';
$output .= '</h1>';
// zxout $output .= '<div class="right header-breadcrumb">'.get_be_themes_breadcrumb().'</div>';
$output .= '</div></div>';
echo $output;
?>
