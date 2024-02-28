<?php










$section = $_GET["View"] ?? 'home';

if($section == 'about'){
    require_once "./Controller/AboutController.php";
}

// switch ($section) {
//     case 'about-us':
//          require_once('./Controller/HomeController.php');
//         break;
//     case 'contact':
//          require_once('./Controller/ContactController.php');
//         break;
//     default:
//          require_once('./Controller/HomeController.php');
//         break;
// }