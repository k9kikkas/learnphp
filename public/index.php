<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}
function dump(...$mars) {
    echo '<pre>';
    var_dump(...$mars);
    echo '</pre>';
}

spl_autoload_register(function ($class){
    $class = substr($class,4);
    $class = str_replace('\\', '/', $class);
    require_once __DIR__ . "/../src/$class.php";
});

use App\Controllers\PublicController as PC;

// require_once __DIR__ . '/../src/Router.php';
// require_once __DIR__ . '/../src/DB.php';
$controller = new PC();
$router = new App\Router();
$db = new App\DB();
dump($router, $db);

// switch($_SERVER['REQUEST_URI']) {
//     case '/':
//         $title = 'World';
//         $posts = [
//             [
//                 'title' => 'Some world title 1', 
//                 'content' => 'Some world content 1', 
//                 'date' => 'Jan 1, 2026', 
//                 'author' => 'Pets',
//             ],
//             [
//               'title' => 'Some world title 2', 
//               'content' => 'Some world content 2', 
//               'date' => 'Nov 29, 2023', 
//               'author' => 'Steve',
//             ],
//             [
//               'title' => 'Some world title 3', 
//               'content' => 'Some world content 3', 
//               'date' => 'May 20, 2009', 
//               'author' => 'Alex',
//             ],
//             [
//               'title' => 'Some world title 4', 
//               'content' => 'Some world content 4', 
//               'date' => 'Sept 13, 2018', 
//               'author' => 'Tommi sularaha',
//             ],
//         ];
//         include __DIR__ . '/../views/index.php';
//         break;
//     case '/us':
//         $title = 'U.S';
//         $posts = [
//             [
//                 'title' => 'Some U.S title 1', 
//                 'content' => 'Some U.S content 1', 
//                 'date' => 'Jan 1, 2026', 
//                 'author' => 'Pets',
//             ],
//             [
//                 'title' => 'Some U.S title 2', 
//                 'content' => 'Some U.S content 2', 
//                 'date' => 'Nov 29, 2023', 
//                 'author' => 'Steve',
//             ],
//             [
//                 'title' => 'Some U.S title 3', 
//                 'content' => 'Some U.S content 3', 
//                 'date' => 'May 20, 2009', 
//                 'author' => 'Alex',
//             ],
//             [
//                 'title' => 'Some U.S title 4', 
//                 'content' => 'Some U.S content 4', 
//                 'date' => 'Sept 13, 2018', 
//                 'author' => 'Tommi sularaha',
//             ],
//         ];
//         include __DIR__ . '/../views/us.php';
//         break;
//     case '/tech':
//         $title = 'Tech';
//         $posts = [
//             [
//               'title' => 'Some Tech title 1', 
//               'content' => 'Some Tech content 1', 
//               'date' => 'Jan 1, 2026', 
//               'author' => 'Pets',
//             ],
//             [
//               'title' => 'Some Tech title 2', 
//               'content' => 'Some Tech content 2', 
//               'date' => 'Nov 29, 2023', 
//               'author' => 'Steve',
//             ],
//             [
//               'title' => 'Some Tech title 3', 
//               'content' => 'Some Tech content 3', 
//               'date' => 'May 20, 2009', 
//               'author' => 'Alex',
//             ],
//             [
//               'title' => 'Some Tech title 4', 
//               'content' => 'Some Tech content 4', 
//               'date' => 'Sept 13, 2018', 
//               'author' => 'Tommi sularaha',
//             ],
//         ];
//         include __DIR__ . '/../views/tech.php';
//         break;
//     default:
//         echo '404';
// }