<?php
namespace iMi\RoboRun\Task\MagerunTwo;

trait loadTasks
{
    /**
     * @param string $pathToMagerun
     *
     * @return \iMi\RoboPack\MagerunTwo\Stack
     */
    protected function taskMagerunTwoStack($pathToMagerun= 'n98-magerun2')
    {
        return $this->task(Stack::class, $pathToMagerun);
    }

    protected function taskMagerunTwoExecWithResult($pathToMagerun= 'n98-magerun2')
    {
        return $this->task(ExecWithResult::class, $pathToMagerun);
    }
}
