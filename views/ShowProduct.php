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