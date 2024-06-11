<?php
switch ($components) {
    case "dangxuat":
        require_once CONTROLS . "dangxuat.php";
        break;
    case "goimon":
        require_once CONTROLS . "goimon.php";
        break;
    case "gioithieu":
        require_once CONTROLS . "gioithieu.php";
        break;
    default:
        $filename = "home";
        break;
}

