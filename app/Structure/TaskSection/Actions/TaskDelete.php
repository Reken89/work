<?php

namespace App\Structure\TaskSection\Actions;

use App\Structure\TaskSection\Dto\TaskDeleteDto;
use App\Structure\TaskSection\Models\Task;

class TaskDelete
{
    /**
     * Удаляем запись в таблице tasks
     *
     * @param TaskDeleteDto $dto
     * @return bool
     */
    public function Delete(TaskDeleteDto $dto): bool
    {   
        $delete = Task::where('id', $dto->id)
            ->delete();  
        
        return $delete == true ? true : false;
    }
}

