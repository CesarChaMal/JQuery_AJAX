<?php
$post = (!empty($_POST)) ? true : false;
if($post){
	$name = stripslashes($_POST['link_id']);
	if($name=="link3"){
		echo '<div>
  			<p>This is the content of Contact US Page  </p>
  			<p>This is the content of Contact US Page  </p>
  		</div>';
	}
	else{
		echo 'Not the link3 !';
	}
}
else{
	echo 'Error !';
}
?>