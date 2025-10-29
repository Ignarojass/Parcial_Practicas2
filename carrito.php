<?php
$title = 'Carrito de Compras';
$active = 'carrito';
include __DIR__ . '/includes/header.php';
?>

<!-- Hero Header -->
<section class="cart-hero">
  <div class="container">
    <h1 class="cart-hero-title">Tu Carrito</h1>
    <p class="cart-hero-subtitle">Revisa tus productos antes de finalizar la compra</p>
  </div>
</section>

<!-- Cart Section -->
<section class="cart-section">
  <div class="container">
    <div class="row">
      <!-- Cart Items -->
      <div class="col-lg-8">
        <div class="cart-card">
          <div class="cart-header">
            <h2 class="cart-title">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
              </svg>
              Productos en tu carrito
            </h2>
            <span class="cart-count" id="cart-item-count">TUMA</span>
          </div>
          
          <div id="carrito-container" class="cart-items-container">
            
          </div>
        </div>
      </div>

      
      <div class="col-lg-4">
        <div class="summary-sticky-wrapper">
          <div class="summary-card">
            <h3 class="summary-title">Resumen del Pedido</h3>
            
            <div class="summary-details">
              <div class="summary-row">
                
              </div>
              <div class="summary-row">
                <span class="summary-label">Envío:</span>
                <span class="summary-value" id="shipping">Gratis</span>
              </div>
              <div class="summary-divider"></div>
              <div class="summary-row summary-total">
                <span class="summary-label">Total:</span>
                <span class="summary-value" id="total">$0.00</span>
              </div>
            </div>

            <div class="summary-actions">
              <a href="checkout.php" class="btn-checkout" id="checkout-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                <span>Finalizar Compra</span>
              </a>
              <button onclick="vaciarCarrito()" class="btn-clear" id="clear-cart-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="3 6 5 6 21 6"></polyline>
                  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                </svg>
                <span>Vaciar Carrito</span>
              </button>
            </div>

            <div class="security-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              </svg>
              <span>Compra 100% segura</span>
            </div>
          </div>

          
          <div class="promo-card">
            <h4 class="promo-title">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 12 20 22 4 22 4 12"></polyline>
                <rect x="2" y="7" width="20" height="5"></rect>
                <line x1="12" y1="22" x2="12" y2="7"></line>
                <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
              </svg>
              ¿Tienes un código de descuento?
            </h4>
            <div class="promo-input-group">
              <input type="text" class="promo-input" placeholder="Ingresa tu código">
              <button class="promo-btn">Aplicar</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="continue-shopping">
      <a href="gorras.php" class="btn-continue">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
        <span>Continuar Comprando</span>
      </a>
    </div>
  </div>
</section>


<style>

.cart-hero {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  padding: 60px 20px;
  text-align: center;
  margin-bottom: 50px;
  position: relative;
  overflow: hidden;
}

.cart-hero::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.1);
}

.cart-hero .container {
  position: relative;
  z-index: 1;
}

.cart-hero-title {
  color: white;
  font-size: 2.5rem;
  font-weight: 800;
  margin-bottom: 10px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.cart-hero-subtitle {
  color: rgba(255, 255, 255, 0.95);
  font-size: 1.1rem;
  margin: 0;
}


.cart-section {
  padding: 0 20px 80px;
}


.cart-card {
  background: white;
  border-radius: 20px;
  padding: 30px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
  margin-bottom: 30px;
}

.cart-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 25px;
  padding-bottom: 20px;
  border-bottom: 2px solid #f0f0f0;
}

.cart-title {
  font-size: 1.5rem;
  font-weight: 700;
  color: #333;
  display: flex;
  align-items: center;
  gap: 12px;
  margin: 0;
}

.cart-title svg {
  color: #667eea;
}

.cart-count {
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: white;
  padding: 6px 16px;
  border-radius: 20px;
  font-size: 0.9rem;
  font-weight: 600;
}

.cart-items-container {
  min-height: 300px;
}

/* Empty Cart */
.empty-cart {
  text-align: center;
  padding: 60px 20px;
}

.empty-cart svg {
  color: #ddd;
  margin-bottom: 20px;
}

.empty-cart h3 {
  font-size: 1.5rem;
  color: #666;
  margin-bottom: 10px;
}

.empty-cart p {
  color: #999;
  margin-bottom: 30px;
}

