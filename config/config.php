<?php
  define('ROOTURL', '/');
  define('ROOTPATH', dirname(__DIR__));
  define('CHAPTERS', realpath(ROOTPATH.'/chapters'));
  $_SESSION["page_title"] = 'Home page';
  $_SESSION["page_header"] = 'Home page';
  $linkto_content = realpath(ROOTPATH.'/_index.php');
  define('AUTHOR', 'Кунгурцев Виталий')
  define('GROUP', 'ИСиП-35')

  

  $chapters = array(
    [
      "1.1" => 		'<a href="realpath(CHAPTERS.\'/chapter1/exc1.php">1</a>'),
      "1.2" => 	realpath(CHAPTERS.'/chapter1/exc2.php'),
      "1.3" => 	realpath(CHAPTERS.'/chapter1/exc3.php'),
      "1.4" => 	realpath(ROOTPATH.'/chapter1/exc4.php'),
      "1.5" => 	realpath(ROOTPATH.'/chapter1/exc5.php'),
      "1.6" => 	realpath(ROOTPATH.'/chapter1/exc6.php'),
      "1.7" => 	realpath(ROOTPATH.'/chapter1/exc7.php'),
      "1.8" => 	realpath(ROOTPATH.'/chapter1/exc8.php'),
      "1.9" => 	realpath(ROOTPATH.'/chapter1/exc9.php'),
      "1.10" => realpath(ROOTPATH.'/chapter1/exc10.php'),

    ],
    [
      "2" => 		realpath(ROOTPATH.'/sss'),
      "2.1" => 	realpath(ROOTPATH.''),
      "2.3" => 	realpath(ROOTPATH.''),
      "2.4" => 	realpath(ROOTPATH.''),
      "2.5" => 	realpath(ROOTPATH.''),
      "2.6" => 	realpath(ROOTPATH.''),
      "2.7" => 	realpath(ROOTPATH.''),
      "2.8" => 	realpath(ROOTPATH.''),
      "2.9" => 	realpath(ROOTPATH.''),
      "2.10" => realpath(ROOTPATH.''),

    ],
  );
?>
