<?php
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES['image']['name']);

$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
echo $imageFileType;
