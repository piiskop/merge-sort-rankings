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
	// HaValÜTeK SeTt 2014
	/*
	 * R: Helena - Kalmer / Kalmer - Illimar
	 * R: Riina - Kaie / Kaie - Helena
	 * A: Dina / Helena - Riina / Kaie
	 * T: Dina - Helena / Dina - Illimar
	 * R: Dina - Illimar / Helena - Kalmer
	 * R: Helena - Kalmer / Dina - Helena
	 * A: Oliver - Per / Kalmer - Illimar
	 */
	array (
		'winner' => 'Illimar Sööt - peacecop kalmer:',
		'looser' => 'kalmer - helena'
	),
	array (
		'winner' => 'riina - kaie',
		'looser' => 'Kaie - Helena'
	),
	array (
		'winner' => 'Dina - Helena',
		'looser' => 'riina - kaie'
	),
	array (
		'winner' => 'Dina - Illimar',
		'looser' => 'Dina - Helena'
	),
	array (
		'winner' => 'Dina - Illimar',
		'looser' => 'kalmer - helena'
	),
	array (
		'winner' => 'kalmer - helena',
		'looser' => 'Dina - Helena'
	),
	array (
		'winner' => 'Illimar Sööt - peacecop kalmer:',
		'looser' => 'Oliver - Per'
	),
	// HaValÜTeK SeTt 2015 - 10 mängu
	/*
	 * O: boris - kaie / kalmer - helena
	 * R: tarmo - pentti / kalmer - illimar
	 * O: kalmer - helena / illimar - külli
	 * O: rainer - riina / boris - kaie
	 * A: rainer - riina / illimar - külli
	 * O: riina - kaie / helena - külli
	 * O: georg - boris / kalmer - illimar
	 * A: kalmer - illimar / rainer - per
	 * P: pentti - palmsaar / per - rainer
	 */
	// 07 - 1 mäng
	array (
		'winner' => 'boris - kaie',
		'looser' => 'kalmer - helena'
	),
	// 13 - 1 mäng
	array (
		'winner' => 'pentti - palmsaar',
		'looser' => 'illimar - peacecop kalmer:'
	),
	// 14 - 1 mäng
	array (
		'winner' => 'illimar - külli',
		'looser' => 'kalmer - helena'
	),
	// 18 - 1 mäng
	array (
		'winner' => 'boris',
		'looser' => 'illimar - kaie'
	),
	// 19 - 1 mäng
	array (
		'winner' => 'rainer - riina',
		'looser' => 'boris - kaie'
	),
	// 20 - 2 mängu
	array (
		'winner' => 'illimar - külli',
		'looser' => 'rainer - riina'
	),
	array (
		'winner' => 'helena - külli',
		'looser' => 'riina - kaie'
	),
	// 21 - 1 mäng
	array (
		'winner' => 'Illimar Sööt - peacecop kalmer:',
		'looser' => 'georg - boris'
	),
	// 27 - 2 mängu
	array (
		'winner' => 'per - rainer',
		'looser' => 'Illimar Sööt - peacecop kalmer:'
	),
	array (
		'winner' => 'pentti - palmsaar',
		'looser' => 'per - rainer'
	),
	// HaValPaTeK 2018
	/*
	 * D: eerik - georg kangur / Relika Aruoja Aruoja - Siim Simson
	 * D: Erik - georg kangur / Kaie Kree - peacecop kalmer:
	 * D: Erik - georg / Indrek Jakobson - kalmer:
	 * D: georg kangur - Indrek Jakobson / kalmer
	 */
	array (
			'winner' => 'Illimar Sööt - peacecop kalmer:',
			'looser' => 'Erik - georg kangur'
		),
	array (
			'winner' => 'Erik - georg kangur',
			'looser' => 'Relika Aruoja Aruoja - Siim Simson'
		),
	array (
			'winner' => 'Kaie Kree - peacecop kalmer:',
			'looser' => 'Erik - georg kangur'
		),
	array (
			'winner' => 'Indrek Jakobson / peacecop kalmer:',
			'looser' => 'Erik - georg kangur'
		),
	// HaValPaTeK 2019
	/*
	 * A: Relika Aruoja Aruoja - Siim Simson / peacecop kalmer: - Aet Neering
	 */
	array (
		'winner' => 'peacecop kalmer: - Aet Neering',
		'looser' => 'Relika Aruoja Aruoja - Siim Simson'
	)
);

$mergeSortChart = new MergeSortChart ();
$mergeSortChart->manageResults ( array (
	'matches' => $matches
) );

