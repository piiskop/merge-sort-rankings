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
		'winner' => 'Heli + boris tšernjak',
		'looser' => 'Helena Ruud + peacecop kalmer:',
			'statistics'=> 'TVRJeVpqUmk'
	),
	array (
		'winner' => 'Illimar Sööt + Riina Bachmann',
		'looser' => 'Kaie Kree + boris tšernjak'
	),
	array (
		'winner' => 'Illimar Sööt + Kaie Kree',
		'looser' => 'Riina Bachmann + boris tšernjak'
	),
	array (
		'winner' => 'Heli + peacecop kalmer:',
		'looser' => 'Helena Ruud + Illimar Sööt'
	),
	array (
		'winner' => 'Kaie Kree + peacecop kalmer:',
		'looser' => 'Helena Ruud + boris tšernjak'
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
