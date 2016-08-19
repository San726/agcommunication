/**
 * Created by shane on 7/31/2016.
 */
$( function() {
    $( "#billingdatepicker" ).datepicker();
    $( "#billentrydatepicker" ).datepicker();
    $( "#birthdatepicker" ).datepicker();
    $( "#connecteddatepicker" ).datepicker();
});

$(document).ready(function() {
    $('#CInfo').DataTable();
} );

function genericCheckBoxDisabler($token, $id) {
    // alert('asdfa');
    if($($token).prop("checked")){
        $($id).attr('disabled',true);
    }else if ($($token).is(":not(:checked)")){
        $($id).attr('disabled',false);
    }
}

function genericSelectDisabler($token, $id) {

    var checkVal = ($token).options[$token.selectedIndex].value;
    if(checkVal != 'default'){
        $($id).attr('disabled',true);
        // alert($($token).val());
        $($id).val($($token).val());
    }else if (checkVal == 'default'){
        $($id).attr('disabled',false);
    }
}