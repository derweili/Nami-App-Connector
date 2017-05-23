<?php


class NamiGroup {

    public $descriptor;
    public $dissolution_date;
    public $creditorIdentification;
    public $level;
    public $level_id;
    public $email;
    public $fax;
    public $fibu_debitor_konto;
    public $fibu_profit_konto;
    public $group_number;
    public $founding_date;
    public $id;
    public $name;
    public $number;
    public $parent_group_name;
    public $parent_group_id;
    public $selected_records_ids;
    public $residence;
    public $contact;
    public $website;
    public $status;
    public $status_id;
    public $phone;
    public $members;

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