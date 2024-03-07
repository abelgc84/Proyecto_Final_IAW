<?php

// PROBANDO CAROUSEL

echo "<div class=\"row p-5\">";
    echo "<div class=\"col-md-2\">";
    echo "</div>";
    // Mostrar el carrusel  
    echo "<div class=\"col-md-8\">";
        echo "<div id=\"carrusel-ofertas\" class=\"carousel slide\" data-bs-ride=\"carousel\">";
            echo "<div class=\"carousel-inner\">";
                echo "<div class=\"carousel-item active\" data-bs-interval=\"4000\">";
                    echo "<img src=\"img/360p.png\" class=\"d-block w-100\" alt=\"360p\">";
                    echo "<div class=\"carousel-caption d-none d-md-block\">";
                        echo "<h5>Primer arción de ofertas</h5>";
                        echo "<p>Breve descripción del primer día de ofertas.</p>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
            echo "<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carrusel-ofertas\" data-bs-slide=\"prev\">";
                echo "<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>";
                echo "<span class=\"visually-hidden\">Anterior</span>";
            echo "</button>";
            echo "<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carrusel-ofertas\" data-bs-slide=\"next\">";
                echo "<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>";
                echo "<span class=\"visually-hidden\">Siguiente</span>";
            echo "</button>";
        echo "</div>";
    echo "</div>";
    echo "<div class=\"col-md-2\">";
    echo "</div>";
echo "</div>";

?>