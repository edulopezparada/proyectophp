<?php
require_once 'Printable.php';

class BaseElement implements Printable {
    protected $title;
    public $description;
    public $visible = true;
    public $months;
    //Constructor
    public function  __construct($title, $description){
      $this->setTitle($title);
      $this->description = $description;
      
    }
    //Métodos
    public function setTitle($title){
      if($title == ''){
        $this->title = 'N/A';
      }else{
        $this->title = $title;
      }
    }
    public function getTitle(){
        return $this->title;

    }
    public function getDurationAsString(){
      $years = floor ($this->months / 12);
      $extraMonths = $this->months % 12;
      if($extraMonths != 0){
      return "$years years and $extraMonths months";
      }
      return "$years years";
    }
    public function getDescription(){
      return $this->description;
    }
}