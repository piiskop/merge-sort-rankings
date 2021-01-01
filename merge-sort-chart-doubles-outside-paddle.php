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
		// 2013 - 6 mängu
		// 25 - 6 mängu
		array (
				'winner' => 'Oleg + Reet Rätsep',
				'looser' => 'peacecop kalmer: + riina'
		),
		array (
				'winner' => 'Evelyn + Jakov',
				'looser' => 'aivar + riina'
		),
		array (
				'winner' => 'Klaos + riina',
				'looser' => 'Kristiina + Reet Rätsep'
		),
		array (
				'winner' => 'Kent + Toivo',
				'looser' => 'Klaos + aivar'
		),
		array (
				'winner' => 'Klaos + Evelyn',
				'looser' => 'kristiina + riina'
		),
		array (
				'winner' => 'Klaos + Toivo',
				'looser' => 'aivar + Marju'
		),
		// 2014 - 6 mängu
		// 7 - 6 mängu
		array (
				'winner' => 'Klaos + taku',
				'looser' => 'per + riina'
		),
		array (
				'winner' => 'Klaos + peacecop kalmer:',
				'looser' => 'riina + taku'
		),
		array (
				'winner' => 'peacecop kalmer: + taku',
				'looser' => 'Klaos + per'
		),
		array (
				'winner' => 'peacecop kalmer: + per',
				'looser' => 'Klaos + riina'
		),
		array (
				'winner' => 'peacecop kalmer: + taku',
				'looser' => 'per + riina'
		),
		array (
				'winner' => 'per + taku',
				'looser' => 'peacecop kalmer: + riina'
		),
		// 2015 - 14 mängu
		// 30 - 14 mängu
		array (
				'winner' => 'peacecop kalmer: + stranberg',
				'looser' => 'oliver + per'
		),
		array (
				'winner' => 'helena + tarvo',
				'looser' => 'kristi + kristiina'
		),
		array (
				'winner' => 'peacecop kalmer: + stranberg',
				'looser' => 'helena + tarvo'
		),
		array (
				'winner' => 'oliver + per',
				'looser' => 'helena + tarvo'
		),
		array (
				'winner' => 'peacecop kalmer: + stranberg',
				'looser' => 'kristi + kristiina'
		),
		array (
				'winner' => 'peacecop kalmer: + stranberg',
				'looser' => 'ants + taku'
		),
		array (
				'winner' => 'oliver + per',
				'looser' => 'ants + taku'
		),
		array (
				'winner' => 'ants + taku',
				'looser' => 'helena + tarvo'
		),
		array (
				'winner' => 'ants + taku',
				'looser' => 'kristi + kristiina'
		),
		array (
				'winner' => 'peacecop kalmer: + stranberg',
				'looser' => 'marko + meelis'
		),
		array (
				'winner' => 'oliver + per',
				'looser' => 'marko + meelis'
		),
		array (
				'winner' => 'ants + taku',
				'looser' => 'marko + meelis'
		),
		array (
				'winner' => 'marko + meelis',
				'looser' => 'helena + tarvo'
		),
		array (
				'winner' => 'kristi + kristiina',
				'looser' => 'marko + meelis'
		),
		// 2016 - 5 mängu
		// 24 - 5 mängu
		array (
				'winner' => 'ottomar + taku',
				'looser' => 'boris + peacecop kalmer:'
		),
		array (
				'winner' => 'boris + ottomar',
				'looser' => 'marje + peacecop kalmer:'
		),
		array (
				'winner' => 'ottomar + peacecop kalmer:',
				'looser' => 'marje + taku'
		),
		array (
				'winner' => 'marje + ottomar',
				'looser' => 'boris + taku'
		),
		array (
				'winner' => 'peacecop kalmer: + taku',
				'looser' => 'boris + marje'
		),
		// 2018 - 3 mängu
		// 29 - 3 mängu
		array (
				'winner' => 'oliver koel + peacecop kalmer:',
				'looser' => 'Merike + Tiit',
				'statistics'=> 'TVRJd05qbG0'
		),
		array (
				'winner' => 'Merike + Tiit',
				'looser' => 'Kristiina + taku',
				'statistics'=> 'TVRGbU16Smk'
		),
		array (
				'winner' => 'oliver koel + peacecop kalmer:',
				'looser' => 'Kristiina + taku',
				'statistics'=> 'TVRJd05tVXg'
		),
);

$mergeSortChart = new MergeSortChart ();
$metadataOfCurrentFile = pathinfo ( __FILE__ );
preg_match ( '/merge-sort-chart-(.+)/', $metadataOfCurrentFile ['filename'], $foundMatches );
$mergeSortChart->manageResults ( array (
		'matches' => $matches,
		'typeOfTennis' => $foundMatches [1]
) );

