<?php
	$user=$_GET['txtdata'];
	function validate($user)
	{
		if($user==NULL)
		{
			return "Username should not null";
		}
		else
		{
			if(strlen($user)<3)
			return "Too short username";
		}
		return "Valid Username";
	}
	echo validate($user);
?>
