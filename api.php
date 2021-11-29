<?php
    //1. DB Connection Open
    $conn = mysqli_connect('localhost','root','','ecom3_db') or die('Could not connect');

   // $data = json_decode( file_get_contents('php://input') ); 
    //Check if the data is comming

    //var_dump( $_GET);
    //Registration Data
    if( (isset($_GET['action'])) && ($_GET['action'] == 'registration')    ){
        //echo 'OK';
        //Always Filter/Sanitize the incomming data
        $email = mysqli_real_escape_string($conn,$_GET['e']);
        $password = mysqli_real_escape_string($conn,$_GET['p']);

        //Now hash the pass with SHA512 --- 128
        $hashed_password = hash('sha512',$password);

        //2. Build the query
        $sql = "INSERT INTO users_tbl(`email`,`password`)VALUES('$email','$hashed_password')";
        
        //3. Execute the query

        mysqli_query($conn,$sql) or die(mysqli_error($conn));

        //4. Display/Return the result
        echo '200';
        exit;
    }
    
    //Login data


    //Product Data



    //5. DB Connection Close
    mysqli_close($conn);
?>