<?php
namespace iMi\RoboRun\Task\MagerunTwo;

/**
 * Runs Magerun commands  and obtains the result
 */
class ExecWithResult extends Stack
{
	public function execAndGetResult($parameters)
	{
		exec($this->executable . ' ' . $parameters, $result);
		return $result;
	}

	/**
	 * Pass format=json, execute and get decoded json result,
	 * @param $parameters
	 *
	 * @return string
	 */
	public function execAndGetJson($parameters)
	{
		exec($this->executable . ' --format=json ' . $parameters, $result);
		$result = json_decode(implode(PHP_EOL, $result));
		return $result;
	}

	/**
	 * Get the currently configured base URL
	 * @return string
	 */
	public function getCurrentBaseUrl()
	{
		$configData = $this->execAndGetJson("config:store:get --scope-id=0 --scope=default -- 'web/unsecure/base_url'");
		return (string) $configData->{0}->Value;
	}
}
