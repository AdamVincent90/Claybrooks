<?php
/**
 * Created by PhpStorm.
 * User: juddu
 * Date: 02/04/2020
 * Time: 13:09
 */

class News
{
    public $con;
    public $load;
    public $table;

    public function __construct()
    {
        $this->con = new Connection();
        $this->load = $this->con->open();
        $this->table = new DatabaseTable($this->load, 'news', 'news_id');

    }

    public function addNews($record) {
        $this->table->save($record);
    }

    public function loadNews() {
        return $admins = $this->table->findAll();
    }
}