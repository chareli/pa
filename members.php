<?php
/*
  $Id: shipping.php,v 1.22 2003/06/05 23:26:23 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_MEMBERS);

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_MEMBERS));
?>
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html <?php echo HTML_PARAMS; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>">
<title><?php echo TITLE; ?></title>
<base href="<?php echo (($request_type == 'SSL') ? HTTPS_SERVER : HTTP_SERVER) . DIR_WS_CATALOG; ?>">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body marginwidth="0" marginheight="0" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">
<!-- header //-->
<?php require(DIR_WS_INCLUDES . 'header.php'); ?>
<!-- header_eof //-->

<!-- body //-->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
  	<td class="col_left">
<!-- left_navigation //-->
<?php require(DIR_WS_INCLUDES . 'column_left.php'); ?>
<!-- left_navigation_eof //-->
	</td>
<!-- body_text //-->
    <td width="100%" class="col_center">
		<table border="0" width="100%" cellspacing="0" cellpadding="0">

		<tr><td>

<?php tep_draw_heading_top(901);?>

<?php new contentBoxHeading_ProdNew($info_box_contents);?>

<?php tep_draw_heading_top_1();?>

      <table cellpadding="0" cellspacing="0" border="0" width="100%">
				  <tr>
					<td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
				  </tr>
				  <tr>
					<td><table border="0" width="100%" cellspacing="0" cellpadding="2">
					  <tr>
						<td class="main"><?php echo TEXT_MAIN_MEMBER; ?></td>
					  </tr>
					</table></td>
				  </tr>
				  <tr>
					<td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
				  </tr>
				  <tr>
					<td>
                        <?php
                            $rs = tep_db_query('SELECT code from cards where enabled = 1');
                            while ($data = tep_db_fetch_array($rs)) {
                                echo '<div>'.constant('MEMBER_'.strtoupper($data['code'])).'<br /><br />
                                <img align="middle" src="'.DIR_WS_IMAGES.$data['code'].'.gif" alt="'.$data['code'].'" valign="absmiddle"> <a href="'.tep_href_link("members.php","action=buy_card&products_id=".$data['code']).'">'.tep_image_button('button_add_to_cart1.gif').'</a></div><br />';
                            }
                            echo TEXT_END;
                        ?>
					</td>
				  </tr>
	  </table>


<?php tep_draw_heading_bottom_1();?>

<?php tep_draw_heading_bottom();?>

			</td></tr>
		</table>
	</form></td>

<!-- body_text_eof //-->
    <td class="col_right">
<!-- right_navigation //-->
<?php require(DIR_WS_INCLUDES . 'column_right.php'); ?>
<!-- right_navigation_eof //-->
    </td>
  </tr>
</table>
<!-- body_eof //-->

<!-- footer //-->
<?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
<!-- footer_eof //-->
<br>
</body>
</html>
<?php require(DIR_WS_INCLUDES . 'application_bottom.php'); ?>