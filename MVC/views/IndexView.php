

    <!-- Incluye el encabezado de la página -->
    <?php include __DIR__ . '/../views/header.php'; ?>
    
    
    <body>   
        
    <img id="Imagen" src="../assets/images/automation.webp" alt="image 2">
        <h1>HOLA MUNDO</h1>

    <div class="container">
        <?php foreach ($data as $service): ?>
            <section id="seccion<?= $service['id']; ?>">
                <h2><?= $service['name']; ?></h2>
                <p><?= $service['description']; ?></p>
            </section>
        <?php endforeach; ?>
    </div>

    <!-- Incluye el pie de página -->
    <?php include __DIR__ . '/../views/footer.php'; ?>
</body>

