#!/usr/bin/php
<?php

// { "keys": ["super+shift+o"], "command": "filter_through_command", "args": { "cmdline": "~/shortshell/bin/st_open_url.php" } }

$line = trim(fgets(STDIN));

preg_match_all("!https?://[^\s']+[a-z0-9]!i", $line, $matches);

foreach ($matches[0] as $match) {
    system("open '" . $match . "'");
}

echo $line . "\n";
?>
