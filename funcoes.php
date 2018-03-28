<?php
function startCounter(){
	// Inicia o contador
    list($usec, $sec) = explode(' ', microtime());
    $script_start = (float) $sec + (float) $usec;
}

function endCounter(){
	// Finaliza o "contador"
    list($usec, $sec) = explode(' ', microtime());
    $script_end = (float) $sec + (float) $usec;
    $elapsed_time = round($script_end - $script_start, 5);
    // Exibimos uma mensagem
    echo '<br />Elapsed time: ', $elapsed_time, ' secs. Memory usage: ', round(((memory_get_peak_usage(true) / 1024) / 1024), 2), 'Mb';
}
?>