$(document).ready(function(){
    //LOGIN RELATED
    $('#login_form').submit(function(e){
        e.preventDefault();
        var form = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'core/controllers/login-control.php?op=login',
            data: form,
            dataType: 'text',
            success: function(response){
                if(response == 'ok'){
                    alert('OK, logado com sucesso')
                    window.location.href = 'index.php'
                }else if(response == 'err-user'){
                    alert('Opa, erro em user')
                }else if(response == 'err-pass'){
                    alert('Opa, erro na senha')
                }else{
                    alert('WTF just happened...? '+ response)
                }
            }
        })
    })
    $("#btn_sair").click(function(e){
        e.preventDefault()
        $.ajax({
            type: 'POST',
            url: 'core/controllers/login-control.php?op=logout',
            dataType: 'text',
            success: function(response){
                if(response == 'ok'){
                    window.location.href = 'login.html'
                }
            }
        })
    })

    //SHOP RELATED
    $("#entry").click(function(){
        if($("#entry_form").hasClass('hidden')){
            $("#entry_form").removeClass('hidden')
            $("#search_form").addClass('hidden')
        }
    })
    $("#search").click(function(){
        if($("#search_form").hasClass('hidden')){
            $("#search_form").removeClass('hidden')
            $("#entry_form").addClass('hidden')
        }
    })
})