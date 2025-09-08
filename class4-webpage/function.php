<?php
function isChecked($inputName, $value)
{
    if (isset($_REQUEST[$inputName]) && is_array($_REQUEST[$inputName]) && in_array($value, $_REQUEST[$inputName])) {
        echo "checked";
    }
}


function showBooks($books, $selecteBooks)
{
    foreach ($books as $book) {
        $selected = "";
        if (in_array($book, $selecteBooks)) {
            $selected = "selected";
        }
        printf("<option value='%s' %s>%s</option>", strtolower($book), $selected, ucwords($book));
    }
}
