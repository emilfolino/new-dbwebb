<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$content = file_get_contents('repos.json');
$repos = json_decode($content, true);

foreach ($repos as $repoName => $repoUrl) {
    $output = shell_exec("bash clone_and_move.bash {$repoName} {$repoUrl}");

    print($output);
}
