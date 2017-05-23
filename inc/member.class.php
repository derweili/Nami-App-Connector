<?php


class NamiMember {

    public $first_job;
    public $generic_field_1;
    public $version;
    public $phone_3;
    public $phone_2;
    public $phone_1;
    public $descriptor;
    public $entry_id;
    public $nationality;
    public $rover;
    public $scout;
    public $member_number;
    public $reuse_flag;
    public $first_subdivision_id;
    public $first_name;
    public $id;
    public $wolf;
    public $contribution_types;
    public $grade;
    public $email;
    public $confession;
    public $legal_representative_email;
    public $fix_contribution;
    public $last_updated;
    public $status;
    public $young_scout;
    public $member_type;



    public function get_data(){
        return array(
            "dissolution_date" => $this->dissolution_date,
            "creditorIdentification" => $this->creditorIdentification,
            "level" => $this->level,
            "email" => $this->email,
            "fax" => $this->fax,
            "fibu_debitor_konto" => $this->fibu_debitor_konto,
            "fibu_profit_konto" => $this->fibu_profit_konto,
            "group_number" => $this->group_number,
            "founding_date" => $this->founding_date,
            "id" => $this->id,
            "name" => $this->name,
            "number" => $this->number,
            "parent_group_name" => $this->parent_group_name,
            "parent_group_id" => $this->parent_group_id,
            "selected_records_ids" => $this->selected_records_ids,
            "residence" => $this->residence,
            "contact" => $this->contact,
            "website" => $this->website,
            "status" => $this->status,
            "status_id" => $this->status_id,
            "phone" => $this->phone,
            "members" => $this->members,

        );
    }

}