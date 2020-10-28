 <!--modais-->
 <div class="hide overlayADDPOST"></div>
    <section class="novo-post">
        <div class="container">
                <div class="conteudo">
                        <div class="topo">
                        <img class="imagemredonda mr-3" src="../assets/img/profile.jpg" alt="" srcset="">
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
        <form action="?action=adicionar" method="POST" enctype="multipart/form-data">
            <i class="close fas fa-times"></i>
            <h1 class="titulo">Criar Publicação</h1>
                <?php if(isset($_SESSION["postvazio"])):?>
                    <p class="erro alert alert-danger"><?php echo $_SESSION["postvazio"];?></p>
                    <script src="./assets/javascript/erroupload.js"></script>
                    <?php unset($_SESSION["postvazio"]);?>
                <?php endif?>
                
            </p>
            <div class="autor">
                <img class="imagemredonda" src="https://source.unsplash.com/random" alt="" srcset="">
                <div class="infoautor">
                    <h1>Jose Coimbra</h1>
                    <select class="form-control" name="privacidade" id="">
                        <option value="0">Publico</option>
                        <option value="1">Somente Amigos</option>
                        <option value="2">Privado</option>
                    </select>
                </div>
            </div>
            <div class="conteudo-texto">
                <textarea name="conteudoTexto" id="modalINPUT" placeholder="Em que estas a pensar,Hellen John?" class="form-control"></textarea>
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
            <button id="submitPost" value="submetido" name="submetido" type="submit" class="btn btn-primary">Publicar</button>
        </form>
    </div>