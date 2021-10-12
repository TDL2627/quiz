<?php
error_reporting(0);

// beginning of code
$title = "ENIGMA-THE RIDDLE QUIZ";

$randomizequestions ="yes"; 
// questions
$a = array(
1 => array(
   0 => "What's nowhere but everywhere, except where something is?",
   1 => "NOTHING",
   2 => "SOMETHING",
   3 => "EVERYTHING",
   4 => "NO CLUE",
   6 => 1
),
2 => array(
   0 => "What do a dead man, a cruise ship and emu have in common?",
   1 => "SOMETHING",
   2 => "EVERYTHING",
   3 => "NOTHING",
   4 => "NO CLUE",
   6 => 3
),
3 => array(
   0 => "What's strong enough to smash ships but still fears the sun?",
   1 => "ICE ",
   2 => "FIRE",
   3 => "AIR",
   4 => "NO CLUE",
   6 => 1
),
4 => array(
   0 => "The more you cut me the bigger I grow. What am I?",
   1 => "HUMAN",
   2 => "BAT",
   3 => "HOLE",
   4 => "NO CLUE",
   6 => 3
),
5 => array(
   0 => "What I want, the poor have, the rich need, and if you eat it you'll die.",
   1 => "SOMETHING",
   2 => "NOTHING",
   3 => "EVERYTHING",
   4 => "NO CLUE",
   6 => 2
),
6 => array(
   0 => "What do you call a three legged cow?",
   1 => "DISABLED",
   2 => "HERBIVORE",
   3 => "LEAN BEEF",
   4 => "NO CLUE",
   6 => 3
),
7 => array(
   0 => "A diamond plate, a glowing grate, a place you never leave. Where am I?",
   1 => "STAR",
   2 => "HOME",
   3 => "SUN",
   4 => "NO CLUE",
   6 => 2
),
8 => array(
   0 => "I'm strong as a rock, but a word can destroy me. What am I?",
   1 => "SILENCE",
   2 => "NOISE",
   3 => "NUKES",
   4 => "NO CLUE",
   6 => 1
),
9 => array(
   0 => "What do you call a tavern of blackbirds?",
   1 => "BAR BIRD",
   2 => "TAVERNA",
   3 => "CROWBAR",
   4 => "NO CLUE",
   6 => 3
),
10 => array(
   0 => "Without fingers I point, without arms I strike, without feet I run. What am I?",
   1 => "MOUSE",
   2 => "NOSE",
   3 => "CLOCK",
   4 => "NO CLUE",
   6 => 3
),
11 => array(
   0 => "A nightmare for some. For others, a savior I come. My hand's cold and bleak. It's the warm hearts they seek.",
   1 => "MONEY",
   2 => "POWER",
   3 => "DEATH",
   4 => "NO CLUE",
   6 => 3
),
12 => array(
   0 => "What's black and white and red all over?",
   1 => "MATCHES",
   2 => "NEWSPAPER",
   3 => "BALL",
   4 => "NO CLUE",
   6 => 2
),
13 => array(
   0 => "I take you by night, by day take you back. None suffer to have me, but do from my lack. What am I?",
   1 => "LOVE",
   2 => "SLEEP",
   3 => "MONEY",
   4 => "NO CLUE",
   6 => 2
),
14 => array(
   0 => "What Always Ends Everything?",
   1 => "PERIOD",
   2 => "TIME",
   3 => "THE LETTER G",
   4 => "NO CLUE",
   6 => 3
),
15 => array(
   0 => "A Boy And A Doctor Went Fishing. The Boy Was The Doctor's Son But The Doctor Wasn't The Boy's Father. Who Is The Doctor?",
   1 => "GRANDFATHER",
   2 => "MOTHER",
   3 => "UNCLE",
   4 => "NO CLUE",
   6 => 2
),
16 => array(
   0 => " What Has Four Fingers And A Thumb, But Is Not Living?",
   1 => "TREE",
   2 => "FISH",
   3 => "GLOVE",
   4 => "NO CLUE",
   6 => 3
),
17 => array(
   0 => "I Have Keys But No Locks. I Have A Space But No Room. You Can Enter, But Can’t Go Outside. What Am I?",
   1 => "SPACESHIP",
   2 => "DOORS",
   3 => "KEYBOARD",
   4 => "NO CLUE",
   6 => 3
),
18 => array(
   0 => " What Gets Wet When Drying?",
   1 => "TOWEL",
   2 => "EYES",
   3 => "PLUM",
   4 => "NO CLUE",
   6 => 1
),
19 => array(
   0 => "What Comes Once In A Minute And Twice In A Moment, But Never In A Thousand Years?",
   1 => "TIME",
   2 => "THE LETTER M",
   3 => "LOVE",
   4 => "NO CLUE",
   6 => 2
),
20 => array(
   0 => "The Man Who Invented It Doesn't Need It. The Man Who Bought It Doesn't Want It. The Man Who Needs It Doesn't Know. What Is It?",
   1 => "CIGGARETTE",
   2 => "IDEA",
   3 => "COFFIN",
   4 => "NO CLUE",
   6 => 3
),
);

