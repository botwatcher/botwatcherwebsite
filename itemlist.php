<?php 
$table = fopen("botwatcherwebsite/listings.csv", "a"); # select row to write at end of file
$count = array_count_values($table)

foreach ($_POST as $value){
   $newrow = array( #create the row containing all answers
        $Ref= $count+1;
        $Title=echo($_POST["Title"]);
        $Description=echo($_POST["Description"]);
        $Contact=echo($_POST["Contact"]);
        $Email=echo($_POST["Email"]);
        $Types=echo($_POST["Prop", "Costume", "Wanted", "Service"]);
        $Image=echo($_POST["Image"]);
        $Unlisted=echo($_POST["Unlisted"]);
    )
    fputcsv($table, $newrow, ',', '"', '')
    fclose($table)
}

$allistings= fopen("listings.csv", "r") # read-only, start at the start
fgetscsv($allistings)
?>