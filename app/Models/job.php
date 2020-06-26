<?php
require_once 'BaseElement.php';
require_once 'Printable.php';


class Job extends BaseElement implements Printable{
    public function __construct($title, $description){
         $newTitle = 'Job: ' . $title;
         $this->title = $newTitle;
         //parent::__construct($title, $description);

    }
    public function getDurationAsString(){
        $years = floor ($this->months / 12);
        $extraMonths = $this->months % 12;
        if($extraMonths != 0){
        return "Job duration : $years years and $extraMonths months";
        }
        return "$years years";
      }
      public function getDescription(){
        return $this->description;
      }
}