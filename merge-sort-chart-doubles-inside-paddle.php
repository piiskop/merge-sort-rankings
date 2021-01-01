<?php

namespace mergeSortChart;

/**
 * Created on 14.09.2015
 *
 * @copyright Copyright &copy; 2015, Kalmer Piiskop <pandeero@gmail.com>
 */
require_once dirname(__FILE__) . '/MergeSortChart.php';

/**
 *
 * @author kalmer
 * @var string[string][] index is either <code>winner</code> or
 *      <code>looser</code>, value is the name of the player
 */
$matches = array (
	// 2016 - 5 mängu
	// 10 - 5 mängu
	array (
		'winner' => 'boris + Heli',
		'looser' => 'Helena + peacecop kalmer:',
			'statistics'=> 'TVRJeVpqUmk'
	),
	array (
		'winner' => 'illimar + riina',
		'looser' => 'boris + kaie'
	),
	array (
		'winner' => 'illimar + kaie',
		'looser' => 'boris + riina'
	),
	array (
		'winner' => 'Heli + peacecop kalmer:',
		'looser' => 'helena + illimar'
	),
	array (
		'winner' => 'kaie + peacecop kalmer:',
		'looser' => 'boris + helena'
	),
);

$mergeSortChart = new MergeSortChart ();
$metadataOfCurrentFile = pathinfo ( __FILE__ );
preg_match ( '/merge-sort-chart-(.+)/', $metadataOfCurrentFile ['filename'], $foundMatches );
$mergeSortChart->manageResults ( array (
		'matches' => $matches,
		'typeOfTennis' => $foundMatches [1]
) );

