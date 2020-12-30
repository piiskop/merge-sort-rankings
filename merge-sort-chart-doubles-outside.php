<?php

namespace mergeSortChart;

/**
 * Created on 14.09.2015
 *
 * @copyright Copyright &copy; 2015, Kalmer Piiskop <pandeero@gmail.com>
 */
require_once dirname ( __FILE__ ) . '/MergeSortChart.php';

/**
 *
 * @author kalmer
 * @var string[string][] index is either <code>winner</code> or
 *      <code>looser</code>, value is the name of the player
 */
$matches = array (
		// 2013
		// 13 - 1 mäng
		array (
				'winner' => 'Jakov + peacecop kalmer:',
				'looser' => 'Margus Uppus + Markus'
		),
		// 14 - 3 mängu
		array (
				'winner' => 'Peeter + Sten',
				'looser' => 'Aru + Pikani'
		),
		array (
				'winner' => 'Peeter + Sten',
				'looser' => 'Aaro + Kent'
		),
		array (
				'winner' => 'Aivar + Kristjan Pajumets',
				'looser' => 'Kaupo + Valdeko'
		),
		// 15 - 7 mängu
		array (
				'winner' => 'Kirsti + Triin Loodus',
				'looser' => 'Birgit + Janelle'
		),
		array (
				'winner' => 'Jakov + peacecop kalmer:',
				'looser' => 'Ahto Klaos + Andrus'
		),
		array ( // ?
				'winner' => 'Margus Uppus + Markus',
				'looser' => 'Ahto Klaos + Andrus'
		),
		array (
				'winner' => 'Peeter + Sten',
				'looser' => 'Aivar + Kristjan Pajumets'
		),
		array (
				'winner' => 'Marju + Ahto',
				'looser' => 'Aivar + Liis'
		),
		array (
				'winner' => 'Jakov + peacecop kalmer:',
				'looser' => 'Peeter + Sten'
		),
		array (
				'winner' => 'Kristiina + Marju',
				'looser' => 'Liis + Reet Rätsep'
		),
		// 16 - 5 mängu
		array (
				'winner' => 'Jakov + Janelle',
				'looser' => 'Reet Rätsep + Urmas'
		),
		array (
				'winner' => 'Jane + Marje Teeriaho',
				'looser' => 'Kirsti + Triin Loodus'
		),
		array (
				'winner' => 'Jakov + peacecop kalmer:',
				'looser' => 'Johannes + Mattias'
		),
		array (
				'winner' => 'Marju + Kristiina',
				'looser' => 'Jane + Marje'
		),
		array (
				'winner' => 'Evelyn + Oleg',
				'looser' => 'Dina + Genadi'
		),
		// 17 - 1 mäng
		array (
				'winner' => 'Reet Rätsep + Urmas',
				'looser' => 'Evelyn + Oleg'
		),
		// 18 - 6 mängu
		array (
				'winner' => 'Signe + peacecop kalmer:',
				'looser' => 'aivar + kristiina'
		),
		array (
				'winner' => 'Johannes + Mirjam',
				'looser' => 'Signe + peacecop kalmer:'
		),
		array (
				'winner' => 'Aivar + Kristjan Pajumets',
				'looser' => 'Margus Uppus + Markus'
		),
		array (
				'winner' => 'Johannes + Mattias',
				'looser' => 'Margus Uppus + Markus'
		),
		array (
				'winner' => 'Johannes + Mattias',
				'looser' => 'Aivar + Kristjan Pajumets'
		),
		array (
				'winner' => 'Kirsti + Klaos',
				'looser' => 'Reet Rätsep + Urmas'
		),
		// 19 - 2 mängu
		array (
				'winner' => 'Signe + peacecop kalmer:',
				'looser' => 'Reet Rätsep + Urmas'
		),
		array (
				'winner' => 'aivar + kristiina',
				'looser' => 'Reet Rätsep + Urmas'
		),
		// 20 - 6 mängu
		array (
				'winner' => 'Jakov + Janelle',
				'looser' => 'Kirsti + Klaos'
		),
		array (
				'winner' => 'Johannes + Mirjam',
				'looser' => 'Kirsti + Klaos'
		),
		array (
				'winner' => 'Jakov + Janelle',
				'looser' => 'Mirjam + Johannes'
		),
		array (
				'winner' => 'Margus Aru + Margus Pikani',
				'looser' => 'Margus Uppus + Markus'
		),
		array (
				'winner' => 'Mati + Tõnu',
				'looser' => 'Margus Uppus + Markus'
		),
		array (
				'winner' => 'Margus Aru + Margus Pikani',
				'looser' => 'Mati + Tõnu'
		),
		// 21 - 5 mängu
		array (
				'winner' => 'Ahto Klaos + Kirsti',
				'looser' => 'Marje Teeriaho + Toivo'
		),
		array (
				'winner' => 'Aivar + Kristjan Pajumets',
				'looser' => 'Aru + Pikani'
		),
		array (
				'winner' => 'Signe + peacecop kalmer:',
				'looser' => 'Kirsti + Klaos'
		),
		array (
				'winner' => 'Aaro + Kent',
				'looser' => 'Aivar + Kristjan Pajumets'
		),
		array (
				'winner' => 'Jane + Marje',
				'looser' => 'Liis + Reet Rätsep'
		),
		// 22 - 2 mängu
		array (
				'winner' => 'Johannes + Mattias',
				'looser' => 'Peeter + Sten'
		),
		array (
				'winner' => 'aivar + kristiina',
				'looser' => 'Ahto Klaos + Kirsti'
		),
		// 25 - 12 mängu
		array (
				'winner' => 'Birgit + Marju',
				'looser' => 'Kristiina + Ahto Klaos'
		),
		array (
				'winner' => 'Kent + Mattias',
				'looser' => 'Aivar + Jakov'
		),
		array (
				'winner' => 'Ahto Klaos + Mattias',
				'looser' => 'Oleg + Toivo'
		),
		array (
				'winner' => 'Birgit + Kristiina',
				'looser' => 'Kent + Marju'
		),
		array (
				'winner' => 'Aivar + Toivo',
				'looser' => 'Birgit + Kent'
		),
		array (
				'winner' => 'Mattias + peacecop kalmer:',
				'looser' => 'Jakov + Oleg'
		),
		array (
				'winner' => 'Jakov + Reet Rätsep',
				'looser' => 'Oleg + Riina'
		),
		array (
				'winner' => 'Kristiina + peacecop kalmer:',
				'looser' => 'Birgit + Mattias'
		),
		array (
				'winner' => 'Marju + Mattias',
				'looser' => 'Birgit + peacecop kalmer:'
		),
		array (
				'winner' => 'Jakov + Toivo',
				'looser' => 'Kent + Oleg'
		),
		array (
				'winner' => 'Mattias + Reet Rätsep',
				'looser' => 'Birgit + Oleg'
		),
		array (
				'winner' => 'Kristiina + Mattias',
				'looser' => 'Aivar + peacecop kalmer:'
		),
		// 2014
		// 19 - 1 mäng
		array (
				'winner' => 'Mirja-Helen + Pajumets',
				'looser' => 'kaie + peacecop kalmer:'
		),
		// 20 - 1 mäng
		array (
				'winner' => 'aivar + kristiina',
				'looser' => 'Ahto Klaos + Janelle'
		),
		// 21 - 2 mängu
		array (
				'winner' => 'Artur + Priit',
				'looser' => 'Ahto Klaos + ville'
		),
		array (
				'winner' => 'Kalev + Sören',
				'looser' => 'Kristjan Viilmann + peacecop kalmer:'
		),
		// 22 - 2 mängu
		array (
				'winner' => 'Peeter + Sten',
				'looser' => 'Kalev + Sören'
		),
		array (
				'winner' => 'Artur + Priit',
				'looser' => 'Mati + Ülo'
		),
		// 24 - 2 mängu
		array (
				'winner' => 'Kristiina + Riina',
				'looser' => 'Janelle + Kristhel'
		),
		array (
				'winner' => 'Peeter + Sten',
				'looser' => 'Artur + Priit'
		),
		// 29 - 1 mäng
		array (
				'winner' => 'Kaie + Mirja-Helen',
				'looser' => 'Janelle + Kristhel'
		),
		// 31 - 2 mängu 
		array (
				'winner' => 'kaie + peacecop kalmer:',
				'looser' => 'Ahto Klaos + Janelle'
		),
		array (
				'winner' => 'aivar + kristiina',
				'looser' => 'kaie + peacecop kalmer:'
		),
		// 1 - 2 mängu
		array (
				'winner' => 'kaie + peacecop kalmer:',
				'looser' => 'Kristhel + Kristjan Viilmann'
		),
		array (
				'winner' => 'Pajumets + peacecop kalmer:',
				'looser' => 'Mati + Ülo'
		),
		// 2 - 3 mängu
		array (
				'winner' => 'Ahto Klaos + ville',
				'looser' => 'Mati + Ülo'
		),
		array (
				'winner' => 'Mirja-Helen + Pajumets',
				'looser' => 'aivar + kristiina'
		),
		array (
				'winner' => 'Kaie + Mirja-Helen',
				'looser' => 'Kristiina + Riina'
		),
		// 3 - 3 mängu
		array (
				'winner' => 'Kent + Viljar',
				'looser' => 'Peeter + Sten'
		),
		array (
				'winner' => 'Kalev + Sören',
				'looser' => 'Ahto Klaos + ville'
		),
		array (
				'winner' => 'Ahto Klaos + Janelle',
				'looser' => 'Kristhel + Kristjan Viilmann'
		),
		// 4 - 2 mängu
		array (
				'winner' => 'Kristjan Viilmann + peacecop kalmer:',
				'looser' => 'Ahto Klaos + ville'
		),
		array (
				'winner' => 'Peeter + Sten',
				'looser' => 'Kristjan Viilmann + peacecop kalmer:'
		),
		// 5 - 1 mäng
		array (
				'winner' => 'Kristjan Viilmann + peacecop kalmer:',
				'looser' => 'Artur + Sarapuu'
		),
		// 2015 - 11 mängu
		// 0809 - 1 mäng
		array (
				'winner' => 'peacecop kalmer: + taku',
				'looser' => 'rainer + ville'
		),
		// 0813 - 1 mäng
		array (
				'winner' => 'kotkas + per',
				'looser' => 'peacecop kalmer: + taku'
		),
		// 0816 - 3 mängu
		array (
				'winner' => 'aivar + kristiina',
				'looser' => 'kaie + peacecop kalmer:'
		),
		array (
				'winner' => 'kaie + peacecop kalmer:',
				'looser' => 'illimar + riina'
		),
		array (
				'winner' => 'illimar + riina',
				'looser' => 'helena + ville'
		),
		// 0819 - 1 mäng
		array (
				'winner' => 'külli + rainer',
				'looser' => 'helena + ville'
		),
		// 0821 - 2 mängu
		array (
				'winner' => 'kaie + peacecop kalmer:',
				'looser' => 'külli + rainer'
		),
		array (
				'winner' => 'külli + rainer',
				'looser' => 'kaie + peacecop kalmer:'
		),
		// 0903 - 1 mäng
		array (
				'winner' => 'kaie + külli',
				'looser' => 'helena + kristiina'
		),
		// 0906 - 2 mängu
		array (
				'winner' => 'helena + kristiina',
				'looser' => 'janelle + riina'
		),
		array (
				'winner' => 'külli + rainer',
				'looser' => 'aivar + kristiina'
		),
		// 2016 - 9 mängu
		// 808 - 1 mäng
		array (
				'winner' => 'peacecop kalmer: + taku',
				'looser' => 'kotkas + per'
		),
		// 809 - 1 mäng
		array (
				'winner' => 'kaie + peacecop kalmer:',
				'looser' => 'illimar + riina'
		),
		// 814 - 2 mängu
		array (
				'winner' => 'peacecop kalmer: + taku',
				'looser' => 'boris + marje'
		),
		array (
				'winner' => 'kaie + peacecop kalmer:',
				'looser' => 'boris + marje'
		),
		// 821 - 1 mäng
		array (
				'winner' => 'kaie + peacecop kalmer:',
				'looser' => 'merje + per'
		),
		// 831 - 1 mäng
		array (
				'winner' => 'peacecop kalmer: + taku',
				'looser' => 'merje + per'
		),
		// 901 - 1 mäng
		array (
				'winner' => 'boris + marje',
				'looser' => 'merje + per'
		),
		// 907 - 1 mäng
		array (
				'winner' => 'riina + taku',
				'looser' => 'kaie + kairi'
		),
		// 924 - 1 mäng
		array (
				'winner' => 'boris + marje',
				'looser' => 'riina + taku'
		),
		// 2018 - 25 mängu
		// 805 - 2 mängu
		array (
				'winner' => 'Evelin + Peeter',
				'looser' => 'Helena + Jakobson'
		),
		array (
				'winner' => 'Evelin + Peeter',
				'looser' => 'Mairi + Tarvo'
		),
		// 807 - 1 mäng
		array (
				'winner' => 'peacecop kalmer: + taku',
				'looser' => 'Gerd + Janar'
		),
		// 809 - 1 mäng
		array (
				'winner' => 'Toivo + erki',
				'looser' => 'Evelin + Peeter'
		),
		// 813 - 2 mängu
		array (
				'winner' => 'Toivo + erki',
				'looser' => 'peacecop kalmer: + taku'
		),
		array (
				'winner' => 'peacecop kalmer: + taku',
				'looser' => 'Toivo + erki'
		),
		// 814 - 1 mäng
		array (
				'winner' => 'Per + helena',
				'looser' => 'relika + siim'
		),
		// 815 - 1 mäng
		array (
				'winner' => 'Merike + Tiit',
				'looser' => 'relika + siim'
		),
		// 816 - 1 mäng
		array (
				'winner' => 'Gerd + Janar',
				'looser' => 'relika + siim'
		),
		// 817 - 2 mängu
		array (
				'winner' => 'Per + helena',
				'looser' => 'Kristiina + oliver koel'
		),
		array (
				'winner' => 'Merike + Tiit',
				'looser' => 'Per + helena'
		),
		// 818 - 1 mäng
		array (
				'winner' => 'peacecop kalmer: + taku',
				'looser' => 'Per + helena'
		),
		// 819 - 1 mäng
		array (
				'winner' => 'Toivo + erki',
				'looser' => 'Per + helena'
		),
		// 820 - 1 mäng
		array (
				'winner' => 'Kristiina + oliver koel',
				'looser' => 'relika + siim'
		),
		// 821 - 1 mäng
		array (
				'winner' => 'Mairi + Tarvo',
				'looser' => 'Gerd + Janar'
		),
		// 827 - 1 mäng
		array (
				'winner' => 'peacecop kalmer: + taku',
				'looser' => 'boris + marje'
		),
		// 830 - 1 mäng
		array (
				'winner' => 'peacecop kalmer: + taku',
				'looser' => 'Merike + Tiit'
		),
		// 903 - 1 mäng
		array (
				'winner' => 'Toivo + erki',
				'looser' => 'riho + veiko'
		),
		// 904 - 1 mäng
		array (
				'winner' => 'Mairi + Tarvo',
				'looser' => 'riho + veiko'
		),
		// 905 - 1 mäng
		array (
				'winner' => 'Merike + Tiit',
				'looser' => 'Toivo + erki'
		),
		// 908 - 1 mäng
		array (
				'winner' => 'riho + veiko',
				'looser' => 'Gerd + Janar'
		),
		// 918 - 1 mäng
		array (
				'winner' => 'Mairi + Tarvo',
				'looser' => 'Per + helena'
		),
		// 919 - 1 mäng
		array (
				'winner' => 'Mairi + Tarvo',
				'looser' => 'Kristiina + oliver koel'
		),
		// 922 - 2 mängu
		array (
				'winner' => 'Kristiina + oliver koel',
				'looser' => 'Gerd + Janar'
		),
		array (
				'winner' => 'Kristiina + oliver koel',
				'looser' => 'riho + veiko'
		),
);

$mergeSortChart = new MergeSortChart ();
$mergeSortChart->manageResults ( array (
		'matches' => $matches
) );

