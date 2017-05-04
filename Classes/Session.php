<?php
/**
 * This class manages Sessions
 *
 * Created by PhpStorm.
 * User: Md Apu
 * Date: 5/3/2017
 * Time: 2:52 AM
 */

class Session {
	
	/**
	 * [checks a session has been set(exists) or nto]
	 * @param  [string] $name [session name]
	 * @return boolean|string       [if set then true or false]
	 */
	public static function exists($name) {
		
		return isset($_SESSION[$name]) ? true : false;
	}
	
	
	/**
	 * [sets session]
	 * @param  [string] $name  [name of the session]
	 * @param  [any] $value [the value to set on the session]
	 * @return string        [true on success or false]
	 */
	public static function put($name, $value) {
		
		return $_SESSION[$name] = $value ?? false;
	}
	
	
	/**
	 * [gets a session]
	 * @param  [string] $name [name of the session]
	 * @return string|bool       [anything in the session value]
	 */
	public static function get($name) {
		
		if (self::exists($name)) {
			
			return $_SESSION[$name];
		}
		
		return false;
	}
	
	
	/**
	 * [delete's a session]
	 * @param  [string] $name [name of the session]
	 * @return boolean|''   [none or false if failed/session didn't exists]
	 */
	public static function delete($name) {
		
		if (self::exists($name)) {
			
			unset($_SESSION[$name]);
		}
		
		return false;
	}
	
	
	/**
	 * [if a session is set then returns it then unset's it & if not set then sets it]
	 * @param  [string] $name   [session name]
	 * @param  string $string [message]
	 * @return string:bool
	 */
	public static function flash($name, $string='') {
		
		if (self::exists($name)) {
			
			$session = self::get($name);
			self::delete($name);
			return $session;
			//
		} else {
			self::put($name, $string);
			
			return true;
		}
	}
}
