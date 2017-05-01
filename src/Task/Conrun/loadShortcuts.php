<?php
namespace iMi\RoboRun\Task\Conrun;

trait loadShortcuts
{
    /**
     * @param string $url
     *
     * @return \Robo\Result
     */
    protected function _conrun($action)
    {
        return $this->taskConrunStack()->exec($action)->run();
    }
}
