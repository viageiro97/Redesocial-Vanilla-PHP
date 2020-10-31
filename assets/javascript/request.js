$('#form1').submit(function(e){
    $('.erro').addClass('hide');
    e.preventDefault();
    $.ajax({
        url:'accoesPost.php',
        method:'POST',
        //data:{numero1:num1,numero2:num2,foto:foto},
        data: new FormData(this),
        dataType:'json',
        contentType: false,
        processData: false,
    }).done(function(result){
        console.log(result);
        if(result == 'erro'){
            $('.erro').removeClass('hide');
        }
        if(result == 'sucesso'){
            $('.modalNovoPost').addClass('hide');
            $('.overlayADDPOST').addClass('hide');
        }
    })
});