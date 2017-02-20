<?php
	$money = $_GET["money"];
	$value1 = $_GET["value1"];
	$value2 = $_GET["value2"];

	if($value1=="PHP"){
		if($value2=="IDR"){
			$moneyexchange = $money*266.30;
		}else if($value2=="MYR"){
			$moneyexchange = $money*0.089;
		}else if($value2=="THB"){
			$moneyexchange = $money*0.70;
		}
	}else if($value1=="IDR"){
		if($value2=="PHP"){
			$moneyexchange = $money*0.0038;
		}else if($value2=="MYR"){
			$moneyexchange = $money*0.00033;
		}else if($value2=="THB"){
			$moneyexchange = $money*0.0026;
		}
	}else if($value1=="MYR"){
		if($value2=="IDR"){
			$moneyexchange = $money*2996.52;
		}else if($value2=="PHP"){
			$moneyexchange = $money*11.25;
		}else if($value2=="THB"){
			$moneyexchange = $money*7.86;
		}
	}else if($value1=="THB"){
		if($value2=="IDR"){
			$moneyexchange = $money*381.18;
		}else if($value2=="PHP"){
			$moneyexchange = $money*1.43;
		}else if($value2=="MYR"){
			$moneyexchange = $money*0.13;
		}
	}
	session_start();
	$_SESSION["afterexchange"] = $moneyexchange." ".$value2;
	$_SESSION["beforeexchange"] = $money." ".$value1;
	header("location:exchange.php");

?>