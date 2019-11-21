 <?php

function autoLoad($class) {
        include_once "../classes/$class.php";
}

spl_autoload_register("autoLoad");