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
				'looser' => 'Aare'
		),
		array (
				'winner' => 'Jan',
				'looser' => 'Genadi'
		),
		array (
				'winner' => 'Margus Aru',
				'looser' => 'Jan'
		),
		array (
				'winner' => 'Janelle',
				'looser' => 'Signe'
		),
		array (
				'winner' => 'Marje',
				'looser' => 'Adamson  '
		),
		// 13 - 8 mängu
		array (
				'winner' => 'Jan',
				'looser' => 'Aare'
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
				'looser' => 'Adamson'
		),
		array ( // ?
				'winner' => 'Margus Uppus',
				'looser' => 'Aivar'
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
				'looser' => 'Evelin'
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
				'winner' => 'Liis',
				'looser' => 'Riina'
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
				'winner' => 'Liis',
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
				'winner' => 'Liis',
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
				'looser' => 'Rätsep'
		),
		// 16 - 11 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Oleg'
		),
		array (
				'winner' => 'Triin Loodus',
				'looser' => 'Janelle'
		),
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'Kent'
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
				'looser' => 'Marje'
		),
		array (
				'winner' => 'Janelle',
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
				'winner' => 'Liis',
				'looser' => 'Signe'
		),
		array (
				'winner' => 'Aru',
				'looser' => 'Aivar'
		),
		// 17 - 7 mängu
		array (
				'winner' => 'Oleg',
				'looser' => 'Margus Uppus'
		),
		array (
				'winner' => 'Kent',
				'looser' => 'Klaos'
		),
		array (
				'winner' => 'Kristiina',
				'looser' => 'Marju'
		),
		array (
				'winner' => 'Triin Loodus',
				'looser' => 'Riina'
		),
		array (
				'winner' => 'Aru',
				'looser' => 'Kristjan Pajumets'
		),
		array (
				'winner' => 'Triin Loodus',
				'looser' => 'Marju'
		),
		array (
				'winner' => 'Kent',
				'looser' => 'Andrus'
		),
		array (
				'winner' => 'Reet Rätsep',
				'looser' => 'Evelyn'
		),
		// 18 - 10 mängu
		array (
				'winner' => 'Klaos',
				'looser' => 'Andrus'
		),
		array (
				'winner' => 'Reet Rätsep',
				'looser' => 'Janelle'
		),
		array (
				'winner' => 'Reet Rätsep',
				'looser' => 'Riina'
		),
		array (
				'winner' => 'Kristiina',
				'looser' => 'Signe'
		),
		array (
				'winner' => 'Janelle',
				'looser' => 'Riina'
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
				'looser' => 'Aivar'
		),
		array (
				'winner' => 'Jan',
				'looser' => 'Kristjan Pajumets'
		),
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'Aivar'
		),
		// 19 - 2 mängu
		array (
				'winner' => 'Signe',
				'looser' => 'Triin Loodus'
		),
		array (
				'winner' => 'Aru',
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
				'looser' => 'Riina'
		),
		array (
				'winner' => 'Aivar',
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
				'looser' => 'Liis'
		),
		// 22 - 2 mängu
		array (
				'winner' => 'Genadi',
				'looser' => 'Tõnu'
		),
		array (
				'winner' => 'Evelyn',
				'looser' => 'Riina'
		),
		// 23 - 1 mäng
		array (
				'winner' => 'Genadi',
				'looser' => 'Artur'
		),
		// 2014
		// 19 - 1 mäng
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Illimar'
		),
		// 20 - 3 mängu
		array (
				'winner' => 'Genadi',
				'looser' => 'Priit'
		),
		array (
				'winner' => 'Aivar',
				'looser' => 'Rando'
		),
		array (
				'winner' => 'Janelle',
				'looser' => 'Kaie'
		),
		// 21 - mängu
		array (
				'winner' => 'Ville',
				'looser' => 'Klaos'
		),
		array (
				'winner' => 'Mirja-Helen',
				'looser' => 'Kristiina'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Genadi'
		),
		array (
				'winner' => 'Kristhel',
				'looser' => 'Kaie'
		),
		array (
				'winner' => 'Pajumets',
				'looser' => 'Artur'
		),
		// 22 - 2 mängu
		array (
				'winner' => 'Pajumets',
				'looser' => 'Ülo'
		),
		array (
				'winner' => 'Aivar',
				'looser' => 'Ville'
		),
		// 23 - 2 mängu
		array (
				'winner' => 'Genadi',
				'looser' => 'illimar'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Pajumets'
		),
		// 24 - 5 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Aivar'
		),
		array (
				'winner' => 'Rando',
				'looser' => 'Ville'
		),
		array (
				'winner' => 'Priit',
				'looser' => 'illimar'
		),
		array (
				'winner' => 'Riina',
				'looser' => 'Kaie'
		),
		array (
				'winner' => 'Pajuste',
				'looser' => 'Jüri'
		),
		// 27 - 1 mäng
		array (
				'winner' => 'Pajumets',
				'looser' => 'Genadi'
		),
		// 28 - 3 mängu
		array (
				'winner' => 'Artur',
				'looser' => 'Ülo'
		),
		array (
				'winner' => 'Pajumets',
				'looser' => 'Aivar'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Pajuste'
		),
		// 29 - 3 mängu
		array (
				'winner' => 'Kristhel',
				'looser' => 'Janelle'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Per'
		),
		array (
				'winner' => 'Janelle',
				'looser' => 'Riina'
		),
		// 30 - 6 mängu
		array (
				'winner' => 'Genadi',
				'looser' => 'Artur'
		),
		array (
				'winner' => 'Artur',
				'looser' => 'Ville'
		),
		array (
				'winner' => 'Pajumets',
				'looser' => 'Pajuste'
		),
		array (
				'winner' => 'Klaos',
				'looser' => 'illimar'
		),
		array (
				'winner' => 'Per',
				'looser' => 'Rando'
		),
		array (
				'winner' => 'Klaos',
				'looser' => 'Jüri'
		),
		// 31 - 4 mängu
		array (
				'winner' => 'Aivar',
				'looser' => 'Genadi'
		),
		array (
				'winner' => 'Artur',
				'looser' => 'Rando'
		),
		array (
				'winner' => 'Pajumets',
				'looser' => 'Per'
		),
		array (
				'winner' => 'Aivar',
				'looser' => 'Pajuste'
		),
		// 1 - 3 mängu
		array (
				'winner' => 'Priit',
				'looser' => 'Artur'
		),
		array (
				'winner' => 'Rando',
				'looser' => 'Ülo'
		),
		array (
				'winner' => 'Aivar',
				'looser' => 'Per'
		),
		// 2 - 3 mängu
		array (
				'winner' => 'Kristiina',
				'looser' => 'Kristhel'
		),
		array (
				'winner' => 'Ülo',
				'looser' => 'Ville'
		),
		array (
				'winner' => 'illimar',
				'looser' => 'Jüri'
		),
		// 4 - 1 mäng
		array (
				'winner' => 'Ülo',
				'looser' => 'Pajuste'
		),
		// 5 - 3 mängu
		array (
				'winner' => 'Artur',
				'looser' => 'Per'
		),
		array (
				'winner' => 'Klaos',
				'looser' => 'Pajuste'
		),
		array (
				'winner' => 'Pajuste',
				'looser' => 'illimar'
		),
		// 2015 - 67 mängu
		// 0806 - 1 mäng
		array (
				'winner' => 'rainer',
				'looser' => 'illimar'
		),
		// 0807 - 6 mängu
		array (
				'winner' => 'tarmo',
				'looser' => 'rainer'
		),
		array (
				'winner' => 'kristjan',
				'looser' => 'kalmer'
		),
		array (
				'winner' => 'per',
				'looser' => 'rando'
		),
		array (
				'winner' => 'ülle',
				'looser' => 'riina'
		),
		array (
				'winner' => 'kalmer',
				'looser' => 'aivar'
		),
		array (
				'winner' => 'stiina',
				'looser' => 'ülle'
		),
		// 0808 - 1 mäng
		array (
				'winner' => 'riina',
				'looser' => 'helena'
		),
		// 0809 - 5 mängu
		array (
				'winner' => 'boris',
				'looser' => 'aivar'
		),
		array (
				'winner' => 'ahto',
				'looser' => 'ville'
		),
		array (
				'winner' => 'tarmo',
				'looser' => 'indrek'
		),
		array (
				'winner' => 'tarmo',
				'looser' => 'ahto'
		),
		array (
				'winner' => 'kristi',
				'looser' => 'helena'
		),
		// 0811 - 1 mäng
		array (
				'winner' => 'ranno',
				'looser' => 'tarmo'
		),
		// 0813 - 3 mängu
		array (
				'winner' => 'ranno',
				'looser' => 'per'
		),
		array (
				'winner' => 'külli',
				'looser' => 'katrin'
		),
		array (
				'winner' => 'kristiina',
				'looser' => 'stiina'
		),
		// 0814 - 1 mäng
		array (
				'winner' => 'genadi',
				'looser' => 'aivar'
		),
		// 0815 - 3 mängu
		array (
				'winner' => 'kalmer',
				'looser' => 'boris'
		),
		array (
				'winner' => 'kalmer',
				'looser' => 'genadi'
		),
		array (
				'winner' => 'indrek',
				'looser' => 'rando'
		),
		// 0816 - 5 mängu
		array (
				'winner' => 'per',
				'looser' => 'genadi'
		),
		array (
				'winner' => 'ivar',
				'looser' => 'ville'
		),
		array (
				'winner' => 'per',
				'looser' => 'indrek'
		),
		array (
				'winner' => 'riina',
				'looser' => 'kristi'
		),
		array (
				'winner' => 'ivar',
				'looser' => 'indrek'
		),
		// 0817 - 4 mängu
		array (
				'winner' => 'tarmo',
				'looser' => 'per'
		),
		array (
				'winner' => 'ivar',
				'looser' => 'priit'
		),
		array (
				'winner' => 'kristiina',
				'looser' => 'külli'
		),
		array (
				'winner' => 'kristiina',
				'looser' => 'janelle'
		),
		// 0818 - 3 mängu
		array (
				'winner' => 'indrek',
				'looser' => 'illimar'
		),
		array (
				'winner' => 'janelle',
				'looser' => 'riina'
		),
		array (
				'winner' => 'külli',
				'looser' => 'janelle'
		),
		// 0819 - 7 mängu
		array (
				'winner' => 'kaie',
				'looser' => 'helena'
		),
		array (
				'winner' => 'ahto',
				'looser' => 'rainer'
		),
		array (
				'winner' => 'stiina',
				'looser' => 'janelle'
		),
		array (
				'winner' => 'ivar',
				'looser' => 'ranno'
		),
		array (
				'winner' => 'rainer',
				'looser' => 'ville'
		),
		array (
				'winner' => 'rando',
				'looser' => 'ahto'
		),
		array (
				'winner' => 'stiina',
				'looser' => 'külli'
		),
		// 0820 - 5 mängu
		array (
				'winner' => 'aivar',
				'looser' => 'ahto'
		),
		array (
				'winner' => 'boris',
				'looser' => 'genadi'
		),
		array (
				'winner' => 'stiina',
				'looser' => 'katrin'
		),
		array (
				'winner' => 'ivar',
				'looser' => 'kalmer'
		),
		array (
				'winner' => 'genadi',
				'looser' => 'indrek'
		),
		// 0822 - 1 mäng
		array (
				'winner' => 'boris',
				'looser' => 'priit'
		),
		// 0823 - 4 mängu
		array (
				'winner' => 'ville',
				'looser' => 'illimar'
		),
		array (
				'winner' => 'aivar',
				'looser' => 'indrek'
		),
		array (
				'winner' => 'kristi',
				'looser' => 'kaie'
		),
		array (
				'winner' => 'kalmer',
				'looser' => 'tarmo'
		),
		// 0824 - 1 mäng
		array (
				'winner' => 'katrin',
				'looser' => 'riina'
		),
		// 0825 - 2 mängu
		array (
				'winner' => 'kristjan',
				'looser' => 'ivar'
		),
		array (
				'winner' => 'priit',
				'looser' => 'indrek'
		),
		// 0826
