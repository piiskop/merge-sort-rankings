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
				'looser' => 'Klaos + Andrus'
		),
		array ( // ?
				'winner' => 'Margus Uppus + Markus',
				'looser' => 'Klaos + Andrus'
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
				'looser' => 'Rätsep + Urmas'
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
				'looser' => 'Aivar + Kristiina'
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
				'winner' => 'Aivar + Kristiina',
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
				'winner' => 'Ahto + Kirsti',
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
				'winner' => 'Aivar + Kristiina',
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
				'looser' => 'Kaie + peacecop kalmer:'
		),
		// 20 - 1 mäng
		array (
				'winner' => 'Aivar + Kristiina',
				'looser' => 'Janelle + Klaos'
		),
		// 21 - 2 mängu
		array (
				'winner' => 'Artur + Priit',
				'looser' => 'Klaos + Ville'
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
				'winner' => 'Kaie - peacecop kalmer:',
				'looser' => 'Janelle + Klaos'
		),
		array (
				'winner' => 'Aivar + Kristiina',
				'looser' => 'Kaie - peacecop kalmer:'
		),
		// 1 - 2 mängu
		array (
				'winner' => 'Kaie - peacecop kalmer:',
				'looser' => 'Kristhel + Kristjan Viilmann'
		),
		array (
				'winner' => 'Pajumets + peacecop kalmer:',
				'looser' => 'Mati + Ülo'
		),
		// 2 - 3 mängu
		array (
				'winner' => 'Klaos + Ville',
				'looser' => 'Mati + Ülo'
		),
		array (
				'winner' => 'Mirja-Helen + Pajumets',
				'looser' => 'Aivar + Kristiina'
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
				'looser' => 'Klaos + Ville'
		),
		array (
				'winner' => 'Janelle + Klaos',
				'looser' => 'Kristhel + Kristjan Viilmann'
		),
		// 4 - 2 mängu
		array (
				'winner' => 'Kristjan Viilmann + peacecop kalmer:',
				'looser' => 'Klaos + ville'
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
				'winner' => 'illimar + peacecop kalmer:',
				'looser' => 'rainer + ville'
		),
		// 0813 - 1 mäng
		array (
				'winner' => 'oliver + per',
				'looser' => 'illimar + peacecop kalmer:'
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
				'winner' => 'illimar + peacecop kalmer:',
				'looser' => 'oliver + per'
		),
		// 809 - 1 mäng
		array (
				'winner' => 'kaie + peacecop kalmer:',
				'looser' => 'illimar + riina'
		),
		// 814 - 2 mängu
		array (
				'winner' => 'illimar + peacecop kalmer:',
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
				'winner' => 'Kirstiina + oliver koel',
				'looser' => 'Gerd + Janar'
		),
		array (
				'winner' => 'Kristiina + oliver koel',
				'looser' => 'riho + veiko'
		),
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'marje tammo'
		),
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'oliver kotkas'
		),
		array (
				'winner' => 'kairi vilderson',
				'looser' => 'Riina Bachmann'
		),
		array (
				'winner' => 'merje kruus',
				'looser' => 'Riina Bachmann'
		),
		array (
				'winner' => 'kairi vilderson',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'Kristjan Pajumets',
				'looser' => 'boriss'
		),
		array (
				'winner' => 'Riina Bachmann',
				'looser' => 'kersti oselin'
		),
		array (
				'winner' => 'oliver kotkas',
				'looser' => 'boriss'
		),
		array (
				'winner' => 'Kaie Kree',
				'looser' => 'kersti oselin'
		),
		array (
				'winner' => 'marje tammo',
				'looser' => 'kairi vilderson'
		),
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'kersti oselin'
		),
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'Riina Bachmann'
		),

		// 2018 Vägi
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

		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'Siim Simson'
		),
		array (
				'winner' => 'Aare Halliko',
				'looser' => 'peacecop kalmer:'
		),
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
		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'Gerd Eston Sepp'
		),
		array (
				'winner' => 'Janar Välk',
				'looser' => 'Evelin Poom'
		),
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
				'looser' => 'Ville Pak'
		),
		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'Lembit Tampere'
		),
		array (
				'winner' => 'Siim Simson',
				'looser' => 'Lembit Tampere'
		),
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'Janar Välk'
		),
		array (
				'winner' => 'Relika Aruoja',
				'looser' => 'Helen Maisa'
		),
		array (
				'winner' => 'Siim Simson',
				'looser' => 'Gerd Eston Sepp'
		),
		array (
				'winner' => 'Ave Piik',
				'looser' => 'Relika Aruoja'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Peeter Poom'
		),
		array (
				'winner' => 'Jüri Mallene',
				'looser' => 'riho maisa'
		),
		array (
				'winner' => 'riho maisa',
				'looser' => 'Helen Maisa'
		),
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
		array (
				'winner' => 'Jüri Mallene',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'Jüri Mallene'
		),
		array (
				'winner' => 'Janar Välk',
				'looser' => 'oliver koel'
		),
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'Janar Välk'
		),
		array (
				'winner' => 'oliver koel',
				'looser' => 'Gerd Eston Sepp'
		),
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
		array (
				'winner' => 'Lembit Tampere',
				'looser' => 'Relika Aruoja'
		),
		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'alvar veersalu'
		),
		array (
				'winner' => 'oliver koel',
				'looser' => 'Relika Aruoja'
		),
		array (
				'winner' => 'marje tammo',
				'looser' => 'Indrek Pajuste'
		),
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
		array (
				'winner' => 'Indrek Jakobson',
				'looser' => 'oliver koel'
		),
		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'boriss'
		),
		array (
				'winner' => 'Ave Piik',
				'looser' => 'Jüri Mallene'
		),
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
		array (
				'winner' => 'Kristiina',
				'looser' => 'Siim Simson'
		),
		array (
				'winner' => 'marje tammo',
				'looser' => 'georg kangur'
		),
		array (
				'winner' => 'marje tammo',
				'looser' => 'alvar veersalu'
		),
		array (
				'winner' => 'Ville Pak',
				'looser' => 'Meelis Rajapuu'
		),
		array (
				'winner' => 'alvar veersalu',
				'looser' => 'georg kangur'
		),
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
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'alvar veersalu'
		),
		array (
				'winner' => 'Aare Halliko',
				'looser' => 'Kristiina'
		),
		array (
				'winner' => 'marje tammo',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'Janar Välk',
				'looser' => 'Siim Simson'
		),
		array (
				'winner' => 'Indrek Jakobson',
				'looser' => 'Siim Simson'
		),
		array (
				'winner' => 'Ave Piik',
				'looser' => 'Indrek Pajuste'
		),
		array (
				'winner' => 'riho maisa',
				'looser' => 'Relika Aruoja'
		),
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

