<!--
    Vista que muestra los datos en forma de tabla. 
    Recibe los datos a mostrar a través del parámetro $data (utilizado en la función View::show).
-->
<div class="container">
    <h1> Listado de productos </h1>

    <table class="table">
        <tr><th>Nombre</th> <th>Descripción</th></tr>
        <?php
            foreach ($data as $article){
                echo "<tr>
                      <td>".$article['nombre']."</td>
                      <td>".$article['descripcion']."</td>
                      </tr>"; 
            }
        ?>
    </table>
</div>