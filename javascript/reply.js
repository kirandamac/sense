
var enquiry_id;
var reply_message;

$("label[name=reply]").click(function() {
    //alert($(this).attr("data-enquiry"));
    enq_id = $(this).attr("data-enquiry");
});


$('#postForm').submit(function(e) {

    console.log('testing');
    e.preventDefault();


        $.ajax({

            type:"POST",
            url:'http://localhost/sense/enquiry/add_enquiry_reply',
            data:
            {
                enquiry_id:1,
                reply_message:"test message"
            },
            success: function(message) {

                console.log("Success");

            },
            error: function(){

                console.log("Error");

            }

        });

    //$('#enq_reply').modal('hide');
});

/*s
function submitForm() {

    var reply = $('#message').val();

    if(message.trim() == '' ) {

        alert('Please enter your message.');
        $('#message').focus();


    }
    else {

        $.ajax({

            type:'POST',
            url:'http://localhost/sense/enquiry/add_enquiry_reply',
            data:{enq_id:enq_id, reply:reply},
            success: function(message) {

                alert("Success");

            },
            error: function(){

                alert("Error");

            }

        });

    }

    return false;



    $('#postForm').submit(function(e) {
        e.preventDefault();
        var url = $(this).attr('action');

        $.post(
                url,
                {
                    enq_id:enq_id,
                    reply:reply
                }
            ).done(function(data) {
                console.log('post saved');
                console.log(data);
            });
    });

    return false;

}
*/
