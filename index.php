<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/coronel_amadeu/lib/includes.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/icone.png">
    <title>Gestão de Ordens de Serviços</title>
    <?php
    include("lib/header.php");
    ?>
  </head>
  <body>

    <div class="Carregando">
        <div><i class="fas fa-spinner fa-pulse"></i></div>
    </div>

    <div class="CorpoApp"></div>

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
        })
    </script>

  </body>
</html>