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
		// 2014 - 5 mängu
		// 7 - 5 mängu
		array (
				'winner' => 'Ahto + Illimar',
				'looser' => 'Per + Riina'
		),
		array (
				'winner' => 'Ahto + Kalmer',
				'looser' => 'Illimar + Riina'
		),
		array (
				'winner' => 'Ahto + Per',
				'looser' => 'Illimar + Kalmer'
		),
		array (
				'winner' => 'Kalmer + Per',
				'looser' => 'Ahto + Riina'
		),
		array (
				'winner' => 'Illimar + Per',
				'looser' => 'Kalmer + Riina'
		),
);

$mergeSortChart = new MergeSortChart ();
$metadataOfCurrentFile = pathinfo ( __FILE__ );
preg_match ( '/merge-sort-chart-(.+)/', $metadataOfCurrentFile ['filename'], $foundMatches );
$mergeSortChart->manageResults ( array (
		'matches' => $matches,
		'typeOfTennis' => $foundMatches [1]
) );

