<?php
class Job {
    private $title;
    public $description;
    public $visible;
    public $months;
    //Constructor
    public function  __construct($title, $description, $visible){
      $this->setTitle($title);
      $this->description = $description;
      $this->visible = $visible;
      

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
  
}
$job1 = new Job('SEO & Marketing Manager','I was working in all the marketing strategy and the google rank to Silmaplast madrid',true);
$job1->months = 16;

$job2 = new Job('C-Founder - Tradeando Futuros','This was an online trading academy, that his core course was about trading psicology', true );
$job2->months = 21;

$job3 = new Job('Web Developer - Local Max','Now I am working in Local Max, this company is specialize in Local Rank', true );
$job3->months = 21;

$jobs = [
    $job1,
    $job2,
    $job3
    // [
    //  'title' =>'SEO & Marketing Manager',
    //  'description' => 'I was working in all the marketing strategy and the google rank to Silmaplast madrid',
    //  'visible' => true,
    //  'months' => 16
    // ],
    // [  
    //   'title' => 'C-Founder - Tradeando Futuros',
    //   'description' => 'This was an online trading academy, that his core course was about trading psicology',
    //   'visible' => false,
    //   'months' => 21
    // ],
    // [
    //    'title' => 'Web Developer - Local Max',
    //    'description' => 'Now I am working in Local Max, this company is specialize in Local Rank',
    //    'visible' => true,
    //    'months' => 34
    // ],
    // [
    //   'title' => 'SEO Local Expert - Local Max',
    //   'description'=> 'I am specialized in local rank, t improve the visibility of local companies',
    //   'visible' => true,
    //   'months' => 12
    // ],
    // [
    //   'title' => 'Associate in Google',
    //   'visible' => true,
    //   'months' => 17
    // ]
  ];

  $languages = [
    [
        'Java','Pascal','R','HTML','PHP'  
    ],
    [
        'Español - Nativo', 'Portugués - Bilingue', 'Inglés - Profesional'   
    ]
  ];

  
  function printJob($job){
    if($job->visible == false){
      return;
      }
    echo '<li class="work-position">';
    echo '<h5>' .  $job->getTitle() . '</h5>';
    echo '<p>' . $job->description . '</p>';
    echo '<p>' .$job-> getDurationAsString() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo'</ul>'; 
    echo '</li>';
  }