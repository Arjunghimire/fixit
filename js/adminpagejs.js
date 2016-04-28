$(document).ready(function(e) {
    $("#change").click(function(e) {
		var status=$("input[type='radio']:checked").val();
		var hidden_id=$('#hidden_id').val();
		var change=$("#change").val();
		$.post('reg_status.php',{status:status,change:change,hidden_id:hidden_id},function(data){
		  $("#display_status_not").html(data);
		  window.open("registration.php","_self");
		  
			});		
	   });
	   
	   	   
    
	   
	   
	   
     $("#message").click(function(e) {	
				  var description=$("#description").val();
			 	  var select=$("select").val();
			 	  var message=$("#message").val();
			     if(select=="" ||description=="")
				  {
					 $(".notify_me").html("<h4>Please check again,something is missing in the form !!!</h4>");
					 
				  }
				  else
				  {
     $.post("admin_msg_insert.php",{description:description,select:select,message:message},function(data){
					      $(".notify_me").html(data);
					  window.open("admin_reply.php","_self");
						});  
				  }
			

});
});