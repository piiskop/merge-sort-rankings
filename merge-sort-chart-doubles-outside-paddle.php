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
				'looser' => 'riina + peacecop kalmer:'
		),
		array (
				'winner' => 'Evelyn + Jakov',
				'looser' => 'aivar + riina'
		),
		array (
				'winner' => 'Klaos + riina',
				'looser' => 'Kristiina + Reet Rätsep'
		),
		array (
				'winner' => 'Kent + Toivo',
				'looser' => 'Klaos + aivar'
		),
		array (
				'winner' => 'Klaos + Evelyn',
				'looser' => 'kristiina + riina'
		),
		array (
				'winner' => 'Klaos + Toivo',
				'looser' => 'aivar + Marju'
		),
		// 2015
		// 30 - 14 mängu
		array (
				'winner' => 'peacecop kalmer: + stranberg',
				'looser' => 'oliver + per'
		),
		array (
				'winner' => 'helena + tarvo',
				'looser' => 'kristi + kristiina'
		),
		array (
				'winner' => 'peacecop kalmer: + stranberg',
				'looser' => 'helena + tarvo'
		),
		array (
				'winner' => 'oliver + per',
				'looser' => 'helena + tarvo'
		),
		array (
				'winner' => 'peacecop kalmer: + stranberg',
				'looser' => 'kristi + kristiina'
		),
		array (
				'winner' => 'peacecop kalmer: + stranberg',
				'looser' => 'ants + illimar'
		),
		array (
				'winner' => 'oliver + per',
				'looser' => 'ants + illimar'
		),
		array (
				'winner' => 'ants + illimar',
				'looser' => 'helena + tarvo'
		),
		array (
				'winner' => 'ants + illimar',
				'looser' => 'kristi + kristiina'
		),
		array (
				'winner' => 'peacecop kalmer: + stranberg',
				'looser' => 'marko + meelis'
		),
		array (
				'winner' => 'oliver + per',
				'looser' => 'marko + meelis'
		),
		array (
				'winner' => 'ants + illimar',
				'looser' => 'marko + meelis'
		),
		array (
				'winner' => 'marko + meelis',
				'looser' => 'helena + tarvo'
		),
		array (
				'winner' => 'kristi + kristiina',
				'looser' => 'marko + meelis'
		),
);

$mergeSortChart = new MergeSortChart ();
$mergeSortChart->manageResults ( array (
		'matches' => $matches
) );

