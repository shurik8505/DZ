<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});



$cooling = new Cooling('Daewoo', '20,40,15', 2000, '1500');
$hot = new Heating('Samsung', '20,20,20', 1000, '10');
$vlaga = new Moisturizing('Aquamen', '90,60,90', 5000, '0.5');


echo $cooling->manual() . $cooling->info_class();
echo $hot->manual() . $hot->info_class();
echo $vlaga->manual() . $vlaga->info_class();