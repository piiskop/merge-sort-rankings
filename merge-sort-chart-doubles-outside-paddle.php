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
		// 2013
		// 25 - 6 mängu
		array (
				'winner' => 'Oleg + Reet',
				'looser' => 'Riina + peacecop kalmer:'
		),
		array (
				'winner' => 'Evelyn + Jakov',
				'looser' => 'Aivar + Riina'
		),
		array (
				'winner' => 'Ahto Klaos + Riina',
				'looser' => 'Kristiina + Reet Rätsep'
		),
		array (
				'winner' => 'Kent + Toivo',
				'looser' => 'Ahto Klaos + Aivar'
		),
		array (
				'winner' => 'Ahto Klaos + Evelyn',
				'looser' => 'Kristiina + Riina'
		),
		array (
				'winner' => 'Ahto Klaos + Toivo',
				'looser' => 'Aivar + Marju'
		),
);

$mergeSortChart = new MergeSortChart ();
$mergeSortChart->manageResults ( array (
		'matches' => $matches
) );

