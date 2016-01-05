<?php

/**
 * Stringler version 1.0, simple string checks
 * @author Ricardo Hoek
 * 05-01-2016
 */

class Stringler
{
	private $_string = ""; // saved string from construct or function
	
    /**
     * __construct
     *
     * __construct function to save a string to check for multiple things
     *
     * @access public
     * @param  string $string the saved string
     */
	public function __construct($string = ""){
		$this->_string = $string;
	}
	
	/**
     * Fill String
     *
     * Fill string function to see whether there is a new string and save it
     *
     * @access private
     * @param  string newly input string
	 * @return string new saved string
     */
	private function fillString($string) {
		if($string != '') {
			$this->_string = $string;
		}
		return $this->_string;
	}
	
	/**
     * Starts With
     *
     * Starts with function to check whether a string starts with another string
     *
     * @access public
     * @param  string $startsWith string to see whether it starts with this string
	 * @param  string $string to check with this, or the saved string
	 * @return boolean if it starts with the string or not
     */
	public function startsWith($startsWith, $string = "") 
	{
		return substr(self::fillString($string), 0, strlen($startsWith)) == $startsWith;
	}
	
	/**
     * Ends With
     *
     * Ends with function to check whether a string ends with another string
     *
     * @access public
     * @param  string $endsWith string to see whether it ends with this string
	 * @param  string $string to check with this, or the saved string
	 * @return boolean if it ends with the string or not
     */
	public function endsWith($endsWith, $string = "") 
	{
		return substr(self::fillString($string), 0 - strlen($endsWith)) == $endsWith;
	}
	
	/**
     * Contains
     *
     * Contains function to check whether a string contains another string
     *
     * @access public
     * @param  string $endsWith string to see whether it contains this string
	 * @param  string $string to check with this, or the saved string
	 * @return boolean if it contains the string or not
     */
	public function contains($contains, $string = "") 
	{
		return strpos(self::fillString($string), $contains) !== false;
	}
	
	/**
     * Regex
     *
     * Regex function to check whether a string complies to a certain regular expression
     *
     * @access public
     * @param  string $pattern pattern for the regular expression
	 * @param  string $string to check with this, or the saved string
	 * @return boolean if it complies to the regular expression
     */
	public function regex($pattern, $string = "") 
	{
		return preg_match($pattern, self::fillString($string));
	}
}
?>
