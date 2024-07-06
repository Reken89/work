<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<div id="live_data"></div>

<script>
    $(document).ready(function(){
               
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){  
            $.ajax({  
                url:"/work/public/tasks/back",  
                method:"GET",
                dataType:"text",
                success:function(data){  
                    $('#live_data').html(data);  
                    setKeydownmyForm()
                }   
            });  
        } 
        fetch_data();
        
        //Выполняем действие (добавляем задание) при нажатии на кнопку
        $(document).on('click', '#add_task', function(){
                       
            var tr = this.closest('tr');
            var status = $('.status', tr).val();
            var title = $('.title', tr).val();
            var content = $('.content', tr).val();
            var date = $('.date', tr).val();
            var dedline = $('.dedline', tr).val();
                       
            $.ajax({
                url:"/work/public/add",  
                method:"post",
                data:{
                    "_token": "{{ csrf_token() }}",
                    title, content, date, dedline, status
                },
                dataType:"text",  
                success:function(data){  
                    fetch_data();  
                } 
            })               
        })
        
        //Выполняем действие (обновляем задание) при нажатии на кнопку
        $(document).on('click', '#update', function(){
                       
            var tr = this.closest('tr');
            var id = $('.id', tr).val();
            var status = $('.status', tr).val();
            var title = $('.title', tr).val();
            var content = $('.content', tr).val();
            var date = $('.date', tr).val();
            var dedline = $('.dedline', tr).val();
                       
            $.ajax({
                url:"/work/public/update",  
                method:"patch",
                data:{
                    "_token": "{{ csrf_token() }}",
                    id, title, content, date, dedline, status
                },
                dataType:"text",  
                success:function(data){  
                    fetch_data();  
                } 
            })               
        })
        
        //Выполняем действие (удаляем задание) при нажатии на кнопку
        $(document).on('click', '#delete', function(){
                       
            var tr = this.closest('tr');
            var id = $('.id', tr).val();
                       
            $.ajax({
                url:"/work/public/delete",  
                method:"delete",
                data:{
                    "_token": "{{ csrf_token() }}",
                    id
                },
                dataType:"text",  
                success:function(data){  
                    fetch_data();  
                } 
            })               
        })
        
    });
</script>
