<?php
$title = 'Catálogo de Gorras';
$active = 'gorras';
include __DIR__ . '/includes/header.php';

?>
<!-- Hero Header -->
<section class="catalog-hero">
  <div class="container">
    <h1 class="catalog-hero-title">Nuestro Catálogo</h1>
    <p class="catalog-hero-subtitle">Descubre nuestra colección exclusiva de gorras</p>
  </div>
</section>
  <div class="container my-5">
   <div class="productos-grid row justify-content-center">
    <p class="text-center">Cargando gorras...</p>
  </div>
</div>

<script src="js/productos_db.js"></script>
<script src="js/catalogo_db.js"></script>
<?php include __DIR__ . '/includes/footer.php'; ?>
<style>

/* Hero Header */
.catalog-hero {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  padding: 60px 20px;
  text-align: center;
  margin-bottom: 50px;
  position: relative;
  overflow: hidden;
}

.catalog-hero::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.1);
}

.catalog-hero .container {
  position: relative;
  z-index: 1;
}

.catalog-hero-title {
  color: white;
  font-size: 2.5rem;
  font-weight: 800;
  margin-bottom: 10px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.catalog-hero-subtitle {
  color: rgba(255, 255, 255, 0.95);
  font-size: 1.1rem;
  margin: 0;
}