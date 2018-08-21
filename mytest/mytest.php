<?php

$str = $_SERVER['QUERY_STRING'];
parse_str($str);
//echo $branch;
if ($branch = 1) {
	$branch = "master";
}
//var_dump($branch);
$result = exec("ansible-playbook -i /home/deploy/ansible/hosts /home/deploy/ansible/deploy-erp-mytest.yml --extra-vars 'ansible_sudo_pass=yYbhh58R*Q' -e 'NODE=ali SITE=$branch'");
//$result = exec("echo 1 > /tmp/1");
//echo $result;
//exec("echo w");

/*
$handle = fopen("/tmp/ccccc", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        echo "<center>$line</center>";
    }

    fclose($handle);
} else {
        echo "<center>file can't opened</center>";
}

*/

?>
<center>DONE</center>
