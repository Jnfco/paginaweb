<body style="background-color:red;">
    <?php foreach ($fullPost as $row):  ?>
    <header><img src="<?=$row->imagen ?>" class="d-block w-100" alt="..." style="height:600px;width:900"> </header>
    <h2> <?=$row->titulo ?> </h2>
    <div>
        <div style="color:blue;">Autor: <?=$row->autor ?> </div>
        Visitas: <?=$row->visitas ?>
        <div> Última modificación: <?=$row->modificado?></div>
        
    </div>
    <hr>
    <div>
        <?=$row->contenido ?>
    </div>
    <hr>
    <div style="display:flex;flex-direction:row;margin-left:10%">
    <h6 style="color:blue">Valoración: </h6>
    <input type="number" id="quantity" name="quantity" min="1" max="5" value=<?=$row->valoracion?>>/5
    
    <button type=submit onclick="valorar(<?=$row->id?>)" name="submitRatingStar" class="btn btn-primary btn-sm"
        id="valoracion">Guardar Valoración</button>
    </div>
    <?php endforeach ;?>

    <script>
    function valorar(id) {

        
        var valoracion = $("#quantity").val();
        console.log("Id a valorar: ", id)
        console.log("Valoracion ", valoracion)
        $.post(base_url+"index.php/Welcome/valorar",{id: id,valoracion:valoracion});

    }
    </script>
</body>