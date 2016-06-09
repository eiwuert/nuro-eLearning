<style media="screen">
h3, h5 {
  text-shadow: 1px 1px #333333;
}
</style>
<?php

function time_elapsed_string($datetime, $full = false) {
  $today = time();
  $createdday= strtotime($datetime);
  $datediff = abs($today - $createdday);
  $difftext="";
  $years = floor($datediff / (365*60*60*24));
  $months = floor(($datediff - $years * 365*60*60*24) / (30*60*60*24));
  $days = floor(($datediff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
  $hours= floor($datediff/3600);
  $minutes= floor($datediff/60);
  $seconds= floor($datediff);
  //year checker
  if($difftext=="")
  {
    if($years>1)
     $difftext=$years." years ago";
    elseif($years==1)
     $difftext=$years." year ago";
  }
  //month checker
  if($difftext=="")
  {
     if($months>1)
     $difftext=$months." months ago";
     elseif($months==1)
     $difftext=$months." month ago";
  }
  //month checker
  if($difftext=="")
  {
     if($days>1)
     $difftext=$days." days ago";
     elseif($days==1)
     $difftext=$days." day ago";
  }
  //hour checker
  if($difftext=="")
  {
     if($hours>1)
     $difftext=$hours." hours ago";
     elseif($hours==1)
     $difftext=$hours." hour ago";
  }
  //minutes checker
  if($difftext=="")
  {
     if($minutes>1)
     $difftext=$minutes." minutes ago";
     elseif($minutes==1)
     $difftext=$minutes." minute ago";
  }
  //seconds checker
  if($difftext=="")
  {
     if($seconds>1)
     $difftext=$seconds." seconds ago";
     elseif($seconds==1)
     $difftext=$seconds." second ago";
  }
  return $difftext;
}

?>
<script type="text/javascript" src="http://timeago.yarp.com/jquery.timeago.js"></script>
<div class="container">
  <div class="slider">
      <ul class="slides">
        <li>
          <img src="http://ozvisainfo.com/wp-content/uploads/2016/02/loan.jpg"> <!-- random image -->
          <div class="caption center-align">
            <h3>This is our big Tagline!</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="http://previews.123rf.com/images/racorn/racorn1308/racorn130802213/21237017-Female-teacher-assisting-student-in-using-laptop-at-desk-in-classroom-Stock-Photo.jpg"> <!-- random image -->
          <div class="caption left-align">
            <h3>Left Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="http://i.huffpost.com/gen/1741175/images/o-JOB-STUDENT-facebook.jpg"> <!-- random image -->
          <div class="caption right-align">
            <h3>Right Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="https://www.utexas.edu/sites/www.utexas.edu/files/styles/utexas_hero_photo_image/public/hero-photos/studentresources_hero_v2.jpg?itok=DiRcGmo3"> <!-- random image -->
          <div class="caption center-align">
            <h3>This is our big Tagline!</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
      </ul>
    </div>
    <br><br>
    <div class="news">
      <div class="title-section">
        Portal Berita
      </div>
      <div class="content-section">
        <?php foreach ($news->result() as $news) { ?>
        <a href="#">
          <div class="news-title">
            <?=$news->title?>
          </div>
        </a>
        <div class="news-content">
          <?=$news->content?>
        </div>
        <div class="">
          <?php
          echo time();
          echo "<br>";
          echo time_elapsed_string($news->post_at);
          ?>
        </div>
        <?php } ?>
      </div>
    </div>
</div>
<br><br>
<script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery("time.timeago").timeago();
  });
</script>
