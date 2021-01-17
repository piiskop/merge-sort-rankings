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
		// 2013 - 6 mängu
		// 25 - 6 mängu
		array (
				'winner' => 'Oleg + Reet Rätsep',
				'looser' => 'Riina Bachmann + peacecop kalmer:'
		),
		array (
				'winner' => 'Evelyn + Jakov',
				'looser' => 'Riina Bachmann + aivar ventsel'
		),
		array (
				'winner' => 'Ahto Klaos + Riina Bachmann',
				'looser' => 'Reet Rätsep + kristiina koel'
		),
		array (
				'winner' => 'Kent + Toivo Promm',
				'looser' => 'Ahto Klaos + aivar ventsel'
		),
		array (
				'winner' => 'Ahto Klaos + Evelyn',
				'looser' => 'Riina Bachmann + kristiina koel'
		),
		array (
				'winner' => 'Ahto Klaos + Toivo Promm',
				'looser' => 'Marju + aivar ventsel'
		),
		// 2014 - 6 mängu
		// 7 - 6 mängu
		array (
				'winner' => 'Ahto Klaos + Illimar Sööt',
				'looser' => 'Riina Bachmann + per lindberg'
		),
		array (
				'winner' => 'Ahto Klaos + peacecop kalmer:',
				'looser' => 'Illimar Sööt + Riina Bachmann'
		),
		array (
				'winner' => 'Illimar Sööt + peacecop kalmer:',
				'looser' => 'Ahto Klaos + per lindberg'
		),
		array (
				'winner' => 'peacecop kalmer: + per',
				'looser' => 'Ahto Klaos + Riina Bachmann'
		),
		array (
				'winner' => 'Illimar Sööt + peacecop kalmer:',
				'looser' => 'Riina Bachmann + per lindberg'
		),
		array (
				'winner' => 'Illimar Sööt + per lindberg',
				'looser' => 'Riina Bachmann + peacecop kalmer:'
		),
		// 2015 - 14 mängu
		// 30 - 14 mängu
		array (
				'winner' => 'peacecop kalmer: + stranberg',
				'looser' => 'Oliver Koel + per lindberg'
		),
		array (
				'winner' => 'Helena Ruud + tarvo',
				'looser' => 'kristi kirsman + kristiina koel'
		),
		array (
				'winner' => 'peacecop kalmer: + stranberg',
				'looser' => 'Helena Ruud + tarvo'
		),
		array (
				'winner' => 'Oliver Koel + per lindberg',
				'looser' => 'Helena Ruud + tarvo'
		),
		array (
				'winner' => 'peacecop kalmer: + stranberg',
				'looser' => 'kristi kirsman + kristiina koel'
		),
		array (
				'winner' => 'peacecop kalmer: + stranberg',
				'looser' => 'Illimar Sööt + ants'
		),
		array (
				'winner' => 'Oliver Koel + per lindberg',
				'looser' => 'Illimar Sööt + ants'
		),
		array (
				'winner' => 'Illimar Sööt + ants',
				'looser' => 'Helena Ruud + tarvo'
		),
		array (
				'winner' => 'Illimar Sööt + ants',
				'looser' => 'kristi kirsman + kristiina koel'
		),
		array (
				'winner' => 'peacecop kalmer: + stranberg',
				'looser' => 'marko + meelis'
		),
		array (
				'winner' => 'Oliver Koel + per lindberg',
				'looser' => 'marko + meelis'
		),
		array (
				'winner' => 'Illimar Sööt + ants',
				'looser' => 'marko + meelis'
		),
		array (
				'winner' => 'marko + meelis',
				'looser' => 'Helena Ruud + tarvo'
		),
		array (
				'winner' => 'kristi kirsman + kristiina koel',
				'looser' => 'marko + meelis'
		),
		// 2016 - 5 mängu
		// 24 - 5 mängu
		array (
				'winner' => 'Illimar sööt + ottomar',
				'looser' => 'boris tšernjak + peacecop kalmer:'
		),
		array (
				'winner' => 'boris tšernjak + ottomar',
				'looser' => 'Marje Tammo + peacecop kalmer:'
		),
		array (
				'winner' => 'ottomar + peacecop kalmer:',
				'looser' => 'Illimar Sööt + Marje Tammo'
		),
		array (
				'winner' => 'Marje Tammo + ottomar',
				'looser' => 'Illimar Sööt + boris tšernjak'
		),
		array (
				'winner' => 'Illimar Sööt + peacecop kalmer:',
				'looser' => 'Marje Tammo + boris tšernjak'
		),
		// 2018 - 3 mängu
		// 29 - 3 mängu
		array (
				'winner' => 'Oliver Koel + peacecop kalmer:',
				'looser' => 'Merike Kosesson + Tiit Niibek',
				'statistics'=> 'TVRJd05qbG0'
		),
		array (
				'winner' => 'Merike Kosesson + Tiit Niibek',
				'looser' => 'Illimar Sööt + kristiina koel',
				'statistics'=> 'TVRGbU16Smk'
		),
		array (
				'winner' => 'Oliver Koel + peacecop kalmer:',
				'looser' => 'Illimar Sööt + kristiina koel',
				'statistics'=> 'TVRJd05tVXg'
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
