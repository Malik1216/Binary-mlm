
  $("input").on( "focus", function () {
    hideValidate(this); 
});



function submit()
{

     chkEmail();
     chkPassword();
    if (  chkEmail() && chkPassword() )
    {
      
        var Email = $("#email").val();
        var Pass = $("#pass").val();
        $.ajax({
            url: "http://mlm.beatexxmall.com/submit/login.php",
            type: 'post',
            data:{ email : Email , pass : Pass },
            success: function( data ){
                if(data=="true")
                {   
                   
                    window.location.href="user/dashboard"
                    
                }
                else 
                {
                    $("#error2").fadeIn();
                    $(window).scrollTop(0);
                     setTimeout(
                      function()
                      {
                        $("#error2").fadeOut();     
                      }
                     , 3000);
                    
                }
            
            }
});
    }
}









function chkEmail()
{
    var email = $("#email").val();
    if ( email == "" )
    {
        showValidate( $("#email") );
        return false;
    }
    else
    {
        hideValidate( $("#email") );
        return true;
    }
}
function chkPassword()
{
    var pass = $("#pass").val();
    var cpass = $("#cpass").val();
    if (pass=="")
    {
        showValidate( $("#pass") );
        return false;
    }

    else
    {
        hideValidate( $("#pass") );
        return true;
    }
}


function showValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).addClass('alert-validate');
}
function hideValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).removeClass('alert-validate');
}

    

