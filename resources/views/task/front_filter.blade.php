<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<div id="live_data"></div>

<script>
    $(document).ready(function(){
               
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){  
            $.ajax({  
                url:"/work/public/choice/back",  
                method:"GET",
                dataType:"text",
                success:function(data){  
                    $('#live_data').html(data);  
                }   
            });  
        } 
        fetch_data();
        
        //Выполняем действие (применяем фильтры) при нажатии на кнопку
        $(document).on('click', '#apply', function(){
            let info = $('#filter').serializeArray();

            let datestart_many = [];
            let datestop_many = [];
            let status = [];
        
            for (const item of info) {
                const value = item.value;
                if (item.name === 'datestart') {
                    datestart_many.push(value);
                } else if (item.name === 'datestop') {
                    datestop_many.push(value);
                } else if (item.name === 'status') {
                    status.push(value);
                }
            }     
            
            var datestart = datestart_many[0];
            var datestop = datestop_many[0];
                
            $.ajax({
                url:"/work/public/filter",  
                method:"get",
                data:{
                    datestart, datestop, status
                },
                dataType:"text",  
                success:function(data){ 
                    $('#live_data').html(data);  
                } 
            })               
        })
               
    });
</script>

