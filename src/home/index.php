<nav class="navbar fixed-top bg-light">
  <div class="container-fluid">
    <img src="img/icone.png" style="position:absolute; top:10px; left:20px; border:2px solid #eee; border-radius:100%; width:60px;" >
    <a class="navbar-brand" href="#" style="margin-left:80px;">
        CORONEL AMADEU
    </a>
    <i class="fa-solid fa-circle-play fa-2x" play="off" style="margin-left:15px; cursor:pointer;"></i>
  </div>
</nav>

<div class="container" style="margin-top:60px; margin-bottom:60px;">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="img/banner.jpg" class="img-fluid" style="width:100%" />
        </div>
    </div>

    <div class="card mt-3">
        <div class="row">
            <div class="col-md-6 text-left">
                <img src="img/capa.jpg" class="img-fluid rounded-start">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>



    <div class="card mt-3">
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <img src="img/1a3.jpg" class="img-fluid" acao="popup" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="img/4a5.jpg" class="img-fluid" acao="popup" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="img/6a8.jpg" class="img-fluid" acao="popup" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <img src="img/9a11.jpg" class="img-fluid" acao="popup" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="img/12a13.jpg" class="img-fluid" acao="popup" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="img/14a17.jpg" class="img-fluid" acao="popup" />
                        </div>
                    </div>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="col-md-6" style="text-align:right;">
                <img src="img/propostas.jpg" class="img-fluid rounded-end">
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="row">
            <div class="col-md-6 text-left">
                <img src="img/capa1.jpg" class="img-fluid rounded-start">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p>
                    <audio controls loop class="somX" style="width:100%">
                        <source src="audio/som.mp3" type="audio/mpeg">
                    </audio>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

</div>


<nav class="navbar fixed-bottom bg-light">
  <div class="container-fluid">
    <button class="btn btn-success btn-md" style="position:relative;">
        <span style="margin-left:35px;">Coronel Amadeu 35111</span>
        <i class="fa-regular fa-hand-peace" style="position:absolute; left:5px; top:2px; font-size:30px;"></i>
    </button>

    <button class="btn btn-link btn-sm privacidade" style="color:green; text-decoration:none">
        <i class="fa-solid fa-lock"></i>
        Privacidade
    </button>
  </div>
</nav>


<script>
    $(function(){
        Carregando('none');

        $("img[acao]").click(function(){
            atual = $(this).attr("src");
            if($(this).attr("acao") == 'popup'){
                $.ajax({
                    url:"src/home/propostas.php",
                    data:{
                        atual
                    },
                    success:function(dados){
                        $(".popup").html(dados);
                        $(".popup").css("display","block");
                        $("body").css("overflow","hidden");
                    }
                });
            }
        });

        $("i[play]").click(function(){
            opc = $(this).attr("play");
            if(opc == 'on'){
                $(this).attr("play","off");
                $(this).removeClass("fa-circle-stop");
                $(this).addClass("fa-circle-play");
                $(".somX")[0].pause();

            }else{
                $(this).attr("play","on");
                $(this).removeClass("fa-circle-play");
                $(this).addClass("fa-circle-stop");
                $(".somX")[0].play();
            }
        });

        $(".privacidade").click(function(){
            opc_privacidade = $.dialog({
                content:"url:src/home/opc_privacidade.php",
                title:false,
            })
        });

    })
</script>