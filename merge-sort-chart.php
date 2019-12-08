<?php

namespace mergeSortChart;

/**
 * Created on 14.09.2015
 *
 * @copyright Copyright &copy; 2015, Kalmer Piiskop <pandeero@gmail.com>
 */
// preliminary tasks
if (! isset ( $_SESSION )) {
	session_start ();
}

setlocale ( LC_TIME, 'et_EE.UTF-8' );
ini_set ( 'display_errors', 1 );

if (defined ( 'E_DEPRECATED' )) {
	error_reporting ( E_ALL & ~ E_DEPRECATED & ~ E_STRICT );
} else {
	error_reporting ( E_ALL & ~ E_STRICT );
}

date_default_timezone_set ( 'Europe/Tallinn' );

/**
 * This class describes the algorithm for making a chart using merge sorting.
 *
 * @author kalmer
 * @namespace mergeSortChart
 */
class MergeSortChart {

	// @formatter:off
	/**
	 * @access private
	 * @author kalmer
	 * @var mixed[string] a recursive array of the result of the merging.
	 * 		Every player has his/her own subarray like this:<pre>
	 *  [kalmer] => Array
        (
            [player] => kalmer
            [winners] => Array
                (
                )

            [place] => 1
        )
	 * 		</pre><code>winners</code> contains the arrays of winners of the
	 * 		current player.
	 */
	// @formatter:on
	private $results = array ();

	/**
	 * This function sorts an array according to the given index.
	 *
	 * @param mixed $array
	 *        	the array to sort, for instance <pre>
	 *        	1 => array (
	 *        	'firstName' => 'kalmer',
	 *        	'lastName' => 'piiskop',
	 *        	'id' => 1,
	 *        	'object' => $human1,
	 *        	'title' => 'kalmer piiskop'
	 *        	),
	 *        	2 => array (
	 *        	'firstName' => 'haide',
	 *        	'lastName' => 'kuivas',
	 *        	'id' => 2,
	 *        	'object' => $human2,
	 *        	'title' => 'haide kuivas'
	 *        	)
	 *        	</pre>
	 * @param array $sortRules
	 *        	array whose keys are titles and
	 *        	values are rules whose key is either <code>sortAscending</code> or
	 *        	<code>type</code> with the appropriate constant as the value.
	 * @return mixed $array the sorted array, for instance <pre>
	 *         1 => array (
	 *         'firstName' => 'kalmer',
	 *         'lastName' => 'piiskop',
	 *         'id' => 1,
	 *         'object' => $human1,
	 *         'title' => 'kalmer piiskop'
	 *         ),
	 *         2 => array (
	 *         'firstName' => 'haide',
	 *         'lastName' => 'kuivas',
	 *         'id' => 2,
	 *         'object' => $human2,
	 *         'title' => 'haide kuivas'
	 *         )
	 *         </pre>
	 */
	function multiSort($array, $sortRules) {
		$invokeArguments = array ();

		$ascending = SORT_ASC;
		$descending = SORT_DESC;
		$sortType = SORT_LOCALE_STRING;

		foreach ( $sortRules as $title => $rules ) {

			if ($title == 'title') {
				$title2 = array ();

				$invokeArguments [] = &$title2;
				// echo ' 580: <pre>'; print_r($invokeArguments); echo '</pre>';
			} else {
				${$title} = array ();

				$invokeArguments [] = &${$title};
				// echo ' 587: <pre>'; print_r($invokeArguments); echo '</pre>';
			}

			if ($rules ['sortAscending']) {
				$invokeArguments [] = &$ascending;
				// echo ' 593: <pre>'; print_r($invokeArguments); echo '</pre>';
			} else {
				$invokeArguments [] = &$descending;
				// echo ' 598: <pre>'; print_r($invokeArguments); echo '</pre>';
			}

			if (isset ( $rules ['type'] )) {
				$rules ['type'];
			} else {
				$invokeArguments [] = &$sortType;
			}
			// echo ' 602: <pre>'; print_r($invokeArguments); echo '</pre>';
		}

		foreach ( $array as $key => $row ) {

			foreach ( $row as $caption => $value ) {

				if ($caption == 'title') {
					$title2 [$key] = $value;
				} else {
					${$caption} [$key] = $value;
				}
			}
		}

		$invokeArguments [] = &$array;

		setlocale ( LC_ALL, 'et_EE.UTF-8' );
		// echo ' 617: <pre>'; print_r($array); echo '</pre>';
		call_user_func_array ( 'array_multisort', $invokeArguments );

		return $array;
	}

	/**
	 * This function updates recursively the loosers with the information about
	 * their winners.
	 *
	 * @access private
	 * @author kalmer
	 * @param string $parameters['looser']
	 *        	the name of the looser
	 */
	private function updateLooser($parameters) {

		// for each player
		foreach ( $this->results as $player => $result ) {

			/*
			 * if the looser exists in the list of the winners over the current
			 * player
			 */
			if (isset ( $result ['winners'] [$parameters ['looser']] )) {
				/*
				 * update the list of the looser in the winners' list of the
				 * current player with the list of the looser
				 */
				$this->results [$player] ['winners'] [$parameters ['looser']] = $this->results [$parameters ['looser']];
				// update loosers of the player
				$this->updateLooser ( array (
					'looser' => $player
				) );
			}
		}
	}

