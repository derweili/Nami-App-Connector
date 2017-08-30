<?php
header('content-type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers, Access-Control-Allow-Origin, Access-Control-Allow-Credentials, Authorization");

if( $_SERVER['REQUEST_METHOD'] == 'OPTIONS' ) die() ;


if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo json_encode(
      array(
        'username' => 'login',
        'password' => '1234'
      )
    );
    die('please login');
    exit;
} else {


}



$stuff = list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) = explode(':', base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6)));
$username = $stuff[0];
$password = $stuff[1];


include 'inc/NamiConnector.php';
include 'inc/NamiAppConnector.php';

include 'inc/group.service.php';
include 'inc/group.class.php';

include 'inc/member.service.php';
include 'inc/member.class.php';

include 'inc/address.class.php';


$nami = new NamiConnector(true, 'nami.dpsg.de', $settings_array["cookie_path"]);

$login = $nami->login( array(

    "username"  => $username,
    "password"  => $password

    )
);

if($login && is_array($login) && $login["statusCode"] == 0){

  $return = array(
    'success' => true,
  );

}else{
  $return = array(
    'success' => false,
    'error' => $login
  );
}

echo json_encode($return);
