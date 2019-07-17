<?php
function execPrint($command) {
	echo $command;
    $result = array();
    exec($command, $result);
    foreach ($result as $line) {
        print($line . "\n");
    }
}
// Print the exec output inside of a pre element
print("<pre>" . execPrint("git pull https://github.com/atal-prateek/php-rest-api.git master") . "</pre>");
?>