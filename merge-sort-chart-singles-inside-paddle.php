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
		'winner' => 'riina',
		'looser' => 'heli'
	),
	array (
		'winner' => 'kaie',
		'looser' => 'helena'
	),
	array (
		'winner' => 'boriss:',
		'looser' => 'illimar'
	),
	array (
		'winner' => 'riina',
		'looser' => 'kaie'
	),
	array (
		'winner' => 'kaie',
		'looser' => 'heli'
	),
	array (
		'winner' => 'helena',
		'looser' => 'heli'
	),
	array (
		'winner' => 'boriss',
		'looser' => 'peacecop kalmer:'
	),
	array (
		'winner' => 'peacecop kalmer:',
		'looser' => 'illimar'
	),
	array (
		'winner' => 'helena',
		'looser' => 'riina'
	),
);

$mergeSortChart = new MergeSortChart ();
$mergeSortChart->manageResults ( array (
	'matches' => $matches
) );

