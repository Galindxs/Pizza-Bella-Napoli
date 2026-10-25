<?php
require __DIR__ . '/includes/header.php';

$destacadas = [
  ['Margarita Napolitana', 'Pomodoro, mozzarella fresca, albahaca y aceite de oliva.', 'https://images.unsplash.com/photo-1571407970349-bc81e7e96d47?auto=format&fit=crop&w=800&q=80', 'Desde L. 165.00'],
  ['Pepperoni al horno', 'Pepperoni especiado, mozzarella y salsa de tomate de la casa.', 'https://images.unsplash.com/photo-1628840042765-356cda07504e?auto=format&fit=crop&w=800&q=80', 'Desde L. 185.00'],
  ['Cuatro quesos', 'Mozzarella, parmesano, provolone y gorgonzola.', 'https://images.unsplash.com/photo-1579751626657-72bc17010498?auto=format&fit=crop&w=800&q=80', 'Desde L. 210.00']
];

?>

<section class="hero rounded-4 p-4 p-md-5 mb-5">
  <div class="row align-items-center g-4">
    <div class="col-lg-7">
      <span class="badge text-bg-warning mb-3">Tradición italiana desde 1988</span>
      <h1 class="display-3 fw-bold">El sabor de <span class="text-gold">Nápoles</span>, recién salido del horno.</h1>
      <p class="lead my-4">Pizzas artesanales, ingredientes frescos y el inconfundible aroma del horno de leña. Tu próxima favorita está a un clic.</p>
      <a href="menu.php" class="btn btn-warning btn-lg me-2">Explorar menú</a>
      <a href="arma_pizza.php" class="btn btn-outline-light btn-lg">Arma tu pizza</a>
    </div>
    <div class="col-lg-5">
      <img class="img-fluid hero-img" src="https://images.unsplash.com/photo-1571407970349-bc81e7e96d47?auto=format&fit=crop&w=900&q=85"
        alt="Pizza artesanal">
    </div>
  </div>
</section>

<section class="mb-5">
  <div class="d-flex justify-content-between align-items-end mb-3">
    <div>
      <p class="eyebrow">Lo más pedido</p>
      <h2 class="section-title">Las favoritas de la casa</h2>
    </div><a href="menu.php" class="link-dark">Ver todo el menú →</a>
  </div>
  <div class="row g-4">
    <?php foreach ($destacadas as $pizza): ?>
      <div class="col-md-4 col-xl-4">
        <article class="card food-card h-100">
          <img src="<?= $pizza[2] ?>" class="card-img-top" alt="Pizza <?= $pizza[0] ?>">
          <div class="card-body">
            <h3 class="h5"><?= $pizza[0] ?></h3>
            <p class="text-secondary"><?= $pizza[1] ?></p><strong><?= $pizza[3] ?></strong>
          </div>
        </article>
      </div>
    <?php endforeach; ?>
  </div>

</section>
<section class="story rounded-4 p-4 p-md-5 mb-5">
  <div class="row align-items-center g-4">
    <div class="col-md-7">
      <p class="eyebrow">Hecho con paciencia</p>
      <h2 class="section-title">Una receta, muchas generaciones.</h2>
      <p>En Bella Napoli respetamos el ritual: masa fermentada lentamente, ingredientes seleccionados
        y cocción intensa en horno de leña.
        Cada pizza se prepara al momento para compartir un pedacito de Italia en Honduras.
      </p>
      <span class="badge text-bg-danger me-2">10% de descuento</span>
      <span class="text-secondary"><strong>En pedidos de 3 pizzas o más.</strong></span>
    </div>
    <div class="col-md-5">
      <img class="img-fluid rounded-4" src="https://images.unsplash.com/photo-1579751626657-72bc17010498?auto=format&fit=crop&w=800&q=80" alt="Pizza recién horneada">
    </div>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>