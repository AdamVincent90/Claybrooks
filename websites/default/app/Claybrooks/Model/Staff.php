<?php
/**
 * Created by PhpStorm.
 * User: juddu
 * Date: 02/04/2020
 * Time: 13:09
 */

class Staff
{
    public $con;
    public $load;
    public $table;

    public function __construct()
    {
        $this->con = new Connection();
        $this->load = $this->con->open();
        $this->table = new DatabaseTable($this->load, 'staff', 'staff_id');

    }

        public function addStaff($record)
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


    public function loadStaff() {
        return $admins = $this->table->findAll();
    }

    public function loadSingleStaff($key1) {
        return $staff_result = $this->table->find('staff_id', $key1);
    }

    public function editStaff($key1)
    {

        if (password_verify($_POST['password'], $_SESSION['credential'])) {
            $this->table->update($key1);
            header('location: /admin/staff');
        } else {
            invalid();
        }
    }
    public function deleteStaff($id)
    {
        if (password_verify($_POST['password'], $_SESSION['credential'])) {
            $this->table->delete($id);
            header('location: /admin/staff');
        } else {
            invalid();
        }
    }

}