<!--login-handler.php-->
<?php

//****************************************************define functions *************************************************
/**
 * Setup login data
 *
 * @return mixed Register data
 */
function setup_login_data(){
    $loginData['loginUsersname'] = sanitize_input($_POST['loginUsersname']);
    $loginData['loginPassword'] = sanitize_password($_POST['loginPassword']);
    return $loginData;
}

//****************************************************define functions end**********************************************

//****************************************************Handler start*****************************************************
if(isset($_POST['loginButton'])){
    //Login form submitted
    $loginData = setup_login_data();
    $wasSuccess = $account->login($loginData);
    if($wasSuccess){
        $_SESSION['userLoggedIn'] = $loginData['loginUsersname'];
        header('Location: index.php');
    }
}

//****************************************************Handler end*******************************************************