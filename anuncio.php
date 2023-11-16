<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor contenido-centrado">
  <h1>Casa en venta frente al bosque</h1>

  <picture>
    <source srcset="build/img/destacada.webp" type="image/webp" />
    <source srcset="build/img/destacada.jpg" type="image/jpeg" />
    <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de propiedad" />
  </picture>

  <div class="resumen-propiedad">
    <p class="precio">$3,000,000</p>

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

    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero accusamus hic sint ipsum possimus voluptates alias tempore veritatis
      labore sapiente, amet laudantium minima! Voluptatem necessitatibus eum nemo impedit recusandae quam.
    </p>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio iste officia voluptatum nihil eveniet, dicta corporis porro omnis
      molestiae quos perferendis ab sequi repellat! Porro perferendis, quisquam magni iste pariatur, deserunt hic odio libero debitis
      asperiores cum. Nihil dolore veritatis provident suscipit esse, illum quo est doloribus deleniti autem, laudantium eveniet ad
      quidem voluptates cum! Nisi, totam error. Odio dolorum laudantium totam iste cumque accusantium voluptas, porro, ducimus cum natus
      unde dignissimos fugiat minus. Iure, quisquam molestias eaque atque doloremque eos. Fuga, earum. Eveniet iste ex quisquam iusto
      delectus, doloremque cumque repellat doloribus eum, neque dolor facere commodi ab. Recusandae?
    </p>
  </div>
</main>

<?php
incluirTemplate('footer');
?>