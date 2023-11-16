<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Conoce sobre Nosotros</h1>

  <div class="contenido-nosotros">
    <div class="imagen">
      <picture>
        <source srcset="build/img/nosotros.webp" type="image/webp" />
        <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre nosotros" />
      </picture>
    </div>

    <div class="texto-nosotros">
      <blockquote>25 años de experiencia</blockquote>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero accusamus hic sint ipsum possimus voluptates
        alias tempore veritatis labore sapiente, amet laudantium minima! Voluptatem necessitatibus eum nemo impedit
        recusandae quam.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio iste officia voluptatum nihil eveniet, dicta
        corporis porro omnis molestiae quos perferendis ab sequi repellat! Porro perferendis, quisquam magni iste
        pariatur, deserunt hic odio libero debitis asperiores cum. Nihil dolore veritatis provident suscipit esse,
        illum quo est doloribus deleniti autem, laudantium eveniet ad quidem voluptates cum! Nisi, totam error. Odio
        dolorum laudantium totam iste cumque accusantium voluptas, porro, ducimus cum natus unde dignissimos fugiat
        minus. Iure, quisquam molestias eaque atque doloremque eos. Fuga, earum. Eveniet iste ex quisquam iusto
        delectus, doloremque cumque repellat doloribus eum, neque dolor facere commodi ab. Recusandae?
      </p>
    </div>
  </div>
</main>

<section class="contenedor">
  <h1>Más sobre Nosotros</h1>
  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="Icono seguridad" />
      <h3>seguridad</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo aperiam ea, deserunt facere dolorem totam
        cupiditate accusamus ut, consectetur officia distinctio iste incidunt repellat ex, illo expedita corrupti
        sed ullam?
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono Precio" />
      <h3>Precio</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo aperiam ea, deserunt facere dolorem totam
        cupiditate accusamus ut, consectetur officia distinctio iste incidunt repellat ex, illo expedita corrupti
        sed ullam?
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono Tiempo" />
      <h3>Tiempo</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo aperiam ea, deserunt facere dolorem totam
        cupiditate accusamus ut, consectetur officia distinctio iste incidunt repellat ex, illo expedita corrupti
        sed ullam?
      </p>
    </div>
  </div>
</section>

<?php
incluirTemplate('footer');
?>