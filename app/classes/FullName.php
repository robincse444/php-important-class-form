<?php


namespace App\classes;


class FullName
{
   public $firstName;
   public $lastName;
   protected $fullName;

   public function __construct($data)
{

    $this->firstName = $data['first_name'];
    $this->lastName  = $data['last_name'];
}
   public function index()
   {
       //$_GET{'pages'}='full-name';
      header('Location: action.php?pages=full-name&&a=b');
   }
   public function getFullName()
   {
       $this->fullName = $this->firstName.' '.$this->lastName;
       return $this->fullName;
   }

}