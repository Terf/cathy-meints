<?php
$str = "Mary Anne Ballard, viol 8 23, 28, 29
James Caldwell, oboe, viol 1, 3, 4, 6, 7, 8, 10, 11, 12, 14, 23, 28, 29, 32, 35, 37, 38, 39, 40, 46, 47, 48, 51, 52, 53
Langdon Corson, viol 28
Lisa Crawford, harpsichord 1, 4, 11, 12, 15, 16, 17, 25, 30, 31, 32, 38, 40, 47, 50, 51, 52, 53
John Dunham, violone 39, 44
Melissa Graybeal, viola 31, 48
Meg Irwin-Brandon, harpsichord, organ 5, 24, 44
Penelope Jensen, soprano 34, 35, 39, 44, 46, 54
Philip Levin, bassoon 39
Peter Lovely, bass 39
Michael Lynn, recorder 32, 39
Fumiko Matsui, viol 28
Marilyn McDonald, violin, quinton 1, 11, 16, 17, 18, 27, 30, 39, 43, 44, 45 
47, 48, 53
Catharina Meints, viol, cello 1, 2, 3, 4, 7, 8, 10, 11, 12, 14, 16, 17, 18,
 19, 22, 23, 24, 27, 27, 28, 29, 30, 31, 33, 34, 35, 36, 37, 
38, 39, 40, 43, 44, 47, 51, 52, 54
Grant Moore, oboe 46
Hannelore Meuller, viol 20, 41, 42
Doris Ornstein, harpsichord 9, 10, 13, 14, 19, 33, 34, 35
Derek Lee Ragin, alto 39
Alice Robbins, viol 23, 28, 29
Kenneth Slowik, viol, cello 5, 28, 29, 31, 39, 45, 48, 54
Jane Starkman, viola 18, 44
Sarah Sumner, violin 18, 27, 44 
Margriet Tindemanns, viol 29
Peter Tourin, viol 29 
Max van Egmond, baritone 16, 31, 39
James Weaver, harpsichord, organ, fortepiano 6, 8, 18, 26, 37, 45, 48, 54
August Wenzinger, viol 5, 6, 12, 20, 21, 24, 25, 26, 27, 31, 37
39, 41, 42, 43, 44, 46, 49, 54
Robert Willoughby, flute 1, 32, 37, 47, 53
Nancy Zylstra, soprano 39, 46";
$str2 = "Carl Friedrich Abel 49
Attilio Ariosti 54
Carl Philipp Emmanuel Bach 50, 51, 52, 53
Johann Christian Bach 46, 47, 48
Johann Sebastian Bach 33
Franz Benda 45
Heinrich Ignaz Franz Biber 30
Luigi Boccherini 18
M. DuBuisson 2
Louis de Caix d’Hervelois 5
Le Sieur de Ste. Colombe 3, 7
Francois Couperin 1,4
Antoine Forqueray 13, 14
Johann Joseph Fux 31
Johann Gottlieb Graun 44
George Friderick Handel  34, 35
John Jenkins 24, 25, 26
William Lawes 27, 29
Anton Lidl 43
Matthew Locke 23
David Loeb 20, 21
Marin Marais 6, 8, 9, 10, 11, 12 
Henry Purcell 28
Johann Joachim Quantz 32
Jean-Phillipe Rameau 16, 17
Joseph-Nicolas-Pancrace Royer 15
Dominico Scarlatti 19
Johann Schaffrath 41
Johann Schenk 40, 42
Christopher Simpson 22
Georg Phillip Telemann  36, 37, 38, 39";
$list = [];
foreach (explode("\n", $str2) as $person) {
	$res = '';
	foreach (str_split($person) as $char) {
		$ord = ord($char);
		if ($ord >= 48 && $ord <= 57) {
			break;
		}
		$res .= $char;
	}
//	$list[] = trim($res);
	$tmp = explode(' ', explode(',', trim($res))[0]);
	$list[] = $tmp[count($tmp)-1];
}
var_export($list);
//foreach ($list as $item) {
//	$item2 = str_replace(' ', '_', $item);
////	echo '<li class="nav-item"><a class="nav-link" id="'.$item2.'-tab" data-toggle="tab" href="#'.$item2.'" role="tab" aria-controls="'.$item2.'" aria-selected="false">'.$item.'</a></li>'. "\n";
//	echo '<div class="tab-pane fade" id="'.$item2.'" role="tabpanel" aria-labelledby="'.$item2.'-tab"><ul class="list-group list-group-flush"><li class="list-group-item"><audio preload="none" controls><source src="http://138.197.26.154/cathy-meints/files/oberlin_baroque_cdr3/1%20Audio%20Track.aiff.mp3" type="audio/mpeg"></audio></li></ul></div>';
//}
?>