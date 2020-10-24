//MODAIS
const inputPost = document.getElementById('inputPOST');
const modalPOST = document.querySelector('.modalNovoPost');
const modalInput = document.getElementById('.modalInput');
const modalFoto = document.getElementById('inputFoto');
const previewImagem = document.getElementById('fotoModal');
const resetFoto = document.querySelector(".resetFoto");
const overlayPOST = document.querySelector('.overlayADDPOST');
const closePOST = document.querySelector('.close');
inputPost.addEventListener('click',function(){
    mostrar(modalPOST,1);
    mostrar(overlayPOST,1);
})
overlayPOST.addEventListener('click', function(){
    mostrar(modalPOST,0);
    mostrar(overlayPOST,0);
})

closePOST.addEventListener('click',function(e){
    e.preventDefault();
    mostrar(modalPOST,0);
    mostrar(overlayPOST,0);
})


function mostrar(elemento,x){
    if (x == 1){
        elemento.classList.remove('hide');
    }else{
        elemento.classList.add('hide');
    }   
}

//Butoes com icones
const botoesIcone = document.querySelectorAll('.newpostbtn');
botoesIcone.forEach(function(botao){
    botao.addEventListener('click',function(e){
        e.preventDefault();
        modalFoto.click();
        if(modalPOST.classList.contains('hide')){
            modalPOST.classList.remove('hide');
        }
        if(overlayPOST.classList.contains('hide')){
            overlayPOST.classList.remove('hide');
        }
    })
})

//PREVISUALIZACAO DA IMAGEM
modalFoto.addEventListener('change',mostrarPreview);
function mostrarPreview(e){
    if(e.target.files.length>0){
        let src = URL.createObjectURL(e.target.files[0]);
        previewImagem.src = src;
        previewImagem.style.display='block';
        resetFoto.style.display='block';
        console.log(src);
    }
}

resetFoto.addEventListener('click',function(){
    previewImagem.src = '';
    previewImagem.style.display='none';
    resetFoto.style.display='none';
})