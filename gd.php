<?php
    if (extension_loaded("gd")) {
        print_r(gd_info());
    } else {
        print_r("No GD!");
    }
?>