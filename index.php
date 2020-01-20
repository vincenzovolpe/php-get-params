<?php
    // Inserisco il testo da processare in una variabile
    $testo = <<<EOT
  Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya! Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya! Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya! Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya! Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya! Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya!Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo
EOT;

    echo '<h3>Testo originale</h3>';
    echo '<p>'.$testo.'</p>';

    // Memorizzo laparola inserita come parametro GET
    $str_censurata = $_GET['stringa'];
    // Memorizzo la stringa da inserire nella parola da censurare in una variabile
    $str_nascosta = '***';

        if (isset($str_censurata)) {

            if (strpos($testo, $str_censurata) > 0) {
                // Utilizzo la funzione che mi sostituisce la parola censurata con gli asterischi
                $testo_censurato = str_replace($str_censurata, $str_nascosta, $testo);
                echo '<h3>Testo con la parola "'.$str_censurata.'" censurata</h3>';
                echo '<p>'.$testo_censurato.'</p>';
            } else {
                echo '<h4>La parola "'.$str_censurata.'" non è presente nel testo</h4>';
            }
        }

?>
