 <!--modais-->
 <div class="hide overlayADDPOST"></div>
    <section class="novo-post">
        <div class="container">
                <div class="conteudo">
                        <div class="topo">
                        <img class="imagemredonda mr-3" src="https://source.unsplash.com/random/" alt="" srcset="">
                        <textarea id="inputPOST" placeholder="O que estas pensando?" class="form-control"></textarea>
                        </div>
                        <div class="baixo d-flex">
                            <div class="foto">
                                <button class="newpostbtn btn">
                                    <i class="camera fas fa-video"></i>
                                    <p>Video</p>
                                </button>
                            </div>
                            <div class="foto">
                                <button class="newpostbtn btn">
                                    <i class="imagem fas fa-images"></i>
                                    <p>Foto da Galeria</p>
                                </button>
                            </div>
                            <div class="foto">
                                <button class="newpostbtn btn">
                                    <i class="emotion fas fa-camera"></i>
                                    <p>Abrir Camera</p>
                                </button>
                            </div>
                        </div>
                </div>
        </div>


        <!--MODAIS-->
    <!--Adicionar novo Post-->
    <div class="hide modalNovoPost">
        <form id="form1" action="" method="POST" enctype="multipart/form-data">
            <i class="close fas fa-times"></i>
            <h1 class="titulo">Criar Publicação</h1>
            <p class="hide erro text-center alert alert-danger">Insira ou uma uma imagem, ou um texto!</p>
            </p>
            <div class="autor">
                <img class="imagemredonda" src="https://source.unsplash.com/random" alt="" srcset="">
                <div class="infoautor">
                    <h1>Jose Coimbra</h1>
                    <select class="form-control" name="privacidade" id="privacidade">
                        <option value="0">Publico</option>
                        <option value="1">Somente Amigos</option>
                        <option value="2">Privado</option>
                    </select>
                </div>
            </div>
            <div class="conteudo-texto">
                <textarea name="conteudoTexto" id="texto" placeholder="Em que estas a pensar,Hellen John?" class="form-control"></textarea>
            </div>
            <div class="previewimagem">
                <i class="resetFoto fas fa-times"></i>
                <img id="fotoModal" src="" alt="" srcset="">
            </div>
            <div class="conteudo-media">
                <p>Adicionar à tua publicação:</p>
                <button class="btn newpostbtn"><i class="video fas fa-video"></i></button>
                <button class="btn newpostbtn"><i class="imagem fas fa-image"></i></button>
                <button class="btn newpostbtn"><i class="camera fas fa-camera"></i></button>
            </div>
            <input id="inputFoto" name="foto" type="file">
            <input style="display: none;" type="text" name="action" value="adicionar">
            <button form="form1" value="submetido" name="submetido" type="submit" class="btn btn-primary">Publicar</button>
        </form>
    </div>