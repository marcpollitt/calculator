$(document).ready(function(){
    $('button').click(function(){

        $('#my_calculator_sum').val($('#my_calculator_sum').val() + $(this).val())
    });
});