<!--
    Vista que muestra los datos en forma de tabla. 
    Recibe los datos a mostrar a través del parámetro $data (utilizado en la función View::show).
-->
<div class="container">
    <h1> Listado de productos </h1>

    <table class="table" border="2">
        <tr>
            <th>Referencia</th>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th>Detalles</th>
            <th>Imagen</th>
        </tr>
        <?php
            foreach ($data as $article){
                echo "<tr>
                      <td>".$article['Referencia']."</td>
                      <td>".$article['Nombre']."</td>
                      <td>".$article['Categoría']."</td>
                      <td>".$article['Precio']."</td>
                      <td>".$article['Descripción']."</td>
                      <td>".$article['Detalles']."</td>
                      <td>".$article['Imagen']."</td>
                      </tr>"; 
            }
        ?>
    </table>
</div>

<?php

    

?>
<div class="row mb-5">
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="img/360p.png" class="card-img-top" alt="360p">
            <div class="card-body">
                <h5 class="card-title">Artículo 1</h5>
                <h6 class="card-title text-end">Precio</h6>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ratione adipisci atque id officiis excepturi ea quam? Obcaecati quasi eum natus ipsum excepturi sint, corporis, autem, blanditiis architecto incidunt corrupti.</p>
                <a href="#" class="btn btn-dark">Añadir al carrito</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="img/480p.png" class="card-img-top" alt="480p">
            <div class="card-body">
                <h5 class="card-title">Artículo 2</h5>
                <h6 class="card-title text-end">Precio</h6>
                <p class="card-text">Descripción del artículo dos.</p>
                <a href="#" class="btn btn-dark">Añadir al carrito</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="img/720p.png" class="card-img-top" alt="720p">
            <div class="card-body">
                <h5 class="card-title">Artículo 3</h5>
                <h6 class="card-title text-end">Precio</h6>
                <p class="card-text">Descripción del artículo tres.</p>
                <a href="#" class="btn btn-dark">Añadir al carrito</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="img/1080p.png" class="card-img-top" alt="1080p">
            <div class="card-body">
                <h5 class="card-title">Artículo 4</h5>
                <h6 class="card-title text-end">Precio</h6>
                <p class="card-text">Descripción del artículo cuatro.</p>
                <a href="#" class="btn btn-dark">Añadir al carrito</a>
            </div>
        </div>
    </div>
</div>
