//   function social() {
//     $("#twitter1").html("");
//     $("#instagram").html("");
//     $("#youtube").html("");
//     $("#address").html("");
//     $("#email").html("");
//     $("#phone").html("");
//     $("#phone1").html("");
//     $("#email1").html("");
//     $("#address1").html("");
//       $.ajax({
//      type: "GET",
//      url: '/api/contacts',
//      data: "check",
//      success: function(response){
//         var contacts=response.data;
//         console.log(contacts);

// for (var i = contacts.length - 1; i >= 0; i--) {
//   if (contacts[i].type=='phone') {
//     $("#phone").html('  <i class="fas mr-1 fa-phone"></i>'+contacts[i].data);

//   }
//   else if (contacts[i].type=='facebook') {
// $("#facebook").html('  <i class="fas mr-1 fa-facebook"></i>'+contacts[i].data);    
//   }

//     else if (contacts[i].type=='twitter') {
// $("#twitter").html('  <i class="fas mr-1 fa-twitter"></i>'+contacts[i].data);    
//   }
// }


//555555555555555555555555555555555555555555555555555555555555555555555
        // $("#facebook").attr("href","http://"+contact.facebook);
        // $("#twitter").attr("href","http://"+ contact.twitter);
        // $("#twitter1").html('<p id="twitter1"><span class="fab fa-twitter"></span>'+contact.twitter+'</p>');
        // $("#instagram").html('<p><span class="fab fa-instagram"></span>'+contact.instagram+'</p>');

        // $("#youtube").html('<p><span class="fab fa-youtube mb-5"></span>'+contact.youtube+'</p>');

        // $("#address").html(' <i class="fas fa-map-marker-alt"></i>'+contact.address);

        // $("#email").html('<i class="far mr-1 fa-envelope-open"></i> <a href="mailto:'+contact.email+'">'+contact.email+'</a>');

        // $("#phone").html('  <i class="fas mr-1 fa-phone"></i>'+contact.phone);

        // $("#phone1").html('<p style="font-size: 14px;" id="phone1">'+contact.phone+'</p>');

        // $("#email1").html('Email :<a href="mailto:'+contact.email+'">'+contact.email+'</a>');

        // $("#address1").html('<p style="font-size: 14px;" id="address1">'+contact.address+'</p>');


        


       


     }
});
  }