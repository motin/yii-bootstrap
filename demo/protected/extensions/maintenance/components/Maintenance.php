<?php
/**
 * Maintenance class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2012-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

class Maintenance extends CBehavior
{
	/**
	 * @var string the maintenance route.
	 */
	public $route;
	/**
	 * @var boolean whether maintenance is enabled.
	 */
	public $enabled = false;

	/**
     * Declares events and the corresponding event handler methods.
     * @return array events (array keys) and the corresponding event handler methods (array values).
     */
	public function events()
	{
		return array(
			'onBeginRequest'=>'beginRequest',
		);
	}

	/**
	 * Actions to take before doing the request.
	 */
	public function beginRequest()
	{
		if (isset($this->route) && $this->enabled)
			$this->owner->catchAllRequest = $this->route;
	}
}
