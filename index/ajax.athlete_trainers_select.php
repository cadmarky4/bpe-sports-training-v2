<?php // ajax Athlete Trainers Select 
$PATH_2_rgikBOGeTxNzMAcrsrFnIQzQaNXenZTY = '../';
require_once($PATH_2_rgikBOGeTxNzMAcrsrFnIQzQaNXenZTY.'_settings.regmon.php');
require($PATH_2_rgikBOGeTxNzMAcrsrFnIQzQaNXenZTY.'login/validate.php');

$group_id = (int)($_POST['group_id'] ?? false);
$trainer_id = (int)($_POST['trainer_id'] ?? false);
if (!$group_id OR !$trainer_id) exit;


$html = '';

//Select Trainers in Group with Access Accepted by User-$UID
$rows = $db->fetch("SELECT u.id, u.lastname, u.firstname FROM users2groups u2g 
JOIN users u ON (u.id = u2g.user_id AND u.level > 10 AND u.status = 1) 
JOIN users2trainers u2t ON (u.id = u2t.trainer_id AND u2g.group_id = u2t.group_id AND u2t.status = 1 AND u2t.user_id = ?) 
WHERE u2g.group_id = ? AND u2g.status = 1 ORDER BY u.id", array($UID, $group_id)); 
//print_r($rows); 
if ($db->numberRows() > 0) {
	$html = '<label for="TRN_select" style="font-size:17px;">'.$LANG->LVL_TRAINER.' : &nbsp; </label><select name="TRN_select" id="TRN_select">';
	$html .= '<option value=""></option>';
	foreach ($rows as $row) {
		$selected = '';
		if ($trainer_id == $row['id']) $selected = ' selected';
		$html .= '<option value="'.$row['id'].'"'.$selected.'>'.$row['firstname'].' &nbsp; '.$row['lastname'].' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </option>';
	}
	$html .= '</select>';
}
else {
	$html = '<div class="empty_message">'.$LANG->TRAINER_NOT_AVAILABLE.'</div>';
	///html = 'NO_TRAINERS';
}

echo $html;
?>
<?php /*<script>jQuery(function(){ init_Athlete__Trainers_Select(); });</script>*/?>
