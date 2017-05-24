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
    public $bank_info;
    public $gender;
    public $nickname;
    public $date_of_birth;
    public $nationality_description;
    public $last_name;
    public $entry_date;
    public $leaving_date;
    public $generic_field_2;
    public $fax;




    public function get_data(){
        return array(
            "first_job" => $this->first_job,
            "generic_field_1" => $this->generic_field_1,
            "version" => $this->version,
            "phone_3" => $this->phone_3,
            "phone_2" => $this->phone_2,
            "phone_1" => $this->phone_1,
            "descriptor" => $this->descriptor,
            "entry_id" => $this->entry_id,
            "nationality" => $this->nationality,
            "rover" => $this->rover,
            "scout" => $this->scout,
            "member_number" => $this->member_number,
            "reuse_flag" => $this->reuse_flag,
            "first_subdivision_id" => $this->first_subdivision_id,
            "first_name" => $this->first_name,
            "id" => $this->id,
            "wolf" => $this->wolf,
            "contribution_types" => $this->contribution_types,
            "grade" => $this->grade,
            "email" => $this->email,
            "confession" => $this->confession,
            "legal_representative_email" => $this->legal_representative_email,
            "fix_contribution" => $this->fix_contribution,
            "last_updated" => $this->last_updated,
            "status" => $this->status,
            "young_scout" => $this->young_scout,
            "member_type" => $this->member_type,
            "bank_info" => $this->bank_info,
            "gender" => $this->gender,
            "nickname" => $this->nickname,
            "date_of_birth" => $this->date_of_birth,
            "nationality_description" => $this->nationality_description,
            "last_name" => $this->last_name,
            "entry_date" => $this->entry_date,
            "leaving_date" => $this->leaving_date,
            "generic_field_2" => $this->generic_field_2,
            "fax" => $this->fax

        );
    }

}