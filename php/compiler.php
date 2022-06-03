<?php
include 'var.php';

$fileName = $argv[1];
$code = file_get_contents($fileName);
$count = 0;

while ($count < strlen($code)) {
    if ($code[++$count] = "p") {
        if ($code[++$count] = "r") {
            if ($code[++$count] = "i") {
                if ($code[++$count] = "n") {
                    if ($code[++$count] = "t") {
                        if ($code[$count] = "(") {
                            while (isset($code[++$count]) and $code[$count] != ")") {
                                echo $code[$count];
                            }
                        }
                    }
                }
            }
        }
    }
    if ($code[++$count] = "i") {
        if ($code[++$count] = "n") {
            if ($code[++$count] = "t") {
                if ($code[++$count] = " ") {
                    while (isset($code[++$count]) and $code[$count] != "=") {
                        
                    }
                }
            }
        }
    }
}
