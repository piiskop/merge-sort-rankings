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
	 * T: Riina / Niels
	 * R: Dina / Illimar
	 * R: Marek - Kalmer
	 * A: Oliver Kotkas / Genadi Nikolajev
	 * T: Indrek - Rando
	 * R: Riina / Dina
	 * A: Rando / Genadi
	 * T: Indrek / Illimar
	 * R: Oliver / Kalmer
	 * T: Genadi / Marek
	 */
	array (
		'winner' => 'Niels',
		'looser' => 'Riina'
	),
	array (
		'winner' => 'Illimar Sööt',
		'looser' => 'Dina'
	),
	array (
		'winner' => 'peacecop kalmer:',
		'looser' => 'Marek'
	),
	array (
		'winner' => 'Oliver Kotkas',
		'looser' => 'Genadi Nikolajev'
	),
	array (
		'winner' => 'Rando',
		'looser' => 'Indrek Pajuste'
	),
	array (
		'winner' => 'Dina',
		'looser' => 'Riina'
	),
	array (
		'winner' => 'Genadi Nikolajev',
		'looser' => 'Rando'
	),
	array (
		'winner' => 'Indrek Pajuste',
		'looser' => 'Illimar Sööt'
	),
	array (
		'winner' => 'peacecop kalmer:',
		'looser' => 'Oliver Kotkas'
	),
	array (
		'winner' => 'Marek',
		'looser' => 'Genadi Nikolajev'
	),
	// HaValÜTeK SeTt 2015
	/*
	 * R: kalmer / boris
	 * R: kalmer / rainer
	 * P: illimar / külli
	 * P: kalmer - indrek
	 * O: indrek / illimar
	 * D: georg / illimar
	 * P: tarmo / kalmer
	 * P: rainer - illimar
	 * O: indrek / rainer
	 * O: tarmo / rainer
	 * O: tarmo / indrek
	 * D: georg / külli
	 * O: indrek / georg
	 * A: kalmer / illimar
	 * A: kalmer / pentti
	 * P: boris / pentti
	 * O: boris / kalmer
	 * A: rainer / per
	 * P: tarmo / per
	 * D: tarmo / georg
	 */
	array (
		'winner' => 'boris',
		'looser' => 'peacecop kalmer:'
	),
	array (
		'winner' => 'peacecop kalmer:',
		'looser' => 'rainer'
	),
	array (
		'winner' => 'Illimar Sööt',
		'looser' => 'külli'
	),
	array (
		'winner' => 'peacecop kalmer:',
		'looser' => 'Indrek Pajuste'
	),
	array (
		'winner' => 'Indrek Pajuste',
		'looser' => 'Illimar Sööt'
	),
	array (
		'winner' => 'Illimar Sööt',
		'looser' => 'georg kangur'
	),
	array (
		'winner' => 'peacecop kalmer:',
		'looser' => 'tarmo'
	),
	array (
		'winner' => 'rainer',
		'looser' => 'Illimar Sööt'
	),
	array (
		'winner' => 'Indrek Pajuste',
		'looser' => 'rainer'
	),
	array (
		'winner' => 'tarmo',
		'looser' => 'rainer'
	),
	array (
		'winner' => 'tarmo',
		'looser' => 'Indrek Pajuste'
	),
	array (
		'winner' => 'georg kangur',
		'looser' => 'külli'
	),
	array (
		'winner' => 'georg kangur',
		'looser' => 'Indrek Pajuste'
	),
	array (
		'winner' => 'peacecop kalmer:',
		'looser' => 'Illimar Sööt'
	),
	array (
		'winner' => 'pentti',
		'looser' => 'peacecop kalmer:'
	),
	array (
		'winner' => 'boris',
		'looser' => 'pentti'
	),
	array (
		'winner' => 'boris',
		'looser' => 'peacecop kalmer:'
	),
	array (
		'winner' => 'per',
		'looser' => 'rainer'
	),
	array (
		'winner' => 'tarmo',
		'looser' => 'per'
	),
	array (
		'winner' => 'tarmo',
		'looser' => 'georg kangur'
	),
	// HaValÜTeK SeTt 2018
	/*
	 * O: peacecop kalmer: / Indrek Pajuste
	 * O: Gerd Eston Sepp / Siim Simson
	 * O: Gerd Eston Sepp / Relika Aruoja Aruoja
	 * P: Illimar Sööt / Indrek Pajuste
	 * D: eerik / georg kangur
	 * P: Kaie Kree / Relika Aruoja Aruoja
	 * P: Illimar Sööt / Indrek Jakobson
	 * P: Indrek Pajuste / Siim Simson
	 * P: Illimar Sööt / Siim Simson
	 * P: Indrek Jakobson / Indrek Pajuste
	 * P: Illimar Sööt / Indrek Jakobson
	 * P: Indrek Jakobson / Siim Simson
	 * D: Erik / Indrek Jakobson
	 * P: Gerd Eston Sepp / Indrek Pajuste
	 */
	array (
		'winner' => 'peacecop kalmer:',
		'looser' => 'Erik'
	),
	array (
		'winner' => 'peacecop kalmer:',
		'looser' => 'Indrek Pajuste'
	),
	array (
		'winner' => 'Siim Simson',
		'looser' => 'Gerd Eston Sepp'
	),
	array (
		'winner' => 'Gerd Eston Sepp',
		'looser' => 'Relika Aruoja Aruoja'
	),
	array (
		'winner' => 'Illimar Sööt',
		'looser' => 'Indrek Pajuste'
	),
	array (
		'winner' => 'Erik',
		'looser' => 'georg kangur'
	),
	array (
		'winner' => 'Relika Aruoja Aruoja',
		'looser' => 'Kaie Kree'
	),
	array (
		'winner' => 'Siim Simson',
		'looser' => 'Indrek Pajuste'
	),
	array (
		'winner' => 'Siim Simson',
		'looser' => 'Illimar Sööt'
	),
	array (
		'winner' => 'Indrek Jakobson',
		'looser' => 'Indrek Pajuste'
	),
	array (
		'winner' => 'Illimar Sööt',
		'looser' => 'Indrek Jakobson'
	),
	array (
		'winner' => 'Indrek Jakobson',
		'looser' => 'Siim Simson'
	),
	array (
		'winner' => 'Erik',
		'looser' => 'Indrek Jakobson'
	),
	array (
		'winner' => 'Indrek Pajuste',
		'looser' => 'Gerd Eston Sepp'
	),
	// HaValÜTeK SeTt 2019
	/*
	 * A: peacecop kalmer: / Aare Halliko
	 * A: Kaie Kree / Relika Aruoja
	 * A: Indrek Pajuste / Gerd Eston Sepp
	 */
	array (
		'winner' => 'Aare Halliko',
		'looser' => 'peacecop kalmer:'
	),
	array (
		'winner' => 'Relika Aruoja Aruoja',
		'looser' => 'Kaie Kree'
	),
	array (
		'winner' => 'Indrek Pajuste',
		'looser' => 'Gerd Eston Sepp'
	),
);

$mergeSortChart = new MergeSortChart ();
$mergeSortChart->manageResults ( array (
	'matches' => $matches
) );
