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
				'winner' => 'aivar ventsel + kristjan pajumets',
				'looser' => 'Kaupo + Valdeko'
		),
		// 15 - 7 mängu
		array (
				'winner' => 'Kirsti + Triin Loodus',
				'looser' => 'Birgit + janelle uuetalu'
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
				'looser' => 'aivar ventsel + kristjan pajumets'
		),
		array (
				'winner' => 'Ahto Klaos + Marju',
				'looser' => 'Liis + aivar ventsel'
		),
		array (
				'winner' => 'Jakov + peacecop kalmer:',
				'looser' => 'Peeter + Sten'
		),
		array (
				'winner' => 'Marju + kristiina koel',
				'looser' => 'Liis + Reet Rätsep'
		),
		// 16 - 5 mängu
		array (
				'winner' => 'Jakov + janelle uuetalu',
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
				'winner' => 'Marju + kristiina koel',
				'looser' => 'Jane + Marje Teeriaho'
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
				'looser' => 'aivar ventsel + kristiina koel'
		),
		array (
				'winner' => 'Johannes + Mirjam',
				'looser' => 'Signe + peacecop kalmer:'
		),
		array (
				'winner' => 'aivar ventsel + kristjan pajumets',
				'looser' => 'Margus Uppus + Markus'
		),
		array (
				'winner' => 'Johannes + Mattias',
				'looser' => 'Margus Uppus + Markus'
		),
		array (
				'winner' => 'Johannes + Mattias',
				'looser' => 'aivar ventsel + kristjan pajumets'
		),
		array (
				'winner' => 'Ahto Klaos + Kirsti',
				'looser' => 'Reet Rätsep + Urmas'
		),
		// 19 - 2 mängu
		array (
				'winner' => 'Signe + peacecop kalmer:',
				'looser' => 'Reet Rätsep + Urmas'
		),
		array (
				'winner' => 'aivar ventsel + kristiina koel',
				'looser' => 'Reet Rätsep + Urmas'
		),
		// 20 - 6 mängu
		array (
				'winner' => 'Jakov + janelle uuetalu',
				'looser' => 'Ahto Klaos + Kirsti'
		),
		array (
				'winner' => 'Johannes + Mirjam',
				'looser' => 'Ahto Klaos + Kirsti'
		),
		array (
				'winner' => 'Jakov + janelle uuetalu',
				'looser' => 'Johannes + Mirjam'
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
				'looser' => 'Marje Teeriaho + Toivo Promm'
		),
		array (
				'winner' => 'aivar ventsel + kristjan pajumets',
				'looser' => 'Aru + Pikani'
		),
		array (
				'winner' => 'Signe + peacecop kalmer:',
				'looser' => 'Ahto Klaos + Kirsti'
		),
		array (
				'winner' => 'Aaro + Kent',
				'looser' => 'aivar ventsel + kristjan pajumets'
		),
		array (
				'winner' => 'Jane + Marje Teeriaho',
				'looser' => 'Liis + Reet Rätsep'
		),
		// 22 - 2 mängu
		array (
				'winner' => 'Johannes + Mattias',
				'looser' => 'Peeter + Sten'
		),
		array (
				'winner' => 'aivar ventsel + kristiina koel',
				'looser' => 'Ahto Klaos + Kirsti'
		),
		// 25 - 12 mängu
		array (
				'winner' => 'Birgit + Marju',
				'looser' => 'Ahto Klaos + kristiina koel'
		),
		array (
				'winner' => 'Kent + Mattias',
				'looser' => 'Jakov + aivar ventsel'
		),
		array (
				'winner' => 'Ahto Klaos + Mattias',
				'looser' => 'Oleg + Toivo Promm'
		),
		array (
				'winner' => 'Birgit + kristiina koel',
				'looser' => 'Kent + Marju'
		),
		array (
				'winner' => 'Toivo Promm + aivar ventsel',
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
				'winner' => 'kristiina koel + peacecop kalmer:',
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
				'winner' => 'Mattias + kristiina koel',
				'looser' => 'aivar ventsel + peacecop kalmer:'
		),
		// 2014
		// 19 - 1 mäng
		array (
				'winner' => 'Mirja-Helen + kristjan pajumets',
				'looser' => 'Kaie Kree + peacecop kalmer:'
		),
		// 20 - 1 mäng
		array (
				'winner' => 'aivar ventsel + kristiina koel',
				'looser' => 'Ahto Klaos + janelle uuetalu'
		),
		// 21 - 2 mängu
		array (
				'winner' => 'Artur + Sarapuu',
				'looser' => 'Ahto Klaos + ville pak'
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
				'winner' => 'Artur + Sarapuu',
				'looser' => 'Mati + Ülo'
		),
		// 24 - 2 mängu
		array (
				'winner' => 'Riina Bachmann + kristiina koel',
				'looser' => 'Kristhel + janelle uuetalu'
		),
		array (
				'winner' => 'Peeter + Sten',
				'looser' => 'Artur + Sarapuu'
		),
		// 29 - 1 mäng
		array (
				'winner' => 'Kaie Kree + Mirja-Helen',
				'looser' => 'Kristhel + janelle uuetalu'
		),
		// 31 - 2 mängu 
		array (
				'winner' => 'Kaie Kree + peacecop kalmer:',
				'looser' => 'Ahto Klaos + janelle uuetalu'
		),
		array (
				'winner' => 'aivar ventsel + kristiina koel',
				'looser' => 'Kaie Kree + peacecop kalmer:'
		),
		// 1 - 2 mängu
		array (
				'winner' => 'Kaie Kree + peacecop kalmer:',
				'looser' => 'Kristhel + Kristjan Viilmann'
		),
		array (
				'winner' => 'kristjan pajumets + peacecop kalmer:',
				'looser' => 'Mati + Ülo'
		),
		// 2 - 3 mängu
		array (
				'winner' => 'Ahto Klaos + ville pak',
				'looser' => 'Mati + Ülo'
		),
		array (
				'winner' => 'Mirja-Helen + kristjan pajumets',
				'looser' => 'aivar ventsel + kristiina koel'
		),
		array (
				'winner' => 'Kaie Kree + Mirja-Helen',
				'looser' => 'Riina Bachmann + kristiina koel'
		),
		// 3 - 3 mängu
		array (
				'winner' => 'Kent + Viljar',
				'looser' => 'Peeter + Sten'
		),
		array (
				'winner' => 'Kalev + Sören',
				'looser' => 'Ahto Klaos + ville pak'
		),
		array (
				'winner' => 'Ahto Klaos + janelle uuetalu',
				'looser' => 'Kristhel + Kristjan Viilmann'
		),
		// 4 - 2 mängu
		array (
				'winner' => 'Kristjan Viilmann + peacecop kalmer:',
				'looser' => 'Ahto Klaos + ville pak'
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
				'winner' => 'Illimar Sööt + peacecop kalmer:',
				'looser' => 'rainer sutt + ville pak'
		),
		// 0813 - 1 mäng
		array (
				'winner' => 'Oliver Kotkas + per lindberg',
				'looser' => 'Illimar Sööt + peacecop kalmer:'
		),
		// 0816 - 3 mängu
		array (
				'winner' => 'aivar ventsel + kristiina koel',
				'looser' => 'Kaie Kree + peacecop kalmer:'
		),
		array (
				'winner' => 'Kaie Kree + peacecop kalmer:',
				'looser' => 'Illimar Sööt + Riina Bachmann'
		),
		array (
				'winner' => 'Illimar Sööt + Riina Bachmann',
				'looser' => 'Helena Ruud + ville pak',
				'statistics'=>'TTJZeFlXWXk'
		),
		// 0819 - 1 mäng
		array (
				'winner' => 'külli toots + rainer sutt',
				'looser' => 'Helena Ruud + ville pak'
		),
		// 0821 - 2 mängu
		array (
				'winner' => 'Kaie Kree + peacecop kalmer:',
				'looser' => 'külli toots + rainer sutt',
				'statistics'=>'TTJZeFpUUTM'
		),
		array (
				'winner' => 'külli toots + rainer sutt',
				'looser' => 'Kaie Kree + peacecop kalmer:'
		),
		// 0903 - 1 mäng
		array (
				'winner' => 'Kaie Kree + külli toots',
				'looser' => 'Helena Ruud + kristiina koel',
				'statistics'=>'TTJZeVlUZzQ'
		),
		// 0906 - 2 mängu
		array (
				'winner' => 'Helena Ruud + kristiina koel',
				'looser' => 'Riina Bachmann + janelle uuetalu',
				'statistics'=>'TTJZeVpEa3k'
		),
		array (
				'winner' => 'külli toots + rainer sutt',
				'looser' => 'aivar ventsel + kristiina koel',
				'statistics'=>'TTJZeVpHWTI'
		),
		// 2016 - 9 mängu
		// 808 - 1 mäng
		array (
				'winner' => 'Illimar Sööt + peacecop kalmer:',
				'looser' => 'Oliver Kotkas + per lindberg'
		),
		// 809 - 1 mäng
		array (
				'winner' => 'Kaie Kree + peacecop kalmer:',
				'looser' => 'Illimar Sööt + Riina Bachmann'
		),
		// 814 - 2 mängu
		array (
				'winner' => 'Illimar Sööt + peacecop kalmer:',
				'looser' => 'Marje Tammo + boris tšernjak'
		),
		array (
				'winner' => 'Kaie Kree + peacecop kalmer:',
				'looser' => 'Marje Tammo + boris tšernjak',
				'statistics'=> 'TVRBMU1UUmo'
		),
		// 821 - 1 mäng
		array (
				'winner' => 'Kaie Kree + peacecop kalmer:',
				'looser' => 'Merje Kruus + per lindberg'
		),
		// 831 - 1 mäng
		array (
				'winner' => 'Illimar Sööt + peacecop kalmer:',
				'looser' => 'Merje Kruus + per lindberg'
		),
		// 901 - 1 mäng
		array (
				'winner' => 'Marje Tammo + boris tšernjak',
				'looser' => 'Merje Kruus + per lindberg'
		),
		// 907 - 1 mäng
		array (
				'winner' => 'Illimar Sööt + Riina Bachmann',
				'looser' => 'Kaie Kree + Kairi Vilderson',
				'statistics'=> 'TVRBMk16WTA'
		),
		// 924 - 1 mäng
		array (
				'winner' => 'Marje Tammo + boris tšernjak',
				'looser' => 'Illimar Sööt + Riina Bachmann'
		),
		// 2018 - 25 mängu
		// 805 - 2 mängu
		array (
				'winner' => 'Evelin Poom + Peeter Poom',
				'looser' => 'Helena Ruud + Indrek Jakobson',
				'statistics'=> 'TVRGbE5tVXk'
		),
		array (
				'winner' => 'Evelin Poom + Peeter Poom',
				'looser' => 'Mairi Priimägi + Tarvo Priimägi',
				'statistics'=> 'TVRGbE5tVmk'
		),
		// 807 - 1 mäng
		array (
				'winner' => 'Illimar Sööt + peacecop kalmer:',
				'looser' => 'Gerd Eston Sepp + Janar Välk',
				'statistics'=> 'TVRGbE9EVXg'
		),
		// 809 - 1 mäng
		array (
				'winner' => 'Erki Lõhmus + Toivo Promm',
				'looser' => 'Evelin Poom + Peeter Poom',
				'statistics'=>'TVRGbE9ETm0'
		),
		// 813 - 2 mängu
		array (
				'winner' => 'Erki Lõhmus + Toivo Promm',
				'looser' => 'Illimar Sööt + peacecop kalmer:',
				'statistics'=> 'TVRGbFlXVTM'
		),
		array (
				'winner' => 'Illimar Sööt + peacecop kalmer:',
				'looser' => 'Erki Lõhmus + Toivo Promm'
		),
		// 814 - 1 mäng
		array (
				'winner' => 'Salonplusi Helena + per lindberg',
				'looser' => 'Relika Aruoja + Siim Simson',
				'statistics'=> 'TVRGbFlUVTM'
		),
		// 815 - 1 mäng
		array (
				'winner' => 'Merike Kosesson + Tiit Niibek',
				'looser' => 'Relika Aruoja + Siim Simson',
				'statistics'=> 'TVRGbFlqQTE'
		),
		// 816 - 1 mäng
		array (
				'winner' => 'Gerd Eston Sepp + Janar Välk',
				'looser' => 'Relika Aruoja + Siim Simson',
				'statistics'=> 'TVRGbFltTXk'
		),
		// 817 - 2 mängu
		array (
				'winner' => 'Salonplusi Helena + per lindberg',
				'looser' => 'Oliver Koel + kristiina koel',
				'statistics'=> 'TVRGbFl6RXo'
		),
		array (
				'winner' => 'Merike Kosesson + Tiit Niibek',
				'looser' => 'Salonplusi Helena + per lindberg',
				'statistics'=>'TVRGbFl6Smk'
		),
		// 818 - 1 mäng
		array (
				'winner' => 'Illimar Sööt + peacecop kalmer:',
				'looser' => 'Salonplusi Helena + per lindberg',
				'statistics'=> 'TVRGbU5USTA'
		),
		// 819 - 1 mäng
		array (
				'winner' => 'Erki Lõhmus + Toivo Promm',
				'looser' => 'Salonplusi Helena + per lindberg',
				'statistics'=> 'TVRGbFpEazA'
		),
		// 820 - 1 mäng
		array (
				'winner' => 'Oliver Koel + kristiina koel',
				'looser' => 'Relika Aruoja + Siim Simson',
				'statistics'=> 'TVRGbFpHWTM'
		),
		// 821 - 1 mäng
		array (
				'winner' => 'Mairi Priimägi + Tarvo Priimägi',
				'looser' => 'Gerd Eston Sepp + Janar Välk',
				'statistics'=> 'TVRGbFpXUmo'
		),
		// 827 - 1 mäng
		array (
				'winner' => 'Illimar Sööt + peacecop kalmer:',
				'looser' => 'Marje Tammo + boris tšernjak',
				'statistics'=> 'TVRJd05HUTE'
		),
		// 830 - 1 mäng
		array (
				'winner' => 'Illimar Sööt + peacecop kalmer:',
				'looser' => 'Merike Kosesson + Tiit Niibek',
				'statistics'=> 'TVRJd056QXk'
		),
		// 903 - 1 mäng
		array (
				'winner' => 'Erki Lõhmus + Toivo Promm',
				'looser' => 'Riho Maisa + Veiko Vetto',
				'statistics'=> 'TVRGbU9ERTE'
		),
		// 904 - 1 mäng
		array (
				'winner' => 'Mairi Priimägi + Tarvo Priimägi',
				'looser' => 'Riho Maisa + Veiko Vetto',
				'statistics'=> 'TVRGbU9UUTA'
		),
		// 905 - 1 mäng
		array (
				'winner' => 'Merike Kosesson + Tiit Niibek',
				'looser' => 'Erki Lõhmus + Toivo Promm',
				'statistics'=> 'TVRGbU9XSXc'
		),
		// 908 - 1 mäng
		array (
				'winner' => 'Riho Maisa + Veiko Vetto',
				'looser' => 'Gerd Eston Sepp + Janar Välk',
				'statistics'=> 'TVRGbVlqZzM'
		),
		// 918 - 1 mäng
		array (
				'winner' => 'Mairi Priimägi + Tarvo Priimägi',
				'looser' => 'Salonplusi Helena + per lindberg',
				'statistics'=> 'TVRJd01qazM'
		),
		// 919 - 1 mäng
		array (
				'winner' => 'Mairi Priimägi + Tarvo Priimägi',
				'looser' => 'Oliver Koel + kristiina koel',
				'statistics'=> 'TVRJd016QXo'
		),
		// 922 - 2 mängu
		array (
				'winner' => 'Oliver Koel + kristiina koel',
				'looser' => 'Gerd Eston Sepp + Janar Välk',
				'statistics'=> 'TVRJd00yWXg'
		),
		array (
				'winner' => 'Oliver Koel + kristiina koel',
				'looser' => 'Riho Maisa + Veiko Vetto',
				'statistics'=> 'TVRJd05EWTU'
		),
);
$metadataOfCurrentFile = pathinfo ( __FILE__ );
preg_match ( '/merge-sort-chart-(.+)/', $metadataOfCurrentFile ['filename'], $foundMatches );

$mergeSortChart = new MergeSortChart ( array (
		'matches' => $matches,
		'typeOfTennis' => $foundMatches [1]
) );
$mergeSortChart->manageResults ( array () );
$mergeSortChart->checkNames ();
