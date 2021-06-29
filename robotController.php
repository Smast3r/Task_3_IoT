<?php




?>

<form action="robotController.php" method="post" >
    <div class="controller justify-content-center table-responsive panel panel-default">
        <table class="table table-borderless  w-100 rounded bg-light ">
            <tr >

                <td align="center " class="col-4">

                </td>
                <td align="center " class="col-4 justify-content-center mx-auto">
                    <button id="bt1" class="btn btn-light p-0 " type="button" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="25%" height="25%" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
                            <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/>
                        </svg>
                    </button>
                </td>
                <td align="center " class="col-4">

                </td>

            </tr>
            <tr >
                <td align="center " class="col-4">
                    <button class="btn btn-light p-0" type="button" id="bt2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25%" height="25%" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                            <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                        </svg>
                    </button>

                </td>
                <td align="center " class="col-4">
                    <button class="btn btn-light p-0" type="button" id="bt3" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="25%" height="25%" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                            <path d="M7.5 1v7h1V1h-1z"/>
                            <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                        </svg></button>
                </td>

                <td align="center " class="col-4 " >
                    <button class="btn btn-light p-0 " type="button" id="bt4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25%" height="25%" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                            <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                        </svg>
                    </button>

                </td>
            </tr>
            <tr >
                <td align="center " class="col-4">

                </td>
                <td align="center " class="col-4">
                    <button class="btn btn-light p-0 " type="button" id="bt5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25%" height="25%" fill="currentColor" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </button>

                </td>
                <td align="center " class="col-4" >

                </td>
            </tr>
        </table>


    </div>

</form>



<script>
    let $called = 0;

    $('#bt1').click(function(){
        console.log("whatever")
        $.post("movement.php",
            {
                value: "UP"

            },
            function(data , status){
                console.log("Data : "+data+ "\nStatus: " + status);
            });
    });

    $('#bt2').click(function(){
        console.log("whatever")
        $.post("movement.php",
            {
                value: "LEFT"

            },
            function(data , status){
                console.log("Data : "+data+ "\nStatus: " + status);
            });
    });
    $('#bt3').click(function(){

        $val = "START" ;
        if($called%2){
            $val = "STOP" ;
        }
        $.post("movement.php",
            {
                value: $val

            },
            function(data , status){
                console.log("Data : "+data+ "\nStatus: " + status);
            });
        $called++ ;
    });
    $('#bt4').click(function(){
        console.log("whatever")
        $.post("movement.php",
            {
                value: "RIGHT"

            },
            function(data , status){
                console.log("Data : "+data+ "\nStatus: " + status);
            });
    });
    $('#bt5').click(function(){
        console.log("whatever")
        $.post("movement.php",
            {
                value: "DOWN"

            },
            function(data , status){
                console.log("Data : "+data+ "\nStatus: " + status);
            });
    });


</script>