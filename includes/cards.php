<?php
    include '../src/data_cards.php';
?>

<div class="container" id="container-cards">
    <div class="card-container">
        <?php foreach ($cards as $card): ?>
            <div class="card">
                <img src="<?php echo $card['imagen']; ?>" class="card-image" alt="Imagen de la Card">
                <div class="card-content">
                    <h3 style="color:azure;">
                        <?php echo $card['titulo']; ?>
                    </h3>
                    <p style="color:azure;">
                        <?php echo $card['contenido']; ?>
                    </p>
                </div>
                <button class="btn-grad">ver</button>
            </div>
        <?php endforeach; ?>
    </div>
</div>