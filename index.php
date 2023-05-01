<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <h2>Signup Form</h2>
        <form method="POST" action="create.php">
            <fieldset>
                <legend>Personal information:</legend>
                First name:<br>
                <input type="text" name="firstname">
                <br>
                Last name:<br>
                <input type="text" name="lastname">
                <br>
                Email:<br>
                <input type="email" name="email">
                <br>
                Password:<br>
                <input type="password" name="password">
                <br>
                Gender:<br>
                <input type="radio" name="gender" value="male">Male<br>
                <input type="radio" name="gender" value="female">Female<br>
                <br>
                <input type="submit" value="submit" name="submit">
            </fieldset>
        </form>
    </body>
</html>