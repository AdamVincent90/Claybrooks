<?php
/**
 * Created by PhpStorm.
 * User: juddu
 * Date: 02/04/2020
 * Time: 13:10
 */

class Admin
{
    public $con;
    public $load;
    public $table;

    public function __construct()
    {
        $this->con = new Connection();
        $this->load = $this->con->open();
        $this->table = new DatabaseTable($this->load, 'admin', 'admin_id');

    }

    public function addAdmin($record)
    {
        {
            try {
                if ($record['password'] === $_POST['confirm_password']) {
                    $record['password'] = password_hash($record['password'], PASSWORD_DEFAULT);

                    $this->table->save($record);
                }
            } catch (\http\Exception\InvalidArgumentException $e) {
                $e->getMessage();
            }
        }
    }

    public function loadAdmin() {
        return $admins = $this->table->findAll();
    }
}