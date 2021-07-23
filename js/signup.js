

$("#phone").on( "focus", function () {
    if ($("#phone").val()=="")
    {
        $("#phone").val("03");
    }
  } );
  $("input").on( "focus", function () {
    hideValidate(this); 
});


function submit()
{
     checkName( $("#fname"));
     checkName( $("#lname") );
     checkName( $("#uname") );
     checkName( $("#city") );
     checkName( $("#country") );
     chkEmail();
     chkPassword();
     chkPhone();
     checkSid();
    if ( checkName( $("#fname")  ) &&
    checkName( $("#lname") ) &&
     checkName( $("#city") ) &&
     checkName( $("#country") ) &&
    checkSid() &&
    chkEmail() &&
    chkPassword() &&
    chkPhone()  &&
    checkName( $("#uname") ) )
    {
        var Fname = $("#fname").val();
        var Lname = $("#lname").val();
        var Email = $("#email").val();
        var Pass = $("#pass").val();
        var Sid = $("#sid").val();
        var Phone = $("#phone").val();
        var uname = $("#uname").val();
        var city = $("#city").val();
        var country = $("#country").val();
        $.ajax({
            
            url: "http://mlm.beatexxmall.com/submit/signup.php",
            type: 'post',
            data:{ fname : Fname , lname : Lname , email : Email , phone : Phone , pass : Pass , sid : Sid , uname : uname , city : city , country : country },
            success: function( data ){
                console.log(data);
                if(data=="emailError")
                {   
                    
                    $("#error2").fadeOut();
                     $("#error1").fadeIn();
                     $(window).scrollTop(0);
                    setTimeout(
                      function()
                      {
                        $("#error1").fadeOut();     
                      }
                     , 3000);
                    
                }
                else if(data=="dataError")
                {
                    $("#error1").fadeOut();
                    $(window).scrollTop(0);
                    $("#error2").fadeIn();
                    setTimeout(
                      function()
                      {
                        $("#error2").fadeOut();     
                      }
                     , 3000);
                    
                }
                 else if(data=="unameError")
                {
                    $(window).scrollTop(0);
                    $("#error3").fadeIn();
                     setTimeout(
                      function()
                      {
                        $("#error3").fadeOut();     
                      }
                     , 3000);
                    
                }
                else if( data=="true" )
                {
                    window.location.href = "login?msg=1";
                }
                else
                {
                    console.log(data);   
                }
            }
});
      //  console.log( "fName : " + fname + " lname : " + lname + " email :  " + email + " pass : " + pass + " sid : " + sid );
    }
}








function checkName( element)
{
    var value  = element.val();
    if (value=="")
    {
        showValidate(element );
        return false;
    }
    else
    {
        hideValidate(element);
        return true;
    }   
}
function chkEmail()
{
    var email = $("#email").val();
    if ( email.trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null )
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
    else if (pass!=cpass)
    {
        hideValidate( $("#pass") );
        showValidate( $("#cpass") );
        return false;
    }
    else
    {
        hideValidate( $("#pass") );
        hideValidate( $("#cpass") );
        return true;
    }
}
function chkPhone()
{
    if ( $("#phone").val().length<11 )
    {
        showValidate($("#phone"));
        return false;
    }
    else
    {
        hideValidate($("#phone"))
        return true;
    }
}
function checkPhone()
{
    var phone = $("#phone").val();
    var formatrd = phoneFormat( phone );
    $("#phone").val( formatrd )
}
function phoneFormat(input){
    // Strip all characters from the input except digits
    input = input.replace(/\D/g,'');
    
    // Trim the remaining input to ten characters, to preserve phone number format
    input = input.substring(0,11);

    // Based upon the length of the string, we add formatting as necessary
    var size = input.length;
    if(size<4){
            input = input;
    }else{
           // input = input.substring(0,4)+'-'+input.substring(4,11);
            input = input;
    }
    return input; 
}
function checkSid()
{
    var sid = $("#sid").val();
    var chk = false ;
    if (sid==="")
    {
        showValidate($("#sid"));
        return false;
    }
    $.ajax({
            url: "helper/chk_sid.php",
            type: 'post',
            async: false,
            data:{ Sid : sid },
            success: function( data ){
                if(data=="true")
                {   
                  chk = true;  
                  hideValidate($("#sid"));
                  
                   
                }
                else 
                {
                
                    showValidate($("#sid"));
                   chk = false;
                }
              }
           });
    if (chk==true)
    {
        return true;
    }
    else
    {
        return false;
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

    

