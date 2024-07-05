<?php

namespace App\Structure\TaskSection\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\TaskSection\Requests\TaskUpdateRequest;

class TaskUpdateDto extends BaseDto
{
    public int       $id;
    public string    $status;
    public string    $date;
    public string    $dedline;
    public string    $content;
    public string    $title;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param TaskUpdateRequest $request
     * @return static
     */
    public static function fromRequest(TaskUpdateRequest $request): self
    {
        return new self([
            'id'      => $request->get('id'),
            'status'  => $request->get('status'),
            'date'    => $request->get('date'),
            'dedline' => $request->get('dedline'),
            'content' => $request->get('content'),
            'title'   => $request->get('title'),
        ]);
    }
}

