<?php
if ( ! function_exists('age_calculator')) {
	function age_calculator($dob) {
		if (isset($dob) && !empty($dob) && strtotime($dob) > 0) {
			$today = date("Y-m-d");
			$diff = date_diff(date_create($dob), date_create($today));
			return $diff->format('%y');
		}
	}
}
?>

