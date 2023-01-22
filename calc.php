<?php
    $pNumero = floatval($_GET['txtPNumero']);
    $sNuemro = floatval($_GET['txtSNumero']);
    $soma = $pNumero + $sNuemro;
    echo "Soma: <b>" . $soma . "</b>";
?>