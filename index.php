<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Organs</title>
</head>

<body bgcolor="#ffccb3">
    <h1>Organ harvesting farm inc</h1>
    <div>
        <h2>Welcome to our farm</h2>
        <p>We are a farm that harvests organs from people and sells them to the highest bidder</p>
    </div>

    <form action='organs.php' method="POST">
        <label for="name">Name:</label>
        <br>
        <input type="text" id="name" name="name" required placeholder="Enter your name">
        <br><br>

        <label for="email">Email:</label>
        <br>
        <input type="email" id="email" name="email" required placeholder="Enter your email">
        <br><br>

        <label for="phone">Phone:</label>
        <br>
        <input type="text" id="phone" name="phone" required placeholder="Enter your phone">
        <br><br>

        <label for="organ">Organ:</label>
        <br>
        <input type="text" id="organ" name="organ" required placeholder="Enter the organ"><br><br>

        <input type="submit" name="Submit" id="submit" />
    </form>
</body>
</html>
