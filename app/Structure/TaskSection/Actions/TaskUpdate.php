<?php

namespace App\Structure\TaskSection\Actions;

use App\Structure\TaskSection\Dto\TaskUpdateDto;
use App\Structure\TaskSection\Models\Task;

class TaskUpdate
{
    /**
     * Обновляем запись в таблице tasks
     *
     * @param TaskUpdateDto $dto
     * @return bool
     */
    public function Update(TaskUpdateDto $dto): bool
    {   
        $result = Task::find($dto->id)
            ->update([                
                'content' => $dto->content,
                'title'   => $dto->title,
                'date'    => $dto->date,
                'dedline' => $dto->dedline,
                'status'  => $dto->status,
            ]);
        
        return $result == true ? true : false;
    }
}
