<?php
  define('ROOTURL', '/');
  define('ROOTPATH', dirname(__DIR__));

  define('HEAD', ROOTPATH.'/common/head.php');
  define('FOOTER', ROOTPATH.'/common/footer.php');
  define('CHAPTERS', ROOTURL.'chapters');


  $_SESSION["page_title"] = 'Home page';
  $_SESSION["page_header"] = 'Home page';
  $linkto_content = realpath(ROOTPATH.'/_index.php');
  define('AUTHOR', 'Кунгурцев Виталий');
  define('GROUP', 'ИСиП-35');
// Text that shows exc status in Home page, should be before 'require chapter_data'
  $finished_status = 'finished';
  $not_finished_status = 'not finished';
  $other_status = 'undefined';
  require ROOTPATH.'/config/chapter_data.php';
  $prev_page = '';
  
  ?>
