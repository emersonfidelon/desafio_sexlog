<?php 
/**
 * Encontrar o numero primo da 10001º posição
 */

$cont = 0;
$primo = 0;
$number = 1;
while ($cont < 10001) {
	$number += 1;
	if (ehPrimo($number)) {
		$primo = $number;
		$cont += 1;
	}
}

print "O primo na 10001º posição é: " . $primo . "\n";

/**
 * [ehPrimo] Função para verificar se um determinado numero é primo
 * @param  [int] $num Numero inteiro a ser testado
 * @return [booleam] Retorna verdadeiro ou falso
 */
function ehPrimo($num){
	if($num == 2 || $num == 3 || $num == 5 || $num == 7){
		return true;
	}else{
		if($num % 2 != 0){
			for($i = 3; $i <= sqrt($num); $i += 2){
				if($num%$i==0){ 
					return false;
				}
			}
			return true;
		}else{
			return false;
		}
	} 
}