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
        })

        $("button[bloqueio]").click(function(){
            $.confirm({
                content:"Deseja realmente bloquear o nosso contato com você?",
                titule:false,
                buttons:{
                    'SIM':function(){
                        $.alert('Seus dados foram bloqueados de nossa base!');
                    },
                    'NÃO':function(){

                    }
                }
            })
        });

    })
</script>