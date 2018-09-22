
<?php   
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $ch = curl_init();

    $curlConfig = array(
        CURLOPT_URL            => "https://web.njit.edu/~cta5/cs490/middle.php",
        CURLOPT_POST           => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS     => array(
        'username' => $username,
        'password' => $password,
        )
    );

    curl_setopt_array($ch, $curlConfig);

    $result = curl_exec($ch);
 if (curl_error($ch)) {
    $error_msg = curl_error($ch);
}
    curl_close($ch);

    //$json = json_decode($result);
    echo $result;
    
//    if($json->njit == 1){
//        echo "njit sucess";
//    }else if($json->db == 1) {
//        echo "db sucess";
//    }

    

?>