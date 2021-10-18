<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require __DIR__ . '/../src/save.php';
        }
    ?>
    <ul>
    <?php if (!empty($errors)): ?>
    <?php foreach ($errors as $error): ?>
        <li><?= $error ?></li>
    <?php endforeach; ?>
    <?php endif; ?>
    </ul>
    <form method="post" action="/create">
        <label for="name">
            Name: 
            <input id="name" type="text" name="name" max="50" required value="<?= $_POST['name'] ?? '' ?>" />
        </label>
        <br />
        <label for="description">
            Description: 
            <textarea id="description" name="description" required><?= $_POST['description'] ?? '' ?></textarea>
        </label>
        <br />
        <label for="strength">
            Strength: 
            <input id="strength" type="number" name="strength" required value="<?= $_POST['strength'] ?? '' ?>" />
        </label>
        <br />
        <label for="constitution">
            Constitution: 
            <input id="constitution" type="number" name="constitution" required value="<?= $_POST['constitution'] ?? '' ?>" />
        </label>
        <br />
        <label for="dexterity">
            Dexterity: 
            <input id="dexterity" type="number" name="dexterity" required value="<?= $_POST['dexterity'] ?? '' ?>" />
        </label>
        <br />
        <input type="submit" value="Send" />
    </form>
</body>
</html>