<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require 'Controller/HomePageController.php';
require 'Model/connection.php';
require 'Model/Post.php';

$controller = new HomePageController();
$controller->render($_POST);
$pdo = openConnection();

$statement = $pdo->query("SELECT first_name, last_name, email, preferred_language FROM student");
foreach ($statement as $storedInformation):

    ?>

    <tr>
        <td><h3>Information</h3></td>
    </tr>
    <tr>
        <td>First name: </td>
        <td><?php echo $storedInformation['first_name'] ?></td>
    </tr>
    <tr>
        <td>Last name: </td>
        <td><?php echo $storedInformation['last_name'] ?></td>
    </tr>
    <tr>
        <td>Email: </td>
        <td><?php echo $storedInformation['email'] ?></td>
    </tr>
    <tr>
        <td>
            <img src="<?php echo 'Images/' . $storedInformation['preferred_language'] . '.png' ?>" alt="flag">
        </td>
    </tr>
    <tr>
        <td><a href=""></a>Profile</td>
    </tr>

<?php endforeach; ?>
</table>
