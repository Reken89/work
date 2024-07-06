<?php

namespace App\Structure\TaskSection\Controllers;

use App\Core\Controllers\Controller;


class TaskViewController extends Controller
{   
    /**
     * Возвращаем front шаблон
     *
     * @param 
     * @return view
     */
    public function ShowFront()
    {
        return view('task.front_show');      
    }
    
    /**
     * Возвращаем back шаблон
     *
     * @param 
     * @return view
     */
    public function ShowBack()
    {
        return view('task.back_show');  
    }  
    
    /**
     * Возвращаем front шаблон
     * Шаблон с фильтрами
     *
     * @param 
     * @return view
     */
    public function FilterFront()
    {
        return view('task.front_filter');      
    }
    
    /**
     * Возвращаем back шаблон
     * Шаблон с фильтрами
     *
     * @param 
     * @return view
     */
    public function FilterBack()
    {
        return view('task.back_filter');  
    }  
    
}





