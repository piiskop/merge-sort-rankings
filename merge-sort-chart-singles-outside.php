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
		// 12 - 8 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Ahto Klaos'
		),
		array (
				'winner' => 'Tõnu',
				'looser' => 'Kristjan Pajumets'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Tõnu'
		),
		array (
				'winner' => 'Margus Aru',
				'looser' => 'Vaalma'
		),
		array (
				'winner' => 'Jan',
				'looser' => 'Genadi Nikolajev'
		),
		array (
				'winner' => 'Margus Aru',
				'looser' => 'Jan'
		),
		array (
				'winner' => 'janelle',
				'looser' => 'Signe'
		),
		array (
				'winner' => 'Teeriaho',
				'looser' => 'Triin Adamson'
		),
		// 13 - 8 mängu
		array (
				'winner' => 'Jan',
				'looser' => 'Vaalma'
		),
		array (
				'winner' => 'Sten Õepa',
				'looser' => 'Kent Männik'
		),
		array (
				'winner' => 'Marju',
				'looser' => 'Reet Rätsep'
		),
		array (
				'winner' => 'Marju',
				'looser' => 'Triin Adamson'
		),
		array ( // ?
				'winner' => 'Margus Uppus',
				'looser' => 'aivar'
		),
		array (
				'winner' => 'Jakov',
				'looser' => 'Margus Uppus'
		),
		array (
				'winner' => 'Jakov',
				'looser' => 'Margus Aru'
		),
		array (
				'winner' => 'Margus Uppus',
				'looser' => 'Margus Aru'
		),
		// 14 - 9 mängu
		array (
				'winner' => 'Signe',
				'looser' => 'Evelyn'
		),
		array (
				'winner' => 'Artur',
				'looser' => 'Andrus'
		),
		array (
				'winner' => 'Triin Adamson',
				'looser' => 'Reet Rätsep'
		),
		array (
				'winner' => 'Liis Laanesaar',
				'looser' => 'Riina Bachmann'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Mati'
		),
		array (
				'winner' => 'Triin Loodus',
				'looser' => 'Kadri'
		),
		array (
				'winner' => 'Jakov',
				'looser' => 'peacecop kalmer:'
		),
		array (
				'winner' => 'Liis Laanesaar',
				'looser' => 'Kirsti'
		),
		// 15 - 7 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Margus Uppus'
		),
		array (
				'winner' => 'Tõnu',
				'looser' => 'Ahto Klaos'
		),
		array (
				'winner' => 'Liis Laanesaar',
				'looser' => 'Triin Loodus'
		),
		array (
				'winner' => 'Birgit',
				'looser' => 'Dina'
		),
		array (
				'winner' => 'Jakov',
				'looser' => 'Oleg'
		),
		array (
				'winner' => 'Kristiina',
				'looser' => 'Reet Rätsep'
		),
		// 16 - 11 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Oleg'
		),
		array (
				'winner' => 'Triin Loodus',
				'looser' => 'janelle'
		),
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'Kent Männik'
		),
		array (
				'winner' => 'Margus Uppus',
				'looser' => 'Tõnu'
		),
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'Ahto Klaos'
		),
		array (
				'winner' => 'Marju',
				'looser' => 'Teeriaho'
		),
		array (
				'winner' => 'janelle',
				'looser' => 'Evelyn'
		),
		array (
				'winner' => 'Artur',
				'looser' => 'Tauno'
		),
		array (
				'winner' => 'Reet Rätsep',
				'looser' => 'Dina'
		),
		array (
				'winner' => 'Liis Laanesaar',
				'looser' => 'Signe'
		),
		array (
				'winner' => 'Margus Aru',
				'looser' => 'aivar'
		),
		// 17 - 7 mängu
		array (
				'winner' => 'Oleg',
				'looser' => 'Margus Uppus'
		),
		array (
				'winner' => 'Kent Männik',
				'looser' => 'Ahto Klaos'
		),
		array (
				'winner' => 'Kristiina',
				'looser' => 'Marju'
		),
		array (
				'winner' => 'Triin Loodus',
				'looser' => 'Riina Bachmann'
		),
		array (
				'winner' => 'Margus Aru',
				'looser' => 'Kristjan Pajumets'
		),
		array (
				'winner' => 'Triin Loodus',
				'looser' => 'Marju'
		),
		array (
				'winner' => 'Kent Männik',
				'looser' => 'Andrus'
		),
		array (
				'winner' => 'Reet Rätsep',
				'looser' => 'Evelyn'
		),
		// 18 - 10 mängu
		array (
				'winner' => 'Ahto Klaos',
				'looser' => 'Andrus'
		),
		array (
				'winner' => 'Reet Rätsep',
				'looser' => 'janelle'
		),
		array (
				'winner' => 'Reet Rätsep',
				'looser' => 'Riina Bachmann'
		),
		array (
				'winner' => 'Kristiina',
				'looser' => 'Signe'
		),
		array (
				'winner' => 'janelle',
				'looser' => 'Riina Bachmann'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Mattias'
		),
		array (
				'winner' => 'Mattias',
				'looser' => 'Oleg'
		),
		array (
				'winner' => 'Jan',
				'looser' => 'aivar'
		),
		array (
				'winner' => 'Jan',
				'looser' => 'Kristjan Pajumets'
		),
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'aivar'
		),
		// 19 - 2 mängu
		array (
				'winner' => 'Signe',
				'looser' => 'Triin Loodus'
		),
		array (
				'winner' => 'Margus Aru',
				'looser' => 'Artur'
		),
		// 20 - 9 mängu
		array (
				'winner' => 'Jan',
				'looser' => 'Artur'
		),
		array (
				'winner' => 'Artur',
				'looser' => 'Tõnu'
		),
		array (
				'winner' => 'Tõnu',
				'looser' => 'Mati'
		),
		array (
				'winner' => 'Kirsti',
				'looser' => 'Riina Bachmann'
		),
		array (
				'winner' => 'aivar',
				'looser' => 'Mati'
		),
		array (
				'winner' => 'Kirsti',
				'looser' => 'Birgit'
		),
		array (
				'winner' => 'Jakov',
				'looser' => 'Johannes'
		),
		array (
				'winner' => 'Johannes',
				'looser' => 'peacecop kalmer:'
		),
		array (
				'winner' => 'Jan',
				'looser' => 'Tõnu'
		),
		// 21 - 3 mängu
		array (
				'winner' => 'Triin Loodus',
				'looser' => 'Kirsti'
		),
		array (
				'winner' => 'Mati',
				'looser' => 'Vaalma'
		),
		array (
				'winner' => 'Kristiina',
				'looser' => 'Liis Laanesaar'
		),
		// 22 - 2 mängu
		array (
				'winner' => 'Genadi Nikolajev',
				'looser' => 'Tõnu'
		),
		array (
				'winner' => 'Evelyn',
				'looser' => 'Riina Bachmann'
		),
		// 23 - 1 mäng
		array (
				'winner' => 'Genadi Nikolajev',
				'looser' => 'Artur'
		),
		// 2014
		// 19 - 1 mäng
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Illimar Sööt'
		),
		// 20 - 3 mängu
		array (
				'winner' => 'Genadi Nikolajev',
				'looser' => 'Sarapuu'
		),
		array (
				'winner' => 'aivar',
				'looser' => 'rando'
		),
		array (
				'winner' => 'janelle',
				'looser' => 'Kaie Kree'
		),
		// 21 - mängu
		array (
				'winner' => 'Ville Pak',
				'looser' => 'Ahto Klaos'
		),
		array (
				'winner' => 'Mirja-Helen',
				'looser' => 'Kristiina'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Genadi Nikolajev'
		),
		array (
				'winner' => 'Kristhel',
				'looser' => 'Kaie Kree'
		),
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'Artur'
		),
		// 22 - 2 mängu
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'Ülo'
		),
		array (
				'winner' => 'aivar',
				'looser' => 'Ville Pak'
		),
		// 23 - 2 mängu
		array (
				'winner' => 'Genadi Nikolajev',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Kristjan Pajumets'
		),
		// 24 - 5 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'aivar'
		),
		array (
				'winner' => 'rando',
				'looser' => 'Ville Pak'
		),
		array (
				'winner' => 'Sarapuu',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'Riina Bachmann',
				'looser' => 'Kaie Kree'
		),
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'Jüri Mallene'
		),
		// 27 - 1 mäng
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'Genadi Nikolajev'
		),
		// 28 - 3 mängu
		array (
				'winner' => 'Artur',
				'looser' => 'Ülo'
		),
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'aivar'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Indrek Pajuste'
		),
		// 29 - 3 mängu
		array (
				'winner' => 'Kristhel',
				'looser' => 'janelle'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Per Lindberg'
		),
		array (
				'winner' => 'janelle',
				'looser' => 'Riina Bachmann'
		),
		// 30 - 6 mängu
		array (
				'winner' => 'Genadi Nikolajev',
				'looser' => 'Artur'
		),
		array (
				'winner' => 'Artur',
				'looser' => 'Ville Pak'
		),
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'Indrek Pajuste'
		),
		array (
				'winner' => 'Ahto Klaos',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'Per Lindberg',
				'looser' => 'rando'
		),
		array (
				'winner' => 'Ahto Klaos',
				'looser' => 'Jüri Mallene'
		),
		// 31 - 4 mängu
		array (
				'winner' => 'aivar',
				'looser' => 'Genadi Nikolajev'
		),
		array (
				'winner' => 'Artur',
				'looser' => 'rando'
		),
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'Per Lindberg'
		),
		array (
				'winner' => 'aivar',
				'looser' => 'Indrek Pajuste'
		),
		// 1 - 3 mängu
		array (
				'winner' => 'Sarapuu',
				'looser' => 'Artur'
		),
		array (
				'winner' => 'rando',
				'looser' => 'Ülo'
		),
		array (
				'winner' => 'aivar',
				'looser' => 'Per Lindberg'
		),
		// 2 - 3 mängu
		array (
				'winner' => 'Kristiina',
				'looser' => 'Kristhel'
		),
		array (
				'winner' => 'Ülo',
				'looser' => 'Ville Pak'
		),
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'Jüri Mallene'
		),
		// 4 - 1 mäng
		array (
				'winner' => 'Ülo',
				'looser' => 'Indrek Pajuste'
		),
		// 5 - 3 mängu
		array (
				'winner' => 'Artur',
				'looser' => 'Per Lindberg'
		),
		array (
				'winner' => 'Ahto Klaos',
				'looser' => 'Indrek Pajuste'
		),
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'Illimar Sööt'
		),
		// 2015 - 67 mängu
		// 0806 - 1 mäng
		array (
				'winner' => 'rainer',
				'looser' => 'Illimar Sööt'
		),
		// 0807 - 6 mängu
		array (
				'winner' => 'tarmo',
				'looser' => 'rainer'
		),
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'peacecop kalmer:',
				'statistics'=>'TTJZeE5HUTQ'
		),
		array (
				'winner' => 'Per Lindberg',
				'looser' => 'rando'
		),
		array (
				'winner' => 'ülle',
				'looser' => 'Riina Bachmann',
				'statistics'=>'TTJZeE5HUTM'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'aivar',
				'statistics'=>'TTJZeE5HSmo'
		),
		array (
				'winner' => 'stiina',
				'looser' => 'ülle'
		),
		// 0808 - 1 mäng
		array (
				'winner' => 'Riina Bachmann',
				'looser' => 'helena'
		),
		// 0809 - 5 mängu
		array (
				'winner' => 'boriss',
				'looser' => 'aivar',
				'statistics'=>'TTJZeE5XWXo'
		),
		array (
				'winner' => 'luhamäe',
				'looser' => 'Ville Pak',
				'statistics'=>'TTJZeE5XWmw'
		),
		array (
				'winner' => 'tarmo',
				'looser' => 'Indrek Pajuste',
				'statistics'=>'TTJZeE5qSmg'
		),
		array (
				'winner' => 'tarmo',
				'looser' => 'luhamäe'
		),
		array (
				'winner' => 'kristi',
				'looser' => 'helena',
				'statistics'=>'TTJZeE5qUTQ'
		),
		// 0811 - 1 mäng
		array (
				'winner' => 'ranno',
				'looser' => 'tarmo'
		),
		// 0813 - 3 mängu
		array (
				'winner' => 'ranno',
				'looser' => 'Per Lindberg',
				'statistics'=>'TTJZeE9Ea3k'
		),
		array (
				'winner' => 'külli',
				'looser' => 'katrin'
		),
		array (
				'winner' => 'Kristiina',
				'looser' => 'stiina'
		),
		// 0814 - 1 mäng
		array (
				'winner' => 'Genadi Nikolajev',
				'looser' => 'aivar'
		),
		// 0815 - 3 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'boriss'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Genadi Nikolajev'
		),
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'rando',
				'statistics'=>'TTJZeFlURTA'
		),
		// 0816 - 5 mängu
		array (
				'winner' => 'Per Lindberg',
				'looser' => 'Genadi Nikolajev'
		),
		array (
				'winner' => 'ivar',
				'looser' => 'Ville Pak'
		),
		array (
				'winner' => 'Per Lindberg',
				'looser' => 'Indrek Pajuste'
		),
		array (
				'winner' => 'Riina Bachmann',
				'looser' => 'kristi',
				'statistics'=>'TTJZeFlqQXg'
		),
		array (
				'winner' => 'ivar',
				'looser' => 'Indrek Pajuste'
		),
		// 0817 - 4 mängu
		array (
				'winner' => 'tarmo',
				'looser' => 'Per Lindberg'
		),
		array (
				'winner' => 'ivar',
				'looser' => 'pärn'
		),
		array (
				'winner' => 'Kristiina',
				'looser' => 'külli',
				'statistics'=>'TTJZeFl6RTE'
		),
		array (
				'winner' => 'Kristiina',
				'looser' => 'janelle',
				'statistics'=>'TTJZeFl6RTA'
		),
		// 0818 - 3 mängu
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'janelle',
				'looser' => 'Riina Bachmann',
				'statistics'=>'TTJZeFl6ZGg'
		),
		array (
				'winner' => 'külli',
				'looser' => 'janelle',
				'statistics'=>'TTJZeFl6Z3c'
		),
		// 0819 - 7 mängu
		array (
				'winner' => 'Kaie Kree',
				'looser' => 'helena',
				'statistics'=>'TTJZeFkyUXo'
		),
		array (
				'winner' => 'luhamäe',
				'looser' => 'rainer',
				'statistics'=>'TTJZeFpESTA'
		),
		array (
				'winner' => 'stiina',
				'looser' => 'janelle',
				'statistics'=>'TTJZeFpETTA'
		),
		array (
				'winner' => 'ivar',
				'looser' => 'ranno'
		),
		array (
				'winner' => 'rainer',
				'looser' => 'Ville Pak',
				'statistics'=>'TTJZeFpETms'
		),
		array (
				'winner' => 'rando',
				'looser' => 'luhamäe'
		),
		array (
				'winner' => 'stiina',
				'looser' => 'külli'
		),
		// 0820 - 5 mängu
		array (
				'winner' => 'aivar',
				'looser' => 'luhamäe'
		),
		array (
				'winner' => 'boriss',
				'looser' => 'Genadi Nikolajev'
		),
		array (
				'winner' => 'stiina',
				'looser' => 'katrin',
				'statistics'=>'TTJZeFpURmo'
		),
		array (
				'winner' => 'ivar',
				'looser' => 'peacecop kalmer:',
				'statistics'=>'TTJZeFpUbGw'
		),
		array (
				'winner' => 'Genadi Nikolajev',
				'looser' => 'Indrek Pajuste',
				'statistics'=>'TTJZeFpUTms'
		),
		// 0822 - 1 mäng
		array (
				'winner' => 'boriss',
				'looser' => 'pärn',
				'statistics'=>'TTJZeFptUXk'
		),
		// 0823 - 4 mängu
		array (
				'winner' => 'Ville Pak',
				'looser' => 'Illimar Sööt',
				'statistics'=>'TTJZeU1HTTM'
		),
		array (
				'winner' => 'aivar',
				'looser' => 'Indrek Pajuste',
				'statistics'=>'TTJZeU1HUTA'
		),
		array (
				'winner' => 'kristi',
				'looser' => 'Kaie Kree',
				'statistics'=>'TTJZeU1UQXg'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'tarmo',
				'statistics'=>'TTJZeU1USXc'
		),
		// 0824 - 1 mäng
		array (
				'winner' => 'katrin',
				'looser' => 'Riina Bachmann',
				'statistics'=>'TTJZeU1qTXg'
		),
		// 0825 - 2 mängu
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'ivar',
				'statistics'=>'TTJZeU1tRTA'
		),
		array (
				'winner' => 'pärn',
				'looser' => 'Indrek Pajuste',
				'statistics'=>'TTJZeU5ETXk'
		),
		// 0826