.btn-shop-now {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: white;
  padding: 14px 30px;
  border-radius: 12px;
  text-decoration: none;
  font-weight: 600;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
}

.btn-shop-now:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
  color: white;
}


.summary-sticky-wrapper {
  position: -webkit-sticky;
  position: sticky;
  top: 20px;
  z-index: 100;
}


.summary-card {
  background: white;
  border-radius: 20px;
  padding: 30px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
  margin-bottom: 20px;
}

.summary-title {
  font-size: 1.4rem;
  font-weight: 700;
  color: #333;
  margin-bottom: 25px;
}

.summary-details {
  margin-bottom: 25px;
}

.summary-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 15px;
}

.summary-label {
  color: #666;
  font-size: 1rem;
}

.summary-value {
  color: #333;
  font-weight: 600;
  font-size: 1rem;
}

.summary-divider {
  height: 1px;
  background: #e0e0e0;
  margin: 20px 0;
}

.summary-total {
  margin-bottom: 0;
}

.summary-total .summary-label {
  font-size: 1.2rem;
  font-weight: 700;
  color: #333;
}

.summary-total .summary-value {
  font-size: 1.5rem;
  font-weight: 800;
  color: #667eea;
}


.summary-actions {
  display: flex;
  flex-direction: column;
  gap: 12px;
  margin-bottom: 20px;
}

.btn-checkout {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: white;
  padding: 16px 24px;
  border-radius: 12px;
  text-decoration: none;
  font-weight: 700;
  font-size: 1.05rem;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
  border: none;
  cursor: pointer;
}

.btn-checkout:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
  color: white;
}

.btn-clear {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  background: white;
  color: #dc3545;
  padding: 12px 24px;
  border: 2px solid #dc3545;
  border-radius: 12px;
  font-weight: 600;
  transition: all 0.3s ease;
  cursor: pointer;
  font-family: inherit;
}

.btn-clear:hover {
  background: #dc3545;
  color: white;
}

/* Security Badge */
.security-badge {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 12px;
  background: #f8f9fa;
  border-radius: 10px;
  color: #28a745;
  font-size: 0.9rem;
  font-weight: 600;
}

.security-badge svg {
  color: #28a745;
}


.promo-card {
  background: linear-gradient(135deg, #f8f9fa, #e9ecef);
  border-radius: 15px;
  padding: 25px;
  margin-bottom: 20px;
}

.promo-title {
  font-size: 1rem;
  font-weight: 600;
  color: #333;
  margin-bottom: 15px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.promo-title svg {
  color: #667eea;
}

.promo-input-group {
  display: flex;
  gap: 10px;
}

.promo-input {
  flex: 1;
  padding: 12px 15px;
  border: 2px solid #ddd;
  border-radius: 10px;
  font-size: 0.95rem;
  transition: all 0.3s ease;
}

.promo-input:focus {
  outline: none;
  border-color: #667eea;
}

.promo-btn {
  padding: 12px 20px;
  background: #667eea;
  color: white;
  border: none;
  border-radius: 10px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  white-space: nowrap;
}

.promo-btn:hover {
  background: #764ba2;
}


.continue-shopping {
  text-align: center;
  margin-top: 30px;
}

.btn-continue {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  color: #667eea;
  font-weight: 600;
  text-decoration: none;
  padding: 12px 24px;
  border: 2px solid #667eea;
  border-radius: 12px;
  transition: all 0.3s ease;
}

.btn-continue:hover {
  background: #667eea;
  color: white;
  transform: translateX(-5px);
}


.cart-item {
  transition: all 0.3s ease;
}

.cart-item:hover {
  box-shadow: 0 4px 12px rgba(0,0,0,0.1) !important;
  transform: translateY(-2px) !important;
}


@media (max-width: 991px) {
  .summary-sticky-wrapper {
    position: static;
  }
}

@media (max-width: 768px) {
  .cart-hero-title {
    font-size: 2rem;
  }

  .cart-card {
    padding: 20px;
  }

  .cart-header {
    flex-direction: column;
    align-items: flex-start;
    gap: 15px;
  }

  .summary-card {
    padding: 25px 20px;
  }

  .promo-input-group {
    flex-direction: column;
  }

  .promo-btn {
    width: 100%;
  }
}
</style>

<script src="js/carrito.js"></script>
<?php include __DIR__ . '/includes/footer.php'; ?>