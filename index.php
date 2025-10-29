<?php
$title = 'Gorras a la Moda | Inicio';
$active = 'inicio';
include __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section id="home" class="hero">
  <div class="hero-content">
    <h1 class="hero-title mb-3">Gorras a la Moda</h1>
    <h2 class="hero-subtitle">Encuentra la Gorra Perfecta</h2>
    <p class="hero-text">Variedad de estilos para todos los gustos.</p>
  </div>
</section>

<!-- Drop Banner TUMAFIRE -->
<section class="drop-banner container-fluid" style="background-image: url('img/drop.jpg');">
  <div class="drop-overlay"></div>
  <div class="drop-content">
    <h2 class="drop-title">DROP TUMAFIRE 002</h2>
    <p class="drop-subtitle">SALÍ CALIENTE CON TUMA</p>
    <a href="gorras.php" class="cta-button">EXPLORAR</a>
  </div>
</section>

<!-- Carrusel de Productos -->
<div class="container my-5 py-4">
  <h3 class="section-title text-center mb-5">Lo Más Vendido</h3>
  <div class="d-flex justify-content-center">
    <div id="gorrasCarrusel" class="carousel slide carousel-gorras" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#gorrasCarrusel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#gorrasCarrusel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#gorrasCarrusel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#gorrasCarrusel" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#gorrasCarrusel" data-bs-slide-to="4"></button>
        <button type="button" data-bs-target="#gorrasCarrusel" data-bs-slide-to="5"></button>
        <button type="button" data-bs-target="#gorrasCarrusel" data-bs-slide-to="6"></button>
        <button type="button" data-bs-target="#gorrasCarrusel" data-bs-slide-to="7"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="carousel-image-container">
            <img src="img/gorra1.jpg" class="d-block carousel-img" alt="Gorra Deportiva">
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image-container">
            <img src="img/gorra2.jpg" class="d-block carousel-img" alt="Gorra Vintage">
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image-container">
            <img src="img/gorra3.jpg" class="d-block carousel-img" alt="Gorra de River">
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image-container">
            <img src="img/gorra4.jpg" class="d-block carousel-img" alt="Gorra de Boca">
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image-container">
            <img src="img/gorra5.jpg" class="d-block carousel-img" alt="Gorra de Pesca">
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image-container">
            <img src="img/tumafire.jpg" class="d-block carousel-img" alt="Gorra TUMAFIRE Verde">
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image-container">
            <img src="img/tumafire2.jpg" class="d-block carousel-img" alt="Gorra TUMAFIRE Negra">
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image-container">
            <img src="img/tumafire3.jpg" class="d-block carousel-img" alt="Gorra TUMAFIRE Blanca">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#gorrasCarrusel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#gorrasCarrusel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </div>
</div>

<!-- About Section -->
<section id="about" class="about">
  <div class="container">
    <div class="about-content">
      <h2 class="about-title">¿Quiénes Somos?</h2>
      <p class="about-text">Somos una tienda dedicada a la venta de gorras con diseños únicos y de alta calidad. Ofrecemos una amplia gama de estilos para cada ocasión.</p>
      <p class="about-text">A su disposición: Ignacio, Leandro, Ismael, Mauro y Maximiliano </p>
    </div>
  </div>
</section>

<!-- Estilos Personalizados -->
<style>
/* Hero Section */
.hero {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  padding: 100px 20px;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.hero::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.1);
}

.hero-content {
  position: relative;
  z-index: 1;
}

.hero-title {
  color: white !important;
  font-size: 3.5rem;
  font-weight: 800;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
  animation: fadeInDown 1s ease;
}

.hero-subtitle {
  color: white;
  font-size: 2rem;
  font-weight: 600;
  margin-bottom: 15px;
}

.hero-text {
  color: rgba(255, 255, 255, 0.95);
  font-size: 1.2rem;
  max-width: 600px;
  margin: 0 auto;
}

/* Drop Banner TUMAFIRE - Gama Azul */
.drop-banner {
  position: relative;
  background-size: cover;
  background-position: center;
  padding: 120px 20px;
  text-align: center;
  margin: 60px 0;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
}

.drop-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, rgba(30, 144, 255, 0.85) 0%, rgba(0, 119, 182, 0.9) 100%);
  z-index: 1;
}

.drop-content {
  position: relative;
  z-index: 2;
}

.drop-title {
  color: white;
  font-size: 3.5rem;
  font-weight: 900;
  letter-spacing: 3px;
  text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
  margin-bottom: 20px;
  animation: pulse 2s infinite;
}

.drop-subtitle {
  color: rgba(255, 255, 255, 0.95);
  font-size: 1.5rem;
  font-weight: 600;
  letter-spacing: 2px;
  margin-bottom: 30px;
}

.cta-button {
  display: inline-block;
  background: linear-gradient(135deg, #4169E1 0%, #1E90FF 100%);
  color: white;
  padding: 15px 50px;
  font-size: 1.2rem;
  font-weight: 700;
  text-decoration: none;
  border-radius: 50px;
  border: 3px solid white;
  transition: all 0.3s ease;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
  letter-spacing: 1px;
}

.cta-button:hover {
  background: linear-gradient(135deg, #1E90FF 0%, #00BFFF 100%);
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
  color: white;
}

/* Carrusel de Gorras */
.section-title {
  font-size: 2.5rem;
  font-weight: 700;
  color: #333;
  position: relative;
  padding-bottom: 15px;
}

.section-title::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 4px;
  background: linear-gradient(90deg, #667eea, #764ba2);
  border-radius: 2px;
}

.carousel-gorras {
  max-width: 600px;
  width: 100%;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
  border-radius: 15px;
  overflow: hidden;
}

.carousel-image-container {
  width: 100%;
  height: 500px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f8f9fa;
  overflow: hidden;
}

.carousel-img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  object-position: center;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-color: rgba(0, 0, 0, 0.5);
  border-radius: 50%;
  padding: 20px;
}

.carousel-indicators button {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #667eea;
}

/* About Section */
.about {
  background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  padding: 80px 20px;
  margin-top: 60px;
}

.about-content {
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
}

.about-title {
  font-size: 2.5rem;
  font-weight: 700;
  color: #333;
  margin-bottom: 25px;
}

.about-text {
  font-size: 1.2rem;
  color: #555;
  line-height: 1.8;
}

/* Animaciones */
@keyframes fadeInDown {
  from {
    opacity: 0;
    transform: translateY(-30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes pulse {
  0%, 100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.05);
  }
}

/* Responsive */
@media (max-width: 768px) {
  .hero-title {
    font-size: 2.5rem;
  }
  
  .drop-title {
    font-size: 2rem;
  }
  
  .carousel-image-container {
    height: 350px;
  }
  
  .section-title {
    font-size: 2rem;
  }
}
</style>

<script src="js/script.js"></script>
<?php include __DIR__ . '/includes/footer.php'; ?>