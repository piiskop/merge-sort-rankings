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
		// HaValÜTeK SeTt 2014 - 7 mängu
		/*
		 * R: Helena - Kalmer / Kalmer - Illimar
		 * R: Riina - Kaie / Kaie - Helena
		 * A: Dina / Helena - Riina / Kaie
		 * T: Dina - Helena / Dina - Illimar
		 * R: Dina - Illimar / Helena - Kalmer
		 * R: Helena - Kalmer / Dina - Helena
		 * A: Oliver - Per / Kalmer - Illimar
		 */
		// 10 - 1 mäng
		array (
				'winner' => 'Illimar Sööt + peacecop kalmer:',
				'looser' => 'Helena Ruud + peacecop kalmer:'
		),
		// 14 + 1 mäng
		array (
				'winner' => 'Riina Bachmann + Kaie Kree',
				'looser' => 'Helena Ruud + Kaie Kree',
				'statistics' => 'TTJVME56ZzI'
		),
		// 16 + 1 mäng
		array (
				'winner' => 'Dina Ambulte + Helena Ruud',
				'looser' => 'Riina Bachmann + Kaie Kree',
				'statistics' => 'TTJVME9HUmg'
		),
		// 17 + 1 mäng
		array (
				'winner' => 'Dina Ambulte + Illimar Sööt',
				'looser' => 'Dina Ambulte + Helena Ruud',
				'statistics' => 'TTJVME9UQTM'
		),
		// 25 + 1 mäng
		array (
				'winner' => 'Dina Ambulte + Illimar Sööt',
				'looser' => 'Helena Ruud + peacecop kalmer:',
				'statistics' => 'TTJVMFpXRXo'
		),
		// 26 + 1 mäng
		array (
				'winner' => 'Helena Ruud + peacecop kalmer:',
				'looser' => 'Dina Ambulte + Helena Ruud'
		),
		// 27 + 1 mäng
		array (
				'winner' => 'Illimar Sööt + peacecop kalmer:',
				'looser' => 'Oliver Kotkas + per lindberg'
		),
		// HaValÜTeK SeTt 2015 + 10 mängu
		/*
		 * O: boris + kaie / kalmer + helena
		 * R: tarmo + pentti / kalmer + illimar
		 * O: kalmer + helena / illimar + külli
		 * O: rainer + riina / boris + kaie
		 * A: rainer + riina / illimar + külli
		 * O: riina + kaie / helena + külli
		 * O: georg + boris / kalmer + illimar
		 * A: kalmer + illimar / rainer + per
		 * P: pentti + palmsaar / per + rainer
		 */
		// 07 + 1 mäng
		array (
				'winner' => 'Kaie Kree + boris tšernjak',
				'looser' => 'Helena Ruud + peacecop kalmer:'
		),
		// 13 + 1 mäng
		array (
				'winner' => 'pentti + palmsaar',
				'looser' => 'Illimar Sööt + peacecop kalmer:',
				'statistics' => 'WmpjM1lURT0'
		),
		// 14 + 1 mäng
		array (
				'winner' => 'Illimar Sööt + külli',
				'looser' => 'Helena Ruud + peacecop kalmer:'
		),
		// 18 + 1 mäng
		array (
				'winner' => 'boris tšernjak + boris tšernjak',
				'looser' => 'Illimar Sööt + Kaie Kree'
		),
		// 19 + 1 mäng
		array (
				'winner' => 'Riina Bachmann + rainer sutt',
				'looser' => 'Kaie Kree + boris tšernjak',
				'statistics' => 'WmpjNU5XST0'
		),
		// 20 + 2 mängu
		array (
				'winner' => 'Illimar Sööt + külli',
				'looser' => 'Riina Bachmann + rainer sutt',
				'statistics' => 'WmpkaE1qRT0'
		),
		array (
				'winner' => 'Helena Ruud + külli',
				'looser' => 'Kaie Kree + Riina Bachmann',
				'statistics' => 'WmpkaE16az0'
		),
		// 21 + 1 mäng
		array (
				'winner' => 'Illimar Sööt + peacecop kalmer:',
				'looser' => 'georg + boris tšernjak'
		),
		// 27 + 2 mängu
		array (
				'winner' => 'per lindberg + rainer sutt',
				'looser' => 'Illimar Sööt + peacecop kalmer:'
		),
		array (
				'winner' => 'pentti + palmsaar',
				'looser' => 'per lindberg + rainer sutt',
				'statistics' => 'Wmpka1ptWT0'
		),
		// HaValPaTeK 2018 + 5 mängu
		/*
		 * D: eerik + georg kangur / Relika Aruoja Aruoja + Siim Simson
		 * D: Erik + georg kangur / Kaie Kree + peacecop kalmer:
		 * D: Erik + georg / Indrek Jakobson + kalmer:
		 * D: georg kangur + Indrek Jakobson / kalmer
		 */
		// 1110 + 1 mäng
		array ( // See mäng toimus ilmselt siis või nädal varem "Idakeskuses".
				'winner' => 'Illimar Sööt + peacecop kalmer:',
				'looser' => 'Erik + georg kangur'
		),
		// 1201 + 1 mäng
		array (
				'winner' => 'Erik + georg kangur',
				'looser' => 'Relika Aruoja Aruoja + Siim Simson',
				'statistics' => 'TVRJeVl6WTM'
		),
		// 1215 + 1 mäng
		array (
				'winner' => 'Kaie Kree + peacecop kalmer:',
				'looser' => 'Erik + georg kangur',
				'statistics' => 'TVRJek1tWTM'
		),
		// 1222 + 2 mängu
		array (
				'winner' => 'Indrek Jakobson + peacecop kalmer:',
				'looser' => 'Erik + georg kangur',
				'statistics' => 'TVRJME1EVmg'
		),
		array (
				'winner' => 'peacecop kalmer: + peacecop kalmer:',
				'looser' => 'Jakobson + georg kangur',
				'statistics' => 'TVRJME1XUTI'
		),
		// HaValPaTeK 2019 + 1 mäng
		/*
		 * A: Relika Aruoja Aruoja + Siim Simson / peacecop kalmer: + Aet Neering
		 */
		// 1 mäng
		array (
				'winner' => 'Aet Neering + peacecop kalmer:',
				'looser' => 'Relika Aruoja Aruoja + Siim Simson',
				'statistics' => 'TVRNeU9EUmk'
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
