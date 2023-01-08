

$(document).on("submit","form.w3-register",function(event){
    event.preventDefault();
    var _form = $(this);
    var _error = $(".w3-error", _form)

    var dataObj = {
      email: $("input[type='email']",_form).val(),
      password: $("input[type='password']",_form).val()       
    }

    if(dataObj.email.length < 6){
      _error.text("Please enter a valid email address").show()
      return false
    }
    else if(dataObj.password.length <6 ){
      _error.text("Password must be atleast 6 characters long").show()
    }
    
    _error.hide();


    $.ajax({
      type:'POST',
      url:'ajax/man.php', 
      data:'dataObj',
      dataType: 'json',
      async: true,
    })
    .done(function ajaxDone(data){
      
      if(data.redirect !== undefined){
        window.location = data.redirect;
      }
      else if(data.error !== undefined){
        _error.text(data.error).show();
      }
    })
    .fail(function ajaxFailed(e){
      console.log(e)
      alert('failed') 
    })
    .always(function ajaxAlwaysDoThis(data){
       console.log('Always')
    })


    return false

})


