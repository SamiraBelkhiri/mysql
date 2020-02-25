<?php
declare(strict_types=1);

//include 'connection.php'

?>

<html>
<head><meta charset="utf-8">
</head>
<body>

<h1>New user please subscribe</h1>
<form  method="post">

        <p>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name">
        </p>
        <p>
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name">
        </p>
        <p>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </p>
        <p>
            <label for="github">Github:</label>
            <input type="text" name="github" id="github">
        </p>
        <p>
            <label for="linkedin">Linkedin:</label>
            <input type="text" name="linkedin" id="linkedin">
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </p>

        <p>
            <label for="preferred_language">Preferred Language:</label>
            <input type="text" name="preferred_language" id="preferred_language">
        </p>
        <p>
            <label for="avatar">Avatar:</label>
            <input type="text" name="avatar" id="avatar">
        </p>
        <p>
            <label for="video">Video:</label>
            <input type="text" name="video" id="video">
        </p>

        <p>
            <label for="quote">Quote:</label>
            <input type="text" name="quote" id="quote">
        </p>
        <p>
            <label for="quote_author">Quote Author:</label>
            <input type="text" name="quote_author" id="quote_author">
        </p>


        <input type="submit" value="submit" name="submit">


</form>

</body>
</html>
