<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor contenido-centrado">
  <h1>Nuestro Blog</h1>

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
        <p>Escrito el: <span>20/10/2023</span> por: <span>Admin</span></p>
        <p>Consejos para contruir en tu casa con los mejores materiales y ahorrando dinero</p>
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
        <p>Escrito el: <span>20/10/2023</span> por: <span>Admin</span></p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Non incidunt temporibus dolor consequatur eaque
          debitis, neque mollitia beatae aliquid accusantium!
        </p>
      </a>
    </div>
  </article>

  <article class="entrada-blog">
    <div class="image">
      <picture>
        <source srcset="build/img/blog3.webp" type="image/webp" />
        <source srcset="build/img/blog3.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/blog3.jpg" alt="texto Entrada blog" />
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.html">
        <h4>Terraza en el techo de tu casa</h4>
        <p>Escrito el: <span>20/10/2023</span> por: <span>Admin</span></p>
        <p>Consejos para contruir en tu casa con los mejores materiales y ahorrando dinero</p>
      </a>
    </div>
  </article>

  <article class="entrada-blog">
    <div class="image">
      <picture>
        <source srcset="build/img/blog4.webp" type="image/webp" />
        <source srcset="build/img/blog4.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/blog4.jpg" alt="texto Entrada blog" />
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.html">
        <h4>Guia para la decoración de tu hogar</h4>
        <p>Escrito el: <span>20/10/2023</span> por: <span>Admin</span></p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Non incidunt temporibus dolor consequatur eaque
          debitis, neque mollitia beatae aliquid accusantium!
        </p>
      </a>
    </div>
  </article>
</main>

<?php
incluirTemplate('footer');
?>