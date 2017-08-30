<?php
@ini_set("max_execution_time", 300);

/*
header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");
*/
header('content-type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers, Access-Control-Allow-Origin, Access-Control-Allow-Credentials, Authorization");

if( $_SERVER['REQUEST_METHOD'] == 'OPTIONS' ) die() ;


include 'inc/NamiConnector.php';
include 'inc/NamiAppConnector.php';

include 'inc/group.service.php';
include 'inc/group.class.php';

include 'inc/member.service.php';
include 'inc/member.class.php';

include 'inc/address.class.php';

include 'settings.php';

$stuff = list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) = explode(':', base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6)));
$username = $stuff[0];
$password = $stuff[1];


$nami = new NamiConnector(true, 'nami.dpsg.de', $settings_array["cookie_path"]);

$nami->login( array(

    "username"  => '78175',
    "password"  => 'eggarshill'

    )
);


$response = $nami->get_groups();

$groups = array();
foreach ( $response as $group ) {
    $group_service = new NamiGroupService( $group );

    /* Get information about the group */
    $group_info = $nami->get_group_info( $group_service->group->id );
    $group_service->save_detailed_data( $group_info );


    $nami->set_group_id( $group_service->group->id );

    /*
     * get all members from nami api
     */
    $members = $nami->get_members();
    $members_array = array();

    if ( is_array($members) ){
      foreach ( $members as $member ) {
          $member_service = new NamiMemberService( $member );
          $members_array[] = $member_service->get_member();
          $group_service->add_member( $member_service->member );
      }

    $groups[] = $group_service->group;
    //$groups[] = $group_service->group;
    }

}

echo json_encode( $groups );
