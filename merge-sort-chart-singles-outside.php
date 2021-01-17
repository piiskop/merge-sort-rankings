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
				'looser' => 'kristjan pajumets'
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
				'looser' => 'aivar ventsel'
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
				'winner' => 'kristiina koel',
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
				'winner' => 'kristjan pajumets',
				'looser' => 'Kent Männik'
		),
		array (
				'winner' => 'Margus Uppus',
				'looser' => 'Tõnu'
		),
		array (
				'winner' => 'kristjan pajumets',
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
				'looser' => 'aivar ventsel'
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
				'winner' => 'kristiina koel',
				'looser' => 'Marju'
		),
		array (
				'winner' => 'Triin Loodus',
				'looser' => 'Riina Bachmann'
		),
		array (
				'winner' => 'Margus Aru',
				'looser' => 'kristjan pajumets'
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
				'winner' => 'kristiina koel',
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
				'looser' => 'aivar ventsel'
		),
		array (
				'winner' => 'Jan',
				'looser' => 'kristjan pajumets'
		),
		array (
				'winner' => 'kristjan pajumets',
				'looser' => 'aivar ventsel'
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
				'winner' => 'aivar ventsel',
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
				'winner' => 'kristiina koel',
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
				'winner' => 'aivar ventsel',
				'looser' => 'rando lai'
		),
		array (
				'winner' => 'janelle',
				'looser' => 'Kaie Kree'
		),
		// 21 - mängu
		array (
				'winner' => 'ville pak',
				'looser' => 'Ahto Klaos'
		),
		array (
				'winner' => 'Mirja-Helen',
				'looser' => 'kristiina koel'
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
				'winner' => 'kristjan pajumets',
				'looser' => 'Artur'
		),
		// 22 - 2 mängu
		array (
				'winner' => 'kristjan pajumets',
				'looser' => 'Ülo'
		),
		array (
				'winner' => 'aivar ventsel',
				'looser' => 'ville pak'
		),
		// 23 - 2 mängu
		array (
				'winner' => 'Genadi Nikolajev',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'kristjan pajumets'
		),
		// 24 - 5 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'aivar ventsel'
		),
		array (
				'winner' => 'rando lai',
				'looser' => 'ville pak'
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
				'winner' => 'kristjan pajumets',
				'looser' => 'Genadi Nikolajev'
		),
		// 28 - 3 mängu
		array (
				'winner' => 'Artur',
				'looser' => 'Ülo'
		),
		array (
				'winner' => 'kristjan pajumets',
				'looser' => 'aivar ventsel'
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
				'looser' => 'ville pak'
		),
		array (
				'winner' => 'kristjan pajumets',
				'looser' => 'Indrek Pajuste'
		),
		array (
				'winner' => 'Ahto Klaos',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'Per Lindberg',
				'looser' => 'rando lai'
		),
		array (
				'winner' => 'Ahto Klaos',
				'looser' => 'Jüri Mallene'
		),
		// 31 - 4 mängu
		array (
				'winner' => 'aivar ventsel',
				'looser' => 'Genadi Nikolajev'
		),
		array (
				'winner' => 'Artur',
				'looser' => 'rando lai'
		),
		array (
				'winner' => 'kristjan pajumets',
				'looser' => 'Per Lindberg'
		),
		array (
				'winner' => 'aivar ventsel',
				'looser' => 'Indrek Pajuste'
		),
		// 1 - 3 mängu
		array (
				'winner' => 'Sarapuu',
				'looser' => 'Artur'
		),
		array (
				'winner' => 'rando lai',
				'looser' => 'Ülo'
		),
		array (
				'winner' => 'aivar ventsel',
				'looser' => 'Per Lindberg'
		),
		// 2 - 3 mängu
		array (
				'winner' => 'kristiina koel',
				'looser' => 'Kristhel'
		),
		array (
				'winner' => 'Ülo',
				'looser' => 'ville pak'
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
				'winner' => 'rainer sutt',
				'looser' => 'Illimar Sööt'
		),
		// 0807 - 6 mängu
		array (
				'winner' => 'tarmo lai',
				'looser' => 'rainer sutt'
		),
		array (
				'winner' => 'kristjan pajumets',
				'looser' => 'peacecop kalmer:',
				'statistics'=>'TTJZeE5HUTQ'
		),
		array (
				'winner' => 'Per Lindberg',
				'looser' => 'rando lai'
		),
		array (
				'winner' => 'Ülle',
				'looser' => 'Riina Bachmann',
				'statistics'=>'TTJZeE5HUTM'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'aivar ventsel',
				'statistics'=>'TTJZeE5HSmo'
		),
		array (
				'winner' => 'stiina liivrand',
				'looser' => 'Ülle'
		),
		// 0808 - 1 mäng
		array (
				'winner' => 'Riina Bachmann',
				'looser' => 'helena'
		),
		// 0809 - 5 mängu
		array (
				'winner' => 'boris tšernjak',
				'looser' => 'aivar ventsel',
				'statistics'=>'TTJZeE5XWXo'
		),
		array (
				'winner' => 'ahto luhamäe',
				'looser' => 'ville pak',
				'statistics'=>'TTJZeE5XWmw'
		),
		array (
				'winner' => 'tarmo lai',
				'looser' => 'Indrek Pajuste',
				'statistics'=>'TTJZeE5qSmg'
		),
		array (
				'winner' => 'tarmo lai',
				'looser' => 'ahto luhamäe'
		),
		array (
				'winner' => 'kristi kirsman',
				'looser' => 'helena',
				'statistics'=>'TTJZeE5qUTQ'
		),
		// 0811 - 1 mäng
		array (
				'winner' => 'ranno konks',
				'looser' => 'tarmo lai'
		),
		// 0813 - 3 mängu
		array (
				'winner' => 'ranno konks',
				'looser' => 'Per Lindberg',
				'statistics'=>'TTJZeE9Ea3k'
		),
		array (
				'winner' => 'külli toots',
				'looser' => 'katrin'
		),
		array (
				'winner' => 'kristiina koel',
				'looser' => 'stiina liivrand'
		),
		// 0814 - 1 mäng
		array (
				'winner' => 'Genadi Nikolajev',
				'looser' => 'aivar ventsel'
		),
		// 0815 - 3 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'boris tšernjak'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Genadi Nikolajev'
		),
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'rando lai',
				'statistics'=>'TTJZeFlURTA'
		),
		// 0816 - 5 mängu
		array (
				'winner' => 'Per Lindberg',
				'looser' => 'Genadi Nikolajev'
		),
		array (
				'winner' => 'ivar',
				'looser' => 'ville pak'
		),
		array (
				'winner' => 'Per Lindberg',
				'looser' => 'Indrek Pajuste'
		),
		array (
				'winner' => 'Riina Bachmann',
				'looser' => 'kristi kirsman',
				'statistics'=>'TTJZeFlqQXg'
		),
		array (
				'winner' => 'ivar',
				'looser' => 'Indrek Pajuste'
		),
		// 0817 - 4 mängu
		array (
				'winner' => 'tarmo lai',
				'looser' => 'Per Lindberg'
		),
		array (
				'winner' => 'ivar',
				'looser' => 'priit pärn'
		),
		array (
				'winner' => 'kristiina koel',
				'looser' => 'külli toots',
				'statistics'=>'TTJZeFl6RTE'
		),
		array (
				'winner' => 'kristiina koel',
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
				'winner' => 'külli toots',
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
				'winner' => 'ahto luhamäe',
				'looser' => 'rainer sutt',
				'statistics'=>'TTJZeFpESTA'
		),
		array (
				'winner' => 'stiina liivrand',
				'looser' => 'janelle',
				'statistics'=>'TTJZeFpETTA'
		),
		array (
				'winner' => 'ivar',
				'looser' => 'ranno konks'
		),
		array (
				'winner' => 'rainer sutt',
				'looser' => 'ville pak',
				'statistics'=>'TTJZeFpETms'
		),
		array (
				'winner' => 'rando lai',
				'looser' => 'ahto luhamäe'
		),
		array (
				'winner' => 'stiina liivrand',
				'looser' => 'külli toots'
		),
		// 0820 - 5 mängu
		array (
				'winner' => 'aivar ventsel',
				'looser' => 'ahto luhamäe'
		),
		array (
				'winner' => 'boris tšernjak',
				'looser' => 'Genadi Nikolajev'
		),
		array (
				'winner' => 'stiina liivrand',
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
				'winner' => 'boris tšernjak',
				'looser' => 'priit pärn',
				'statistics'=>'TTJZeFptUXk'
		),
		// 0823 - 4 mängu
		array (
				'winner' => 'ville pak',
				'looser' => 'Illimar Sööt',
				'statistics'=>'TTJZeU1HTTM'
		),
		array (
				'winner' => 'aivar ventsel',
				'looser' => 'Indrek Pajuste',
				'statistics'=>'TTJZeU1HUTA'
		),
		array (
				'winner' => 'kristi kirsman',
				'looser' => 'Kaie Kree',
				'statistics'=>'TTJZeU1UQXg'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'tarmo lai',
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
				'winner' => 'kristjan pajumets',
				'looser' => 'ivar',
				'statistics'=>'TTJZeU1tRTA'
		),
		array (
				'winner' => 'priit pärn',
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
				'winner' => 'boris tšernjak',
				'looser' => 'tarmo lai',
				'statistics'=>'TTJZeU5UTXc'
		),
