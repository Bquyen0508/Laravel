<h1> Học Laravel với Unicode</h1>
<?php
    if(env('APP_ENV')=='production'){
        //Call api live
        echo 'call api live';
    }
    else{
        //Call api sandbox
        echo 'Call api sandbox';
    }
?>