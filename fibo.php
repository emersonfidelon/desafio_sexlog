<?php 
/**
 * Sequência de Fibonacci em PHP
 *
 */
 
//função que gera a sequência de fibonacci e retorna em array
function fibonacci($q){
	if($q >= 2){ 
		$f = [0,1]; 
		for($i = 2; $i < $q; $i++){
			$f[$i] = $f[$i-1] + $f[$i-2];		
		}
		return $f;
	}
	return ($q == 1) ? [1] : [];
}
 
//exibindo e somando os primeiros 50 números da sequência de fibonacci
$fib = fibonacci(50, true);
$soma = 0;
foreach($fib as $v){
	$soma += $v;
	echo (end($fib) == $v) ? $v : $v.', ';	
}
print "\nA soma dos números é: ".$soma."\n";
?>