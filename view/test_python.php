<?php
if (isset($_GET)) {
    print_r($_GET);
    $a = $_GET['foo'];
    $command = "./pyscripts/pytest.py?foo=" . $a;
    $output = exec($command);
    echo ('<br>');
    echo $output;
}
