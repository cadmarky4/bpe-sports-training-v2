<?php // Forms Grid
$PATH_2_rgikBOGeTxNzMAcrsrFnIQzQaNXenZTY = '../';
require_once($PATH_2_rgikBOGeTxNzMAcrsrFnIQzQaNXenZTY.'_settings.regmon.php');
require($PATH_2_rgikBOGeTxNzMAcrsrFnIQzQaNXenZTY.'login/validate.php');

if (!$ADMIN AND !$LOCATION_ADMIN AND !$GROUP_ADMIN AND !$GROUP_ADMIN_2) exit;
?>
<script type="text/javascript" src="forms/js/grid.forms.js<?=$G_VER;?>"></script>
<table id="forms" alt=""></table>
<div id="Fpager"></div>
