<?php

namespace App\Structure\TaskSection\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\TaskSection\Actions\TaskRead;
use App\Structure\TaskSection\Actions\TaskAdd;
use App\Structure\TaskSection\Actions\TaskDelete;
use App\Structure\TaskSection\Actions\TaskUpdate;
use App\Structure\TaskSection\Actions\TaskFilterRead;
use App\Structure\TaskSection\Requests\TaskAddRequest;
use App\Structure\TaskSection\Requests\TaskDeleteRequest;
use App\Structure\TaskSection\Requests\TaskUpdateRequest;
use App\Structure\TaskSection\Requests\TaskFilterRequest;
use App\Structure\TaskSection\Dto\TaskAddDto;
use App\Structure\TaskSection\Dto\TaskDeleteDto;
use App\Structure\TaskSection\Dto\TaskUpdateDto;
use App\Structure\TaskSection\Dto\TaskFilterDto;

class TaskController extends Controller
{   
    /**
     * Получаем все задачи из таблицы tasks
     *
     * @param 
     * @return json
     */
    public function ReadTasks()
    {
        $result = $this->action(TaskRead::class)->SelectAllTasks();   
        return  response()->json($result);
    }
    
    /**
     * Добавляем запись в таблицу tasks
     *
     * @param TaskAddRequest $request
     * @return bool
     */
    public function AddTask(TaskAddRequest $request)
    {
        $dto = TaskAddDto::fromRequest($request);
        $result = $this->action(TaskAdd::class)->TaskAdd($dto);
        return $result;
              
    }
    
    /**
     * Удаляем запись в таблице tasks
     *
     * @param TaskDeleteRequest $request
     * @return bool
     */
    public function DeleteTask(TaskDeleteRequest $request)
    {       
        $dto = TaskDeleteDto::fromRequest($request);
        $result = $this->action(TaskDelete::class)->Delete($dto);
        return $result;        
    }
    
    /**
     * Обновляем запись в таблице tasks
     *
     * @param TaskUpdateRequest $request
     * @return bool
     */
    public function UpdateTask(TaskUpdateRequest $request)
    {       
        $dto = TaskUpdateDto::fromRequest($request);
        $result = $this->action(TaskUpdate::class)->Update($dto);
        return $result;  
    }
    
    /**
     * Получаем информацию из таблицы tasks
     * Применяя необходимые фильтры (date и status)
     *
     * @param TaskFilterRequest $request
     * @return
     */
    public function FilterTask(TaskFilterRequest $request)
    {   
        $dto = TaskFilterDto::fromRequest($request);
        $info = $this->action(TaskFilterRead::class)->SelectTasks($dto);
        return view('task.show', ['info' => $info]); 
             
    }
    
}



