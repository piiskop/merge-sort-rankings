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
	// 2016 - 9 mängus
	// 10 - 9 mängu
	array (
		'winner' => 'Riina Bachmann',
		'looser' => 'heli'
	),
	array (
		'winner' => 'Kaie Kree',
		'looser' => 'helena'
	),
	array (
		'winner' => 'boris tšernjak',
		'looser' => 'Illimar Sööt'
	),
	array (
		'winner' => 'Riina Bachmann',
		'looser' => 'Kaie Kree'
	),
	array (
		'winner' => 'Kaie Kree',
		'looser' => 'heli'
	),
	array (
		'winner' => 'helena',
		'looser' => 'heli'
	),
	array (
		'winner' => 'boris tšernjak',
		'looser' => 'peacecop kalmer:'
	),
	array (
		'winner' => 'peacecop kalmer:',
		'looser' => 'Illimar Sööt',
			'statistics'=> 'TVRJeVpqUmo'
	),
	array (
		'winner' => 'helena',
		'looser' => 'Riina Bachmann'
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
echo html_entity_decode(preg_replace('/\\\u([\da-f]{4})/', '&#x\1;', 'S\u00f6\u00f6t'));

