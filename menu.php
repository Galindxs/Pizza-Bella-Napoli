<?php
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/catalogo.php';
?>

<div class="page-heading mb-4">
    <p class="eyebrow">Ingredientes seleccionados</p>
    <h1 class="section-title">Nuestro menú</h1>
    <p class="text-secondary">Precios en lempiras. <br>
        Las especialidades que no son pizza se venden en presentación individual.</p>
</div>

<?php foreach ($catalogo as $categoria => $productos): ?>
    <section class="mb-5">
        <h2 class="h3 category-title"><?= $categoria ?></h2>
        <div class="row g-4">
            <?php foreach ($productos as $producto): ?>
                <div class="col-md-6 col-xl-3">
                    <article class="card food-card h-100"><img src="<?= $producto['imagen'] ?>" class="card-img-top" alt="<?= $producto['nombre'] ?>">
                        <div class=" card-body">
                            <h3 class="h5"><?= $producto['nombre'] ?></h3>
                            <p class="text-secondary small"><?= $producto['ingredientes'] ?></p>
                            <table class="table table-sm price-table">
                                <thead>
                                    <tr>
                                        <th>Tamaño</th>
                                        <th class="text-end">Precio</th>
                                    </tr>
                                </thead>
                                <tbody><?php foreach ($producto['precios'] as $tamano => $precio): if ($precio > 0): ?>
                                            <tr>
                                                <td><?= $tamano ?><?= in_array($categoria, ['Pizzas Clásicas', 'Pizzas Gourmet de la Casa']) ? ' (' . (['Personal' => '8"', 'Mediana' => '12"', 'Familiar' => '16"', 'Gigante' => '20"'][$tamano]) . ')' : '' ?></td>
                                                <td class="text-end">L. <?= number_format($precio, 2) ?></td>
                                            </tr><?php endif;
                                            endforeach; ?>
                                </tbody>
                            </table>
                            <a class="btn btn-sm btn-outline-dark">Ordenar</a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </section>


<?php endforeach; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>