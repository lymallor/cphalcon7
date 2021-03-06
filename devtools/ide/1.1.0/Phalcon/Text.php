<?php 

namespace Phalcon {

	/**
	 * Phalcon\Text
	 *
	 * Provides utilities to work with texts
	 */
	
	abstract class Text {

		const RANDOM_ALNUM = 0;

		const RANDOM_ALPHA = 1;

		const RANDOM_HEXDEC = 2;

		const RANDOM_NUMERIC = 3;

		const RANDOM_NOZERO = 4;

		/**
		 * Converts strings to camelize style
		 *
		 *<code>
		 *	echo \Phalcon\Text::camelize('coco_bongo'); //CocoBongo
		 *</code>
		 *
		 * @param string $str
		 * @return string
		 */
		public static function camelize($str){ }


		/**
		 * Uncamelize strings which are camelized
		 *
		 *<code>
		 *	echo \Phalcon\Text::uncamelize('CocoBongo'); //coco_bongo
		 *</code>
		 *
		 * @param string $str
		 * @return string
		 */
		public static function uncamelize($str){ }


		/**
		 * Adds a number to a string or increment that number if it already is defined
		 *
		 *<code>
		 *	echo \Phalcon\Text::increment("a"); // "a_1"
		 *	echo \Phalcon\Text::increment("a_1"); // "a_2"
		 *</code>
		 *
		 * @param string $str
		 * @param string $separator
		 * @return string
		 */
		public static function increment($str, $separator=null){ }


		/**
		 * Generates a random string based on the given type. Type is one of the RANDOM_* constants
		 *
		 *<code>
		 *	echo \Phalcon\Text::random(Phalcon\Text::RANDOM_ALNUM); //"aloiwkqz"
		 *</code>
		 *
		 * @param int $type
		 * @param int $length
		 * @return string
		 */
		public static function random($type, $length=null){ }


		/**
		 * Check if a string starts with a given string
		 *
		 *<code>
		 *	echo \Phalcon\Text::startsWith("Hello", "He"); // true
		 *	echo \Phalcon\Text::startsWith("Hello", "he"); // false
		 *	echo \Phalcon\Text::startsWith("Hello", "he", false); // true
		 *</code>
		 *
		 * @param string $str
		 * @param string $start
		 * @param boolean $ignoreCase
		 * @return boolean
		 */
		public static function startsWith($str, $start, $ignoreCase=null){ }


		/**
		 * Check if a string ends with a given string
		 *
		 *<code>
		 *	echo \Phalcon\Text::endsWith("Hello", "llo"); // true
		 *	echo \Phalcon\Text::endsWith("Hello", "LLO"); // false
		 *	echo \Phalcon\Text::endsWith("Hello", "LLO", false); // true
		 *</code>
		 *
		 * @param string $str
		 * @param string $end
		 * @param boolean $ignoreCase
		 * @return boolean
		 */
		public static function endsWith($str, $end, $ignoreCase=null){ }


		/**
		 * Lowercases a string, this function makes use of the mbstring extension if available
		 *
		 * @param string $str
		 * @return string
		 */
		public static function lower($str){ }


		/**
		 * Uppercases a string, this function makes use of the mbstring extension if available
		 *
		 * @param string $str
		 * @return string
		 */
		public static function upper($str){ }


		/**
		 * Returns human readable sizes
		 *
		 * @param int $size
		 * @param string $forceUnit
		 * @param string $format
		 * @param boolean $si
		 * @return string
		 */
		public static function bytes($size, $forceUnit=null, $format=null, $si=null){ }


		/**
		 * Reduces multiple slashes in a string to single slashes
		 *
		 * <code>
		 *    echo \Phalcon\Text::reduceSlashes("foo//bar/baz"); // foo/bar/baz
		 *    echo \Phalcon\Text::reduceSlashes("http://foo.bar///baz/buz"); // http://foo.bar/baz/buz
		 * </code>
		 */
		public static function reduceSlashes($str){ }


		/**
		 * Concatenates strings using the separator only once without duplication in places concatenation
		 *
		 * <code>
		 *    $str = \Phalcon\Text::concat("/", "/tmp/", "/folder_1/", "/folder_2", "folder_3/");
		 *    echo $str; // /tmp/folder_1/folder_2/folder_3/
		 * </code>
		 *
		 * @param string separator
		 * @param string a
		 * @param string b
		 * @param string ...N
		 */
		public static function concat($separator, $strA, $strB){ }

	}
}