	/**
	 * This function cleans the winners recursively if the looser has won over
	 * his/her previous winner.
	 *
	 * @access private
	 * @author kalmer
	 * @param boolean $parameters['deep']
	 *        	Are we digged in recursively?
	 * @param mixed[int] $parameters['results']
	 *        	the actual results of merging of
	 *        	the winner
	 * @param string $parameters['winner']
	 *        	the name of the winner
	 * @param string $parameters['looser']
	 *        	the name of the looser
	 * @param string $parameters['parent']
	 *        	the name of the parent
	 */
	private function cleanWinner($parameters) {

		// if the winner has an entry for his/her winners
		if (isset ( $parameters ['results'] ['winners'] )) {
			// for each player who has won over the current winner
			foreach ( $parameters ['results'] ['winners'] as $player => $winners ) {
				// if we are at the first level
				if (! $parameters ['deep']) {
					// set the parent to be the current player
					$parameters ['parent'] = $player;
				}

				// if the looser is the current player
				if ($parameters ['looser'] === $player) {
					// remove the parent from the winners over the winner
					unset ( $this->results [$parameters ['winner']] ['winners'] [$parameters ['parent']] );
					// for each player
					foreach ( $this->results as $previousLooser => $previousWinners ) {
						// if the player has set winners
						if (isset ( $previousWinners ['winners'] )) {
							// for each past winner
							foreach ( $previousWinners ['winners'] as $previousWinner => $previousWinnersOverPreviousLooser ) {
								// if the past winner is the current winner
								if ($previousWinner === $parameters ['winner']) {

									/*
									 * remove the past winner from the list of
									 * winners over the past looser
									 */
									unset ( $this->results [$previousLooser] ['winners'] [$previousWinner] );
									/*
									 * insert the parent to the list of winners
									 * over the past looser
									 */
									$this->results [$previousLooser] ['winners'] [$parameters ['parent']] = $this->results [$parameters ['parent']];

									// update loosers of the past looser
									$this->updateLooser ( array (
										'looser' => $previousLooser
									) );
								}
							}
						}
					}
				}
				// clean winners
				$this->cleanWinner ( array (
					'deep' => true,
					'results' => $winners,
					'winner' => $parameters ['winner'],
					'looser' => $parameters ['looser'],
					'parent' => $parameters ['parent']
				) );
			}
		}
	}

	/**
	 * This function finds out the depth of the array.
	 *
	 * @access private
	 * @author kalmer
	 * @param mixed $parameters['array']
	 *        	the array
	 * @param string $parameters['keyForChildren']
	 *        	the key for the children
	 * @return number the depth
	 */
	private function array_depth($parameters) {
		if (! empty ( $parameters ['array'] [$parameters ['keyForChildren']] )) {
			$parameters ['array'] = $parameters ['array'] [$parameters ['keyForChildren']];
		}

		$max_depth = 1;

		foreach ( $parameters ['array'] as $value ) {
			if (is_array ( $value )) {
				$depth = $this->array_depth ( array (
					'array' => $value,
					'keyForChildren' => $parameters ['keyForChildren']
				) ) + 1;
				if ($depth > $max_depth) {
					$max_depth = $depth;
				}
			}
		}

		return $max_depth;
	}

	/**
	 * This function creates the chart using merge sorting.
	 *
	 * @access public
	 * @author kalmer
	 * @param string[string[int]] $parameters['matches']
	 *        	the matches where the
	 *        	index is <code>winner</code> or <code>looser</code> and the value
	 *        	is the name of either winner or looser
	 */
	public function manageResults($parameters) {

		// for each match result
		foreach ( $parameters ['matches'] as $match ) {
			// if there is no entry for the winner yet
			if (! isset ( $this->results [$match ['winner']] )) {
				// set an entry for the winner
				$this->results [$match ['winner']] = array (
					'player' => $match ['winner'],
					'winners' => array ()
				);
			}

			/*
			 * manage all the cases where the winner has previously lost to
			 * somebody in the winner’s winners’ critical path
			 */
			$this->cleanWinner ( array (
				'deep' => false,
				'results' => $this->results [$match ['winner']],
				'winner' => $match ['winner'],
				'looser' => $match ['looser'],
				'parent' => NULL
			) );

			// set an entry for the looser
			$this->results [$match ['looser']] ['player'] = $match ['looser'];
			// insert the list of the winner to the winners' list of the looser
			$this->results [$match ['looser']] ['winners'] [$match ['winner']] = $this->results [$match ['winner']];

			// update loosers of the looser
			$this->updateLooser ( array (
				'looser' => $match ['looser']
			) );
		}
		// echo ' 381: <pre>';print_r($this->results); echo '</pre>';

		// for each player
		foreach ( $this->results as $player => $arrayOfPlayer ) {
			// if there is an entry for the winners by the player
			if (isset ( $arrayOfPlayer ['winners'] )) {
				/*
				 * set the place of the player according to the length of the
				 * critical path of the player's winners
				 */
				$this->results [$player] ['place'] = $this->array_depth ( array (
					'array' => $arrayOfPlayer,
					'keyForChildren' => 'winners'
				) ) - 1;
			} // otherwise
			else {
				// set the place as 1 for the player
				$this->results [$player] ['place'] = 1;
			}
		}
		// echo ' 59: <pre>';print_r($this->results); echo '</pre>';
		// sort the list of the players according to their places ascending
		$sortedResults = MergeSortChart::multiSort ( $this->results, array (
			'place' => array (
				'sortAscending' => TRUE,
				'type' => SORT_NUMERIC
			)
		) );
		// echo ' 340: <pre>';print_r($sortedResults); echo '</pre>';
		foreach ( $sortedResults as $player => $arrayOfPlayer ) {
			echo "\n", $arrayOfPlayer ['place'], "\t", $player;
		}
		echo "\n";
		// foreach ( $this->results ['kersti oselin'] ['winners'] as $winner => $array ) {
		// print_r ( $winner );
		// }
	}
}

/**
 *
 * @author kalmer
 * @var string[string][] index is either <code>winner</code> or
 *      <code>looser</code>, value is the name of the player
 */
