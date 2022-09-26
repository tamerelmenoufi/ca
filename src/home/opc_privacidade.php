<div class="col-md-12 mt-3">
    <button politica class="btn btn-primary mt-3 btn-lg w-100">
        <i class="fa-solid fa-spell-check"></i>
        Política de Privacidade
    </button>
    <button bloqueio class="btn btn-danger mt-3 btn-lg w-100">
        <i class="fa-solid fa-ban"></i>
        Solicitar Bloqueio
    </button>
</div>

<script>
    $(function(){

        $("button[politica]").click(function(){
            $.dialog({
            content:"url:src/home/privacidade.php",
            title:"Política de Privacidade",
            columnClass:'col-md-12'
            })
            opc_privacidade.close();
        })

        $("button[bloqueio]").click(function(){
            $.confirm({
                content:'<center><h1 style="color:yellow"><i class="fa-solid fa-face-sad-tear"></i></h1>Deseja realmente bloquear o nosso contato com você?</center>',
                title:false,
                buttons:{
                    'SIM':function(){
                        $.alert('<center><h1 style="color:yellow"><i class="fa-solid fa-face-sad-cry"></i></h1>Seus dados foram bloqueados da nossa base de dados!</center>');
                        opc_privacidade.close();
                    },
                    'NÃO':function(){

                    }
                }
            })
        });

    })
</script>