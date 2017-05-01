<?php
namespace iMi\RoboMagerun\Task\Magerun;

trait loadTasks
{
    /**
     * @param string $pathToMagerun
     *
     * @return \iMi\RoboPack\Magerun\Stack
     */
    protected function taskMagerunStack($pathToMagerun= 'n98-magerun')
    {
        return $this->task(Stack::class, $pathToMagerun);
    }
}
