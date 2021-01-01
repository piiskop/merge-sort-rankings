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
				'winner' => 'Ahto',
				'looser' => 'Illimar'
		),
		array (
				'winner' => 'Ahto',
				'looser' => 'Riina'
		),
		array (
				'winner' => 'Riina',
				'looser' => 'Illimar'
		),
);

$mergeSortChart = new MergeSortChart ();
$metadataOfCurrentFile = pathinfo ( __FILE__ );
preg_match ( '/merge-sort-chart-(.+)/', $metadataOfCurrentFile ['filename'], $foundMatches );
$mergeSortChart->manageResults ( array (
		'matches' => $matches,
		'typeOfTennis' => $foundMatches [1]
) );

