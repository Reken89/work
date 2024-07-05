<?php

namespace App\Structure\TaskSection\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\TaskSection\Requests\TaskAddRequest;

class TaskAddDto extends BaseDto
{
    public string    $status;
    public string    $date;
    public string    $content;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param TaskAddRequest $request
     * @return static
     */
    public static function fromRequest(TaskAddRequest $request): self
    {
        return new self([
            'status'  => $request->get('status'),
            'date'    => $request->get('date'),
            'content' => $request->get('content'),
        ]);
    }
}

