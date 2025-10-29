<?php
$title = 'Finalizar Compra';
$active = 'checkout';
include __DIR__ . '/includes/header.php';
?>
<div class="checkout-container container">
  <h1 class="text-center mb-4">Finalizar Compra</h1>

  <h2>Datos Personales</h2>
  <div class="row">
    <div class="col-12 form-group">
      <label for="nombre">Nombre *</label>
      <input type="text" id="nombre" placeholder="Ej: Leonel" required>
    </div>
    <div class="col-12 form-group">
      <label for="apellido">Apellido *</label>
      <input type="text" id="apellido" placeholder="Ej: Messi" required>
    </div>
    <div class="col-12 form-group">
      <label for="email">E-mail *</label>
      <input type="email" id="email" placeholder="Ej: tugmail@email.com" required>
    </div>
    <div class="col-12 form-group">
      <label for="telefono">Teléfono *</label>
      <input type="tel" id="telefono" placeholder="Ej: 1122334455" required>
    </div>
    <div class="col-12 form-group">
      <label for="codigoPostal">Código Postal *</label>
      <input type="text" id="codigoPostal" placeholder="Ej: 5000" required>
    </div>
    <div class="col-12 form-group">
      <label for="provincia">Provincia *</label>
      <select id="provincia" required>
        <option value="" disabled selected>Seleccionar provincia</option>
        <option value="Buenos Aires">Buenos Aires</option>
        <option value="Cordoba">Córdoba</option>
        <option value="Mendoza">Mendoza</option>
      </select>
    </div>
  </div>

  <h2>Pago</h2>
  <div class="row">
    <div class="col-12 form-group">
      <label for="tarjeta">Número de tarjeta *</label>
      <input type="text" id="tarjeta" placeholder="Ej: 1234 5678 9012 3456" required>
    </div>
    <div class="col-12 form-group">
      <label for="vencimiento">Vencimiento (MM/AA) *</label>
      <input type="text" id="vencimiento" placeholder="Ej: 01/31" maxlength="5" required>
    </div>
    <div class="col-12 form-group">
      <label for="cvc">CVV *</label>
      <input type="text" id="cvc" placeholder="Ej: 123" maxlength="3" required>
    </div>
  </div>

  <div class="form-check mt-4 mb-3">
    <input type="checkbox" class="form-check-input" id="condiciones" required>
    <label class="form-check-label" for="condiciones">Acepto las condiciones y políticas de compra</label>
  </div>

  <button class="cta" id="btnFinalizar" style="width: 100%; padding: 15px; margin-top: 20px;">FINALIZAR COMPRA</button>
</div>

<script>
async function confirmCheckout() {
  const nombre = document.getElementById('nombre').value.trim();
  const condiciones = document.getElementById('condiciones').checked;
  if (!nombre || !condiciones) {
    alert("Por favor, completa al menos el nombre y acepta las condiciones.");
    return;
  }
  
  const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
  if (carrito.length === 0) {
    alert('Tu carrito está vacío.');
    return;
  }
  const items = carrito.map(p => ({ id: p.id, cantidad: p.cantidad || 1 }));
  try {
    const res = await fetch('confirmar_pedido.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ items })
    });
    if (!res.ok) {
      const err = await res.json().catch(()=>({error:'Error'}));
      alert('No se pudo confirmar el pedido: ' + (err.error || res.status));
      return;
    }
    const data = await res.json();
    if (data.ok) {
      localStorage.removeItem('carrito');
      window.location.href = 'compra-exitosa.php';
    } else {
      alert('Error al confirmar: ' + (data.error || 'desconocido'));
    }
  } catch (e) {
    alert('Error de red: ' + e.message);
  }
}
document.getElementById('btnFinalizar').addEventListener('click', confirmCheckout);
</script>
<?php include __DIR__ . '/includes/footer.php'; ?>
