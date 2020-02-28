<form  method="post">
    <h1>make user</h1>
    <section>
        <label for="firstName">First name: </label>
        <input id="firstName" name="firstName" required>
    </section>
    <section>
        <label for="lastName">Last Name: </label>
        <input id="lastName" name="lastName" required>
    </section>
    <section>
        <label for="userName">Username: </label>
        <input id="userName" name="userName" required>
    </section>
    <section>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </section>
    <section>
        <label for="passwordConf">Password confirmation:</label>
        <input type="password" id="password" name="passwordConf" required>
    </section>
    <section>
        <label for="linkedin">Linkedin: </label>
        <input id="linkedin" name="linkedin" required>
    </section>
    <section>
        <label for="github">Github: </label>
        <input id="github" name="github" required>
    </section>
    <section>
        <label for="email">Email: </label>
        <input id="email" name="email" required>
    </section>
    <label for="preferred_language" > Choose language here</label>
    <select name="preferred_language">
        <option value="be">be</option>
        <option value="de">de</option>
        <option value="en">en</option>
        <option value="fr">fr</option>
        <option value="ru">ru</option>
    </select>
    <section>
        <label for="avatar">Avatar: </label>
        <input id="avatar" name="avatar" required>
    </section>
    <section>
        <label for="video">Video: </label>
        <input id="video" name="video" required>
    </section>
    <section>
        <label for="quote">Quote: </label>
        <input id="quote" name="quote" required>
    </section>
    <section>
        <label for="quote_author">Quote_author: </label>
        <input id="quote_author" name="quote_author" required>
    </section>
    <input type="submit" name="register" value="register">
</form>
<form method="post">
    <button value="submit" name="loginpage">login</button>
</form>