<?php
class Generateur
{
	public function aleatoire($nb_caractere){
			$string = "";
            $chaine = "a3bc2def9ghi0jk6lm1nop7qrs5tuv8wxyz4";
            srand((double)microtime()*1000000);

            for ($i=0; $i <$nb_caractere ; $i++) { 
        	    $string .= $chaine[rand()%strlen($chaine)];
            }
        return $string;
	}
}