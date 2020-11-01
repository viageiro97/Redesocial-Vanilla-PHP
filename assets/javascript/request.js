const texto = document.getElementById('texto');
const foto = document.getElementById('inputFoto');
console.log(foto);
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
        else{
            $('.modalNovoPost').addClass('hide');
            $('.overlayADDPOST').addClass('hide');
            let template = `<div class="post">
            <div class="topo">
                <img class="imagemredonda" src="https://source.unsplash.com/random/" alt="" srcset="">
                <div class="autoredata">
                    <h1 class="autorpost">${result.nomeProprio} ${result.apelido}<span class="text-muted autornick"><?php echo "@".$post["nomeUsuario"]?></span></h1>
                    <h3 class="text-muted post-time">${result.dataPublicacao}</h3>
                </div>
            </div>
            <div class="conteudo">
                <p>${result.conteudoTexto}</p>
            </div>
                 <div class="foto fotoajax">
                 <img src="${result.conteudoImagem}" alt="" srcset="">
                </div>
            <div class="baixopost">
                <button class="likes"><i class="far fa-heart"></i>368 gostos</button>
                <button class="coment"><i class="far fa-comment"></i>26 comentarios</button>
                <button class="guardar"><i class="far fa-bookmark"></i></button>
            </div>
            <div class="comentarios">
                <div class="comentar">
                    <img class="imagemredonda" src="https://source.unsplash.com/random/" alt="" srcset="">
                    <input class="form-control" type="text" placeholder="Escreva um comentario...">
                </div>
                <div class="comentario">
                    <img class="imagemredonda" src="https://source.unsplash.com/random" alt="" srcset="">
                    <div class="comentarioconteudo">
                        <a href="#">Hellen John</a>
                        <p>Gostei da futo muito boa!</p>
                    </div>
                </div>
            </div>
        </div>`;
        $('#postlist').prepend(template);
        
        $(".post").fadeIn("slow");
        if(!result.conteudoImagem){
            $('.fotoajax').addClass('hide');

        }
        texto.value = '';
        previewImagem.style.display='none';
        resetFoto.style.display='none';
        foto.value = '';

        }
    })
});