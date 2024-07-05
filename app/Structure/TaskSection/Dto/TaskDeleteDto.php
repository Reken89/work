<?php

namespace App\Structure\TaskSection\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\TaskSection\Requests\TaskDeleteRequest;

class TaskDeleteDto extends BaseDto
{
    public int $id;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param TaskDeleteRequest $request
     * @return static
     */
    public static function fromRequest(TaskDeleteRequest $request): self
    {
        return new self([
            'id'  => $request->get('id'),
        ]);
    }
}
