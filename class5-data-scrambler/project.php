<?php
include_once "function.php";

$task = "encode";
$originalKey = "";
$key = "abcdefghijklmnopqrstuvwxyz1234567890";

if (isset($_GET['task']) && $_GET['task'] != '') {
    $task = $_GET['task'];
}

if ("key" ===  $task) {
    $keyOriginal = str_split($key);
    shuffle($keyOriginal);
    $key = join('', $keyOriginal);
} else {
    if (isset($_POST['key']) && $_POST['key'] != '') {
        $key = $_POST['key'];
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
            <div class="col-lg-6 mx-auto">
                <div class="mb-3">
                    <h2>Data Scrambler</h2>
                    <p>Use this application to scramble your data</p>
                    <div class="mt-3">
                        <a href="<?= $_SERVER['PHP_SELF'] ?>?task=encode" class="text-decoration-none">Encode</a> |
                        <a href="<?= $_SERVER['PHP_SELF'] ?>?task=decode" class="text-decoration-none">Decode</a> |
                        <a href="<?= $_SERVER['PHP_SELF'] ?>?task=key" class="text-decoration-none">Genarate Key</a>
                    </div>
                </div>
                <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="key">Key</label>
                        <input type="text" placeholder="Key..." id="key" name="key" class="form-control" value="<?php displayKey($key) ?>">
                    </div>
                    <div class="form-group mt-3">
                        <label for="data">Data</label>
                        <textarea name="data" id="data" class="form-control" placeholder="Data..."></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="result">Result</label>
                        <textarea name="result" id="result" class="form-control" placeholder="Result..."></textarea>
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