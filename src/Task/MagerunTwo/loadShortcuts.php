<?php
namespace iMi\RoboRun\Task\MagerunTwo;

trait loadShortcuts
{
    /**
     * @param string $url
     *
     * @return \Robo\Result
     */
    protected function _magerunTwo($action)
    {
        return $this->taskMagerunTwo()->exec($action)->run();
    }
}
