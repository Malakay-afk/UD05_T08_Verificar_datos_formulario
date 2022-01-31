<?php
    header('Content-Type: text/html; charset=UTF-8');
    echo "<pre>"; print_r($_REQUEST);echo "</pre>";

    $nomeCompleto= htmlspecialchars(trim(strip_tags($_REQUEST['nomeCompleto'])), ENT_QUOTES, "ISO-8859-1");
?>