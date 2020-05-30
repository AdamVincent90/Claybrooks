<?php
/**
 * Created by PhpStorm.
 * User: Adam Vincent 16441282
 * Date: 26/02/2019
 * Time: 11:37
 */

// Controller is used to load the furniture related html.php files to the user. (Controller/Method)

class AnimalController extends ViewController
{
    public $load_animals = [];
    public $con;
    public $loading;
    public $argument;

    public function __construct()
    {
        $con = new Connection();
        $this->loading = $con->open();
        $this->argument = new DatabaseTable($this->loading, 'animal', 'animal_id');
    }

    public function main()
    {
        $this->layout('animal' . DIRECTORY_SEPARATOR . 'main', $this->argument->findAll());
        $this->layout->Load_Page();
    }

    public function species($key1)
    {
        $this->layout('animal' . DIRECTORY_SEPARATOR . 'species', $this->argument->find('species_name', $key1));
        $this->layout->Load_Page();
    }
}
