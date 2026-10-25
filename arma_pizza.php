<?php
require __DIR__ . '/includes/header.php';
$masas = ['tradicional' => 'Tradicional italiana', 'delgada' => 'Delgada / crocante', 'rellena' => 'Orilla rellena de queso (+ L. 55.00)'];
$salsas = ['pomodoro' => 'Pomodoro clásica', 'alfredo' => 'Salsa blanca Alfredo', 'pesto' => 'Pesto genovés', 'barbacoa' => 'Barbacoa dulce'];
$quesos = ['mozzarella' => 'Mozzarella fresco', 'parmesano' => 'Queso parmesano reggiano', 'provolone' => 'Queso provolone'];
$ingredientes = ['Pepperoni' => 25, 'Jamón de pavo' => 22, 'Champiñones frescos' => 18, 'Pimientos morrones' => 15, 'Aceitunas negras' => 15, 'Albahaca fresca' => 12, 'Tocineta ahumada' => 28, 'Carne molida artesanal' => 30];
?>

<div class="page-heading mb-4">
    <p class="eyebrow">Tu receta, tus reglas</p>
    <h1 class="section-title">Arma tu pizza</h1>
    <p class="text-secondary">Selecciona tu combinación y continúa al checkout para completar los datos de facturación.</p>
</div>
<form action="" method="post" class="form-panel">
    <div class="container">
        <div class="row g-4 ">
            <div class="col-lg-6">
                <h2 class="h5 mt-4 mb-3">1. Elige tu masa</h2>

                <?php foreach ($masas as $valor => $nombre): ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="masa" id="masa_<?= $valor ?>" value="<?= $valor ?>" <?= $valor === 'tradicional' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="masa_<?= $valor ?>"><?= $nombre ?></label>
                    </div>
                <?php endforeach; ?>
            

            
                <h2 class="h5 mt-4 mb-3">2. Salsa base</h2>
                <select class="form-select" name="salsa">
                    <?php foreach ($salsas as $valor => $nombre): ?>
                        <option value="<?= $valor ?>"><?= $nombre ?></option>
                    <?php endforeach; ?>
                </select>
            

            
                <h2 class="h5 mt-4 mb-3">3. Queso principal</h2>
                <select class="form-select" name="queso">
                    <?php foreach ($quesos as $valor => $nombre): ?>
                        <option value="<?= $valor ?>"><?= $nombre ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-lg-6">
                <h2 class="h5 mt-4 mb-3">4. Ingredientes adicionales</h2>
                <p class="small text-secondary">Precio adicional por ingrediente y por pizza.</p>
                <div class="row g-2">
                    <?php foreach ($ingredientes as $nombre => $precio): ?>
                        <div class="col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ingredientes[]" id="ing_<?= md5($nombre) ?>" value="<?= $nombre ?>">
                                <label class="form-check-label" for="ing_<?= md5($nombre) ?>"><?= $nombre ?>
                                    <span class="d-block small text-secondary">+ L. <?= number_format($precio, 2) ?></span></label>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="alert alert-light border mt-4 mb-0">
                    <strong>Precio base:</strong> L. 245.00 (pizza mediana). El costo final se calculará en el checkout.
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4">
    <button class="btn btn-warning btn-lg" type="submit">Continuar al checkout</button>
</form>
<?php require __DIR__ . '/includes/footer.php'; ?>