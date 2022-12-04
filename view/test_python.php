<?php
if (isset($_GET)) {
    print_r($_GET);
    $a = $_GET['foo'];
    $command = "python ../pyscripts/pytest.py " . $a;
    echo ("<br>Das Kommando das ausgeführt wird: $command<br>");
    $output = shell_exec($command);
    echo ('<br>');
    echo $output;
}
?>