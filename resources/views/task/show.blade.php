@php
    //Вспомогательный массив
    //Для корректного вывода информации из таблицы
    $status = [
        "work"      => "В работе",
        "completed" => "Завершена",
        "important" => "Важно",
    ];
@endphp

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Список заданий</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
    
   <!-- ======= All CSS Plugins here ======== -->
   <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/plugins/glightbox.min.css') }}">
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&display=swap" rel="stylesheet">
 
   <!-- Plugin css -->
   <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
 
   <!-- Custom Style CSS -->
   <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
</head>

<body>
    
    <!-- Start header area -->
    <header class="header__section">
        <div class="header__topbar border-bottom">
            <div class="container">
                <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                    <ul class="header__topbar--info d-none d-lg-flex">
                        <li class="header__info--list">
                            <a class="header__info--link" href="#">ГЛАВНАЯ</a>
                        </li>
                    </ul>
                    <div class="header__top--right d-flex align-items-center">
                        <ul class="header__top--link d-flex align-items-center">
                            <li class="header__link--menu"><a class="header__link--menu__text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> Таблица</a>
                            </li>
                       
                        </ul>
          
                    </div>
                </div>
            </div>
        </div>
        <div class="main__header header__sticky">
            <div class="container">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        
                    </div>
                    <div class="main__logo">
                        <h2 class="main__logo--title"><a>Список заданий</a></h2>
                    </div>                                                          
                </div>
            </div>
        </div>
        
                   
    </header>
    <!-- End header area -->

    <main class="main__content_wrapper">

        
        <!-- my account section start -->
        <section class="my__account--section section--padding">
            
                <form action="/work/public/filter" method="get"> 
                
                <section class="shipping__section">
            <div class="container">
                <p>Список фильтров:</p>
                    <b><u>Дата "начало"</u></b> - Выбрать документы начиная с даты</br>
                    <b><u>Дата "конец"</u></b> - Выбрать документу по дату</br>
                    <b><u>Статус</u></b> - Выбрать статус задания
                </p>
                <div class="shipping__inner style2 d-flex">
                    <div class="shipping__items style2 d-flex align-items-center">                       
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Дата "начало"</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">                               
                                <li class="widget__form--check__list">
                                    <input type="date" value="2024-01-01" id="date" name="datestart" class="date"/>
                                </li>
                            </ul>
                            </div>    
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">                       
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Дата "конец"</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">                               
                                <li class="widget__form--check__list">
                                    <input type="date" value="2024-12-31" id="date" name="datestop" class="date"/>
                                </li>
                            </ul>
                            </div>    
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">                       
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Статус</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">                               
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check1">В работе</label>
                                    <input class="widget__form--check__input" name="status[]" value="work" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check2">Завершена</label>
                                    <input class="widget__form--check__input" name="status[]" value="completed" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check3">Важно</label>
                                    <input class="widget__form--check__input" name="status[]" value="important" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>                              
                            </ul>
                            </div>    
                        </div>
                    </div>
                                                                                               
                    
                </div>
                <div class="shipping__items style2 d-flex align-items-center">                        
                    <div class="shipping__content">                           
                        <button style="width:200px;height:50px" class="primary__btn price__filter--btn" type="submit">Фильтр</button>
                        </br>
                        </form>    
                        <br>
                    </div>
                </div>
                
                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__wrapper">
                        <div class="account__content">
                            <p><u>Таблица</u></p>
                           
                            <div class="account__table--area">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 150px; width: 150px;" bgcolor="#66CDAA">Заголовок</th>  
                                            <th style="min-width: 200px; width: 200px;" bgcolor="#66CDAA">Содержание</th>  
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Дата</th>
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Dedline</th>  
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Статус</th> 
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Добавить/Изменить</th> 
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Удалить</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form action="/work/public/add" method="post">
                                        @csrf    
                                        <tr>   
                                            <td class="col-id-no" scope="row"><textarea rows='3' cols='20' type=text name="title" class="content">Заголовок</textarea></td> 
                                            <td class="col-id-no" scope="row"><textarea rows='3' cols='20' type=text name="content" class="content">Содержание</textarea></td> 
                                            <td>
                                                <input type="date" value="<?php echo date('Y-m-d'); ?>" id="date" name="date" class="date"/>
                                            </td>
                                            <td>
                                                <input type="date" value="<?php echo date('Y-m-d'); ?>" id="dedline" name="dedline" class="date"/>
                                            </td>
                                            <td>
                                                <select id="status" style="min-width: 130px; width: 130px;" name="status" class="status">
                                                    <option selected value="work">В работе</option>
                                                    <option value="work">В работе</option>
                                                    <option value="completed">Завершена</option>
                                                    <option value="important">Важно</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button style="width:200px;height:50px" class="primary__btn price__filter--btn" type="submit">Добавить</button>
                                            </td>
                                        </tr>
                                        </form>
                                        @foreach ($info as $value) 
                                            <tr>
                                                <form action="/work/public/update" method="post">
                                                    @csrf
                                                    @method('patch')
                                                    <input type="hidden" name="id" value="{{ $value['id'] }}">
                                                    <td class="col-id-no" scope="row"><textarea rows='3' cols='20' type=text name="title" class="title">{{ $value['title'] }}</textarea></td>
                                                    <td class="col-id-no" scope="row"><textarea rows='3' cols='20' type=text name="content" class="content">{{ $value['content'] }}</textarea></td>
                                                    <td><input type="date" value="{{ $value['date'] }}" id="date" name="date" class="date"/></td>
                                                    <td><input type="date" value="{{ $value['dedline'] }}" id="dedline" name="dedline" class="dedline"/></td>
                                                    <td>   
                                                        <select id="fruits" style="min-width: 200px; width: 200px;" name="status" class="correspondent">
                                                            <option selected value="{{ $value['status'] }}">{{ $status[$value['status']] }}</option>
                                                            <option value="work">В работе</option>
                                                            <option value="completed">Завершена</option>
                                                            <option value="important">Важно</option>
                                                        </select>
                                                    </td>
                                                    <td><button style="width:200px;height:50px" class="primary__btn price__filter--btn" type="submit">Изменить</button></td>
                                                </form>
                                                <form action="/work/public/delete" method="post">
                                                    @csrf 
                                                    @method('delete')
                                                    <input type="hidden" name="id" value="{{ $value['id'] }}">
                                                    <td><button style="width:200px;height:50px" class="primary__btn price__filter--btn" type="submit">Удалить</button></td>
                                                </form>
                                            </tr>
                                        @endforeach    
                                    </tbody>
                                </table>
                                
                                </br>
                                <p><b>*Для информации:</b> Тестовое задание...</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>                   
        </section>
        
                      
                
            
        </section>
        <!-- my account section end -->

     

    </main>

    <!-- Start footer section -->
    <footer class="footer__section footer__bg">
        <div class="container">
            <div class="newsletter__area">
                <div class="newsletter__inner d-flex justify-content-between align-items-center">
                    <div class="newsletter__content">
                        <h2 class="newsletter__title">WEB приложение <span class="text__secondary">Laravel</span></h2>
                        <p class="newsletter__desc">Разработано для автоматизации вычислительных процессов</p>
                    </div>
                    
                </div>
            </div>
            <div class="main__footer">
                <div class="row ">
                    <div class="col-lg-4 col-md-10">
                        <div class="footer__widget">
                            <h2 class="footer__widget--title">Ссылки <button class="footer__widget--button" aria-label="footer widget button"></button>
                                <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                    <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </h2>
                            <ul class="footer__widget--menu footer__widget--inner">
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="footer__bottom--inenr d-flex justify-content-between align-items-center">                    
                    <p class="copyright__content"><span class="text__secondary">© 2024</span> Тестовое задание...</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer section -->

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>

<!-- All Script JS Plugins here  -->
<script src="{{ asset('assets/js/vendor/popper.js') }}" defer="defer"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}" defer="defer"></script>
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/glightbox.min.js') }}"></script>

<!-- Customscript js -->
<script src="{{ asset('assets/js/script.js') }}"></script>
  
</body>
</html>








