<?php
function program($file, $node, $site) {
    $branch = (isset($_POST['branch'])&&$_POST['branch'])?$_POST['branch']:"master";
    $result='';
    exec("cd /home/deploy/ansible/ && ansible-playbook -i hosts $file --extra-vars 'ansible_sudo_pass=yYbhh58R*Q' -e 'NODE=$node BRANCH=$branch SITE=$site'", $result);
    foreach ($result as $list) {
	echo "<center>$list</center>";
	}
} 

function command($host, $command) {

    exec("cd /home/deploy/ansible/ && ansible -i hosts $host -m shell -a '$command' -s --extra-vars 'ansible_sudo_pass=yYbhh58R*Q'", $result);
    foreach ($result as $list) {
	echo "<center>$list</center>";
    }
	
}
?>
