<?php
require __DIR__ . '/includes/header.php';
$sucursales = [['Tegucigalpa', 'Bulevar Morazán', 'Lun-Dom, 11:00 a. m.-10:00 p. m.'], ['San Pedro Sula', 'Barrio Guamilito', 'Lun-Dom, 11:00 a. m.-10:00 p. m.'], ['La Ceiba', 'Zona centro', 'Lun-Dom, 11:00 a. m.-9:00 p. m.']];
?>

<div class="page-heading mb-4">
    <p class="eyebrow">Estamos cerca de ti</p>
    <h1 class="section-title">Sucursales y contacto</h1>
    <p class="text-secondary">Visítanos y prueba un manjar.</p>
</div>

<div class="row g-3 mb-5">
    <?php foreach ($sucursales as $s): ?>
        <div class="col-md-4">
            <div class="branch-card h-100"><span class="branch-icon">📍</span>
                <h2 class="h5"><?= $s[0] ?></h2>
                <p class="mb-1"><?= $s[1] ?></p>
                <small class="text-secondary"><?= $s[2] ?></small>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">
    <div>
        <p class="eyebrow mb-1">Administración</p>
        <h2 class="section-title">Órdenes de la sesión</h2>
    </div>
    <span class="badge text-bg-dark">0 pedido(s)</span>
</div>
<div class="alert alert-warning">
    <span class="badge text-bg-warning me-2">Sin pedidos</span>
    Todavía no hay órdenes registradas. Cuando completes un checkout aparecerán aquí.
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>