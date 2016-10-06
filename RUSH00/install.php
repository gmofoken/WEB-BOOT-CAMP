
<?php
    // Name of the sql file to inport
    $filename = './Alt_audio.sql';
    // MySQL host
    $my_host = '127.0.0.1';
    // MySQL username
    $my_username = 'root';
    // MySQL password
    $my_password = 'cmgg1320';
    // Database name
    $my_database = 'Alt_audio';
    // Connect to MySQL server
    $con = mysql_connect($my_host, $my_username, $my_password) or die('Error connecting to MySQL server: ' . mysql_error());
    // Create database
    if (mysql_query("CREATE DATABASE Alt_audio",$con))
    {
        echo "Database created";
    }
    // Select database
    mysql_select_db($my_database) or die('Error selecting MySQL database: ' . mysql_error());
    // Temporary variable, used to store current query
    $templine = '';
    // Read in entire file
    $lines = file($filename);
        // Loop through each line
        foreach ($lines as $line_num => $line) {
        // Only continue if it's not a comment
        if (substr($line, 0, 2) != '--' && $line != '') {
            // Add this line to the current segment
            $templine .= $line;
            // If it has a semicolon at the end, it's the end of the query
            if (substr(trim($line), -1, 1) == ';') {
                // Perform the query
                mysql_query($templine) or print('Error performing query \'<b>' . $templine . '</b>\': ' . mysql_error() . '<br /><br />');
                // Reset temp variable to empty
                $templine = '';
            }
        }
    }
?>