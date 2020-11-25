<body style="background-color:red;">
    <?php foreach ($fullPost as $row):  ?>
    <header><img src="<?=$row->imagen ?>" class="d-block w-100" alt="..." style="height:600px;width:900"> </header>
    <h2> <?=$row->titulo ?> </h2>
    <div>
        <div style="color:blue;">Autor: <?=$row->autor ?> </div>
        Visitas: <?=$row->visitas ?>
        Rank: <?=$row->valoracion ?>/5
    </div>
    <hr>
    <div>
        <?=$row->contenido ?>
    </div>

    <?php endforeach ;?>

    <script>

    </script>
</body>