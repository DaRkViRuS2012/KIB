$('select').on('change', function (e) {
 
});


function get_sub_service() {
	var service_id = $('#main_service').find(":selected").val();
	$('#sub_service').empty();
	var sub_services="";
	    $.ajax({
     type: "GET",
     url: '/api/service/sub/'+service_id,
     data: "check",
     success: function(response){
     	console.log(service_id);
        var sub_service=response.data;
        console.log(sub_service);
        sub_services+=' <option selected disabled value="0">Select Your Main Service</option>';
        for (var i = sub_service.length - 1; i >= 0; i--) {
        	sub_services+='<option value="'+sub_service[i].id+'">'+sub_service[i].en_title+'</option>';
        }

         $("#sub_service").append(sub_services);
     }
});
}



function get_options() {
	var service_id = $('#main_service').find(":selected").val();
	$('#sub_service').empty();
	var sub_services="";
	    $.ajax({
     type: "GET",
     url: '/api/service/sub/'+service_id,
     data: "check",
     success: function(response){
     	console.log(service_id);
        var sub_service=response.data;
        console.log(sub_service);
        sub_services+=' <option selected disabled value="0">Select Your Main Service</option>';
        for (var i = sub_service.length - 1; i >= 0; i--) {
        	sub_services+='<option value="'+sub_service[i].id+'">'+sub_service[i].en_title+'</option>';
        }

         $("#sub_service").append(sub_services);
     }
});
}