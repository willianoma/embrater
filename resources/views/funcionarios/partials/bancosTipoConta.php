<select id="TipoConta-field" name="banco_tipo" class="form-control">
	<?php 

	$lista  = [ 
	"ContaSalario" =>"Conta Salario",
	"ContaCorrente" =>"Conta Corrente",
	"ContaPoupanca" =>"Conta Poupanca",
	"Outra" =>"Outra",
	];

	foreach ($lista as $key => $value) {

		if(isset($funcionario)){

			if ($value == $funcionario->banco_tipo){
				echo "<option selected=''>";	
				echo $value;
				echo " </option>";
			}else{
				echo "<option>";
				echo $value;

				echo " </option>";
			}
		}else{
			echo "<option>";
			echo $value;

			echo " </option>";
		}
	}

	?>

</select>