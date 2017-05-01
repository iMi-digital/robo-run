<?php
namespace iMi\RoboMagerun\Task\Magerun;

trait loadShortcuts
{
    /**
     * @param string $url
     *
     * @return \Robo\Result
     */
    protected function _magerun($action)
    {
        return $this->taskMagerun()->exec($action)->run();
    }
}
