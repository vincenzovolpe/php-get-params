<?php
    /* Dichiaro una variabile con un testo */
    $testo = 'Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable'; $testo .= 'xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya! Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante'; $testo .= 'assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya! Ma la volpe col suo balzo ha'; $testo .= 'raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su';
    $testo .= 'güisqui y exclama: ¡Aleluya! Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama'; $testo .= 'alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya! Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel'; $testo .= 'vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya! Ma';
    $testo .= 'la $testovolpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable';
    $testo .= 'xenófobo $testo apasionado prueba su güisqui y exclama: ¡Aleluya!Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo';

    // Memorizzo laparola inserita come parametro GET
    $str_censurata = $_GET['stringa'];
    // Memorizzo la stringa da inserire nella parola da censurare in una variabile
    $str_nascosta = '***';
    // Utilizzo la funzione che mi sostituisce la parola censurata con gli asterischi
    $testo_censurato = str_replace($str_censurata, $str_nascosta, $testo);
?>
<h3>Testo originale</h3>
<p><?php echo $testo ?></p>
<h3>Testo con la parola <?php echo "'$str_censurata'" ?> censurata</h3>
<p><?php echo $testo_censurato ?></p>
