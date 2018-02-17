<?php
		$nomi = htmlentities(addslashes($_POST['a']));
		$ubi = htmlentities(addslashes($_POST['b']));
		$tli = htmlentities(addslashes($_POST['c']));
		$emi = htmlentities(addslashes($_POST['d']));
		$n_ei = htmlentities(addslashes($_POST['e']));
		$fi = htmlentities(addslashes($_POST['fg']));
		$hi = htmlentities(addslashes($_POST['hi']));
		$t_incidentesi=htmlentities(addslashes($_POST['j']));
		$c_di =htmlentities(addslashes($_POST['k']));
		$b_di =htmlentities(addslashes($_POST['l']));
		$ejecui =htmlentities(addslashes($_POST['m']));
		$d_i =htmlentities(addslashes($_POST['n']));
		$c_ai =htmlentities(addslashes($_POST['o']));
		$ctidadi =htmlentities(addslashes($_POST['p']));
		$f_ai =htmlentities(addslashes($_POST['q']));
		$soi =htmlentities(addslashes($_POST['r']));
		$comi =htmlentities(addslashes($_POST['s']));



		if($nomi == "" && $ubi == "" && $tli = "" && $emi == "" && $fi =="" && $hi == "" && $t_incidentesi == "" && $d_i =="" && $ejecui =="" && $c_ai == "" && $ctidadi = "" && $f_ai = ""){
				  header("Location:../index.php");
		}

	try {
		$base = new PDO('mysql:host=nombre_host;dbname=nombre_bd',"usuario", "contrasena");
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET utf8");

		$sql = "INSERT INTO info_incidentes (
		nombre, 
		direcion, 
		telefono,
		email, 
		n_empresa,
		fecha,
		hora, 
		tipo_incidente, 
		c_detecto, 
		breve_d_inc, 
		ejec, 
		dur_inci, 
		c_activos, 
		criticidad,
		f_activo, 
		so, 
		comen) VALUES (
		:nomb, 
		:ubi, 
		:tel,
		:email,
		:n_emp,
		:fech,
		:hora,
		:t_inc,
		:c_det,
		:breve,
		:eje,
		:dur,
		:canti,
		:crit,
		:f_act,
		:so,
		:comen)";

		$resul = $base->prepare($sql);

		$resul->execute(array(
			":nomb"=>$nomi,
			":ubi"=>$ubi, 
			":tel"=>$tli, 
			":email"=>$emi, 
			":n_emp"=>$n_ei, 
			":fech"=>$fi, 
			":hora"=>$hi,
			":t_inc"=>$t_incidentesi,
			":c_det"=>$c_di,
			":breve"=>$b_di, 
			":eje"=>$ejecui, 
			":dur"=>$d_i,
			":canti"=>$c_ai, 
			":crit"=>$ctidadi,
			":f_act"=>$f_ai, 
			":so"=>$soi,
			":comen"=>$comi));

	} catch (PDOException $e) {
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
