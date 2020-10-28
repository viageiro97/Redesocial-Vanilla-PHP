//Erro ao adicionar novo Post
cont = 0;
do{
    const modal = document.querySelector('.modalNovoPost');
    const overlayPOST = document.querySelector('.overlayADDPOST');
    modal.classList.remove('hide');
    overlayPOST.classList.remove('hide');
    cont++;
}while(cont<1);