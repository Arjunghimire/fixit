

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
});