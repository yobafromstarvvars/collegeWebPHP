<?php
  define('ROOTURL', '/');
  define('ROOTPATH', dirname(__DIR__));
  define('CHAPTERS', realpath(ROOTPATH.'/chapters'));
  $_SESSION["page_title"] = 'Home page';
  $_SESSION["page_header"] = 'Home page';
  $linkto_content = realpath(ROOTPATH.'/_index.php');
  define('AUTHOR', 'Кунгурцев Виталий');
  define('GROUP', 'ИСиП-35');

  $chapters = [
    [
      "1.1" => 	'<a href="'. realpath(CHAPTERS.'/chapter1/exc1.php') . '">1.1</a>',
      "1.2" => 	'<a href="'. realpath(CHAPTERS.'/chapter1/exc2.php') . '">1.2</a>',
      "1.3" => 	'<a href="'. realpath(CHAPTERS.'/chapter1/exc3.php') . '">1.3</a>',
      "1.4" => 	'<a href="'. realpath(CHAPTERS.'/chapter1/exc4.php') . '">1.4</a>',
      "1.5" => 	'<a href="'. realpath(CHAPTERS.'/chapter1/exc5.php') . '">1.5</a>',
      "1.6" => 	'<a href="'. realpath(CHAPTERS.'/chapter1/exc6.php') . '">1.6</a>',
      "1.7" => 	'<a href="'. realpath(CHAPTERS.'/chapter1/exc7.php') . '">1.7</a>',
      "1.8" => 	'<a href="'. realpath(CHAPTERS.'/chapter1/exc8.php') . '">1.8</a>',
      "1.9" => 	'<a href="'. realpath(CHAPTERS.'/chapter1/exc9.php') . '">1.9</a>',
      "1.10" => '<a href="'. realpath(CHAPTERS.'/chapter1/exc10.php') . '">1.10</a>',

    ],
    [
      "2.1" => 	'<a href="'. realpath(CHAPTERS.'/chapter2/exc1.php') . '">2.1</a>',
      "2.2" => 	'<a href="'. realpath(CHAPTERS.'/chapter2/exc2.php') . '">2.2</a>',
      "2.3" => 	'<a href="'. realpath(CHAPTERS.'/chapter2/exc3.php') . '">2.3</a>',
      "2.4" => 	'<a href="'. realpath(CHAPTERS.'/chapter2/exc4.php') . '">2.4</a>',
      "2.5" => 	'<a href="'. realpath(CHAPTERS.'/chapter2/exc5.php') . '">2.5</a>',
      "2.6" => 	'<a href="'. realpath(CHAPTERS.'/chapter2/exc6.php') . '">2.6</a>',
      "2.7" => 	'<a href="'. realpath(CHAPTERS.'/chapter2/exc7.php') . '">2.7</a>',
      "2.8" => 	'<a href="'. realpath(CHAPTERS.'/chapter2/exc8.php') . '">2.8</a>',
      "2.9" => 	'<a href="'. realpath(CHAPTERS.'/chapter2/exc9.php') . '">2.9</a>',
      "2.10" => '<a href="'. realpath(CHAPTERS.'/chapter2/exc10.php') . '">2.10</a>',

    ],
  ];
?>
