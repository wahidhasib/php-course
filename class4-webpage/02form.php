<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>

<body>
    <div class="container" style="margin-top: 50px;">
        <?php if (isset($_POST['fName']) && $_POST['fName'] != null) : ?>
            <p>First Name: <?= $_POST['fName']; ?></p>
        <?php endif ?>
        <?php if (isset($_POST['lName']) && $_POST['lName'] != null) { ?>
            <p>Last Name: <?= $_POST['lName']; ?></p>
        <?php } ?>
        <form action="" method="post">
            <label for="fName">First name</label>
            <input type="text" placeholder="First name..." name="fName" id="fName">


            <label for="lName">Last name</label>
            <input type="text" placeholder="First name..." name="lName" id="lName">

            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>