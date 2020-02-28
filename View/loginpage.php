<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login page</title>
</head>
<body>
<form method="post">
    <section>
        <label for="email">Email: </label>
        <input id="email" name="email" >
    </section>
    <section>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </section>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
<form method="get" action="http://mysql.local/">
    <button value="submit" name="homepage">Homepage</button>
</form>
</body>
</html>