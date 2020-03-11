<?php
if(isset($_POST)){
    if(isset($_POST['rankArray'])){
		$ranks = $_POST['rankArray'];
		echo "Thank you for answering! your answers were as follows:\n\n";
		for($i = 0;$i<count($ranks); $i++){
			$j = $i + 1;
			echo ("Article $j was $ranks[$i] \n");
		}
}
}
?>