$matches = array (
	// array (
	// 'winner' => 'kalmer',
	// 'looser' => 'mari'
	// ),
	// array (
	// 'winner' => 'kalmer',
	// 'looser' => 'boris'
	// ),
	// array (
	// 'winner' => 'ivar',
	// 'looser' => 'kalmer'
	// ),
	// array (
	// 'winner' => 'jakov',
	// 'looser' => 'kalmer'
	// ),
	// array (
	// 'winner' => 'marek',
	// 'looser' => 'kalmer'
	// ),
	// array (
	// 'winner' => 'kristjan',
	// 'looser' => 'ivar'
	// ),
	// array (
	// 'winner' => 'kristjan',
	// 'looser' => 'malle'
	// ),
	// array (
	// 'winner' => 'malle',
	// 'looser' => 'ivar'
	// ),
	// array (
	// 'winner' => 'kristjan',
	// 'looser' => 'jakov'
	// ),
	// array (
	// 'winner' => 'taavi',
	// 'looser' => 'kristjan'
	// ),
	// array (
	// 'winner' => 'kalmer',
	// 'looser' => 'kristjan'
	// ),
	// 2013
	// array (
	// 'winner' => 'Sten Õepa',
	// 'looser' => 'Kent Männik'
	// ),
	// array (
	// 'winner' => 'peacecop kalmer:',
	// 'looser' => 'Ahto Klaos'
	// ),
	// array (
	// 'winner' => 'Sten Õepa',
	// 'looser' => 'Kent Männik'
	// ),
	// array (
	// 'winner' => 'Sten Õepa',
	// 'looser' => 'Kent Männik'
	// ),
	// array (
	// 'winner' => 'Sten Õepa',
	// 'looser' => 'Kent Männik'
	// ),
	// array (
	// 'winner' => 'Sten Õepa',
	// 'looser' => 'Kent Männik'
	// ),
	// array (
	// 'winner' => 'Sten Õepa',
	// 'looser' => 'Kent Männik'
	// ),
	// array (
	// 'winner' => 'Sten Õepa',
	// 'looser' => 'Kent Männik'
	// ),

	// 2014?
	// array (
	// 'winner' => 'rainer',
	// 'looser' => 'illimar'
	// ),
	// array (
	// 'winner' => 'tarmo',
	// 'looser' => 'rainer'
	// ),
	// array (
	// 'winner' => 'kristjan',
	// 'looser' => 'kalmer'
	// ),
	// array (
	// 'winner' => 'per',
	// 'looser' => 'rando'
	// ),
	// array (
	// 'winner' => 'ülle',
	// 'looser' => 'riina'
	// ),
	// array (
	// 'winner' => 'kalmer',
	// 'looser' => 'aivar'
	// ),
	// array (
	// 'winner' => 'stiina',
	// 'looser' => 'ülle'
	// ),
	// array (
	// 'winner' => 'riina',
	// 'looser' => 'helena'
	// ),
	// array (
	// 'winner' => 'boris',
	// 'looser' => 'aivar'
	// ),
	// array (
	// 'winner' => 'ahto',
	// 'looser' => 'ville'
	// ),
	// array (
	// 'winner' => 'tarmo',
	// 'looser' => 'indrek'
	// ),
	// array (
	// 'winner' => 'tarmo',
	// 'looser' => 'ahto'
	// ),
	// array (
	// 'winner' => 'kristi',
	// 'looser' => 'helena'
	// ),
	// array (
	// 'winner' => 'ranno',
	// 'looser' => 'tarmo'
	// ),
	// array (
	// 'winner' => 'ranno',
	// 'looser' => 'per'
	// ),
	// array (
	// 'winner' => 'külli',
	// 'looser' => 'katrin'
	// ),
	// array (
	// 'winner' => 'kristiina',
	// 'looser' => 'stiina'
	// ),
	// array (
	// 'winner' => 'genadi',
	// 'looser' => 'aivar'
	// ),
	// array (
	// 'winner' => 'kalmer',
	// 'looser' => 'boris'
	// ),
	// array (
	// 'winner' => 'kalmer',
	// 'looser' => 'genadi'
	// ),
	// array (
	// 'winner' => 'indrek',
	// 'looser' => 'rando'
	// ),
	// array (
	// 'winner' => 'per',
	// 'looser' => 'genadi'
	// ),
	// array (
	// 'winner' => 'ivar',
	// 'looser' => 'ville'
	// ),
	// array (
	// 'winner' => 'per',
	// 'looser' => 'indrek'
	// ),
	// array (
	// 'winner' => 'riina',
	// 'looser' => 'kristi'
	// ),
	// array (
	// 'winner' => 'ivar',
	// 'looser' => 'indrek'
	// ),
	// array (
	// 'winner' => 'tarmo',
	// 'looser' => 'per'
	// ),
	// array (
	// 'winner' => 'ivar',
	// 'looser' => 'priit'
	// ),
	// array (
	// 'winner' => 'kristiina',
	// 'looser' => 'külli'
	// ),
	// array (
	// 'winner' => 'kristiina',
	// 'looser' => 'janelle'
	// ),
	// array (
	// 'winner' => 'indrek',
	// 'looser' => 'illimar'
	// ),
	// array (
	// 'winner' => 'janelle',
	// 'looser' => 'riina'
	// ),
	// array (
	// 'winner' => 'külli',
	// 'looser' => 'janelle'
	// ),
	// array (
	// 'winner' => 'kaie',
	// 'looser' => 'helena'
	// ),
	// array (
	// 'winner' => 'ahto',
	// 'looser' => 'rainer'
	// ),
	// array (
	// 'winner' => 'stiina',
	// 'looser' => 'janelle'
	// ),
	// array (
	// 'winner' => 'ivar',
	// 'looser' => 'ranno'
	// ),
	// array (
	// 'winner' => 'rainer',
	// 'looser' => 'ville'
	// ),
	// array (
	// 'winner' => 'rando',
	// 'looser' => 'ahto'
	// ),
	// array (
	// 'winner' => 'stiina',
	// 'looser' => 'külli'
	// ),
	// array (
	// 'winner' => 'aivar',
	// 'looser' => 'ahto'
	// ),
	// array (
	// 'winner' => 'boris',
	// 'looser' => 'genadi'
	// ),
	// array (
	// 'winner' => 'stiina',
	// 'looser' => 'katrin'
	// ),
	// array (
	// 'winner' => 'ivar',
	// 'looser' => 'kalmer'
	// ),
	// array (
	// 'winner' => 'genadi',
	// 'looser' => 'indrek'
	// ),
	// array (
	// 'winner' => 'boris',
	// 'looser' => 'priit'
	// ),
	// array (
	// 'winner' => 'ville',
	// 'looser' => 'illimar'
	// ),
	// array (
	// 'winner' => 'aivar',
	// 'looser' => 'indrek'
	// ),
	// array (
	// 'winner' => 'kristi',
	// 'looser' => 'kaie'
	// ),
	// array (
	// 'winner' => 'kalmer',
	// 'looser' => 'tarmo'
	// ),
	// array (
	// 'winner' => 'katrin',
	// 'looser' => 'riina'
	// ),
	// array (
	// 'winner' => 'kristjan',
	// 'looser' => 'ivar'
	// ),
	// array (
	// 'winner' => 'priit',
	// 'looser' => 'indrek'
	// ),
	// array (
	// 'winner' => 'illimar',
	// 'looser' => 'rando'
	// ),
	// array (
	// 'winner' => 'boris',
	// 'looser' => 'tarmo'
	// ),
	// array (
	// 'winner' => 'illimar',
	// 'looser' => 'rando'
	// ),
	// array (
	// 'winner' => 'ahto',
	// 'looser' => 'illimar'
	// ),
	// array (
	// 'winner' => 'illimar',
	// 'looser' => 'stiina'
	// ),
	// array (
	// 'winner' => 'kristiina',
	// 'looser' => 'indrek'
	// ),
	// array (
	// 'winner' => 'aivar',
	// 'looser' => 'kristiina'
	// ),
	// array (
	// 'winner' => 'janelle',
	// 'looser' => 'katrin'
	// ),
	// array (
	// 'winner' => 'illimar',
	// 'looser' => 'rando'
	// ),
	// array (
	// 'winner' => 'rando',
	// 'looser' => 'stiina'
	// ),
	// array (
	// 'winner' => 'ville',
	// 'looser' => 'stiina'
	// ),
	// array (
	// 'winner' => 'priit',
	// 'looser' => 'per'
	// ),
	// array (
	// 'winner' => 'kalmer',
	// 'looser' => 'indrek'
	// ),
	// array (
	// 'winner' => 'kalmer',
	// 'looser' => 'kristjan'
	// ),
	// array (
	// 'winner' => 'kalmer',
	// 'looser' => 'kristjan'
	// ),
	// array (
	// 'winner' => 'boris',
	// 'looser' => 'indrek'
	// )
	// 2016 HaValÜTeK Vägi
	/*
	 * T: riina / kaie
	 * T: kalmer / kristjan
	 * A: kalmer peacecop: / boris
	 * A: boris / genadi
	 * A: boris - per
	 * A: per / genadi
	 * T: kalmer peacecop: / oliver
	 * N: liis / ville
	 * N: liis / illimar
	 * T: per / indrek
	 * T: kalmer peacecop: / ville
	 * T: marje / ville
	 * T: genadi / ville
	 * A: boris / ville
	 * I: genadi / illimar
	 * I: liis / marje
	 * T: indrek / marje
	 * I: indrek / illimar
	 * A: kristjan / oliver
	 * T: kairi / riina
	 * T: riina / merje
	 * I: illimar / kairi
	 * A: kristjan / boris
	 * T: riina / kersti
	 * A: oliver / boris
	 * T: kaie / kersti
	 * I: illimar / kairi
	 * A: kristjan / boris
	 * T: riina / kersti
	 * A: oliver / boris
	 * T: kaie / kersti
	 * I: illimar / riina
	 * T: indrek / genadi
	 *
	 */
	// array (
	// 'winner' => 'a',
	// 'looser' => 'b'
	// ),
	// array (
	// 'winner' => 'b',
	// 'looser' => 'c'
	// ),
	// array (
	// 'winner' => 'c',
	// 'looser' => 'b'
	// ),
	// array (
	// 'winner' => 'c',
	// 'looser' => 'a'
	// ),

	array (
		'winner' => 'Riina Bachmann',
		'looser' => 'Kaie Kree'
	),
	array (
		'winner' => 'peacecop kalmer:',
		'looser' => 'Kristjan Pajumets'
	),
	array (
		'winner' => 'peacecop kalmer:',
		'looser' => 'boriss'
	),
	array (
		'winner' => 'boriss',
		'looser' => 'Genadi Nikolajev'
	),
	array (
		'winner' => 'boriss',
		'looser' => 'Per Lindberg'
	),
	array (
		'winner' => 'Genadi Nikolajev',
		'looser' => 'Per Lindberg'
	),
	array (
		'winner' => 'peacecop kalmer:',
		'looser' => 'oliver kotkas'
	),
	array (
		'winner' => 'Ville Pak',
		'looser' => 'Liis Laanesaar'
	),
	array (
		'winner' => 'Liis Laanesaar',
		'looser' => 'Illimar Sööt'
	),
	array (
		'winner' => 'Per Lindberg',
		'looser' => 'Indrek Pajuste'
	),
	array (
		'winner' => 'peacecop kalmer:',
		'looser' => 'Ville Pak'
	),
	array (
		'winner' => 'Ville Pak',
		'looser' => 'marje tammo'
	),
	array (
		'winner' => 'Ville Pak',
		'looser' => 'Genadi Nikolajev'
	),
	array (
		'winner' => 'boriss',
		'looser' => 'Ville Pak'
	),
	array (
		'winner' => 'Genadi Nikolajev',
		'looser' => 'Illimar Sööt'
	),
	array (
		'winner' => 'marje tammo',
		'looser' => 'Liis Laanesaar'
	),
	array (
		'winner' => 'Indrek Pajuste',
		'looser' => 'marje tammo'
	),
	array (
		'winner' => 'Indrek Pajuste',
		'looser' => 'Illimar Sööt'
	),
	array (
		'winner' => 'Kristjan Pajumets',
		'looser' => 'oliver kotkas'
	),
	array (
		'winner' => 'kairi vilderson',
		'looser' => 'Riina Bachmann'
	),
	array (
		'winner' => 'merje kruus',
		'looser' => 'Riina Bachmann'
	),
	array (
		'winner' => 'kairi vilderson',
		'looser' => 'Illimar Sööt'
	),
	array (
		'winner' => 'Kristjan Pajumets',
		'looser' => 'boriss'
	),
	array (
		'winner' => 'Riina Bachmann',
		'looser' => 'kersti oselin'
	),
	array (
		'winner' => 'oliver kotkas',
		'looser' => 'boriss'
	),
	array (
		'winner' => 'Kaie Kree',
		'looser' => 'kersti oselin'
	),
	array (
		'winner' => 'marje tammo',
		'looser' => 'kairi vilderson'
	),
	array (
		'winner' => 'Illimar Sööt',
		'looser' => 'kersti oselin'
	),
	array (
		'winner' => 'Illimar Sööt',
		'looser' => 'Riina Bachmann'
	),

	// 2018 Vägi
	/*
	 * Aare Halliko / peacecop kalmer:
	 * Aare Halliko / Ville Pak
	 * Indrek Jakobson / Evelin Poom
	 * Gerd Eston Sepp / Peeter Poom
	 * Gerd Eston Sepp / Meelis Rajapuu
	 * Janar Välk / Evelin Poom
	 * Meelis Rajapuu / Peeter Poom
	 * * T: peacecop kalmer: / Illimar Sööt
	 * * T: peacecop kalmer: / Ville Pak
	 * A: Indrek Pajuste / Janar Välk
	 * * A: Helen Maisa / Relika Aruoja
	 * T: Gerd Eston Sepp / Siim Simson
	 * T: Ave Piik / Relika Aruoja
	 * * T: peacecop kalmer: / Peeter Poom
	 * T: Jüri Mallene / Riho Maisa
	 * T: Helen Maisa / Riho Maisa
	 * * T: Gerd Eston Sepp / Lembit Tamper
	 * * A: Saree Halliko / Peeter Poom
	 * * T: Jüri Mallene / Illimar Sööt
	 * A: Janar Välk / oliver koel
	 * T: Janar Välk / Illimar Sööt
	 * * A: Gerd Eston Sepp / oliver koel
	 * T: Ave Piik / Illimar Sööt
	 * * T: Kristiina / Ville Pak
	 * * T: Jüri Mallene / oliver koel
	 * T: Ave Piik / Jüri Mallene
	 * * T: Lembit Tampere / Relika Aruoja
	 * A: alvar veersalu / Mihkel Rajapuu
	 * * A: oliver koel / Relika Aruoja
	 * * T: Indrek Pajuste / marje tammo
	 * * A: Alvar Veersalu / Siim Simson
	 * * A: Janar Välk / Jüri Mallene
	 * * A: oliver koel / riho maisa
	 * * A: marje tammo / Ville Pak
	 * A: Indrek Jakobson / oliver koel
	 * * I: boris / Meelis Rajapuu
	 * T: Ave Piik / Jüri Mallene
	 * * A: Ave Piik / Janar Välk
	 * * A: Indrek Pajuste / Illimar Sööt
	 * * A: Indrek Jakobson / Jüri Mallene
	 * T: Kristiina / Siim Simson
	 * T: georg kangur / marje tammo
	 * * A: Alvar Veersalu / marje tammo
	 * * T: Meelis Rajapuu / Ville Pak
	 * * A: Relika Aruoja / riho maisa
	 * * A: alvar veersalu / georg kangur
	 * * A: georg kangur / Illimar Sööt
	 * * A: Ave Piik / georg kangur
	 * * A: marje tammo / Meelis Rajapuu
	 * * A: alvar veersalu / Illimar Sööt
	 * * A: Aare Halliko / Kristiina
	 * A: marje tammo / Illimar Sööt
	 * * T: Janar Välk / Siim Simson
	 * A: Indrek Jakobson / Siim Simson
	 * * A: Relika Aruoja / riho maisa
	 * * A: Indrek Jakobson / Siim Simson
	 * * A: Ave Piik / Indrek Pajuste
	 * * Relika Aruoja / Riho
	 * I: oliver koel / Siim Simson
	 */

// 	array (
// 		'winner' => 'Meelis Rajapuu',
// 		'looser' => 'Siim Simson'
// 	),
// 	array (
// 		'winner' => 'Aare Halliko',
// 		'looser' => 'peacecop kalmer:'
// 	),
// 	array (
// 		'winner' => 'Aare Halliko',
// 		'looser' => 'Ville Pak'
// 	),
// 	array (
// 		'winner' => 'Evelin Poom',
// 		'looser' => 'Indrek Jakobson'
// 	),
// 	array (
// 		'winner' => 'Peeter Poom',
// 		'looser' => 'Gerd Eston Sepp'
// 	),
// 	array (
// 		'winner' => 'Meelis Rajapuu',
// 		'looser' => 'Gerd Eston Sepp'
// 	),
// 	array (
// 		'winner' => 'Janar Välk',
// 		'looser' => 'Evelin Poom'
// 	),
// 	array (
// 		'winner' => 'Peeter Poom',
// 		'looser' => 'Meelis Rajapuu'
// 	),
// 	array (
// 		'winner' => 'peacecop kalmer:',
// 		'looser' => 'Illimar Sööt'
// 	),
// 	array (
// 		'winner' => 'peacecop kalmer:',
// 		'looser' => 'Ville Pak'
// 	),
// 	array (
// 		'winner' => 'Meelis Rajapuu',
// 		'looser' => 'Lembit Tampere'
// 	),
// 	array (
// 		'winner' => 'Siim Simson',
// 		'looser' => 'Lembit Tampere'
// 	),
// 	array (
// 		'winner' => 'Indrek Pajuste',
// 		'looser' => 'Janar Välk'
// 	),
// 	array (
// 		'winner' => 'Relika Aruoja',
// 		'looser' => 'Helen Maisa'
// 	),
// 	array (
// 		'winner' => 'Siim Simson',
// 		'looser' => 'Gerd Eston Sepp'
// 	),
// 	array (
// 		'winner' => 'Ave Piik',
// 		'looser' => 'Relika Aruoja'
// 	),
// 	array (
// 		'winner' => 'peacecop kalmer:',
// 		'looser' => 'Peeter Poom'
// 	),
// 	array (
// 		'winner' => 'Jüri Mallene',
// 		'looser' => 'riho maisa'
// 	),
// 	array (
// 		'winner' => 'riho maisa',
// 		'looser' => 'Helen Maisa'
// 	),
// 	array (
// 		'winner' => 'Gerd Eston Sepp',
// 		'looser' => 'Lembit Tampere'
// 	),
// 	array (
// 		'winner' => 'Aare Halliko',
// 		'looser' => 'Peeter Poom'
// 	),
// 	array (
// 		'winner' => 'Jüri Mallene',
// 		'looser' => 'Illimar Sööt'
// 	),
// 	array (
// 		'winner' => 'Jüri Mallene',
// 		'looser' => 'Illimar Sööt'
// 	),
// 	array (
// 		'winner' => 'Illimar Sööt',
// 		'looser' => 'Jüri Mallene'
// 	),
// 	array (
// 		'winner' => 'Janar Välk',
// 		'looser' => 'oliver koel'
// 	),
// 	array (
// 		'winner' => 'Illimar Sööt',
// 		'looser' => 'Janar Välk'
// 	),
// 	array (
// 		'winner' => 'oliver koel',
// 		'looser' => 'Gerd Eston Sepp'
// 	),
// 	array (
// 		'winner' => 'Illimar Sööt',
// 		'looser' => 'Ave Piik'
// 	),
// 	array (
// 		'winner' => 'Kristiina',
// 		'looser' => 'Ville Pak'
// 	),
// 	array (
// 		'winner' => 'Jüri Mallene',
// 		'looser' => 'oliver koel'
// 	),
// 	array (
// 		'winner' => 'Lembit Tampere',
// 		'looser' => 'Relika Aruoja'
// 	),
// 	array (
// 		'winner' => 'Meelis Rajapuu',
// 		'looser' => 'alvar veersalu'
// 	),
// 	array (
// 		'winner' => 'oliver koel',
// 		'looser' => 'Relika Aruoja'
// 	),
// 	array (
// 		'winner' => 'marje tammo',
// 		'looser' => 'Indrek Pajuste'
// 	),
// 	array (
// 		'winner' => 'alvar veersalu',
// 		'looser' => 'Siim Simson'
// 	),
// 	array (
// 		'winner' => 'Janar Välk',
// 		'looser' => 'Jüri Mallene'
// 	),
// 	array (
// 		'winner' => 'oliver koel',
// 		'looser' => 'riho maisa'
// 	),
// 	array (
// 		'winner' => 'Ville Pak',
// 		'looser' => 'marje tammo'
// 	),
// 	array (
// 		'winner' => 'Indrek Jakobson',
// 		'looser' => 'oliver koel'
// 	),
// 	array (
// 		'winner' => 'Meelis Rajapuu',
// 		'looser' => 'boriss'
// 	),
// 	array (
// 		'winner' => 'Ave Piik',
// 		'looser' => 'Jüri Mallene'
// 	),
// 	array (
// 		'winner' => 'Ave Piik',
// 		'looser' => 'Janar Välk'
// 	),
// 	array (
// 		'winner' => 'peacecop kalmer:',
// 		'looser' => 'Aare Halliko'
// 	),
// 	array (
// 		'winner' => 'Illimar Sööt',
// 		'looser' => 'Indrek Pajuste'
// 	),
// 	array (
// 		'winner' => 'Indrek Jakobson',
// 		'looser' => 'Jüri Mallene'
// 	),
// 	array (
// 		'winner' => 'Kristiina',
// 		'looser' => 'Siim Simson'
// 	),
// 	array (
// 		'winner' => 'marje tammo',
// 		'looser' => 'georg kangur'
// 	),
// 	array (
// 		'winner' => 'marje tammo',
// 		'looser' => 'alvar veersalu'
// 	),
// 	array (
// 		'winner' => 'Ville Pak',
// 		'looser' => 'Meelis Rajapuu'
// 	),
// 	array (
// 		'winner' => 'alvar veersalu',
// 		'looser' => 'georg kangur'
// 	),
// 	array (
// 		'winner' => 'Illimar Sööt',
// 		'looser' => 'georg kangur'
// 	),
// 	array (
// 		'winner' => 'Ave Piik',
// 		'looser' => 'georg kangur'
// 	),
// 	array (
// 		'winner' => 'Meelis Rajapuu',
// 		'looser' => 'marje tammo'
// 	),
// 	array (
// 		'winner' => 'Illimar Sööt',
// 		'looser' => 'alvar veersalu'
// 	),
// 	array (
// 		'winner' => 'Aare Halliko',
// 		'looser' => 'Kristiina'
// 	),
// 	array (
// 		'winner' => 'marje tammo',
// 		'looser' => 'Illimar Sööt'
// 	),
// 	array (
// 		'winner' => 'Janar Välk',
// 		'looser' => 'Siim Simson'
// 	),
// 	array (
// 		'winner' => 'Indrek Jakobson',
// 		'looser' => 'Siim Simson'
// 	),
// 	array (
// 		'winner' => 'Ave Piik',
// 		'looser' => 'Indrek Pajuste'
// 	),
// 	array (
// 		'winner' => 'riho maisa',
// 		'looser' => 'Relika Aruoja'
// 	),
// 	array (
// 		'winner' => 'Siim Simson',
// 		'looser' => 'oliver koel'
// 	),

	// HaValÜTeK 2019 Vägi

// 	array (
// 		'winner' => 'peacecop kalmer:',
// 		'looser' => 'Aare Halliko'
// 	),
// 	array (
// 		'winner' => 'Aare Halliko',
// 		'looser' => 'peacecop kalmer:'
// 	),
// 	array (
// 		'winner' => 'Per Lindberg',
// 		'looser' => 'Indrek Jakobson'
// 	),
// 	array (
// 		'winner' => 'oliver koel',
// 		'looser' => 'Gerd Eston Sepp'
// 	),
// 	array (
// 		'winner' => 'peacecop kalmer:',
// 		'looser' => 'Kristiina'
// 	),
// 	array (
// 		'winner' => 'Reet Ruuto',
// 		'looser' => 'Kaie Kree'
// 	),
// 	array (
// 		'winner' => 'Maidu',
// 		'looser' => 'oliver koel'
// 	),
// 	array (
// 		'winner' => 'oliver koel',
// 		'looser' => 'Reet Ruuto'
// 	),
// 	array (
// 		'winner' => 'Diana Laurits-Tass',
// 		'looser' => 'Lembit Tampere'
// 	),
// 	array (
// 		'winner' => 'peacecop kalmer:',
// 		'looser' => 'Maidu'
// 	),
// 	array (
// 		'winner' => 'oliver koel',
// 		'looser' => 'Jüri Mallene'
// 	),
// 	array (
// 		'winner' => 'Siim Simson',
// 		'looser' => 'oliver koel'
// 	),
// 	array (
// 		'winner' => 'Gerd Eston Sepp',
// 		'looser' => 'Jüri Mallene'
// 	),
// 	array (
// 		'winner' => 'peacecop kalmer:',
// 		'looser' => 'Diana Laurits-Tass'
// 	),

	// Doubles
	// HaValPaTeK 2016 Vägi
	/*
	 * T: oliver - per / illimar - kalmer peacecop:
	 * N: kaie - kalmer / riina - illimar
	 * A: boris - marje / illimar - kalmer
	 * A: boris - marje / kaie - kalmer peacecop:
	 * A: kaie - kalmer / merje - per
	 * T: illimar - kalmer / merje - per
	 * A: boris - marje / merje - per
	 * T: illimar - kalmer / merje - per
	 * A: boris - marje / merje - per
	 * T: kaie - kairi / illimar - riina
	 * T: boris - marje / illimar - riina
	 */
	/*
	 * array (
	 * 'winner' => 'Illimar Sööt - peacecop kalmer:',
	 * 'looser' => 'oliver kotkas - Per Lindberg'
	 * ),
	 * array (
	 * 'winner' => 'Kaie Kree - peacecop kalmer:',
	 * 'looser' => 'Illimar Sööt - Riina Bachmann'
	 * ),
	 * array (
	 * 'winner' => 'Illimar Sööt - peacecop kalmer:',
	 * 'looser' => 'boriss - marje tammo'
	 * ),
	 * array (
	 * 'winner' => 'Kaie Kree - peacecop kalmer:',
	 * 'looser' => 'boriss - marje tammo'
	 * ),
	 * array (
	 * 'winner' => 'Kaie Kree - peacecop kalmer:',
	 * 'looser' => 'Per Lindberg - merje kruus'
	 * ),
	 * array (
	 * 'winner' => 'Illimar Sööt - peacecop kalmer:',
	 * 'looser' => 'Per Lindberg - merje kruus'
	 * ),
	 * array (
	 * 'winner' => 'boriss - marje tammo',
	 * 'looser' => 'Per Lindberg - merje kruus'
	 * ),
	 * array (
	 * 'winner' => 'Illimar Sööt - Riina Bachmann',
	 * 'looser' => 'Kaie Kree - kairi vilderson'
	 * ),
	 * array (
	 * 'winner' => 'boriss - marje tammo',
	 * 'looser' => 'Illimar Sööt - Riina Bachmann'
	 * ),
	 */
	// HaValPaTeK 2018 Vägi
	/*
	 * Evelin Poom - Peeter Poom / Helena Ruud - Indrek Jakobson
	 * * Evelin Poom - Peeter Poom / Mairi Priimägi - Tarvo Priimägi
	 * * Gerd Eston Sepp - Janar Välk / Illimar Sööt - peacecop kalmer:
	 * * T: Evelin Poom - Peeter Poom / erki lõhmus - Toivo Promm
	 * * T: erki lõhmus - Toivo Promm / Illimar Sööt - peacecop kalmer:
	 * * T: Per Lindberg - salonplusi helena / Relika Aruoja - Siim Simson
	 * * T: Merike Kosesson - Tiit Niibek / Relika Aruoja - Siim Simson
	 * * T: Gerd Eston Sepp - Janar Välk / Relika Aruoja - siim simso
	 * * A: Kristiina - oliver koel / Per Lindberg - salonplusi helena
	 * A: Merike Kosesson - Tiit Niibek / Per Lindberg - salonplusi helena
	 * T: Per Lindberg - salonplusi helena / Illimar Sööt - peacecop kalmer:
	 * * A: erki lõhmus - Toivo Promm / Per Lindberg - salonplusi helena
	 * * T: Kristiina - oliver koel / Relika Aruoja - Siim Simson
	 * * T: Gerd Eston Sepp - Janar Välk / Mairi Priimägi - Tarvo Priimägi
	 * * T: boris - marje tammo / Illimar Sööt - peacecop kalmer:
	 * T: Merike Kosesson - Tiit Niibek / Illimar Sööt - peacecop kalmer:
	 * * T: erki lõhmus - Toivo Promm / riho maisa - veiko vetto
	 * T: Mairi Priimägi - Tarvo Priimägi / riho maisa - veiko vetto
	 * T: erki lõhmus - Toivo Promm / Merike Kosesson - Tiit Niibek
	 * * T: Gerd Eston Sepp - Janar Välk / riho maisa - veiko vetto
	 * * T: Mairi Priimägi - Tarvo Priimägi / Per Lindberg - salonplusi helena
	 * T: Kristiina - oliver koel / Mairi Priimägi - Tarvo Priimägi
	 * * A: Gerd Eston Sepp - Janar Välk / Kristiina - oliver koel
	 * T: Kristiina - oliver koel / riho maisa - Veiko Vetto
	 */
	/*
	 * array (
	 * 'winner' => 'Evelin Poom - Peeter Poom',
	 * 'looser' => 'Helena Ruud - Indrek Jakobson'
	 * ),
	 * array (
	 * 'winner' => 'Evelin Poom - Peeter Poom',
	 * 'looser' => 'Mairi Priimägi - Tarvo Priimägi'
	 * ),
	 * array (
	 * 'winner' => 'Illimar Sööt - peacecop kalmer:',
	 * 'looser' => 'Gerd Eston Sepp - Janar Välk'
	 * ),
	 * array (
	 * 'winner' => 'erki lõhmus - Toivo Promm',
	 * 'looser' => 'Evelin Poom - Peeter Poom'
	 * ),
	 * array (
	 * 'winner' => 'erki lõhmus - Toivo Promm',
	 * 'looser' => 'Illimar Sööt - peacecop kalmer:'
	 * ),
	 * array (
	 * 'winner' => 'Illimar Sööt - peacecop kalmer:',
	 * 'looser' => 'erki lõhmus - Toivo Promm'
	 * ),
	 * array (
	 * 'winner' => 'Per Lindberg - salonplusi helena',
	 * 'looser' => 'Relika Aruoja - Siim Simson'
	 * ),
	 * array (
	 * 'winner' => 'Merike Kosesson - Tiit Niibek',
	 * 'looser' => 'Relika Aruoja - Siim Simson'
	 * ),
	 * array (
	 * 'winner' => 'Gerd Eston Sepp - Janar Välk',
	 * 'looser' => 'Relika Aruoja - Siim Simson'
	 * ),
	 * array (
	 * 'winner' => 'Per Lindberg - salonplusi helena',
	 * 'looser' => 'Kristiina - oliver koel'
	 * ),
	 * array (
	 * 'winner' => 'Merike Kosesson - Tiit Niibek',
	 * 'looser' => 'Per Lindberg - salonplusi helena'
	 * ),
	 * array (
	 * 'winner' => 'Illimar Sööt - peacecop kalmer:',
	 * 'looser' => 'Per Lindberg - salonplusi helena'
	 * ),
	 * array (
	 * 'winner' => 'erki lõhmus - Toivo Promm',
	 * 'looser' => 'Per Lindberg - salonplusi helena'
	 * ),
	 * array (
	 * 'winner' => 'Kristiina - oliver koel',
	 * 'looser' => 'Relika Aruoja - Siim Simson'
	 * ),
	 * array (
	 * 'winner' => 'Mairi Priimägi - Tarvo Priimägi',
	 * 'looser' => 'Gerd Eston Sepp - Janar Välk'
	 * ),
	 * array (
	 * 'winner' => 'Illimar Sööt - peacecop kalmer:',
	 * 'looser' => 'boriss - marje tammo'
	 * ),
	 * array (
	 * 'winner' => 'Illimar Sööt - peacecop kalmer:',
	 * 'looser' => 'Merike Kosesson - Tiit Niibek'
	 * ),
	 * array (
	 * 'winner' => 'erki lõhmus - Toivo Promm',
	 * 'looser' => 'riho maisa - veiko vetto'
	 * ),
	 * array (
	 * 'winner' => 'Mairi Priimägi - Tarvo Priimägi',
	 * 'looser' => 'riho maisa - veiko vetto'
	 * ),
	 * array (
	 * 'winner' => 'Merike Kosesson - Tiit Niibek',
	 * 'looser' => 'erki lõhmus - Toivo Promm'
	 * ),
	 * array (
	 * 'winner' => 'riho maisa - veiko vetto',
	 * 'looser' => 'Gerd Eston Sepp - Janar Välk'
	 * ),
	 * array (
	 * 'winner' => 'Mairi Priimägi - Tarvo Priimägi',
	 * 'looser' => 'Per Lindberg - salonplusi helena'
	 * ),
	 * array (
	 * 'winner' => 'Mairi Priimägi - Tarvo Priimägi',
	 * 'looser' => 'Kristiina - oliver koel'
	 * ),
	 * array (
	 * 'winner' => 'Kristiina - oliver koel',
	 * 'looser' => 'Gerd Eston Sepp - Janar Välk'
	 * ),
	 * array (
	 * 'winner' => 'Kristiina - oliver koel',
	 * 'looser' => 'riho maisa - veiko vetto'
	 * )
	 */
	// Paddle tennis
	/*
	 * * T: oliver koel - peacecop kalmer: / Merike Kosesson - Tiit Niibek
	 * T: Kristiina - Illimar Sööt / Merike Kosesson - Tiit Niibek
	 * T: Kristiina - Illimar Sööt / oliver koel - peacecop kalmer:
	 */
	/*
	 * array (
	 * 'winner' => 'oliver koel - peacecop kalmer:',
	 * 'looser' => 'Merike Kosesson - Tiit Niibek'
	 * ),
	 * array (
	 * 'winner' => 'Merike Kosesson - Tiit Niibek',
	 * 'looser' => 'Kristiina - Illimar Sööt'
	 * ),
	 * array (
	 * 'winner' => 'oliver koel - peacecop kalmer:',
	 * 'looser' => 'Kristiina - Illimar Sööt'
	 * ),
	 */
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
	// HaValPaTeK 2018
	/*
	 * D: eerik - georg kangur / Relika Aruoja Aruoja - Siim Simson
	 * D: Erik - georg kangur / Kaie Kree - peacecop kalmer:
	 * D: Erik - georg / Indrek Jakobson - kalmer:
	 * D: georg kangur - Indrek Jakobson / kalmer
	 */
// 	array (
// 		'winner' => 'Illimar Sööt - peacecop kalmer:',
// 		'looser' => 'Erik - georg kangur'
// 	),
// 	array (
// 		'winner' => 'Erik - georg kangur',
// 		'looser' => 'Relika Aruoja Aruoja - Siim Simson'
// 	),
// 	array (
// 		'winner' => 'Kaie Kree - peacecop kalmer:',
// 		'looser' => 'Erik - georg kangur'
// 	),
// 	array (
// 		'winner' => 'Indrek Jakobson / peacecop kalmer:',
// 		'looser' => 'Erik - georg kangur'
// 	)
);

$mergeSortChart = new MergeSortChart ();
$mergeSortChart->manageResults ( array (
	'matches' => $matches
) );

