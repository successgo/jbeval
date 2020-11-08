<?php

$home_dir = getenv('HOME');
$ide_path = $home_dir . '/.config/JetBrains/WebStorm2020.2';

// 1 remove eval/*.key
$key = $ide_path . '/eval/WebStorm202.evaluation.key';
if (file_exists($key)) {
    unlink($key);
}

// 2 remove all properties named `evl*` in options/other.xml
exec("sed -i /evl.*/d {$ide_path}/options/other.xml");

// 3 clear cache
exec("rm -rf {$home_dir}/.java/.userPrefs/jetbrains/webstorm");

// 4 clear all device id related with jetbrains
exec("sed -i /JetBrains.UserIdOnMachine/d {$home_dir}/.java/.userPrefs/prefs.xml");
exec("sed -i /device_id/d {$home_dir}/.java/.userPrefs/jetbrains/prefs.xml");
exec("sed -i /user_id_on_machine/d {$home_dir}/.java/.userPrefs/jetbrains/prefs.xml");
