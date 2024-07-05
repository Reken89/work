<?php

namespace App\Structure\TaskSection\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\TaskSection\Requests\TaskAddRequest;

class TaskAddDto extends BaseDto
{
    public string    $status;
    public string    $date;
    public string    $dedline;
    public string    $content;
    public string    $title;

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
            'dedline' => $request->get('dedline'),
            'content' => $request->get('content'),
            'title'   => $request->get('title'),
        ]);
    }
}

