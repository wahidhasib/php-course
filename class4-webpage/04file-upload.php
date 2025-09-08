<?php
$allowTypes = [
    "image/png",
    "image/jpg",
    "image/jpeg",
];

if (!empty($_FILES['image']) && $_FILES['image']['size'] < 15 * 1024 * 1024) {
    if (in_array($_FILES['image']['type'], $allowTypes)) {
        move_uploaded_file($_FILES['image']['tmp_name'], "files/" . $_FILES['image']['name']);
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
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" class="form-control" multiple>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>