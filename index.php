<?php
require 'includes/funciones.php';

incluirTemplate('header', $inicio = true);
?>

<main class="contenedor">
  <h1>Más sobre Nosotros</h1>
  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="Icono seguridad" />
      <h3>seguridad</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo aperiam
        ea, deserunt facere dolorem totam cupiditate accusamus ut,
        consectetur officia distinctio iste incidunt repellat ex, illo
        expedita corrupti sed ullam?
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono Precio" />
      <h3>Precio</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo aperiam
        ea, deserunt facere dolorem totam cupiditate accusamus ut,
        consectetur officia distinctio iste incidunt repellat ex, illo
        expedita corrupti sed ullam?
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono Tiempo" />
      <h3>Tiempo</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo aperiam
        ea, deserunt facere dolorem totam cupiditate accusamus ut,
        consectetur officia distinctio iste incidunt repellat ex, illo
        expedita corrupti sed ullam?
      </p>
    </div>
  </div>
</main>

<section class="seccion contenedor">
  <h2>Casas y Depas. en Venta</h2>
  <div class="contenedor-anuncios">
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio1.webp" type="image/webp" />
        <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa de lujo en el lago</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe
          eum a explicabo iure atque nostrum!
        </p>
        <p class="precio">$3,000,000.00</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.html" class="boton-amarillo-block">
          Ver Propiedad
        </a>
      </div>
      <!-- contenido-anucio -->
    </div>
    <!-- anucio -->
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio2.webp" type="image/webp" />
        <source srcset="build/img/anuncio2.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa terminada de lujo</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe
          eum a explicabo iure atque nostrum!
        </p>
        <p class="precio">$3,000,000.00</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.html" class="boton-amarillo-block">
          Ver Propiedad
        </a>
      </div>
      <!-- contenido-anucio -->
    </div>
    <!-- anucio -->
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio3.webp" type="image/webp" />
        <source srcset="build/img/anuncio3.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa con piscina</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe
          eum a explicabo iure atque nostrum!
        </p>
        <p class="precio">$3,000,000.00</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.html" class="boton-amarillo-block">
          Ver Propiedad
        </a>
      </div>
      <!-- contenido-anucio -->
    </div>
    <!-- anucio -->
  </div>
  <!-- contenedor anuncios -->
  <div class="alinear-derecha">
    <a href="anuncios.html" class="boton-verde"> Ver todas</a>
  </div>
</section>

<section class="imagen-contacto">
  <h2>Encuentra la casa de tus sueños</h2>
  <p>Llena el formulario de contacto para que te asesoren</p>
  <a href="contacto.html" class="boton-amarillo">Contactanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
  <section class="blog">
    <h3>Nuestro blog</h3>

    <article class="entrada-blog">
      <div class="image">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp" />
          <source srcset="build/img/blog1.jpg" type="image/jpeg" />
          <img loading="lazy" src="build/img/blog1.jpg" alt="texto Entrada blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.html">
          <h4>Terraza en el techo de tu casa</h4>
          <p class="informacion-meta">
            Escrito el: <span>20/10/2023</span> por: <span>Admin</span>
          </p>
          <p>
            Consejos para contruir en tu casa con los mejores materiales y
            ahorrando dinero
          </p>
        </a>
      </div>
    </article>

    <article class="entrada-blog">
      <div class="image">
        <picture>
          <source srcset="build/img/blog2.webp" type="image/webp" />
          <source srcset="build/img/blog2.jpg" type="image/jpeg" />
          <img loading="lazy" src="build/img/blog2.jpg" alt="texto Entrada blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.html">
          <h4>Guia para la decoración de tu hogar</h4>
          <p class="informacion-meta">
            Escrito el: <span>20/10/2023</span> por: <span>Admin</span>
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
            incidunt temporibus dolor consequatur eaque debitis, neque
            mollitia beatae aliquid accusantium!
          </p>
        </a>
      </div>
    </article>
  </section>

  <section class="testimoniales">
    <h3>Testimoniales</h3>
    <div class="testimonial">
      <blockquote>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium
        illum fuga nemo aliquid earum est!
      </blockquote>
      <p>- Yeris Berrios</p>
    </div>
  </section>
</div>


<?php
incluirTemplate('footer');
?>