<?php 
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );
  session_start(); 
  require '../../config/config.php';
  $_SESSION["page_title"] = '1.9';
  $_SESSION["page_header"] = 'Exercise 1.9';
  require HEAD;
?>

<header id="header">
    <a href="<?php echo ROOTURL.'index.php'; ?>">Home</a>
    <?php echo '<h1>'.$_SESSION["page_header"].'</h1>'; ?> 
    <p>Оформатировать текст (прямая речь в двойных ковычках)</p>
</header>

<main>
<?php
$dialog_text = "1.
Дав арестованному договорить, Пилат изменил свой первоначальный замысел   и решил не  спорить с ним,  а закончить  допрос. Он сказал:
- 'Так ты утверждаешь, что не призывал разрушить... или поджечь, или каким–либо иным способом уничтожить храм?'

2.
- 'Я, игемон, никогда не призывал к подобным действиям, повторяю.'

3.
- 'Так поклянись своей жизнью, что этого не было,' - сказал прокуратор и улыбнулся какой–то страшной улыбкой. – 'Ею клясться самое время, так как она висит на волоске, помни это.'

4.
- 'Не думаешь ли ты, что ты ее подвесил, игемон?' – спросил арестант. – 'Если это так, то ты сильно ошибаешься.'

5.
Пилат вздрогнул и ответил сквозь зубы: - 'Но я легко могу перерезать этот волосок.'

6.
- 'И в этом ты ошибаешься,' - светло улыбаясь,  возразил арестант, - 'согласись, что перерезать волосок  уж наверно может лишь тот, кто подвесил?'

7.
- 'Так, так' – улыбнувшись, сказал Пилат, - 'теперь я не сомневаюсь, что праздные зеваки в Ершалаиме ходили за тобой по пятам.' 
После этих слов у него, уже в светлой голове, отчетливо сложилась формула приговора.  И он ее тут же  озвучил для записи в протокол:  игемон разобрал дело бродячего философа Иешуа и состава преступления в нем не нашел.";

// Split the passages
$passages = preg_split("/\d\./", $dialog_text);
// First element is empty, delete
unset($passages[0]);
// Work with each passage, each character
foreach ($passages as $passage) {
  $direct_speech = false;
  $direct_speech_text = "";
  $dialog_length = strlen($passage);
  for ($i=0; $i<$dialog_length; $i++) {
    // Make bold when direct speech starts
    if ($passage[$i] == "'") {
      // Empty string will also be printed that will produce unnecessary quotes, which are in <b> tag
      if ($direct_speech_text) // Substring removes ' at the beginning
        echo '<b>"'.substr($direct_speech_text, 1).'"</b>';
      $direct_speech_text = '';
      $direct_speech = !$direct_speech;
    } 
    // Append direct speech until ' is encountered again
    if ($direct_speech) {
      $direct_speech_text .= $passage[$i]; 
    } 
    // Print letters
    else {
      if ($passage[$i] != "'") 
        echo $passage[$i];
    }
  }
  print '<br><br>';
}
?>
</main>

<?php require FOOTER; ?>