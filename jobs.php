<?php
class Job {
    private $title;
    public $description;
    public $visible;
    public $months;

    public function setTitle($title){
        $this->title = $title;
    }
    public function getTitle(){
        return $this->title;

    }
  
}
$job1 = new Job();
$job1->setTitle('SEO & Marketing Manager');
$job1->description = 'I was working in all the marketing strategy and the google rank to Silmaplast madrid';
$job1->visible = true;
$job1->months = 16;

$job2 = new Job();
$job2->setTitle('C-Founder - Tradeando Futuros');
$job2->description = 'This was an online trading academy, that his core course was about trading psicology';
$job2->visible = true;
$job2->months = 21;



$jobs = [
    $job1,
    $job2
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

  function getDuration($months){
    $years = floor ($months / 12);
    $extraMonths = $months % 12;
    if($extraMonths != 0){
    return "$years years and $extraMonths months";
    }
    return "$years years";
  }
  
  function printJob($job){
    if($job->visible == false){
      return;
      }
    echo '<li class="work-position">';
    echo '<h5>' .  $job->getTitle() . '</h5>';
    echo '<p>' . $job->description . '</p>';
    echo '<p>' . getDuration($job->months) . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo'</ul>'; 
    echo '</li>';
  }