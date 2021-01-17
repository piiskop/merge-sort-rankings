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
		// HaValÜTeK SeTt 2014 - 10 mängu
		/*
		 * T: Riina / Niels
		 * R: Dina / Illimar
		 * R: Marek - Kalmer
		 * A: Oliver Kotkas / Genadi Nikolajev
		 * T: Indrek - Rando
		 * R: Riina / Dina
		 * A: Rando / Genadi
		 * T: Indrek / Illimar
		 * R: Oliver / Kalmer
		 * T: Genadi / Marek
		 */
		// 09 - 2 mängu
		array (
				'winner' => 'Niels Moltmaker',
				'looser' => 'Riina',
				'statistics' => 'TTJVME16WTQ'
		),
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'Dina Ambulte',
				'statistics' => 'TTJVME5EbGs'
		),
		// 10 - 2 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Marek'
		),
		array (
				'winner' => 'Oliver Kotkas',
				'looser' => 'Genadi Nikolajev'
		),
		// 14 - 2 mängu
		array (
				'winner' => 'Rando',
				'looser' => 'Indrek Pajuste',
				'statistics' => 'TTJVME5tVTA'
		),
		array (
				'winner' => 'Dina Ambulte',
				'looser' => 'Riina Bachmann',
				'statistics' => 'TTJVME4ySTE'
		),
		// 15 - 1 mäng
		array (
				'winner' => 'Genadi Nikolajev',
				'looser' => 'Rando',
				'statistics' => 'TTJVME9HUTM'
		),
		// 19 - 1 mäng
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'Illimar Sööt',
				'statistics' => 'TTJVME9UZG0'
		),
		// 26 - 1 mäng
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Oliver Kotkas',
				'statistics' => 'TTJVMFpXSXg'
		),
		// 27 - 1 mäng
		array (
				'winner' => 'Marek',
				'looser' => 'Genadi Nikolajev',
				'statistics' => 'TTJVMFpqSmg'
		),
		// HaValÜTeK SeTt 2015 - 20 mängu
		/*
		 * R: kalmer / boris
		 * R: kalmer / rainer
		 * P: illimar / külli
		 * P: kalmer - indrek
		 * O: indrek / illimar
		 * D: georg / illimar
		 * P: tarmo / kalmer
		 * P: rainer - illimar
		 * O: indrek / rainer
		 * O: tarmo / rainer
		 * O: tarmo / indrek
		 * D: georg / külli
		 * O: indrek / georg
		 * A: kalmer / illimar
		 * A: kalmer / pentti
		 * P: boris / pentti
		 * O: boris / kalmer
		 * A: rainer / per
		 * P: tarmo / per
		 * D: tarmo / georg
		 */
		// 6 - 1 mäng
		array (
				'winner' => 'boris tšernjak',
				'looser' => 'peacecop kalmer:'
		),
		// 8 - 3 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'rainer sutt',
				'statistics' => 'WmpjMU1qVT0'
		),
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'külli',
				'statistics' => 'WmpjME56WT0'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Indrek Pajuste',
				'statistics' => 'WmpjME9XST0'
		),
		// 10 - 1 mäng
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'Illimar Sööt'
		),
		// 12 - 1 mäng
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'georg kangur',
				'statistics' => 'WmpjM016TT0'
		),
		// 14 - 1 mäng
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'tarmo lai'
		),
		// 15 - 2 mängu
		array (
				'winner' => 'rainer sutt',
				'looser' => 'Illimar Sööt',
				'statistics' => 'WmpjNE1XTT0'
		),
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'rainer sutt',
				'statistics' => 'WmpjNE16Zz0'
		),
		// 16 - 1 mäng
		array (
				'winner' => 'tarmo lai',
				'looser' => 'rainer sutt',
				'statistics' => 'WmpjNE9URT0'
		),
		// 17 - 1 mäng
		array (
				'winner' => 'tarmo lai',
				'looser' => 'Indrek Pajuste',
				'statistics' => 'WmpjNFl6TT0'
		),
		// 19 - 1 mäng
		array (
				'winner' => 'georg kangur',
				'looser' => 'külli'
		),
		// 20 - 3 mängu
		array (
				'winner' => 'georg kangur',
				'looser' => 'Indrek Pajuste',
				'statistics' => 'WmpkaE5qRT0'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'pentti põder',
				'looser' => 'peacecop kalmer:',
				'statistics' => 'WmpkaFlUUT0'
		),
		// 21 - 1 mäng
		array (
				'winner' => 'boris tšernjak',
				'looser' => 'pentti põder',
				'statistics' => 'WmpkaU5qYz0'
		),
		// 23 - 1 mäng
		array (
				'winner' => 'boris tšernjak',
				'looser' => 'peacecop kalmer:'
		),
		// 27 - 2 mängu
		array (
				'winner' => 'per lindberg',
				'looser' => 'rainer sutt',
				'statistics' => 'Wmpka1l6UT0'
		),
		array (
				'winner' => 'tarmo lai',
				'looser' => 'per lindberg',
				'statistics' => 'WmpkbE1EZz0'
		),
		// 30 - 1 mäng
		array (
				'winner' => 'tarmo lai',
				'looser' => 'georg kangur',
				'statistics' => 'WmpkbVpqRT0'
		),
		// HaValÜTeK SeTt 2018 - 14 mängu
		/*
		 * O: peacecop kalmer: / Indrek Pajuste
		 * O: Gerd Eston Sepp / Siim Simson
		 * O: Gerd Eston Sepp / Relika Aruoja Aruoja
		 * P: Illimar Sööt / Indrek Pajuste
		 * D: eerik / georg kangur
		 * P: Kaie Kree / Relika Aruoja Aruoja
		 * P: Illimar Sööt / Indrek Jakobson
		 * P: Indrek Pajuste / Siim Simson
		 * P: Illimar Sööt / Siim Simson
		 * P: Indrek Jakobson / Indrek Pajuste
		 * P: Illimar Sööt / Indrek Jakobson
		 * P: Indrek Jakobson / Siim Simson
		 * D: Erik / Indrek Jakobson
		 * P: Gerd Eston Sepp / Indrek Pajuste
		 */
		// 1110 - 1 mäng
		array ( // Selle mängu mängisime vist sel päeval või nädal varem "Idakeskuses"
				'winner' => 'peacecop kalmer:',
				'looser' => 'Erik'
		),
		// 1124 - 2 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Indrek Pajuste',
				'statistics' => 'TVRJeU9UUTE'
		),
		array (
				'winner' => 'Siim Simson',
				'looser' => 'Gerd Eston Sepp',
				'statistics' => 'TVRJeU9EZGk'
		),
		// 1125 - 1 mäng
		array (
				'winner' => 'Gerd Eston Sepp',
				'looser' => 'Relika Aruoja Aruoja',
				'statistics' => 'TVRJeU9UazU'
		),
		// 1130 - 1 mäng
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'Indrek Pajuste',
				'statistics' => 'TVRJeVl6QTI'
		),
		// 1201 - 1 mäng
		array (
				'winner' => 'Erik',
				'looser' => 'georg kangur',
				'statistics' => 'TVRJeVl6YzQ'
		),
		// 1202 - 1 mäng
		array (
				'winner' => 'Relika Aruoja Aruoja',
				'looser' => 'Kaie Kree',
				'statistics' => 'TVRJeVpEUmo'
		),
		// 1215 - 1 mäng
		array (
				'winner' => 'Siim Simson',
				'looser' => 'Indrek Pajuste',
				'statistics' => 'TVRJek1tWTE'
		),
		// 1216 - 1 mäng
		array (
				'winner' => 'Siim Simson',
				'looser' => 'Illimar Sööt',
				'statistics' => 'TVRJek1tWTI'
		),
		// 1218 - 1 mäng
		array (
				'winner' => 'Indrek Jakobson',
				'looser' => 'Indrek Pajuste',
				'statistics' => 'TVRJek1tWTQ'
		),
		// 1222 - 3 mängu
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'Indrek Jakobson',
				'statistics' => 'TVRJek1UVTQ'
		),
		array (
				'winner' => 'Indrek Jakobson',
				'looser' => 'Siim Simson',
				'statistics' => 'TVRJek1tWTU'
		),
		array (
				'winner' => 'Erik',
				'looser' => 'Indrek Jakobson',
				'statistics' => 'TVRJek1tWmg'
		),
		// 1223 - 1 mäng
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'Gerd Eston Sepp',
				'statistics' => 'TVRJek1tWmk'
		),
		// HaValÜTeK SeTt 2019 - 7 mängu
		/*
		 * A: peacecop kalmer: / Aare Halliko
		 * A: Kaie Kree / Relika Aruoja
		 * A: Indrek Pajuste / Gerd Eston Sepp
		 */
		// 1127 - 1 mäng
		array (
				'winner' => 'Aare Halliko',
				'looser' => 'peacecop kalmer:'
		),
		// 1213 - 1 mäng
		array (
				'winner' => 'Relika Aruoja Aruoja',
				'looser' => 'Kaie Kree',
				'statistics' => 'TVRNeU1HUXg'
		),
		// 1215 - 1 mäng
		array (
				'winner' => 'Indrek Pajuste',
				'looser' => 'Gerd Eston Sepp',
				'statistics' => 'TVRNeU1Ua3g'
		),
		// 1227 - 1 mäng
		array (
				'winner' => 'Siim Simson',
				'looser' => 'Indrek Pajuste',
				'statistics' => 'TVRNeU5UbGo'
		),
		// 1228 - 3 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Siim Simson',
				'statistics' => 'TVRNeU9EUTM'
		),
		array (
				'winner' => 'Aet Neering',
				'looser' => 'Relika Aruoja Aruoja',
				'statistics' => 'TVRNeU5qRmk'
		),
		array (
				'winner' => 'Gerd Eston Sepp',
				'looser' => 'Aet Neering',
				'statistics' => 'TVRNeU56Umo'
		)
);
$metadataOfCurrentFile = pathinfo ( __FILE__ );
preg_match ( '/merge-sort-chart-(.+)/', $metadataOfCurrentFile ['filename'], $foundMatches );

$mergeSortChart = new MergeSortChart ( array (
		'matches' => $matches,
		'typeOfTennis' => $foundMatches [1]
) );
$mergeSortChart->manageResults ( array () );
$mergeSortChart->checkNames ();
echo html_entity_decode(preg_replace('/\\\u([\da-f]{4})/', '&#x\1;', 'S\u00f6\u00f6t'));
