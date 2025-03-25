<?php
return [
	/**
	 * Generic values are filled when when neither package was able to guess out the value.
	 *
	 * @var array
	 */
	'generic'	=> [
		/**
		 * Generic operating system name.
		 *
		 * @var string
		 */
		'operatingsystem' 	=> 'manhdoan91 Generic OS',

		/**
		 * Generic browser family name.
		 *
		 * @var string
		 */
		'browser'			=> 'manhdoan91 Generic Browser',

		/**
		 * This agent will be used when the visitor does not sent User-Agent: header.
		 *
		 * @var string
		 */
		'agent'				=> 'manhdoan91Browser/1.0 (https://github.com/manhdoan91/browser-detect; manhdoan91r@gmail.com) GenericBrowser/1.0',
	],

	/**
	 * Result cache settings.
	 *
	 * @var array
	 */
	'cache'		=> [
		/**
		 * Cacheing interval for results in minutes.
		 * Browsers are updated very frequently now day,
		 * so you should not set a too long interval if you
		 * lack on memory or space where to cache the results.
		 *
		 * @var integer
		 */
		'interval'	=> 10080, // 7 days

		/**
		 * Prefix used in the cache since the script
		 * generates they keys by making an md5 hash
		 * of the user agent, with this can be sure
		 * to not to conflict with other entries.
		 *
		 * @var string
		 */
		'prefix'	=> 'hbd1',
	],
];
