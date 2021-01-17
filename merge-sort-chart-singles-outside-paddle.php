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
		// 2014 - 3 mängu
		// 7 - 3 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Ahto Klaos'
		),
		array (
				'winner' => 'per lindberg',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Riina Bachmann'
		),
		// 2015 - 21 mängu
		// 11 - 21 mängu
		array (
				'winner' => 'kristjan pajumets',
				'looser' => 'peacecop kalmer:'
		),
		array (
				'winner' => 'per lindberg',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'Helena Ruud',
				'looser' => 'ants'
		),
		array (
				'winner' => 'kristjan pajumets',
				'looser' => 'kristiina koel'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'kristiina koel'
		),
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'ants'
		),
		array (
				'winner' => 'Illimar Sööt',
				'looser' => 'Helena Ruud'
		),
		array (
				'winner' => 'per lindberg',
				'looser' => 'ants'
		),
		array (
				'winner' => 'per lindberg',
				'looser' => 'Helena Ruud'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'per lindberg'
		),
		array (
				'winner' => 'kristjan pajumets',
				'looser' => 'per lindberg'
		),
		array (
				'winner' => 'per lindberg',
				'looser' => 'kristiina koel'
		),
		array (
				'winner' => 'kristiina koel',
				'looser' => 'Helena Ruud'
		),
		array (
				'winner' => 'kristjan pajumets',
				'looser' => 'Helena Ruud'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'kristiina koel',
				'looser' => 'ants'
		),
		array (
				'winner' => 'kristjan pajumets',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'ants'
		),
		array (
				'winner' => 'kristiina koel',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'kristjan pajumets',
				'looser' => 'ants'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Helena Ruud'
		),
		// 2016 - 10 mängu
		// 24 - 10 mängu
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'Marje Tammo',
				'looser' => 'boris tšernjak'
		),
		array (
				'winner' => 'boris tšernjak',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'boris tšernjak'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'Marje Tammo'
		),
		array (
				'winner' => 'Marje Tammo',
				'looser' => 'Illimar Sööt'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'ottomar'
		),
		array (
				'winner' => 'ottomar',
				'looser' => 'Marje Tammo'
		),
		array (
				'winner' => 'ottomar',
				'looser' => 'boris tšernjak'
		),
		array (
				'winner' => 'ottomar',
				'looser' => 'Illimar Sööt'
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
