/**
 * Created by shane on 7/31/2016.
 */
$( function() {
    $( "#billingdatepicker" ).datepicker();
    $( "#billentrydatepicker" ).datepicker();
    $( "#birthdatepicker" ).datepicker();
    $( "#connecteddatepicker" ).datepicker();
    $( "#connecteddatepicker_Bill" ).datepicker({
        stepMonths: 0,
    });
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
        // $($id).attr('disabled',true);
        // alert($($token).val());
        $($id).val($($token).val());
    }else if (checkVal == 'default'){
        // $($id).attr('disabled',true);
        $($id).attr('disabled',false);
    }
}

function Check($token, $value, $effect) {
    if (document.getElementById($token).checked) {
        $('#'+$effect).val(Number($('#'+$effect).val()) + Number($value));
    }else{
        $('#'+$effect).val(Number($('#'+$effect).val()) - Number($value));
    }
}