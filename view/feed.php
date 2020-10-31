<!--INCLUDES DE PARTES DA PAGINA-->
<?php
    include '../view/inc/header.php';
    include '../view/inc/menudireito.php';
    include '../view/inc/menuesquerdo.php';
    include '../view/inc/componentepost.php';
?>

<!------------------------------------>
   
    </section>
    <section class="feed">
        <div class="postagem">
            <div class="container">
                <!--IMPRIMIR POSTAGENS DA BD-->
                <?php foreach($post as $post):?>
                    <div class="post">
                        <div class="topo">
                            <img class="imagemredonda" src="https://source.unsplash.com/random/" alt="" srcset="">
                            <div class="autoredata">
                                <h1 class="autorpost"><?php echo $post["nomeProprio"]." ".$post["apelido"]?><span class="text-muted autornick"><?php echo "@".$post["nomeUsuario"]?></span></h1>
                                <h3 class="text-muted post-time"><?php echo $post["dataPublicacao"]?></h3>
                            </div>
                        </div>
                        <div class="conteudo">
                            <p><?php echo $post["conteudoTexto"]?></p>
                        </div>
                        <?php if($post["conteudoImagem"]):?>
                            <div class="foto">
                             <img src="<?php echo $post["conteudoImagem"]?>" alt="" srcset="">
                            </div>
                        <?php endif?>
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
                    </div>
                <?php endforeach?>
            </div>
        </div>
    </section>


    <!--Javascript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="../assets/javascript/request.js"></script>
    <script src="../assets/javascript/index.js"></script>
</body>
</html>