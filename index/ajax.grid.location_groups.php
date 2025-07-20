<?php // Location Groups Grid
$PATH_2_rgikBOGeTxNzMAcrsrFnIQzQaNXenZTY = '../';
require_once($PATH_2_rgikBOGeTxNzMAcrsrFnIQzQaNXenZTY.'_settings.regmon.php');
require($PATH_2_rgikBOGeTxNzMAcrsrFnIQzQaNXenZTY.'login/validate.php');

if (!$ADMIN AND !$LOCATION_ADMIN AND !$GROUP_ADMIN AND !$GROUP_ADMIN_2) exit;

$location_id = (int)($_POST['location_id'] ?? false);
if (!$location_id) exit;
?>
<script type="text/javascript" src="index/js/grid.location_groups.js<?=$G_VER;?>"></script>
<table id="location_groups" alt="<?=$LANG->LOCATION_GROUPS;?>"></table>
<div id="SGpager"></div>