// See mäng jäi taas pooleli. Aga millal?
// 		array (
// 				'winner' => 'Illimar Sööt',
// 				'looser' => 'rando'
// 		),
		// 0828 - 1 mäng
		array (
				'winner' => 'ahto luhamäe',
				'looser' => 'Illimar Sööt',
				'statistics'=>'TTJZeU5qSmo'
		),
		// 0830 - 2 mängu
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'stiina liivrand',
				'statistics'=>'TTJZeU56VXc'
		),
		array (
				'winner' => 'kristiina koel',
				'looser' => 'Indrek Pajuste',
				'statistics'=>'TTJZeU4ySXo'
		),
		// 0831 - 1 mäng
		array (
				'winner' => 'aivar ventsel',
				'looser' => 'kristiina koel',
				'statistics'=>'TTJZeU9ESTA'
		),
		// 0903 - 3 mängu
		array (
				'winner' => 'janelle',
				'looser' => 'katrin'
		),
		array ( // ?
				'winner' => 'Illimar Sööt',
				'looser' => 'rando lai'
		),
		array (
				'winner' => 'rando lai',
				'looser' => 'stiina liivrand',
				'statistics'=>'TTJZeVlUYzA'
		),
		// 0904 - 2 mängu
		array (
				'winner' => 'ville pak',
				'looser' => 'stiina liivrand'
		),
		array (
				'winner' => 'priit pärn',
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
				'looser' => 'kristjan pajumets'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'kristjan pajumets'
		),
		// 0910 - 1 mäng
		array (
				'winner' => 'boris tšernjak',
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
				'looser' => 'kristjan pajumets'
		),
		// 806 - 2 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'boris tšernjak'
		),
		array (
				'winner' => 'boris tšernjak',
				'looser' => 'Genadi Nikolajev',
				'statistics'=> 'TVRBMFltTXg'
		),
		// 807 - 2 mängu
		array (
				'winner' => 'boris tšernjak',
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
				'looser' => 'Oliver Kotkas',
				'statistics'=> 'TVRBMFkyTTM'
		),
		// 809 - 3 mängu
		array (
				'winner' => 'ville pak',
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
				'looser' => 'ville pak'
		),
		// 812 - 2 mängu
		array (
				'winner' => 'ville pak',
				'looser' => 'Marje Tammo',
				'statistics'=>'TVRBMFpqTTU'
		),
		array (
				'winner' => 'ville pak',
				'looser' => 'Genadi Nikolajev',
				'statistics'=> 'TVRBMFpqUmk'
		),
		// 813 - 1 mäng
		array (
				'winner' => 'boris tšernjak',
				'looser' => 'ville pak',
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
				'winner' => 'Marje Tammo',
				'looser' => 'Liis Laanesaar',
				'statistics'=> 'TVRBMU5ERTM'
		),
		// 818 - 1 mäng
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'Marje Tammo',
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
				'winner' => 'kristjan pajumets',
				'looser' => 'Oliver Kotkas'
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
				'winner' => 'kristjan pajumets',
				'looser' => 'boris tšernjak'
		),
		array (
				'winner' => 'Riina Bachmann',
				'looser' => 'kersti oselin',
				'statistics'=> 'TVRBMVptVTI'
		),
		// 903 - 2 mängu
		array (
				'winner' => 'Oliver Kotkas',
				'looser' => 'boris tšernjak',
				'statistics'=> 'TVRBMk1EYzQ'
		),
		array (
				'winner' => 'Kaie Kree',
				'looser' => 'kersti oselin',
				'statistics'=> 'TVRBMk1EaGg'
		),
		// 904 - 1 mäng
		array ( // kas see mäng toimus pühapäeval ja oli mingi liigatennise mäng hoopis?
				'winner' => 'Marje Tammo',
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
				'looser' => 'ville pak',
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
				'looser' => 'ville pak',
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
				'looser' => 'Oliver Koel',
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
				'winner' => 'Oliver Koel',
				'looser' => 'Gerd Eston Sepp',
				'statistics'=> 'TVRGbU56aGs'
		),
		// 0820 - 3 mängu
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'Ave Piik'
		),
		array (
				'winner' => 'kristiina koel',
				'looser' => 'ville pak',
				'statistics'=> 'TVRGbFpHVTM'
		),
		array (
				'winner' => 'Jüri Mallene',
				'looser' => 'Oliver Koel',
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
				'winner' => 'Oliver Koel',
				'looser' => 'Relika Aruoja',
				'statistics'=> 'TVRGbU1HRTU'
		),
		// 0825 - 1 mäng
		array (
				'winner' => 'Marje Tammo',
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
				'winner' => 'Oliver Koel',
				'looser' => 'riho maisa',
				'statistics'=> 'TVRGbU1XRmg'
		),
		array (
				'winner' => 'ville pak',
				'looser' => 'Marje Tammo',
				'statistics'=> 'TVRGbU1XSTE'
		),
		// 0828 - 2 mängu
		array (
				'winner' => 'Indrek Jakobson',
				'looser' => 'Oliver Koel',
				'statistics'=> 'TVRGbU1qZGo'
		),
		array (
				'winner' => 'Meelis Rajapuu',
				'looser' => 'boris tšernjak',
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
				'winner' => 'kristiina koel',
				'looser' => 'Siim Simson'
		),
		// 0908 - 1 mäng
		array (
				'winner' => 'Marje Tammo',
				'looser' => 'georg kangur',
				'statistics'=> 'TVRGbVltSXk'
		),
		// 0910 - 2 mängu
		array (
				'winner' => 'Marje Tammo',
				'looser' => 'alvar veersalu',
				'statistics'=> 'TVRGbVpHSTQ'
		),
		array (
				'winner' => 'ville pak',
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
				'looser' => 'Marje Tammo',
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
				'looser' => 'kristiina koel',
				'statistics'=> 'TVRJd01USXg'
		),
		// 0920 - 1 mäng
		array (
				'winner' => 'Marje Tammo',
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
				'looser' => 'Oliver Koel',
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
				'winner' => 'Oliver Koel',
				'looser' => 'Gerd Eston Sepp',
				'statistics'=> 'TVRKa09UWXk'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'kristiina koel',
				'statistics'=> 'TVRKa09UWTE'
		),
		array (
				'winner' => 'Reet Ruuto',
				'looser' => 'Kaie Kree',
				'statistics'=> 'TVRKa09UZGk'
		),
		array (
				'winner' => 'Maidu Behrs',
				'looser' => 'Oliver Koel',
				'statistics'=> 'TVRKa09UbGg'
		),
		// 821 - 1 mäng
		array (
				'winner' => 'Maidu Behrs',
				'looser' => 'Illimar Sööt',
				'statistics'=> 'TVRKa1lUQXo'
		),
		// 822 - 4 mängu
		array (
				'winner' => 'Oliver Koel',
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
				'looser' => 'Maidu Behrs',
				'statistics'=> 'TVRNeU5USTM'
		),
		array (
				'winner' => 'Oliver Koel',
				'looser' => 'Jüri Mallene',
				'statistics'=> 'TVRKa1lXRmg'
		),
		// 824 - 3 mängu
		array (
				'winner' => 'Siim Simson',
				'looser' => 'Oliver Koel',
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
				'winner' => 'kristiina koel',
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
				'winner' => 'Maidu Behrs',
				'looser' => 'kristiina koel',
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
				'looser' => 'Maidu Behrs',
				'statistics'=> 'TVRKbU56QXk'
		),
		array (
				'winner' => 'Maidu Behrs',
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
$metadataOfCurrentFile = pathinfo ( __FILE__ );
preg_match ( '/merge-sort-chart-(.+)/', $metadataOfCurrentFile ['filename'], $foundMatches );

$mergeSortChart = new MergeSortChart ( array (
		'matches' => $matches,
		'typeOfTennis' => $foundMatches [1]
) );
$mergeSortChart->manageResults ( array () );
$mergeSortChart->checkNames ();
// echo html_entity_decode(preg_replace('/\\\u([\da-f]{4})/', '&#x\1;', 'S\u00f6\u00f6t'));
