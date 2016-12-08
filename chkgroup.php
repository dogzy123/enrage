<?php 

	function checkgroup($group_id) {
		if ($group_id == 1) {
			return $g_admin;
		} else {
			return $g_user;
		}
	}


?>