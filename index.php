<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/ca/lib/includes.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/icone.png">
    <title>35111 - CORONEL AMADEU</title>
    <?php
    include("lib/header.php");
    ?>
  </head>
  <body>

    <div class="Carregando">
        <div><i class="fas fa-spinner fa-pulse"></i></div>
    </div>

    <div class="CorpoApp"></div>

    <div class="popup"></div>


    <div class="container "
    style=" margin:0px;position:fixed!important; bottom:0;
    background-color:#000000d6;z-index:999999999999;padding:20px;width:100%;color:#fff;font-weight:bold"
    id="privacidade"
    >
        <div class="col-md-9" style="" >
            Este site utiliza cookies confiáveis e inofensivos para garantir uma melhor experiência de navegação. <br>
            <a style="font-size:16px;" href="#" abrir="src/home/privacidade.php">Política de Privacidade. </a>
        </div>

        <div class="col-md-3" style="" >
            <span><a id="ocultar" style="border-radius:16px;margin:5px;font-size:16px;" class="btn btn-warning pull-right"  role="button">Aceitar</a></span>
        </div>
    </div>



    <?php
    include("lib/footer.php");
    ?>

    <script>
        $(function(){
            Carregando();
            $.ajax({
                url:"src/home/index.php",
                success:function(dados){
                    $(".CorpoApp").html(dados);
                }
            });

            $.alert({
              content:'<center>Respeitamos a sua privacidade, seguindo as normas da lei geral de proteção de dados LGPD, Lei n° 13.709/2018.<br><br>Se não quiser receber mais nossas notificações, clique no botão <button class="btn btn-link btn-sm" style="color:red; text-decoration:none"><i class="fa-regular fa-circle-xmark"></i> Sair</button> no rodapé desta página e o seu cadastro será desativado imediatamente.</center>',
              title:false,
              style:'red'
            })

            $("#ocultar").click(function(){
              $("#privacidade").remove();
            });

            $("a[abrir]").click(function(){
              local = $(this).attr("abrir");
              $.dialog({
                content:"url:"+local,
                title:"Política de Privacidade",
                columnClass:'col-md-12'
              })
            })

        })
    </script>

  </body>
</html>