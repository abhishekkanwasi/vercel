
$(document).ready(function(){
    $( "#inbox_btn" ).trigger( "click" );
   $('#inbox_btn,#get_customer_btn,#information_btn').click(function(event){ 
       
        if($(event.target).attr('id')=='inbox_btn'){
             $('#inbox_btn').css('backgroundColor','gray');
             $('#inbox_container').show();
             $('#get_customer_btn, #information_btn').css('backgroundColor','#007bff');
             $('#Get_Customer_container, #Information_container' ).hide();
         } 

          if($(event.target).attr('id')=='get_customer_btn'){
             $('#get_customer_btn').css('backgroundColor','gray');
             $('#Get_Customer_container').show();
             $('#inbox_btn, #information_btn').css('backgroundColor','#007bff');
             $('#inbox_container, #Information_container' ).hide();
         } 

              if($(event.target).attr('id')=='information_btn'){
             $('#information_btn').css('backgroundColor','gray');
             $('#Information_container').show();
             $('#inbox_btn , #get_customer_btn').css('backgroundColor','#007bff');
             $('#inbox_container , #Get_Customer_container' ).hide();
         }    
         
    });
    
	
    
         $('#inbox_btn').on('click', function(event){  
                event.preventDefault(); 
                $('#inbox_container').html("<h3>Please wait.... </h3><span><IMG SRC='loadinggif.gif' style='height:50px;width:auto'></span>"); 
                $.ajax({  
                    url:"Inbox.php",
                    success:function(data){  
                     $('#inbox_container').html(data);   
                    }  
                });  
            }); 

          $('#get_customer_btn').on('click', function(event){  
                event.preventDefault(); 
                $('#Get_Customer_container').html("<h3>Please wait.... </h3><span><IMG SRC='loadinggif.gif' style='height:50px;width:auto'></span>");  
                $.ajax({  
                    url:"Get_customer.php",
                    success:function(data){  
                        $('#Get_Customer_container').html(data);   
                    }  
               });  
            });

         $('#information_btn').on('click', function(event){  
                event.preventDefault(); 
                 $('#Information_container').html("<h3>Please wait.... </h3><span><IMG SRC='loadinggif.gif' style='height:50px;width:auto'></span>"); 
                $.ajax({  
                    url:"Information.php",
                    success:function(data){   
                        $('#Information_container').html(data);   
                    }  
               });  
            });
                            
});
