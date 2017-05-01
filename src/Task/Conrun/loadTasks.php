<?php
namespace iMi\RoboRun\Task\Conrun;

trait loadTasks
{
    /**
     * @param string $pathToConrun
     *
     * @return \iMi\RoboRun\Task\Conrun\Stack
     */
    protected function taskConrunStack($pathToConrun = null)
    {
        return $this->task(Stack::class, $pathToConrun);
    }
}
