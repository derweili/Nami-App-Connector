<?php

class NamiGroupService{

    public $group;


    function __construct( $data ){

        $this->group = new NamiGroup();
        $this->save_data( $data );
    }

    public function save_data( $data ){
        $this->group->descriptor = $data["descriptor"];
        $this->group->name = $data["name"];
        $this->group->id = $data["id"];
        $this->group->members = array();

    }

    public function save_detailed_data( $data ) {

        $this->group->disolution_date = $data["aufloesungsDatum"];
        $this->group->creditorIdentification = $data["creditorIdentification"];
        $this->group->level = $data["ebene"];
        $this->group->level_id = $data["ebeneId"];
        $this->group->email = $data["email"];
        $this->group->fax = $data["faxNummer"];
        $this->group->fibu_debitor_konto = $data["fibuDebitorKonto"];
        $this->group->fibu_profit_konto = $data["fibuErloesKonto"];
        $this->group->group_number = $data["grpNummer"];
        $this->group->id = $data["id"];
        $this->group->name = $data["name"];
        $this->group->number = $data["nummer"];
        $this->group->parent_group_name = $data["parentGruppierung"];
        $this->group->parent_group_id = $data["parentGruppierungId"];
        $this->group->selected_records_ids = $data["selected_records_ids"];
        $this->group->founding_date = $data["gruendungsDatum"];
        $this->group->website = $data["webUrl"];

    }

    public function get_group(){
        return $this->group->get_data();
    }


    public function add_member( $member ){

        $this->group->members[] = $member;

    }


}
