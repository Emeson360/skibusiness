$(document).ready(function (e) {
    
    
    
          $("#pin").on('click',(function(e) { //this query send pin data for approval for new or transfer students
          e.preventDefault();
          
          $.ajax({
          url: "php/pin.php", // Url to which the request is send
          type: "POST",             // Type of request to be send, called as method
          data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
          contentType: false,       // The content type used when sending data to the server.
          cache: false,             // To unable request pages to be cached
          processData:false,        // To send DOMDocument or non processed data file it is set to false<img src='icon.gif' style='width:90px; height:90px;'>
          beforeSend: function() {
              $('#feedback').php("Sending Request...");
            },
          success: function(data)   // A function to be called if request succeeds
          {
            //alert("hello");
          $("#feedback").php(data);
          
          }
          });
          }));


     });












$.get( "php/inc-all-students_filter.php", function( data ) {
     $( "#res" ).php( data );
   });


$.get( "inc_result.php", function( data ) {
     $( "#res" ).php( data );
   });

   function filter(value)
   {
     $.post("inc_result_flitter.php",
  {
    class: value
  },
  function(data, status){
    //alert("Data: " + data + "\nStatus: " + status);
    $('#res').php(data);
  });
   }
   
    function fstudent(value)
   {
       alert("hello");
//      $.post("php/inc-all-students_filter.php",
//   {
//     class: value
//   },
//   function(data, status){
//     //alert("Data: " + data + "\nStatus: " + status);
//     $('#res').php(data);
//   });
   }
   
   
   
   
   

   $(document).ready(function(){
 $("#upload").hide();
    
  });
   

     // $(document).ready(function(){
     //      $("#submit").on('submit', function(){
     //        $.post("inc_result_flitter.php",
     //        {
     //          name: value,
            
     //        },
     //        function(data,status){
     //          alert("Data: " + data + "\nStatus: " + status);
     //        });
     //      });
     //    });
   

















    
//      // Variable to hold request
// var request;

// // Bind to the submit event of our form
// $("#foo").submit(function(event){

//     // Prevent default posting of form - put here to work in case of errors
//     event.preventDefault();

//     // Abort any pending request
//     if (request) {
//         request.abort();
//     }
//     // setup some local variables
//     var $form = $(this);

//     // Let's select and cache all the fields
//     //var $inputs = $form.find("input, select, button, textarea");
//     var $inputs = $form.find("select");

//     // Serialize the data in the form
//     var serializedData = $form.serialize();

//     // Let's disable the inputs for the duration of the Ajax request.
//     // Note: we disable elements AFTER the form data has been serialized.
//     // Disabled form elements will not be serialized.
//     $inputs.prop("disabled", true);

//     // Fire off the request to /form.php
//     request = $.ajax({
//         url: "/form.php",
//         type: "post",
//         data: serializedData
//     });

//     // Callback handler that will be called on success
//     request.done(function (response, textStatus, jqXHR){
//         // Log a message to the console
//         console.log("Hooray, it worked!");
//         $("#res_filter").php(response.t);
//     });

//     // Callback handler that will be called on failure
//     request.fail(function (jqXHR, textStatus, errorThrown){
//         // Log the error to the console
//         console.error(
//             "The following error occurred: "+
//             textStatus, errorThrown
//         );
//     });

//     // Callback handler that will be called regardless
//     // if the request failed or succeeded
//     request.always(function () {
//         // Reenable the inputs
//         $inputs.prop("disabled", false);
//     });
