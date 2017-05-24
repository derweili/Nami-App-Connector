<?php
@ini_set("max_execution_time", 300);


include 'inc/NamiConnector.php';
include 'inc/NamiAppConnector.php';

include 'inc/group.service.php';
include 'inc/group.class.php';

include 'inc/member.service.php';
include 'inc/member.class.php';

include 'inc/address.class.php';

include 'settings.php';



echo '<pre>';

$nami = new NamiConnector(true, 'nami.dpsg.de', $settings_array["cookie_path"]);

$nami->login( array(

    "username"  => $settings_array["nami_user"],
    "password"  => $settings_array["nami_password"]

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

    foreach ( $members as $member ) {
        $member_service = new NamiMemberService( $member );
        $members_array[] = $member_service->get_member();
        $group_service->add_member( $member_service->member );
    }

    $groups[] = $group_service->group;
}

echo json_encode( $groups );
