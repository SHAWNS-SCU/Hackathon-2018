/*$(document).ready(function()
{ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function ()
     {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max)
         {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });*/

function updateSub()
{
    if (document.getElementById("category").value == "resources"){
        document.getElementById("subcategory").style.display = "block";
    } else {
        document.getElementById("subcategory").style.display = "none";
    }
}

