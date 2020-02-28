<?php
declare(strict_types = 1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<header>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</header>
<body>

<div class="card w-25 mx-autotext-center">
    <img src="<?php echo '../Assets/Images/' . $information['preferred_language'] . '.png' ?>" alt="flag">
    <div class="card-body">
        <h5 class="card-title"><?php echo $information['first_name'] .' '. $information['last_name'] ?></h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?php echo $information['username']?></li>
        <li class="list-group-item"><a href="<?php echo $information['linkedin']?>" class="btn btn-primary">LinkedIn</a></li>
        <li class="list-group-item"><a href="<?php echo $information['github']?>" class="btn btn-primary">Github</a></li>
        <li class="list-group-item"><?php echo $information['email']?></li>
        <li class="list-group-item"><?php echo $information['preferred_language']?></li>
        <li class="list-group-item"><a href="<?php echo $information['video']?>" class="btn btn-primary">Video</a></li>
        <li class="list-group-item"><?php echo $information['quote']?></li>
        <li class="list-group-item"><?php echo $information['quote_author']?></li>
        <li class="list-group-item"><?php echo $information['created_at']?></li>
    </ul>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>