$max=20;

$question=$_POST["question"] ;

if ($_POST["Randon"]==0){
        if($randomizequestions =="yes"){$randval = mt_rand(1,$max);}else{$randval=1;}
        $randval2 = $randval;
        }else{
        $randval=$_POST["Randon"];
        $randval2=$_POST["Randon"] + $question;
                if ($randval2>$max){
                $randval2=$randval2-$max;
                }
        }
        
$ok=$_POST["ok"] ;

if ($question==0){
        $question=0;
        $ok=0;
        $percentage=0;
        }else{
        $percentage= Round(100*$ok / $question);
        }
?>

<html>
<head>
<link rel="stylesheet" href="stylesheet.css">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">

<title>RIDDLES TRIVIA <?php print $title; ?></title>

<script LANGUAGE='JavaScript'>

function Goahead (number){
        if (document.percentage.response.value==0){
                if (number==<?php print $a[$randval2][6] ; ?>){
                        document.percentage.response.value=1
                        document.percentage.question.value++
                        document.percentage.ok.value++
                }else{
                        document.percentage.response.value=1
                        document.percentage.question.value++
                }
        }
        if (number==<?php print $a[$randval2][6] ; ?>){
                document.question.response.value="Correct"
        }else{
                document.question.response.value="Incorrect"
        }
}

</script>

</head>
<body>

<center>
<h1><?php print "$title"; ?></h1>
<table BORDER=0 CELLSPACING=5 WIDTH=500>

<?php if ($question<$max){ ?>

<tr><td ALIGN=RIGHT>
<form METHOD=POST NAME="percentage" ACTION="<?php print $URL; ?>">


<br><input type=submit value="Next >>" style="padding-right=30%;">
<input type=hidden name=response value=0>
<input type=hidden name=question value=<?php print $question; ?>>
<input type=hidden name=ok value=<?php print $ok; ?>>
<input type=hidden name=Randon value=<?php print $randval; ?>>
<br><?php print $question+1; ?> / <?php print $max; ?>
</form>
<HR>
</td></tr>

<tr><td>
<form METHOD=POST NAME="question" ACTION="">
<?php print "<b>".$a[$randval2][0]."</b>"; ?>
 
<br>     <input TYPE=radio NAME="option" VALUE="1"  onClick=" Goahead (1);"><?php print $a[$randval2][1] ; ?>
<br>     <input TYPE=radio NAME="option" VALUE="2"  onClick=" Goahead (2);"><?php print $a[$randval2][2] ; ?>
<?php if ($a[$randval2][3]!=""){ ?>
<br>     <input TYPE=radio NAME="option" VALUE="3"  onClick=" Goahead (3);"><?php print $a[$randval2][3] ; } ?>
<?php if ($a[$randval2][4]!=""){ ?>
<br>     <input TYPE=radio NAME="option" VALUE="4"  onClick=" Goahead (4);"><?php print $a[$randval2][4] ; } ?>
<?php if ($a[$randval2][5]!=""){ ?>
<br>     <input TYPE=radio NAME="option" VALUE="5"  onClick=" Goahead (5);"><?php print $a[$randval2][5] ; } ?>


</form>

<?php
}else{
?>

<tr><td ALIGN=Center>
<P>WELL DONE ON COMPLETING THE QUIZ</P>
<br><p class="result">Percentage of correct responses:</p> <?php print $percentage ; ?> %
<P>EVERY 5% IS 1 POINT</P>
<ul>
  <li>25% AND LESS=FAILURE</li>
  <li>25%-50%=YOU TRIED</li>
  <li>50%-80%=COOL YOU PASSED</li>
  <li>80%-100%=EXECELLENT,YOU'RE AWESOME</li>
</ul>


<?php } ?>

</td></tr>
</table>

</center>


<footer>DEVELOPED BY TDL2627</footer>
</body>

</html>
