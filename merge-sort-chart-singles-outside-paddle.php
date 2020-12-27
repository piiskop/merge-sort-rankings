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
		// 2015
		// 11 - 21 mängu
		array (
				'winner' => 'pajumets',
				'looser' => 'peacecop kalmer:'
		),
		array (
				'winner' => 'per',
				'looser' => 'illimar'
		),
		array (
				'winner' => 'helena',
				'looser' => 'ants'
		),
		array (
				'winner' => 'pajumets',
				'looser' => 'kristiina'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'kristiina'
		),
		array (
				'winner' => 'illimar',
				'looser' => 'ants'
		),
		array (
				'winner' => 'illimar',
				'looser' => 'helena'
		),
		array (
				'winner' => 'per',
				'looser' => 'ants'
		),
		array (
				'winner' => 'per',
				'looser' => 'helena'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'per'
		),
		array (
				'winner' => 'pajumets',
				'looser' => 'per'
		),
		array (
				'winner' => 'per',
				'looser' => 'kristiina'
		),
		array (
				'winner' => 'kristiina',
				'looser' => 'helena'
		),
		array (
				'winner' => 'pajumets',
				'looser' => 'helena'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'illimar'
		),
		array (
				'winner' => 'kristiina',
				'looser' => 'ants'
		),
		array (
				'winner' => 'pajumets',
				'looser' => 'illimar'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'ants'
		),
		array (
				'winner' => 'kristiina',
				'looser' => 'illimar'
		),
		array (
				'winner' => 'pajumets',
				'looser' => 'ants'
		),
		array (
				'winner' => 'peacecop kalmer:',
				'looser' => 'helena'
		),
);

$mergeSortChart = new MergeSortChart ();
$mergeSortChart->manageResults ( array (
		'matches' => $matches
) );
