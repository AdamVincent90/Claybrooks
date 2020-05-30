<?php
/**
 * Created by PhpStorm.
 * User: juddu
 * Date: 01/04/2020
 * Time: 20:24
 */

class SponsorRequest {

    public $con;
    public $load;
    public $table;

    public function __construct()
    {
        $this->con = new Connection();
        $this->load = $this->con->open();
        $this->table = new DatabaseTable($this->load, 'sponsor_request', 'sponsor_id');

    }

    public function addRequest($record) {
        $this->table->save($record);
    }

    public function loadRequest() {
        return $requests = $this->table->find('status', 'pending');
}

    public function editRequest($record)
    {
        $this->table->save($record);
    }


    public function loadResponded() {
        return $requests = $this->table->find('NOT status', 'pending');
    }
}