<?php
require_once 'config.php' ;



if(isset($_POST['value'])){
    $val = $_POST['value'];

    $sql = "UPDATE movement SET move_to = '$val' WHERE movement.id = 1;" ;

    if ($conn->query($sql) === TRUE) {
        echo " record Updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();



}
else {

    echo "no post here " ;

}

