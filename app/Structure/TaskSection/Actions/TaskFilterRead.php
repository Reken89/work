<?php

namespace App\Structure\TaskSection\Actions;

use App\Structure\TaskSection\Dto\TaskFilterDto;
use App\Structure\TaskSection\Models\Task;

class TaskFilterRead
{
    /**
     * Возвращает таблицу tasks
     * По заданным параметрам
     *
     * @param TaskFilterDto $dto
     * @return
     */
    public function SelectTasks(TaskFilterDto $dto)
    {       
        $result = Task::select() 
            ->whereDate('date', '>=', $dto->datestart)
            ->whereDate('date', '<=', $dto->datestop) 
            ->whereIn('status', $dto->status)
            ->get()
            ->toArray();
        
        return $result;
    }
} 

