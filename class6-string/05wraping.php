<?php
$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, ut velit? Velit facere, optio illum sunt esse soluta cumque! Ducimus praesentium quia, ab consequuntur doloribus distinctio non nihil veniam corporis.";

echo wordwrap($string, 25); //wrap the text and intert into a new line
echo wordwrap($string, 25, "\n", true); //if a single word is more than the limit automatically wrap it
