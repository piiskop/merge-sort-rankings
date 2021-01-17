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
				'winner' => 'Ahto Klaos + Illimar Sööt',
				'looser' => 'Riina Bachmann + per lindberg'
		),
		array (
				'winner' => 'Ahto Klaos + peacecop kalmer:',
				'looser' => 'Illimar Sööt + Riina Bachmann'
		),
		array (
				'winner' => 'Ahto Klaos + per lindberg',
				'looser' => 'Illimar Sööt + peacecop kalmer:'
		),
		array (
				'winner' => 'peacecop kalmer: + per lindberg',
				'looser' => 'Ahto Klaos + Riina Bachmann'
		),
		array (
				'winner' => 'Illimar Sööt + per lindberg',
				'looser' => 'Riina Bachmann + peacecop kalmer:'
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

