<?php

namespace App\Structure\TaskSection\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\TaskSection\Requests\TaskFilterRequest;

class TaskFilterDto extends BaseDto
{
    public string   $datestart;
    public string   $datestop;
    public array    $status;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param TaskFilterRequest $request
     * @return static
     */
    public static function fromRequest(TaskFilterRequest $request): self
    {
        return new self([
            'datestart' => $request->get('datestart'),
            'datestop'  => $request->get('datestop'),
            'status'    => $request->get('status'),
        ]);
    }
}

