
//var slider = document.getElementById("myRange");
//var output = document.getElementById("demo");
//output.innerHTML = slider.value; // Display the default slider value
//
//// Update the current slider value (each time you drag the slider handle)
//slider.oninput = function() {
//  output.innerHTML = this.value;
//}

function postToGoogle() {




    var field1 = $("#fname").val();
    var field2 = $("#lname").val();
    var field3 = $("#inputEmail").val();
    var field4 = $("#phone").val();
    var field5 = $("#description").val().trim();
     var field6 = $("#inputWho").val();
     var field7 = $("#inputWhat").val();
     var field8 = $("#inputWhere").val();
     var field9 = $("#inputLength").val();
       var content = " I am " + field6 + " Looking for " + field7 + " at  " + field8 + " for "  + field9 + " moredetails " + field5

// $.ajax({
//   type: "POST",
//   url: "send/email",
//   data: {email : field3},
//   cache: false,
//   success: function(data){
//      //$("#resultarea").text(data);
//   }
// });
    var send = {
        "async": true,
        "crossDomain": true,
        "url": "http://housemasters.mu/send/email",
        "method": "POST",
        "headers": {
            "Content-Type": "application/json",
            "Accept": "application/json"

        },


        "data": {name : field1 +" "+ field2, email: field3, msg: field5 },
    }
    
      $.ajax(send).done(function (response) {
        console.log(field3);
        if(response === true){
        console.log("send email");

        }
        if(response != true){
            //$('#requestForm').hide();
            //$('#Submit').hide();
            //$('#note').hide();
           // $('.alert').show();

        }
    });

    /*if(field1 == ""){
        alert('Please Fill Your Name');
        document.getElementById("contact_name").focus();

    }
    if(field2 == ""){
        alert('Please Fill Your Email');
        document.getElementById("contact_email").focus();

    }
    if(field3 == "" || field3.length > 5 || field3.length < 10){
        alert('Please Fill Your Mobile Number');
        document.getElementById("contact_phone").focus();
    }*/

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://54.243.19.57:80/espocrm/api/v1/LeadCapture/6f8d8c6efa159df0a4c1cb54edcc215f",
        "method": "POST",
        "headers": {
            "Content-Type": "application/json",
            "Accept": "application/json"

        },


        "data": "{\"firstName\": \""+field1+"\",\"lastName\": \""+field2+"\",\"emailAddress\": \""+field3+"\",\"phoneNumber\": \""+field4+"\",\"description\": \""+content+"\",\"phoneNumberIsOptedOut\":1}"
    }

    $.ajax(settings).done(function (response) {
        console.log(field5);
        if(response == true){
            $('#requestForm').hide();
            $('#Submit').hide();
            $('#note').hide();
            $('.alert').show();

        }
        if(response != true){
            //$('#requestForm').hide();
            //$('#Submit').hide();
            //$('#note').hide();
           // $('.alert').show();

        }
    });

    return false;
}
