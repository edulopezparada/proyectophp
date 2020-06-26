<?php
require 'app/Models/job.php';
require 'app/Models/project.php';

$job1 = new Job('SEO & Marketing Manager','I was working in all the marketing strategy and the google rank to Silmaplast madrid');
$job1->months = 16;

$job2 = new Job('C-Founder - Tradeando Futuros','This was an online trading academy, that his core course was about trading psicology');
$job2->months = 21;

$job3 = new Job('Web Developer - Local Max','Now I am working in Local Max, this company is specialize in Local Rank' );
$job3->months = 21;

$project1 = new Project('Project 1','Description 1');

$jobs = [
    $job1,
    $job2,
    $job3
  ];

$projects = [
  $project1
];

  $languages = [
    [
        'Java','Pascal','R','HTML','PHP'  
    ],
    [
        'Español - Nativo', 'Portugués - Bilingue', 'Inglés - Profesional'   
    ]
  ];

  
  function printElement($job){
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