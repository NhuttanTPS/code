<?php
switch ($components) {
    case "dangxuat":
        require_once CONTROLS . "dangxuat.php";
        break;
    case "admin":
    default:
        $filename = "home";
        break;
}

