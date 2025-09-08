<?php
// if (isset($_POST['submit'])) { //? need to use name="submit" on submit btn
//     echo "Form is submitted!";
// }

$allowTypes = [
    "image/jpg",
    "image/png",
    "image/jpeg",
];

if ("POST" === $_SERVER['REQUEST_METHOD']) {
    if (!empty($_FILES['image'])) {
        $files = $_FILES['image']; // store multiple files

        for ($i = 0; $i < count($files['name']); $i++) {
            if (in_array($files['type'][$i], $allowTypes) && $files['size'][$i] < 5 * 1024 * 1024) {
                move_uploaded_file($files['tmp_name'][$i], "files/" . $files['name'][$i]);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="">
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="fName">First Name</label>
                        <input type="text" placeholder="First name..." id="fName" name="fName" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="lName">Last Name</label>
                        <input type="text" placeholder="Last name..." id="lName" name="lName" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="image">Last Name</label>
                        <input type="file" id="image" name="image[]" class="form-control" multiple>
                    </div>
                    <div class="form-group mt-2">
                        <input type="submit" class="btn btn-primary"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>