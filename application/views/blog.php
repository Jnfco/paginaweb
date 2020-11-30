<!-- Masthead-->
<header class="masthead  text-black text-center">
    <div>
        <!-- Masthead Avatar Image-->

        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Blog</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
    </div>
</header>

<div>

    <div id="contenedor">
        <div style="width:50%;margin-left:25%;">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <img src="https://www.webnode.es/blog/files/2019/05/blog2.png" class="d-block w-100" alt="..."
                            style="height:600px;width:800">
                        <div class="carousel-caption d-none d-md-block">

                            <p>Últimos posts del blog</p>
                        </div>
                    </div>

                    <?php foreach($posts as $row):?>
                    <?php if($row->enabled == 1) {?>
                    <div class="carousel-item">
                        <img src="<?=$row->imagen ?>" class="d-block w-100" alt="..." style="height:600px;width:800">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?=$row->titulo ?></h5>
                            <!-- <a class="btn btn-xl btn-outline-light" onclick="verPost(<?=$row->titulo?>)">Ver post</a> -->
                            <button
                                style="background-color: #8c1c2f;  border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin-left:20px"
                                onclick='verPost("<?=$row->id?>","<?=$row->visitas?>")'>Ver
                                noticia</button>
                        </div>

                    </div>
                    <?php }?>


                    <?php endforeach; ?>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>

        <!-- Sección de noticias -->

        <!-- Div de las 2 noticias -->
        <div style=" display:flex;flex-direction:column;flex-wrap: wrap;gap: 12px;">

            <!-- Div de las noticias populares -->

            <div
                style=" display:flex;flex-direction:column;flex-wrap: wrap;gap: 20px;width:70%;margin-left:10%;margin-top:10%">
                <h2 style="margin-left:40%"> Noticias populares</h2>
                <?php foreach ($populares as $row) {?>
                <!-- Div de una noticia -->
                <div style="display:flex;flex-direction:column">
                    <div
                        style="display:flex;flex-direction:row;flex-wrap: wrap;gap: 12px; border-radius: 25px;border: 2px solid #8c1c2f; padding: 20px;">
                        <div>
                            <img src="<?=$row->imagen?>" width="300px" height="300px">
                            <button  onclick='verPost("<?=$row->id?>","<?=$row->visitas?>")'
                                style="background-color: #8c1c2f;  border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin-left:20px">
                                Ver noticia
                            </button>
                        </div>
                        <h6> Título: <?=$row->titulo ?></h6>
                        <div
                            style="margin-left:5%;display:flex;flex-direction:row;display: inline-flex;flex-wrap: wrap;gap: 12px;">
                            <div>Visitas: <?=$row->visitas ?></div>
                            <div> Valoración: <?=$row->valoracion ?>/5</div>
                        </div>


                    </div>

                </div>
                <hr>
                <?php } ?>
            </div>
            <hr>
            <!-- Div de las noticias mas recientes -->
            <div
                style=" display:flex;flex-direction:column;flex-wrap: wrap;gap: 20px;width:70%;margin-left:10%;margin-top:20px">
                <h2 style="margin-left:40%"> Noticias más recientes</h2>
                <?php foreach ($recientes as $row) {?>
                <!-- Div de una noticia -->
                <div style="display:flex;flex-direction:column">
                    <div
                        style="display:flex;flex-direction:row;flex-wrap: wrap;gap: 12px; border-radius: 25px;border: 2px solid #8c1c2f; padding: 20px;">
                        <div>
                            <img src="<?=$row->imagen?>" width="300px" height="300px">
                            <button onclick ="verpost(<?=$row->id,$row->visitas?>)"
                                style="background-color: #8c1c2f;  border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin-left:20px">
                                Ver noticia
                            </button>
                        </div>
                        <h6> Título: <?=$row->titulo ?></h6>
                        <div
                            style="margin-left:5%;display:flex;flex-direction:row;display: inline-flex;flex-wrap: wrap;gap: 12px;">
                            <div>Visitas: <?=$row->visitas ?></div>
                            <div> Valoración: <?=$row->valoracion ?>/5</div>
                        </div>


                    </div>

                </div>
                <hr>
                <?php } ?>
            </div>

        </div>

    </div>

    <script>
    function verPost(id, visitas) {

        var visitasN = parseInt(visitas) + 1;
        console.log("Visitas antes: ", visitas);
        console.log("Visitas despues", visitasN);


        $.post(base_url + "index.php/Welcome/verPost", {
            id: id
        }, function(html, data) {
            $("#contenedor").html(html, data);
            $("#contenedor").show("fast");
        });
        $.post(base_url + "index.php/Welcome/visita", {
            id: id,
            visitas: visitasN
        });
    }
    </script>