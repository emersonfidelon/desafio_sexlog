<?php
/**
 * Alfabeto brasilero
 * @return array
 */
function alfabeto() {
	return ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
}

/**
 * Chave para descriptografar o email
 * @param  int $prova1 [valor obtido com 10001º numero primo]
 * @param  int $prova2 [valor da soma dos 50 primeiro numeros da serie de fibonacci]
 * @return int         [posição 5 e 6 soma dos dois parametros invertidas]
 */
function chave($prova1, $prova2){
	$soma_provas = $prova1+$prova2;
	$arr_soma_provas = str_split("$soma_provas");

	return $arr_soma_provas[6].$arr_soma_provas[5];
}

/**
 * Descriptografa o email
 * @param  string $str [email a ser descriptografado]
 * @return string      [email já descriptografado]
 */
function descript($str){
	
	$chave = chave(20365011073, 104743);

	$alfabeto = alfabeto();

	$str = str_split($str);
	$email = "";

	foreach ($str as $key => $value) {
		if (!in_array($value, ['3','4','0','@','.'])) {
			foreach ($alfabeto as $k => $letras) {
				if ($value == $letras) {
					
					$decript = ($k+$chave);
					
					if ($decript >= 26) {
						$decript = $decript - 26;
					}
					
					$email .= $alfabeto[$decript];
				}
			}
		}else{
			$email .= $value;
		}
	}

	return $email;
}

print descript("b3rdcigpi4pv0gp@htmadv.rdb") . "\n";

