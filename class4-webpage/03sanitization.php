<?php
include_once "function.php";
?>
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
        <?php
        $fName = $lName = $checked = $select = "";
        $fruits = $sBooks = [];
        $books = ['bangla', 'english', 'story', 'poem'];

        if (isset($_REQUEST['fName']) && $_REQUEST['fName'] != null) {
            $fName = filter_input(INPUT_POST, 'fName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        if (isset($_REQUEST['lName']) && $_REQUEST['lName'] != null) {
            // $lName = htmlspecialchars($_REQUEST['lName']);
            $lName = filter_input(INPUT_POST, 'lName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if (isset($_REQUEST['cb1']) && $_REQUEST['cb1'] != null) {
            // $lName = htmlspecialchars($_REQUEST['lName']);
            $checked = $_REQUEST['cb1'];
        }
        if (isset($_REQUEST['fruits']) && $_REQUEST['fruits'] != null) {
            // $lName = htmlspecialchars($_REQUEST['lName']);
            $fruits = $_REQUEST['fruits'];
        }
        if (isset($_REQUEST['book']) && $_REQUEST['book'] != null) {
            $select = $_REQUEST['book'];
            echo $select;
        }
        if (isset($_POST['books']) && is_array($_POST['books']) && count($_POST['books']) > 0) {
            $sBooks = array_map('htmlspecialchars', $_POST['books']);
        }
        ?>

        <?php
        if (isset($_REQUEST['fName']) && $_REQUEST['fName'] != null) { ?>
            <p>First Name: <?= $fName; ?></p>
        <?php }

        if (isset($_REQUEST['lName']) && !empty($_REQUEST['lName'])) { ?>
            <p>Last Name: <?= $lName; ?></p>
        <?php } ?>

        <?php
        if (isset($_POST['books']) && count($_POST['books']) > 0) {
            printf("You are selected %s", join(", ", $sBooks));
        } ?>

        <form action="" method="post">
            <label for="fName">First name</label>
            <input type="text" placeholder="First name..." name="fName" id="fName" value="<?= $fName ?>">


            <label for="lName">Last name</label>
            <input type="text" placeholder="First name..." name="lName" id="lName" value="<?= $lName ?>">

            <input type="checkbox" value="checked" name="cb1" <?php echo $checked ?>><br>

            <label for="">Select Some Fruits</label>

            <input type="checkbox" value="mango" name="fruits[]" id="mango" <?= isChecked("fruits", "mango") ?>>
            <label class="label-inline" for="mango">Mango</label>
            <input type="checkbox" value="banana" name="fruits[]" id="banana" <?= isChecked("fruits", 'banana') ?>>
            <label class="label-inline" for="banana">Banana</label>
            <input type="checkbox" value="apple" name="fruits[]" id="apple" <?= isChecked("fruits", 'apple') ?>>
            <label class="label-inline" for="apple">Apple</label>
            <br>

            <select name="books[]" id="book" multiple>
                <option selected disabled>Select a Option</option>
                <?php
                showBooks($books, $sBooks);
                ?>
            </select>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>