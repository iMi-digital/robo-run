<?php
namespace iMi\RoboRun\Task\Magerun;

trait loadShortcuts
{
    /**
     * @param string $url
     *
     * @return \Robo\Result
     */
    protected function _magerun($action)
    {
        return $this->taskMagerunStack()->exec($action)->run();
    }
}