// See mäng jäi pooleli ja jätkus hiljem.
// 		array (
// 				'winner' => 'illimar',
// 				'looser' => 'rando'
// 		),
		// 0827 - 1 mäng
		array (
				'winner' => 'boris',
				'looser' => 'tarmo'
		),
// See mäng jäi taas pooleli. Aga millal?
// 		array (
// 				'winner' => 'illimar',
// 				'looser' => 'rando'
// 		),
		// 0828 - 1 mäng
		array (
				'winner' => 'ahto',
				'looser' => 'illimar'
		),
		// 0830 - 2 mängu
		array (
				'winner' => 'illimar',
				'looser' => 'stiina'
		),
		array (
				'winner' => 'kristiina',
				'looser' => 'indrek'
		),
		// 0831 - 1 mäng
		array (
				'winner' => 'aivar',
				'looser' => 'kristiina'
		),
		// 0903 - 3 mängu
		array (
				'winner' => 'janelle',
				'looser' => 'katrin'
		),
		array ( // ?
				'winner' => 'illimar',
				'looser' => 'rando'
		),
		array (
				'winner' => 'rando',
				'looser' => 'stiina'
		),
		// 0904 - 2 mängu
		array (
				'winner' => 'ville',
				'looser' => 'stiina'
		),
		array (
				'winner' => 'priit',
				'looser' => 'per'
		),
		// 0906 - 1 mäng
		array (
				'winner' => 'kalmer',
				'looser' => 'indrek'
		),
		// 0907 - 2 mängu
		array (
				'winner' => 'kalmer',
				'looser' => 'kristjan'
		),
		array (
				'winner' => 'kalmer',
				'looser' => 'kristjan'
		),
		// 0910 - 1 mäng
		array (
				'winner' => 'boris',
				'looser' => 'indrek'
		),
		// 2016 HaValÜTeK Vägi - 29 mängu
		/*
		 * T: riina / kaie
		 * T: kalmer / kristjan
		 * A: kalmer peacecop: / boris
		 * A: boris / genadi
		 * A: boris - per
		 * A: per / genadi
		 * T: kalmer peacecop: / oliver
		 * N: liis / ville
		 * N: liis / illimar
		 * T: per / indrek
		 * T: kalmer peacecop: / ville
		 * T: marje / ville
		 * T: genadi / ville
		 * A: boris / ville
		 * I: genadi / illimar
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
		 * T: indrek / genadi
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
				'looser' => 'Kaie Kree'
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
				'looser' => 'Genadi Nikolajev'
		),
		// 807 - 2 mängu
		array (
				'winner' => 'boriss',
				'looser' => 'Per Lindberg'
		),
		array (
				'winner' => 'Genadi Nikolajev',
				'looser' => 'Per Lindberg'
		),
		// 808 - 1 mäng
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'oliver kotkas'
		),
		// 809 - 3 mängu
		array (
				'winner' => 'Ville Pak',
				'looser' => 'Liis Laanesaar'
		),
		array (
				'winner' => 'Liis Laanesaar',
				'looser' => 'Illimar Sööt'
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
				'looser' => 'marje tammo'
		),
		array (
				'winner' => 'Ville Pak',
				'looser' => 'Genadi Nikolajev'
		),
		// 813 - 1 mäng
		array (
				'winner' => 'boriss',
				'looser' => 'Ville Pak'
		),
		// 814 - 1 mäng
		array (
				'winner' => 'Genadi Nikolajev',
				'looser' => 'Illimar Sööt'
		),
		// 817 - 1 mäng
		array (
				'winner' => 'marje tammo',
				'looser' => 'Liis Laanesaar'
		),
		// 818 - 1 mäng
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'marje tammo'
		),
		// 821 - 1 mäng
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'Illimar Sööt'
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
				'looser' => 'Riina Bachmann'
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
				'looser' => 'kersti oselin'
		),
		// 903 - 2 mängu
		array (
				'winner' => 'oliver kotkas',
				'looser' => 'boriss'
		),
		array (
				'winner' => 'Kaie Kree',
				'looser' => 'kersti oselin'
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
				'looser' => 'Riina Bachmann'
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
		 * * A: Helen Maisa / Relika Aruoja
		 * T: Gerd Eston Sepp / Siim Simson
		 * T: Ave Piik / Relika Aruoja
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
		 * * T: Lembit Tampere / Relika Aruoja
		 * A: alvar veersalu / Mihkel Rajapuu
		 * * A: oliver koel / Relika Aruoja
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
		 * * A: Relika Aruoja / riho maisa
		 * * A: alvar veersalu / georg kangur
		 * * A: georg kangur / Illimar Sööt
		 * * A: Ave Piik / georg kangur
		 * * A: marje tammo / Meelis Rajapuu
		 * * A: alvar veersalu / Illimar Sööt
		 * * A: Aare Halliko / Kristiina
		 * A: marje tammo / Illimar Sööt
		 * * T: Janar Välk / Siim Simson
		 * A: Indrek Jakobson / Siim Simson
		 * * A: Relika Aruoja / riho maisa
		 * * A: Indrek Jakobson / Siim Simson
		 * * A: Ave Piik / Indrek Pajuste
		 * * Relika Aruoja / Riho
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
				'looser' => 'peacecop kalmer:'
		),
		// 0805 - 3 mängu
		array (
				'winner' => 'Aare Halliko',
				'looser' => 'Ville Pak'
		),
		array (
				'winner' => 'Evelin Poom',
				'looser' => 'Indrek Jakobson'
		),
		array (
				'winner' => 'Peeter Poom',
				'looser' => 'Gerd Eston Sepp'
		),
		// 0806 - 2 mängu
		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'Gerd Eston Sepp'
		),
		array (
				'winner' => 'Janar Välk',
				'looser' => 'Evelin Poom'
		),
		// 0807 - 3 mängu
		array (
				'winner' => 'Peeter Poom',
				'looser' => 'Meelis Rajapuu'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Illimar Sööt'
		),
		// 0809 - 1 mäng
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Ville Pak'
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
				'looser' => 'Janar Välk'
		),
		array (
				'winner' => 'Relika Aruoja',
				'looser' => 'Helen Maisa'
		),
		// 0813 - 2 mängu
		array (
				'winner' => 'Siim Simson',
				'looser' => 'Gerd Eston Sepp'
		),
		array (
				'winner' => 'Ave Piik',
				'looser' => 'Relika Aruoja'
		),
		// 0814 - 2 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Peeter Poom'
		),
		array (
				'winner' => 'Jüri Mallene',
				'looser' => 'riho maisa'
		),
		// 0815 - 1 mäng
		array (
				'winner' => 'riho maisa',
				'looser' => 'Helen Maisa'
		),
		// 0816 - 3 mängu
		array (
				'winner' => 'Gerd Eston Sepp',
				'looser' => 'Lembit Tampere'
		),
		array (
				'winner' => 'Aare Halliko',
				'looser' => 'Peeter Poom'
		),
		array (
				'winner' => 'Jüri Mallene',
				'looser' => 'Illimar Sööt'
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
				'looser' => 'oliver koel'
		),
		// 0818 - 1 mäng
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'Janar Välk'
		),
		// 0819 - 1 mäng
		array (
				'winner' => 'oliver koel',
				'looser' => 'Gerd Eston Sepp'
		),
		// 0820 - 3 mängu
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'Ave Piik'
		),
		array (
				'winner' => 'Kristiina',
				'looser' => 'Ville Pak'
		),
		array (
				'winner' => 'Jüri Mallene',
				'looser' => 'oliver koel'
		),
		// 0821 - 1 mäng
		array (
				'winner' => 'Lembit Tampere',
				'looser' => 'Relika Aruoja'
		),
		// 0822 - 1 mäng
		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'alvar veersalu'
		),
		// 0824 - 1 mäng
		array (
				'winner' => 'oliver koel',
				'looser' => 'Relika Aruoja'
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
				'looser' => 'Jüri Mallene'
		),
		array (
				'winner' => 'oliver koel',
				'looser' => 'riho maisa'
		),
		array (
				'winner' => 'Ville Pak',
				'looser' => 'marje tammo'
		),
		// 0828 - 2 mängu
		array (
				'winner' => 'Indrek Jakobson',
				'looser' => 'oliver koel'
		),
		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'boriss'
		),
		// 0831 - 1 mäng
		array (
				'winner' => 'Ave Piik',
				'looser' => 'Jüri Mallene'
		),
		// 0901 - 4 mängu
		array (
				'winner' => 'Ave Piik',
				'looser' => 'Janar Välk'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Aare Halliko'
		),
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'Indrek Pajuste'
		),
		array (
				'winner' => 'Indrek Jakobson',
				'looser' => 'Jüri Mallene'
		),
		// 0907 - 1 mäng
		array (
				'winner' => 'Kristiina',
				'looser' => 'Siim Simson'
		),
		// 0908 - 1 mäng
		array (
				'winner' => 'marje tammo',
				'looser' => 'georg kangur'
		),
		// 0910 - 2 mängu
		array (
				'winner' => 'marje tammo',
				'looser' => 'alvar veersalu'
		),
		array (
				'winner' => 'Ville Pak',
				'looser' => 'Meelis Rajapuu'
		),
		// 0914 - 1 mäng
		array (
				'winner' => 'alvar veersalu',
				'looser' => 'georg kangur'
		),
		// 0915 - 3 mängu
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'georg kangur'
		),
		array (
				'winner' => 'Ave Piik',
				'looser' => 'georg kangur'
		),
		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'marje tammo'
		),
		// 0916 - 2 mängu
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'alvar veersalu'
		),
		array (
				'winner' => 'Aare Halliko',
				'looser' => 'Kristiina'
		),
		// 0920 - 1 mäng
		array (
				'winner' => 'marje tammo',
				'looser' => 'Illimar Sööt'
		),
		// 0921 - 1 mäng
		array (
				'winner' => 'Janar Välk',
				'looser' => 'Siim Simson'
		),
		// 0928 - 1 mäng
		array (
				'winner' => 'Indrek Jakobson',
				'looser' => 'Siim Simson'
		),
		// 0929 - 2 mängu
		array (
				'winner' => 'Ave Piik',
				'looser' => 'Indrek Pajuste'
		),
		array (
				'winner' => 'riho maisa',
				'looser' => 'Relika Aruoja'
		),
		// 1013 - 1 mäng
		array (
				'winner' => 'Siim Simson',
				'looser' => 'oliver koel'
		),

		// HaValÜTeK 2019 Vägi

		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Aare Halliko'
		),
		array (
				'winner' => 'Aare Halliko',
				'looser' => 'peacecop kalmer:'
		),
		array (
				'winner' => 'Per Lindberg',
				'looser' => 'Indrek Jakobson'
		),
		array (
				'winner' => 'oliver koel',
				'looser' => 'Gerd Eston Sepp'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Kristiina'
		),
		array (
				'winner' => 'Reet Ruuto',
				'looser' => 'Kaie Kree'
		),
		array (
				'winner' => 'Maidu',
				'looser' => 'oliver koel'
		),
		array (
				'winner' => 'oliver koel',
				'looser' => 'Reet Ruuto'
		),
		array (
				'winner' => 'Diana Laurits-Tass',
				'looser' => 'Lembit Tampere'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Maidu'
		),
		array (
				'winner' => 'oliver koel',
				'looser' => 'Jüri Mallene'
		),
		array (
				'winner' => 'Siim Simson',
				'looser' => 'oliver koel'
		),
		array (
				'winner' => 'Gerd Eston Sepp',
				'looser' => 'Jüri Mallene'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Diana Laurits-Tass'
		)
);

$mergeSortChart = new MergeSortChart ();
$mergeSortChart->manageResults ( array (
		'matches' => $matches
) );

