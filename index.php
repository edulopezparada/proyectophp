<?php
$name = 'Edu López';
$lastname = 'Parada';
$completename = "$name $lastname";
$limitMonths = 12;
$jobs = [
  [
   'title' =>'SEO & Marketing Manager',
   'description' => 'I was working in all the marketing strategy and the google rank to Silmaplast madrid',
   'visible' => true,
   'months' => 4
  ],
  [  
    'title' => 'C-Founder - Tradeando Futuros',
    'description' => 'This was an online trading academy, that his core course was about trading psicology',
    'visible' => false,
    'months' => 5
  ],
  [
     'title' => 'Web Developer - Local Max',
     'description' => 'Now I am working in Local Max, this company is specialize in Local Rank',
     'visible' => true,
     'months' => 2
  ],
  [
    'title' => 'SEO Local Expert - Local Max',
    'description'=> 'I am specialized in local rank, t improve the visibility of local companies',
    'visible' => true,
    'months' => 2
  ],
  [
    'title' => 'Associate in Google',
    'visible' => true,
    'months' => 12
  ]
];
$languages = [
  [
      'Java','Pascal','R','HTML','PHP'  
  ],
  [
      'Español - Nativo', 'Portugués - Bilingue', 'Inglés - Profesional'   
  ]
];
$var1 = 1;
if($var1 > 2){
echo 'es mayor que 2';
} else {
 echo 'no es mayor que 2';
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Resume</title>
</head>
<body>
  <div class="container">
    <div id="resume-header" class="row">
      <div class="col-3">
        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
      </div>
      <div class="col">
        <h1><?php echo $completename; ?></h1>
        <h2>WP Developer</h2>
        <ul>
          <li>Mail: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3c54595f48534e7c515d5550125f5351">[email&#160;protected]</a></li>
          <li>Phone: +34 664896835</li>
          <li>LinkedIn: https://linkedin.com</li>
          <li>Twitter: @edulopezp</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h2 class="border-bottom-gray" >Carrer Summary</h2>
        <p>
          <?php 
          
          ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div>
          <h3 class="border-bottom-gray" >Work Experience</h3>
          <ul>
          <?php
          $totalMonths=0;
          for($idy = 0; $idy < count($jobs); $idy++) {
            //$totalMonths = $totalMonths + $jobs[$idy]['months'];
            $totalMonths += $jobs[$idy]['months'];
            if($totalMonths > $limitMonths){
            break;
            }
            if(!$jobs[$idy]['visible']){
            continue;
            }
            echo '<li class="work-position">';
            echo '<h5>' .  $jobs[$idy]['title'] . '</h5>';
            echo '<p>' . $jobs[$idy]['description'] . '</p>';
            echo '<p>' . $jobs[$idy]['months'] . '</p>';
            echo '<strong>Achievements:</strong>';
            echo '<ul>';
            echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
            echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
            echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
            echo'</ul>'; 
            echo '</li>';
            
          } 
          ?>

          </ul>
        </div>
        <div>
            <h3 class="border-bottom-gray">Projects</h3>
            <div class="project">
                <h5>Project X</h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div>
            <div class="project">
                <h5>Project X</h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div>
          </div>
      </div>
      <div class="col-3">
        <h3 class="border-bottom-gray" >Skills & Tools</h3>
        <h4><?php echo $languages[0][0]; ?></h4>
        <h4><?php echo $languages[0][1]; ?></h4>
        <h4><?php echo $languages[0][2]; ?></h4>

        <ul>
          <li> <?php echo $languages[0][4]; ?></li>
        </ul>
        <h4>Frontend</h4>
        <ul>
            <li><?php echo $languages[0][3]; ?></li>
        </ul>
        <h3 class="border-bottom-gray" >Languages</h3>
        <ul>
          <li><?php echo $languages[1][0]; ?></li>
          <li><?php echo $languages[1][1]; ?></li>
          <li><?php echo $languages[1][2]; ?></li>
        </ul>
      </div>
    </div>
    <div id="resume-footer" class="row">
      <div class="col">
          Designed by @edulopezp
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>
</body>

</html>