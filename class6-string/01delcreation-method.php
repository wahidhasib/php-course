<?php
// ? A string literal can be specified in frour different ways

/**
 * single quetes ('')
 * double quetes ("")
 * heredoc syntax ()
 * nowdoc syntax ()
 */

echo 'this is a simple string' . PHP_EOL;
echo 'this is a simple string', PHP_EOL; // we can use both . and , to insert the text next line

// single quetes allows multiple line (as it is print with tabs and black space)
echo 'You can also have embedded newlines in
            strings this way as it is
okay to do', PHP_EOL;

// ? sometimes we need to use single quetes into the declearation with single quetes string then we use (\) forward slash to skip the next single quetes

echo 'Arnold once said: "I\'ll be back"', PHP_EOL;


echo 'You deleted C:\*.*?', PHP_EOL;
echo 'You deleted C:\\*.*?', PHP_EOL;


// ? single quetes not allowed any variable into the ' '
echo 'Variables do not $expand $either', PHP_EOL;

//echo "Hello\nworld \n"; // output break into a new line
//echo "Hello\tworld \n"; // horizental tab between two words
//echo "Hello\rworld"; // tab between two words
//echo "Hello\vworld"; // tab between two words



echo <<<END
      a
     b
    c

    gyg
\n
END;

echo ord('A') . "\n"; // return the ascii key of A
echo chr(97); // return the ascii value of 97 is a
