/**
 * Created by shane on 7/31/2016.
 */
$( function() {
    $( "#billingdatepicker" ).datepicker();
    $( "#billentrydatepicker" ).datepicker();
    $( "#birthdatepicker" ).datepicker();
    $( "#connecteddatepicker" ).datepicker();
});

function requiredPermanentAddress() {
    // alert('asdfa');
    if($("#address").prop("checked")){
        $('#Peraddress').attr('disabled',true);
    }else if ($("#address").is(":not(:checked)")){
        $('#Peraddress').attr('disabled',false);
    }

}