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
		// setting the timestamp once the program starts
		$timestampOfStart = microtime ( true );
		// initializing the counter for the total number of matches played
		$totalNumberOfMatchesPlayed = 0;
		// for each match result
		foreach ( $parameters ['matches'] as $match ) {
			/*
			 * If there is an entry for the winner increment
			 * the number of matches played and wins
			 * otherwise create an entry for the winner.
			 */
			if (isset ( $this->results [$match ['winner']] )) {
				$this->results [$match ['winner']] ['numberOfMatchesPlayed'] ++;
				if (isset ( $this->results [$match ['winner']] ['numberOfWins'] )) {
					$this->results [$match ['winner']] ['numberOfWins'] ++;
				} else {
					$this->results [$match ['winner']] ['numberOfWins'] = 1;
				}
			} else {
				// set an entry for the winner
				$this->results [$match ['winner']] = array (
						'player' => $match ['winner'],
						'numberOfMatchesPlayed' => 1,
						'numberOfWins' => 1,
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
			if (isset ( $this->results [$match ['looser']] ['numberOfMatchesPlayed'] )) {
				$this->results [$match ['looser']] ['numberOfMatchesPlayed'] ++;
			} else {
				$this->results [$match ['looser']] ['numberOfMatchesPlayed'] = 1;
			}
			// insert the list of the winner to the winners' list of the looser
			$this->results [$match ['looser']] ['winners'] [$match ['winner']] = $this->results [$match ['winner']];

			// update loosers of the looser
			$this->updateLooser ( array (
					'looser' => $match ['looser']
			) );
			// incrementing the counter for the total number of matches played
			$totalNumberOfMatchesPlayed ++;
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
		echo "\nLevel\tPlayer\tNumber of matches played\tNumber of wins";
		// echo ' 340: <pre>';print_r($sortedResults); echo '</pre>';
		foreach ( $sortedResults as $player => $arrayOfPlayer ) {
			// @formatter:off
			echo sprintf(
				'%1$s%2$u%3$s%4$s%3$s%5$u%3$s%6$u',
				"\n", // 1
				$arrayOfPlayer['place'], // 2
				"\t", // 3
				$player, // 4
				$arrayOfPlayer['numberOfMatchesPlayed'], // 5
				isset($arrayOfPlayer['numberOfWins']) ? $arrayOfPlayer ['numberOfWins'] : 0 // 6
			);
			// @formatter:on
		}
		echo "\n";
		// foreach ( $this->results ['kersti oselin'] ['winners'] as $winner => $array ) {
		// print_r ( $winner );
		// }
		// @formatter:off
		// printing out the total number of matches
		echo sprintf(
			'%1$sAltogether %2$u matches have been played.%1$s',
			"\n", // 1
			$totalNumberOfMatchesPlayed // 2
		);
		// setting the timestamp for the program end and measuring running time
		echo sprintf(
			'%1$sCalculation took %2$f seconds.%1$s',
			"\n", // 1
			microtime(true) - $timestampOfStart // 2
		);
		// @formatter:on
		//echo date('Y-m-d H:i:s', 1418838999684/ 1000);
	}
}
