<?php
namespace MRBS;

require "defaultincludes.inc";
require_once "version.inc";

// Check the user is authorised for this page
checkAuthorised(this_page());

$context = array(
    'view'      => $view,
    'view_all'  => $view_all,
    'year'      => $year,
    'month'     => $month,
    'day'       => $day,
    'area'      => $area,
    'room'      => isset($room) ? $room : null
  );

print_header($context);









echo"<h4>" . "if you need help please contact us with: " . "</h4>\n";
echo "elshadayt@coopbankoromia.com.et";
echo "<p>\n</p>";
echo "adugtadbusiness@gmail.com";
echo "<p>\n</p>";
echo "eske17.ea@gmail.com";

//require_once "site_faq/site_faq" . $faqfilelang . ".html";

print_footer();
