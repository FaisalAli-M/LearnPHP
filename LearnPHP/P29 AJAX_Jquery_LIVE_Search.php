<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jquary and PHP , AJAX Live Search</title>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        #search {width: 400px ; padding: 10px ; display: block ; border-radius: 3px ; border: 1px solid silver ; margin: auto}
        #result {width: 400px ; padding: 10px ; margin: 0 auto ; border: 1px solid silver ; display: none}
    
    </style>
</head>
<body>
<h4>Search using $.post function and new PHP method Patter and using Include function also</h4>
    <form method="post" action="#">
    <input type="text" placeholder="Search" id="search" >
   </form>
</div>
     <ul id="result" ></ul>
</div>
    
    <script>
    $(document).ready(function()
    {
        $('#search').keyup(function(){
           var text = $(this).val();
            if(text != "")
                {
            $.post("P29 AJAX_Jquery_LIVE_Search(php).php",{name:text},function(data){
                $("#result").css({'display':'block'});
                $("#result").html(data);
                
            });
                }
            else{
                $("#result").css({'display':'none'});
                 $("#result").html('');
            }
        });
        
    });
    </script>
</body>
</html>
