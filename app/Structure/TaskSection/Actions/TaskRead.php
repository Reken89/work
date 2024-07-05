<?php

namespace App\Structure\TaskSection\Actions;

use App\Structure\TaskSection\Models\Task;

class TaskRead
{
    /**
     * Возвращает таблицу tasks
     *
     * @param 
     * @return
     */
    public function SelectAllTasks()
    {       
        $result = Task::select()                
            ->get()
            ->toArray();
        
        return $result;
    }
} 
