<?php
switch ($components) {
    case "dangxuat":
        require_once CONTROLS . "dangxuat.php";
        break;
    case "admin":
        require_once CONTROLS . "admin.php";
        break;
    case "danhmuc":
        require_once CONTROLS . "danhmuc.php";
        break;
    default:
        $filename = "home";
        break;
}
