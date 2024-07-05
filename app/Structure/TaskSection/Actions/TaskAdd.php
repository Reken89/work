<?php

namespace App\Structure\TaskSection\Actions;

use App\Structure\TaskSection\Dto\TaskAddDto;
use App\Structure\TaskSection\Models\Task;

class TaskAdd
{
    /**
     * Добавляем запись в таблицу tasks
     *
     * @param TaskAddDto $dto
     * @return bool
     */
    public function TaskAdd(TaskAddDto $dto): bool
    {   
        $result = Task::create([
            'date'    => $dto->date,
            'content' => $dto->content,
            'status'  => $dto->status,
        ]);
        return $result == true ? true : false;
    }
}
