<?php
function program($file, $node) {
	$str = $_SERVER['QUERY_STRING'];
	parse_str($str);
	if ($branch = 1) {
		$branch = "master";
	}
	$result='';
	exec("ansible-playbook -i /home/deploy/ansible/hosts /home/deploy/ansible/$file --extra-vars 'ansible_sudo_pass=yYbhh58R*Q' -e 'NODE=$node SITE=$branch'", $result);
	foreach ($result as $list) {
		echo "<center>$list</center>";
	}
}

program("deploy-erp-mytest.yml", "ali");

?>
