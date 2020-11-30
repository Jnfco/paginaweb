<!--Acá se encuentra el post creado-->



<div style="width:100%;" id="contenedor">
    <h2 style="margin-top:2%" class="page-section-heading text-center text-uppercase text-secondary mb-0">Posts</h2>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style ="width:50%;margin-left:25%;">

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
                    <button class="btn btn-info" onclick='verPost("<?=$row->id?>","<?=$row->visitas?>")'>Ver
                        post</button>
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

    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portafolio</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/angular.png" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/native.png" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/android.png" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 4-->
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/java.png" alt="" />
                    </div>
                </div>

            </div>
            <!---Aquí van los post del blog--->


        </div>


    </section>


<script type="text/javascript">
var base_url = '<?=base_url()?>';
</script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
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