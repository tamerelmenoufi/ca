<div style="position:absolute; bottom:10px; top:80px; left:0; right:0; border:solid 1px red;">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <!-- <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div> -->
                <div class="carousel-inner">

                    <div class="carousel-item <?=(($_GET['atual'] == 'img/1a3.jpg')?'active':false)?>">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="img/1a3.jpg" style="max-width:50%" >
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item <?=(($_GET['atual'] == 'img/4a5.jpg')?'active':false)?>">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="img/4a5.jpg" style="max-width:50%" >
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item <?=(($_GET['atual'] == 'img/6a8.jpg')?'active':false)?>">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="img/6a8.jpg" style="max-width:50%" >
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item <?=(($_GET['atual'] == 'img/9a11.jpg')?'active':false)?>">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="img/9a11.jpg" style="max-width:50%" >
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item <?=(($_GET['atual'] == 'img/12a13.jpg')?'active':false)?>">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="img/12a13.jpg" style="max-width:50%" >
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item <?=(($_GET['atual'] == 'img/14a17.jpg')?'active':false)?>">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="img/14a17.jpg" style="max-width:50%" >
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<span class="close_popup" style="position:fixed; top:10px; right:20px; color:#fff; font-weight:bold; font-size:40px; cursor:pointer; z-index:10">
    <i class="fa-solid fa-close"></i>
</span>

<script>
    $(function(){
        $(".close_popup").click(function(){
            $(".popup").html("");
            $(".popup").css("display","none");
            $("body").css("overflow","scroll");
        });
    })
</script>