// See mäng jäi pooleli ja jätkus hiljem.
// 		array (
// 				'winner' => 'Illimar Sööt',
// 				'looser' => 'rando'
// 		),
		// 0827 - 1 mäng
		array (
				'winner' => 'boriss',
				'looser' => 'tarmo',
				'statistics'=>'TTJZeU5UTXc'
		),
// See mäng jäi taas pooleli. Aga millal?
// 		array (
// 				'winner' => 'Illimar Sööt',
// 				'looser' => 'rando'
// 		),
		// 0828 - 1 mäng
		array (
				'winner' => 'luhamäe',
				'looser' => 'Illimar Sööt',
				'statistics'=>'TTJZeU5qSmo'
		),
		// 0830 - 2 mängu
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'stiina',
				'statistics'=>'TTJZeU56VXc'
		),
		array (
				'winner' => 'Kristiina',
				'looser' => 'Indrek Pajuste',
				'statistics'=>'TTJZeU4ySXo'
		),
		// 0831 - 1 mäng
		array (
				'winner' => 'aivar',
				'looser' => 'Kristiina',
				'statistics'=>'TTJZeU9ESTA'
		),
		// 0903 - 3 mängu
		array (
				'winner' => 'janelle',
				'looser' => 'katrin'
		),
		array ( // ?
				'winner' => 'Illimar Sööt',
				'looser' => 'rando'
		),
		array (
				'winner' => 'rando',
				'looser' => 'stiina',
				'statistics'=>'TTJZeVlUYzA'
		),
		// 0904 - 2 mängu
		array (
				'winner' => 'Ville Pak',
				'looser' => 'stiina'
		),
		array (
				'winner' => 'pärn',
				'looser' => 'Per Lindberg'
		),
		// 0906 - 1 mäng
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Indrek Pajuste'
		),
		// 0907 - 2 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Kristjan Pajumets'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Kristjan Pajumets'
		),
		// 0910 - 1 mäng
		array (
				'winner' => 'boriss',
				'looser' => 'Indrek Pajuste'
		),
		// 2016 HaValÜTeK Vägi - 29 mängu
		/*
		 * T: riina / kaie
		 * T: kalmer / kristjan
		 * A: kalmer peacecop: / boris
		 * A: boris / Genadi Nikolajev
		 * A: boris - per
		 * A: per / Genadi Nikolajev
		 * T: kalmer peacecop: / oliver
		 * N: liis / ville
		 * N: liis / illimar
		 * T: per / indrek
		 * T: kalmer peacecop: / ville
		 * T: marje / ville
		 * T: Genadi Nikolajev / ville
		 * A: boris / ville
		 * I: Genadi Nikolajev / illimar
		 * I: liis / marje
		 * T: indrek / marje
		 * I: indrek / illimar
		 * A: kristjan / oliver
		 * T: kairi / riina
		 * T: riina / merje
		 * I: illimar / kairi
		 * A: kristjan / boris
		 * T: riina / kersti
		 * A: oliver / boris
		 * T: kaie / kersti
		 * I: illimar / kairi
		 * A: kristjan / boris
		 * T: riina / kersti
		 * A: oliver / boris
		 * T: kaie / kersti
		 * I: illimar / riina
		 * T: indrek / Genadi Nikolajev
		 *
		 */
		// array (
		// 'winner' => 'a',
		// 'looser' => 'b'
		// ),
		// array (
		// 'winner' => 'b',
		// 'looser' => 'c'
		// ),
		// array (
		// 'winner' => 'c',
		// 'looser' => 'b'
		// ),
		// array (
		// 'winner' => 'c',
		// 'looser' => 'a'
		// ),
		// 801 - 1 mäng
		array (
				'winner' => 'Riina Bachmann',
				'looser' => 'Kaie Kree',
				'statistics'=> 'TVRBME9EVTA'
		),
		// 803 - 1 mäng
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Kristjan Pajumets'
		),
		// 806 - 2 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'boriss'
		),
		array (
				'winner' => 'boriss',
				'looser' => 'Genadi Nikolajev',
				'statistics'=> 'TVRBMFltTXg'
		),
		// 807 - 2 mängu
		array (
				'winner' => 'boriss',
				'looser' => 'Per Lindberg',
				'statistics'=> 'TVRBMFl6RTQ'
		),
		array (
				'winner' => 'Genadi Nikolajev',
				'looser' => 'Per Lindberg',
				'statistics'=> 'TVRBMFl6SXc'
		),
		// 808 - 1 mäng
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'oliver kotkas',
				'statistics'=> 'TVRBMFkyTTM'
		),
		// 809 - 3 mängu
		array (
				'winner' => 'Ville Pak',
				'looser' => 'Liis Laanesaar',
				'statistics'=> 'TVRBMFpEVTA'
		),
		array (
				'winner' => 'Liis Laanesaar',
				'looser' => 'Illimar Sööt',
				'statistics'=> 'TVRBMFpEWXo'
		),
		array (
				'winner' => 'Per Lindberg',
				'looser' => 'Indrek Pajuste'
		),
		// 810 - 1 mäng
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Ville Pak'
		),
		// 812 - 2 mängu
		array (
				'winner' => 'Ville Pak',
				'looser' => 'marje tammo',
				'statistics'=>'TVRBMFpqTTU'
		),
		array (
				'winner' => 'Ville Pak',
				'looser' => 'Genadi Nikolajev',
				'statistics'=> 'TVRBMFpqUmk'
		),
		// 813 - 1 mäng
		array (
				'winner' => 'boriss',
				'looser' => 'Ville Pak',
				'statistics'=> 'TVRBMU1ERTM'
		),
		// 814 - 1 mäng
		array (
				'winner' => 'Genadi Nikolajev',
				'looser' => 'Illimar Sööt',
				'statistics'=>'TVRBMU1UWXg'
		),
		// 817 - 1 mäng
		array (
				'winner' => 'marje tammo',
				'looser' => 'Liis Laanesaar',
				'statistics'=> 'TVRBMU5ERTM'
		),
		// 818 - 1 mäng
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'marje tammo',
				'statistics'=> 'TVRBMU5HRXo'
		),
		// 821 - 1 mäng
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'Illimar Sööt',
				'statistics'=> 'TVRBMU5tUm0'
		),
		// 822 - 2 mängu
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'oliver kotkas'
		),
		array (
				'winner' => 'kairi vilderson',
				'looser' => 'Riina Bachmann'
		),
		// 823 - 1 mäng
		array (
				'winner' => 'merje kruus',
				'looser' => 'Riina Bachmann',
				'statistics'=> 'TVRBMU9UQXc'
		),
		// 901 - 1 mäng
		array (
				'winner' => 'kairi vilderson',
				'looser' => 'Illimar Sööt'
		),
		// 902 - 2 mängu
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'boriss'
		),
		array (
				'winner' => 'Riina Bachmann',
				'looser' => 'kersti oselin',
				'statistics'=> 'TVRBMVptVTI'
		),
		// 903 - 2 mängu
		array (
				'winner' => 'oliver kotkas',
				'looser' => 'boriss',
				'statistics'=> 'TVRBMk1EYzQ'
		),
		array (
				'winner' => 'Kaie Kree',
				'looser' => 'kersti oselin',
				'statistics'=> 'TVRBMk1EaGg'
		),
		// 904 - 1 mäng
		array ( // kas see mäng toimus pühapäeval ja oli mingi liigatennise mäng hoopis?
				'winner' => 'marje tammo',
				'looser' => 'kairi vilderson'
		),
		// 905 - 2 mängu
		array ( // see mäng oli vist trenni käigus Illimari väljakul
				'winner' => 'Illimar Sööt',
				'looser' => 'kersti oselin'
		),
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'Riina Bachmann',
				'statistics'=> 'TVRBMk1qTTA'
		),
		// 2018 Vägi - 62 mängu
		/*
		 * Aare Halliko / peacecop kalmer:
		 * Aare Halliko / Ville Pak
		 * Indrek Jakobson / Evelin Poom
		 * Gerd Eston Sepp / Peeter Poom
		 * Gerd Eston Sepp / Meelis Rajapuu
		 * Janar Välk / Evelin Poom
		 * Meelis Rajapuu / Peeter Poom
		 * * T: peacecop kalmer: / Illimar Sööt
		 * * T: peacecop kalmer: / Ville Pak
		 * A: Indrek Pajuste / Janar Välk
		 * * A: Helen Maisa / Relika
		 * T: Gerd Eston Sepp / Siim Simson
		 * T: Ave Piik / Relika
		 * * T: peacecop kalmer: / Peeter Poom
		 * T: Jüri Mallene / Riho Maisa
		 * T: Helen Maisa / Riho Maisa
		 * * T: Gerd Eston Sepp / Lembit Tamper
		 * * A: Saree Halliko / Peeter Poom
		 * * T: Jüri Mallene / Illimar Sööt
		 * A: Janar Välk / oliver koel
		 * T: Janar Välk / Illimar Sööt
		 * * A: Gerd Eston Sepp / oliver koel
		 * T: Ave Piik / Illimar Sööt
		 * * T: Kristiina / Ville Pak
		 * * T: Jüri Mallene / oliver koel
		 * T: Ave Piik / Jüri Mallene
		 * * T: Lembit Tampere / Relika
		 * A: alvar veersalu / Mihkel Rajapuu
		 * * A: oliver koel / Relika
		 * * T: Indrek Pajuste / marje tammo
		 * * A: Alvar Veersalu / Siim Simson
		 * * A: Janar Välk / Jüri Mallene
		 * * A: oliver koel / riho maisa
		 * * A: marje tammo / Ville Pak
		 * A: Indrek Jakobson / oliver koel
		 * * I: boris / Meelis Rajapuu
		 * T: Ave Piik / Jüri Mallene
		 * * A: Ave Piik / Janar Välk
		 * * A: Indrek Pajuste / Illimar Sööt
		 * * A: Indrek Jakobson / Jüri Mallene
		 * T: Kristiina / Siim Simson
		 * T: georg kangur / marje tammo
		 * * A: Alvar Veersalu / marje tammo
		 * * T: Meelis Rajapuu / Ville Pak
		 * * A: Relika / riho maisa
		 * * A: alvar veersalu / georg kangur
		 * * A: georg kangur / Illimar Sööt
		 * * A: Ave Piik / georg kangur
		 * * A: marje tammo / Meelis Rajapuu
		 * * A: alvar veersalu / Illimar Sööt
		 * * A: Aare Halliko / Kristiina
		 * A: marje tammo / Illimar Sööt
		 * * T: Janar Välk / Siim Simson
		 * A: Indrek Jakobson / Siim Simson
		 * * A: Relika / riho maisa
		 * * A: Indrek Jakobson / Siim Simson
		 * * A: Ave Piik / Indrek Pajuste
		 * * Relika / Riho
		 * I: oliver koel / Siim Simson
		 */
		// 0615: Tabasalu üksikmängu GP - 1 mäng
		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'Siim Simson'
		),
		// 0804 - 1 mäng
		array (
				'winner' => 'Aare Halliko',
				'looser' => 'peacecop kalmer:',
				'statistics'=> 'TVRGbE5XWXg'
		),
		// 0805 - 3 mängu
		array (
				'winner' => 'Aare Halliko',
				'looser' => 'Ville Pak',
				'statistics'=> 'TVRGbE5tSTA'
		),
		array (
				'winner' => 'Evelin Poom',
				'looser' => 'Indrek Jakobson',
				'statistics'=> 'TVRGbE5tTm0'
		),
		array (
				'winner' => 'Peeter Poom',
				'looser' => 'Gerd Eston Sepp',
				'statistics'=> 'TVRGbE5tVTE'
		),
		// 0806 - 2 mängu
		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'Gerd Eston Sepp',
				'statistics'=> 'TVRGbE56STI'
		),
		array (
				'winner' => 'Janar Välk',
				'looser' => 'Evelin Poom',
				'statistics'=> 'TVRGbE56Smo'
		),
		// 0807 - 3 mängu
		array (
				'winner' => 'Peeter Poom',
				'looser' => 'Meelis Rajapuu',
				'statistics'=> 'TVRGbE4yRm0'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Illimar Sööt',
				'statistics'=> 'TVRGbE9EZzA'
		),
		// 0809 - 1 mäng
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Ville Pak',
				'statistics'=> 'TVRGbE9HVTU'
		),
		// 0810: Tabamuse üksikmängu GP - 2 mängu
		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'Lembit Tampere'
		),
		array (
				'winner' => 'Siim Simson',
				'looser' => 'Lembit Tampere'
		),
		// 0811 - 2 mängu
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'Janar Välk',
				'statistics'=> 'TVRGbE9HWXk'
		),
		array (
				'winner' => 'Relika Aruoja',
				'looser' => 'Helen Maisa',
				'statistics'=>'TVRGbE9HWmw'
		),
		// 0813 - 2 mängu
		array (
				'winner' => 'Siim Simson',
				'looser' => 'Gerd Eston Sepp',
				'statistics'=> 'TVRGbE9XVTQ'
		),
		array (
				'winner' => 'Ave Piik',
				'looser' => 'Relika Aruoja',
				'statistics'=> 'TVRGbE9XWTI'
		),
		// 0814 - 2 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Peeter Poom',
				'statistics'=> 'TVRGbFkyUmk'
		),
		array (
				'winner' => 'Jüri Mallene',
				'looser' => 'riho maisa',
				'statistics'=> 'TVRGbFlUVmo'
		),
		// 0815 - 1 mäng
		array (
				'winner' => 'riho maisa',
				'looser' => 'Helen Maisa',
				'statistic'=>'TVRGbFlqUmo'
		),
		// 0816 - 3 mängu
		array (
				'winner' => 'Gerd Eston Sepp',
				'looser' => 'Lembit Tampere',
				'statistics'=> 'TVRGbFlqYzA'
		),
		array (
				'winner' => 'Aare Halliko',
				'looser' => 'Peeter Poom',
				'statistics'=> 'TVRGbFlqYzQ'
		),
		array (
				'winner' => 'Jüri Mallene',
				'looser' => 'Illimar Sööt',
				'statistics'=> 'TVRGbFltSmw'
		),
		// 0817 - 3 mängu
		array ( // nad mängisid eraldi, aga kas just sel päeval?
				'winner' => 'Jüri Mallene',
				'looser' => 'Illimar Sööt'
		),
		array ( // nad mängisid eraldi, aga kas just sel päeval?
				'winner' => 'Illimar Sööt',
				'looser' => 'Jüri Mallene'
		),
		array (
				'winner' => 'Janar Välk',
				'looser' => 'oliver koel',
				'statistics'=> 'TVRGbFl6Qmo'
		),
		// 0818 - 1 mäng
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'Janar Välk',
				'statistics'=> 'TVRGbFl6ZzQ'
		),
		// 0819 - 1 mäng
		array (
				'winner' => 'oliver koel',
				'looser' => 'Gerd Eston Sepp',
				'statistics'=> 'TVRGbU56aGs'
		),
		// 0820 - 3 mängu
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'Ave Piik'
		),
		array (
				'winner' => 'Kristiina',
				'looser' => 'Ville Pak',
				'statistics'=> 'TVRGbFpHVTM'
		),
		array (
				'winner' => 'Jüri Mallene',
				'looser' => 'oliver koel',
				'statistics'=> 'TVRGbFpHVmw'
		),
		// 0821 - 1 mäng
		array (
				'winner' => 'Lembit Tampere',
				'looser' => 'Relika Aruoja',
				'statistics'=> 'TVRGbFpXRmw'
		),
		// 0822 - 1 mäng
		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'alvar veersalu'
		),
		// 0824 - 1 mäng
		array (
				'winner' => 'oliver koel',
				'looser' => 'Relika Aruoja',
				'statistics'=> 'TVRGbU1HRTU'
		),
		// 0825 - 1 mäng
		array (
				'winner' => 'marje tammo',
				'looser' => 'Indrek Pajuste'
		),
		// 0826 - 4 mängu
		array (
				'winner' => 'alvar veersalu',
				'looser' => 'Siim Simson'
		),
		array (
				'winner' => 'Janar Välk',
				'looser' => 'Jüri Mallene',
				'statistics'=> 'TVRGbU1XRXg'
		),
		array (
				'winner' => 'oliver koel',
				'looser' => 'riho maisa',
				'statistics'=> 'TVRGbU1XRmg'
		),
		array (
				'winner' => 'Ville Pak',
				'looser' => 'marje tammo',
				'statistics'=> 'TVRGbU1XSTE'
		),
		// 0828 - 2 mängu
		array (
				'winner' => 'Indrek Jakobson',
				'looser' => 'oliver koel',
				'statistics'=> 'TVRGbU1qZGo'
		),
		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'boriss',
				'statistics'=> 'TVRGbU1qZzM'
		),
		// 0831 - 1 mäng
		array (
				'winner' => 'Ave Piik',
				'looser' => 'Jüri Mallene'
		),
		// 0901 - 4 mängu
		array (
				'winner' => 'Ave Piik',
				'looser' => 'Janar Välk',
				'statistics'=> 'TVRGbU5UTms'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Aare Halliko',
				'statistics'=>'TVRJd09EZGg'
		),
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'Indrek Pajuste',
				'statistics'=> 'TVRGbU5XUTQ'
		),
		array (
				'winner' => 'Indrek Jakobson',
				'looser' => 'Jüri Mallene',
				'statistics'=>'TVRGbU5qUmg'
		),
		// 0907 - 1 mäng
		array (
				'winner' => 'Kristiina',
				'looser' => 'Siim Simson'
		),
		// 0908 - 1 mäng
		array (
				'winner' => 'marje tammo',
				'looser' => 'georg kangur',
				'statistics'=> 'TVRGbVltSXk'
		),
		// 0910 - 2 mängu
		array (
				'winner' => 'marje tammo',
				'looser' => 'alvar veersalu',
				'statistics'=> 'TVRGbVpHSTQ'
		),
		array (
				'winner' => 'Ville Pak',
				'looser' => 'Meelis Rajapuu',
				'statistics'=> 'TVRGbVpHWXg'
		),
		// 0914 - 1 mäng
		array (
				'winner' => 'alvar veersalu',
				'looser' => 'georg kangur',
				'statistics'=> 'TVRGbVpqazI'
		),
		// 0915 - 3 mängu
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'georg kangur',
				'statistics'=> 'TVRGbVptWms'
		),
		array (
				'winner' => 'Ave Piik',
				'looser' => 'georg kangur'
		),
		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'marje tammo',
				'statistics'=> 'TVRJd01ERTI'
		),
		// 0916 - 2 mängu
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'alvar veersalu',
				'statistics'=> 'TVRJd01URmg'
		),
		array (
				'winner' => 'Aare Halliko',
				'looser' => 'Kristiina',
				'statistics'=> 'TVRJd01USXg'
		),
		// 0920 - 1 mäng
		array (
				'winner' => 'marje tammo',
				'looser' => 'Illimar Sööt',
				'statistics'=> 'TVRJd016TTM'
		),
		// 0921 - 1 mäng
		array (
				'winner' => 'Janar Välk',
				'looser' => 'Siim Simson',
				'statistics'=> 'TVRJd00yRTE'
		),
		// 0928 - 1 mäng
		array (
				'winner' => 'Indrek Jakobson',
				'looser' => 'Siim Simson',
				'statistics'=> 'TVRJd05UWTQ'
		),
		// 0929 - 2 mängu
		array (
				'winner' => 'Ave Piik',
				'looser' => 'Indrek Pajuste',
				'statistics'=> 'TVRJd04yVms'
		),
		array (
				'winner' => 'riho maisa',
				'looser' => 'Relika Aruoja',
				'statistics'=> 'TVRGbVpUUmg'
		),
		// 1013 - 1 mäng
		array (
				'winner' => 'Siim Simson',
				'looser' => 'oliver koel',
				'statistics'=> 'TVRJd1pXRTM'
		),
		// HaValÜTeK 2019 Vägi - 33 mängu
		// 628 - 2 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Illimar Sööt',
				'statistics'=> 'TVRKbE5HVmk'
		),
		array (
				'winner' => 'Siim Simson',
				'looser' => 'Illimar Sööt',
				'statistics'=> 'TVRKbE5HWXk'
		),
		// 809 - 3 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Aare Halliko',
				'statistics'=> 'TVRKbFlUa3g'
		),
		array (
				'winner' => 'Aare Halliko',
				'looser' => 'Siim Simson',
				'statistics'=> 'TVRKbFlXVXk'
		),
		array (
				'winner' => 'Aare Halliko',
				'looser' => 'peacecop kalmer:',
				'statistics'=>'TVRKbFpEZGw'
		),
		// 820 - 5 mängu
		array (
				'winner' => 'Per Lindberg',
				'looser' => 'Indrek Jakobson',
				'statistics'=> 'TVRKa09UUTU'
		),
		array (
				'winner' => 'oliver koel',
				'looser' => 'Gerd Eston Sepp',
				'statistics'=> 'TVRKa09UWXk'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Kristiina',
				'statistics'=> 'TVRKa09UWTE'
		),
		array (
				'winner' => 'Reet Ruuto',
				'looser' => 'Kaie Kree',
				'statistics'=> 'TVRKa09UZGk'
		),
		array (
				'winner' => 'Maidu',
				'looser' => 'oliver koel',
				'statistics'=> 'TVRKa09UbGg'
		),
		// 821 - 1 mäng
		array (
				'winner' => 'Maidu',
				'looser' => 'Illimar Sööt',
				'statistics'=> 'TVRKa1lUQXo'
		),
		// 822 - 4 mängu
		array (
				'winner' => 'oliver koel',
				'looser' => 'Reet Ruuto',
				'statistics'=> 'TVRKa1lUZzA'
		),
		array (
				'winner' => 'Diana Laurits-Tass',
				'looser' => 'Lembit Tampere',
				'statistics'=> 'TVRKa1lUbGk'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Maidu',
				'statistics'=> 'TVRNeU5USTM'
		),
		array (
				'winner' => 'oliver koel',
				'looser' => 'Jüri Mallene',
				'statistics'=> 'TVRKa1lXRmg'
		),
		// 824 - 3 mängu
		array (
				'winner' => 'Siim Simson',
				'looser' => 'oliver koel',
				'statistics'=> 'TVRKa1ltSmo'
		),
		array (
				'winner' => 'Gerd Eston Sepp',
				'looser' => 'Jüri Mallene',
				'statistics'=> 'TVRKa1ltUms'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Diana Laurits-Tass',
				'statistics'=> 'TVRKa1ltWXg'
		),
		// 825 - 7 mängu
		array (
				'winner' => 'Kristiina',
				'looser' => 'Meelis Rajapuu',
				'statistics'=> 'TVRKa1kyWmw'
		),
		array (
				'winner' => 'Lembit Tampere',
				'looser' => 'Relika Aruoja',
				'statistics'=> 'TVRKa1pESXo'
		),
		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'Illimar Sööt',
				'statistics'=> 'TVRKa1pEUXc'
		),
		array (
				'winner' => 'Siim Simson',
				'looser' => 'Indrek Jakobson',
				'statistics'=> 'TVRKa1pEWXo'
		),
		array (
				'winner' => 'Aet',
				'looser' => 'Jüri Mallene',
				'statistics'=> 'TVRKa1pEWTU'
		),
		array (
				'winner' => 'Maidu',
				'looser' => 'Kristiina',
				'statistics'=> 'TVRKa1pEZ3k'
		),
		array (
				'winner' => 'Aet',
				'looser' => 'Relika Aruoja',
				'statistics'=> 'TVRKa1pHRTQ'
		),
		// 830 - 8 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Aare Halliko',
				'statistics'=> 'TVRKbFpUUmo'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Pamela',
				'statistics'=> 'TVRKbU1XVmk'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Aare Halliko',
				'statistics'=> 'TVRKbU1qWXo'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Maidu',
				'statistics'=> 'TVRKbU56QXk'
		),
		array (
				'winner' => 'Maidu',
				'looser' => 'Siim Simson',
				'statistics'=> 'TVRNeFl6ZGw'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Siim Simson',
				'statistics'=> 'TVRNeFpESmk'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Aare Halliko',
				'statistics'=> 'TVRNeFpHTTQ'
		),
		array (
				'winner' => 'Aare Halliko',
				'looser' => 'Siim Simson',
				'statistics'=> 'TVRNeFpHVmg'
		),
);

$mergeSortChart = new MergeSortChart ();
$metadataOfCurrentFile = pathinfo ( __FILE__ );
preg_match ( '/merge-sort-chart-(.+)/', $metadataOfCurrentFile ['filename'], $foundMatches );
$mergeSortChart->manageResults ( array (
		'matches' => $matches,
		'typeOfTennis' => $foundMatches [1]
) );

