<?php
include 'config.php' ;

$sql = "SELECT * FROM Motors";
$result = $conn->query($sql);
$row = $result->fetch_assoc();



?>

<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script href="Js.js"></script>
    </head>

    <body class="bg-dark text-light">

    <div class="m-5 "><br></div>
        <div class="container ">
            <?php
            include_once 'robotController.php';
            ?>

            <form action="Upload.php" method="Post">
                <div class="form-group">

                    <table class="table table-secondary rounded text-dark  font-weight-bold">
                        <tr >
                            <td class="border-top-0" >
                                <label  for="M1" id="M1L">Motor 1 : 0 degree </label>
                            </td>

                            <td align="right" class="border-top-0">
                                <input  id="M1" type="range" value="<?php echo $row['Motor1'] ?>" min="-90" max="90" name="m1" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="M2" id="M2L">Motor 2 : 0 degree</label>
                            </td>
                            <td align="right">
                                <input id="M2" type="range" value="<?php echo $row['Motor2'] ?>" min="-90" max="90" name="m2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="M3" id="M3L">Motor 3 : 0 degree</label>
                            </td>
                            <td align="right">
                                <input id="M3" type="range" value="<?php echo $row['Motor3'] ?>" min="-90" max="90" name="m3">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="M4" id="M4L">Motor 4 : 0 degree</label>
                            </td >
                            <td align="right">
                                <input id="M4" type="range" value="<?php echo $row['Motor4'] ?>" min="-90" max="90" name="m4">
                            </td >
                        </tr>
                        <tr>
                            <td>
                                <label for="M5" id="M5L">Motor 5 : 0 degree</label>
                            </td>
                            <td align="right">
                                <input id="M5" type="range" value="<?php echo $row['Motor5'] ?>" min="-90" max="90" name="m5">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="M6" id="M6L">Motor 6 : 0 degree</label>
                            </td>
                            <td align="right" >
                                <input id="M6" type="range" value="<?php echo $row['Motor6'] ?>" min="-90" max="90" name="m6">

                            </td>
                        </tr>

                    </table>

                    <input id="TF" type="text" value="<?php echo $row['is_on'] ?>" min="-90" max="90" name="is_on" style="display: none">
                </div>



                <table class="table table-secondary rounded text-dark  font-weight-bold">
                    <tr >
                        <td class="border-top-0">
                            <button type="submit" class="btn btn-primary" style="display: inline-block" >Save</button>
                            <?php

                          if($row['is_on']){
                              echo " <button id=\"off\" type=\"button\" class=\"btn btn-danger \" style=\"display: inline-block\" onclick=\"setOff()\">Turn OFF !!</button>
                                     <button id = \"on\" type = \"button\" class=\"btn btn-success\" style = \"display: none\" onclick = \"setOn()\" > Turn ON !!</button >";
                          }else {

                            echo "<button id = \"on\" type = \"button\" class=\"btn btn-success\" style = \"display: inline-block\" onclick = \"setOn()\" > Turn ON !!</button >
                                   <button id=\"off\" type=\"button\" class=\"btn btn-danger \" style=\"display: none\" onclick=\"setOff()\">Turn OFF !!</button> " ;
                           }


                            ?>
                        </td>
                        <td class="border-top-0" align="right">
                            <?php
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            echo "<div   class=\" btn btn-success  justify-content-end\"   >Database Connected</div>";
                            ?>
                        </td>
                    </tr>
                </table>



            </form>







        </div>




    </body>
    <script>
        window.watsonAssistantChatOptions = {
            integrationID: "99200595-aac7-4c1d-aa87-f8806b636a14", // The ID of this integration.
            region: "eu-gb", // The region your integration is hosted in.
            serviceInstanceID: "571388a0-f2e4-46d9-8134-0ad4601e0827", // The ID of your service instance.
            onLoad: function(instance) { instance.render(); }
        };
        setTimeout(function(){
            const t=document.createElement('script');
            t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
            document.head.appendChild(t);
        });
    </script>

    <script>
    $M1 = document.getElementById('M1') ;
    $M2 = document.getElementById('M2') ;
    $M3 = document.getElementById('M3') ;
    $M4 = document.getElementById('M4') ;
    $M5 = document.getElementById('M5') ;
    $M6 = document.getElementById('M6') ;






       $M1.addEventListener('change',function (event) {

                $M1L = document.getElementById('M1L') ;

                $M1L.textContent= putin($M1L.textContent,$M1.value) ;
            })

        $M2.addEventListener('change',function (event) {

            $M2L = document.getElementById('M2L') ;

            $M2L.textContent= putin($M2L.textContent,$M2.value) ;
        })

        $M3.addEventListener('change',function (event) {

            $M3L = document.getElementById('M3L') ;

            $M3L.textContent= putin($M3L.textContent,$M3.value) ;
        })

        $M4.addEventListener('change',function (event) {

            $M4L = document.getElementById('M4L') ;

            $M4L.textContent= putin($M4L.textContent,$M4.value) ;
        })

        $M5.addEventListener('change',function (event) {

            $M5L = document.getElementById('M5L') ;

            $M5L.textContent= putin($M5L.textContent,$M5.value) ;
        })

        $M6.addEventListener('change',function (event) {

            $M6L = document.getElementById('M6L') ;

            $M6L.textContent= putin($M6L.textContent,$M6.value) ;
        })

window.addEventListener('load',function (event) {

    $M1L = document.getElementById('M1L') ;
        $M1L.textContent= putin($M1L.textContent,$M1.value) ;

    $M2L = document.getElementById('M2L') ;

    $M2L.textContent= putin($M2L.textContent,$M2.value) ;
    $M3L = document.getElementById('M3L') ;

    $M3L.textContent= putin($M3L.textContent,$M3.value) ;
    $M4L = document.getElementById('M4L') ;

    $M4L.textContent= putin($M4L.textContent,$M4.value) ;

    $M5L = document.getElementById('M5L') ;

    $M5L.textContent= putin($M5L.textContent,$M5.value) ;

    $M6L = document.getElementById('M6L') ;

    $M6L.textContent= putin($M6L.textContent,$M6.value) ;


    })

        function setOn() {

            document.getElementById('TF').value = 1 ;
            document.getElementById('on').disapled = true;
            document.getElementById('on').style = 'display:none';
            document.getElementById('off').style = 'display:inline-block';





        }

        function setOff() {

        document.getElementById('TF').value = 0  ;
        document.getElementById('off').disapled = true;
        document.getElementById('off').style = 'display:none';
        document.getElementById('on').style = 'display:inline-block';


        }

        function putin(Mystring , Myvalue) {
        $string1 = Mystring+"" ;
        $ourindex = $string1.indexOf(':') ;
        //$string2 = $string1.substring($ourindex +1 , Mystring.length) ;
        $string1 = $string1.substring(0 , $ourindex +1) ;


        return $string1+" "+Myvalue+" degree";

        }
    </script>

</html>