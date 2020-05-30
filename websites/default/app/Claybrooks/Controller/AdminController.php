<?php
/**
 * Created by PhpStorm.
 * User: Adam Vincent 16441282
 * Date: 26/02/2019
 * Time: 23:06
 */

// Controller is used to load the admin related html.php files to the user. (Controller/Method)

class AdminController extends ViewController
{
    public function home()
    {
        $this->layout('admin' . DIRECTORY_SEPARATOR . 'home');
        $this->layout->Load_Page();
    }

    public function staff($key1 = "")
    {
        $this->layout('admin' . DIRECTORY_SEPARATOR . 'staff', $key1);
        $this->layout->Load_Page();
    }

    public function addStaff($key1 = "")
    {
        $this->layout('admin' . DIRECTORY_SEPARATOR . 'addstaff', $key1);
        $this->layout->Load_Page();
    }

    public function animals()
    {
        $this->layout('admin' . DIRECTORY_SEPARATOR . 'animals');
        $this->layout->Load_Page();
    }

    public function editanimal($key1 = "")
    {
        $this->layout('admin' . DIRECTORY_SEPARATOR . 'editanimal', $key1);
        $this->layout->Load_Page();
    }

    public function editStaff($key1 = "")
    {
        $this->layout('admin' . DIRECTORY_SEPARATOR . 'editstaff', $key1);
        $this->layout->Load_Page();
    }

    public function addRecord($key1 = "")
    {
        $this->layout('admin' . DIRECTORY_SEPARATOR . 'addrecord', $key1);
        $this->layout->Load_Page();
    }

    public function species($key1 = "")
    {
        $this->layout('admin' . DIRECTORY_SEPARATOR . 'species', $key1);
        $this->layout->Load_Page();
    }

    public function records($key1 = "")
    {
        $this->layout('admin' . DIRECTORY_SEPARATOR . 'records', $key1);
        $this->layout->Load_Page();
    }

    public function news($key1 = "")
    {
        $this->layout('admin' . DIRECTORY_SEPARATOR . 'news', $key1);
        $this->layout->Load_Page();
    }

    public function editspecies($key1 = "")
    {
        $this->layout('admin' . DIRECTORY_SEPARATOR . 'editspecies', $key1);
        $this->layout->Load_Page();
    }

    public function addAnimal($key1 = "")
    {
        $this->layout('admin' . DIRECTORY_SEPARATOR . 'addanimal', $key1);
        $this->layout->Load_Page();
    }

    public function hiddenAnimals($key1 = "")
    {
        $this->layout('admin' . DIRECTORY_SEPARATOR . 'hiddenanimals', $key1);
        $this->layout->Load_Page();
    }

    public function addspecies($key1 = "")
    {
        $this->layout('admin' . DIRECTORY_SEPARATOR . 'addspecies', $key1);
        $this->layout->Load_Page();
    }

    public function archive($key1 = "")
    {
        $this->layout('admin' . DIRECTORY_SEPARATOR . 'archive', $key1);
        $this->layout->Load_Page();
    }

    public function createadmin($key1 = "")
    {
        $this->layout('admin' . DIRECTORY_SEPARATOR . 'createadmin', $key1);
        $this->layout->Load_Page();
    }

}