<?php

class NamiMemberService{

    public $member;


    function __construct( $data ){

        $this->member = new NamiMember();
        $this->save_data( $data );
    }

    public function save_data( $data ){
        $this->member->first_job = $data["entries_ersteTaetigkeitId"];
        $this->member->generic_field_1 = $data["entries_genericField1"];
        $this->member->version = $data["entries_version"];
        $this->member->phone_3 = $data["entries_telefon3"];
        $this->member->phone_2 = $data["entries_telefon2"];
        $this->member->phone_1 = $data["entries_telefon1"];
        $this->member->descriptor = $data["descriptor"];
        $this->member->entry_id = $data["entries_id"];
        $this->member->nationality = $data["entries_staatsangehoerigkeit"];
        $this->member->rover = $data["entries_rover"];
        $this->member->scout = $data["entries_pfadfinder"];
        $this->member->member_number = $data["entries_mitgliedsNummer"];
        $this->member->reuse_flag = $data["entries_wiederverwendenFlag"];
        $this->member->first_subdivision_id = $data["entries_ersteUntergliederungId"];
        $this->member->first_name = $data["entries_vorname"];
        $this->member->id = $data["id"];
        $this->member->wolf = $data["entries_woelfling"];
        $this->member->contribution_types = $data["entries_beitragsarten"];
        $this->member->grade = $data["entries_stufe"];
        $this->member->email = $data["entries_email"];
        $this->member->confession = $data["entries_konfession"];
        $this->member->legal_representative_email = $data["entries_emailVertretungsberechtigter"];
        $this->member->fix_contribution = $data["entries_fixBeitrag"];
        $this->member->last_updated = $data["entries_lastUpdated"];
        $this->member->status = $data["entries_status"];
        $this->member->young_scout = $data["entries_jungpfadfinder"];
        $this->member->member_type = $data["entries_mglType"];
        $this->member->bank_info = $data["entries_kontoverbindung"];
        $this->member->gender = $data["entries_geschlecht"];
        $this->member->nickname = $data["entries_spitzname"];
        $this->member->date_of_birth = $data["entries_geburtsDatum"];
        $this->member->nationality_description = $data["entries_staatangehoerigkeitText"];
        $this->member->last_name = $data["entries_nachname"];
        $this->member->entry_date = $data["entries_eintrittsdatum"];
        $this->member->leaving_date = $data["entries_austrittsDatum"];
        $this->member->generic_field_2 = $data["entries_genericField2"];
        $this->member->fax = $data["entries_telefax"];

    }

    public function save_detailed_data( $data = array() ) {

        if ( ! empty( $data ) && isset( $data["id"] ) && $this->member->id == $data["id"] ){
            $this->member->disolution_date = $data["aufloesungsDatum"];
            $this->member->creditorIdentification = $data["creditorIdentification"];
            $this->member->level = $data["ebene"];
            $this->member->level_id = $data["ebeneId"];
            $this->member->email = $data["email"];
            $this->member->fax = $data["faxNummer"];
            $this->member->fibu_debitor_konto = $data["fibuDebitorKonto"];
            $this->member->fibu_profit_konto = $data["fibuErloesKonto"];
            $this->member->group_number = $data["grpNummer"];
            $this->member->id = $data["id"];
            $this->member->name = $data["name"];
            $this->member->number = $data["nummer"];
            $this->member->parent_group_name = $data["parentGruppierung"];
            $this->member->parent_group_id = $data["parentGruppierungId"];
            $this->member->selected_records_ids = $data["selected_records_ids"];
            $this->member->selected_records_ids = $data["selected_records_ids"];
        }
    }

    public function get_member(){
        return $this->member->get_data();
    }


}