<?php // ajax Note Delete
$PATH_2_rgikBOGeTxNzMAcrsrFnIQzQaNXenZTY = '../';
require_once($PATH_2_rgikBOGeTxNzMAcrsrFnIQzQaNXenZTY.'_settings.regmon.php');
require($PATH_2_rgikBOGeTxNzMAcrsrFnIQzQaNXenZTY.'login/validate.php');

$ID = isset($_POST['ID']) ? abs($_POST['ID']) : false; //abs fix negative ID
$group_id = (int)($_POST['group_id'] ?? false);
$athlete_id = (int)($_POST['athlete_id'] ?? false);

if ($ID AND $group_id AND $athlete_id) 
{
	$delete = $db->delete("notes", "user_id = ? AND group_id = ? AND id = ?", array($athlete_id, $group_id, $ID));

	if ($delete) {
		echo 'OK';
	}
	else {
		echo 'ERROR';
	}
}
else {
	echo 'ERROR';
}
?>