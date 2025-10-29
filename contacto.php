<?php
$title = 'Contacto';
$active = 'contacto';
include __DIR__ . '/includes/header.php';
?>


<section class="contact-hero">
  <div class="container">
    <h1 class="contact-hero-title">Contáctanos</h1>
    <p class="contact-hero-subtitle">Estamos aquí para ayudarte. Envíanos tu consulta y te responderemos pronto.</p>
  </div>
</section>


<section id="contact" class="contact-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="contact-card">
          <div class="contact-card-header">
            <h2 class="contact-title">Envíanos un Mensaje</h2>
            <p class="contact-description">Completa el formulario y nos pondremos en contacto contigo</p>
          </div>
          
          <form action="#" method="post" class="contact-form">
            <div class="form-group">
              <label for="name" class="form-label">
                <i class="icon"></i> Nombre Completo
              </label>
              <input 
                type="text" 
                id="name" 
                name="name" 
                class="form-control" 
                placeholder="Ingresa tu nombre"
                required
              >
            </div>

            <div class="form-group">
              <label for="email" class="form-label">
                <i class="icon"></i> Correo Electrónico
              </label>
              <input 
                type="email" 
                id="email" 
                name="email" 
                class="form-control" 
                placeholder="tu@email.com"
                required
              >
            </div>

            <div class="form-group">
              <label for="message" class="form-label">
                <i class="icon"></i> Mensaje
              </label>
              <textarea 
                id="message" 
                name="message" 
                class="form-control" 
                rows="6"
                placeholder="Escribe tu mensaje aquí..."
                required
              ></textarea>
            </div>

            <button type="submit" class="btn-submit">
              <span class="btn-text">Enviar Mensaje</span>
              <span class="btn-icon">→</span>
            </button>
          </form>
        </div>
      </div>
    </div>

    
    <div class="row mt-5">
      <div class="col-md-4 mb-4">
        <div class="info-card">
          <div class="info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
          </div>
          <h3 class="info-title">Ubicación</h3>
          <p class="info-text">Mendoza, Argentina</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="info-card">
          <div class="info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
          </div>
          <h3 class="info-title">WhatsApp</h3>
          <p class="info-text">Contáctanos por mensaje</p>
          <p class="info-text">+54 2619122018</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="info-card">
          <div class="info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
              <polyline points="12 6 12 12 16 14"></polyline>
            </svg>
          </div>
          <h3 class="info-title">Horario</h3>
          <p class="info-text">Lun - Vie: 9:00 - 18:00</p>
        </div>
      </div>
    </div>
</section>


<style>

.contact-hero {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  padding: 80px 20px;
  text-align: center;
  margin-bottom: 60px;
  position: relative;
  overflow: hidden;
}

.contact-hero::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.1);
}

.contact-hero .container {
  position: relative;
  z-index: 1;
}

.contact-hero-title {
  color: white;
  font-size: 3rem;
  font-weight: 800;
  margin-bottom: 15px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.contact-hero-subtitle {
  color: rgba(255, 255, 255, 0.95);
  font-size: 1.2rem;
  max-width: 600px;
  margin: 0 auto;
}


.contact-section {
  padding: 40px 20px 80px;
}

.contact-card {
  background: white;
  border-radius: 20px;
  padding: 50px 40px;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.contact-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
}

.contact-card-header {
  text-align: center;
  margin-bottom: 40px;
}

.contact-title {
  font-size: 2.2rem;
  font-weight: 700;
  color: #333;
  margin-bottom: 15px;
}

.contact-description {
  color: #666;
  font-size: 1.1rem;
}


.contact-form {
  width: 100%;
}

.form-group {
  margin-bottom: 25px;
}

.form-label {
  display: block;
  font-size: 1rem;
  font-weight: 600;
  color: #444;
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.form-label .icon {
  font-size: 1.2rem;
}

.form-control {
  width: 100%;
  padding: 15px 20px;
  font-size: 1rem;
  border: 2px solid #e0e0e0;
  border-radius: 12px;
  transition: all 0.3s ease;
  font-family: inherit;
  background: #f8f9fa;
}

.form-control:focus {
  outline: none;
  border-color: #667eea;
  background: white;
  box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
}

.form-control::placeholder {
  color: #999;
}

textarea.form-control {
  resize: vertical;
  min-height: 150px;
}


.btn-submit {
  width: 100%;
  padding: 18px 30px;
  font-size: 1.1rem;
  font-weight: 700;
  color: white;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  border: none;
  border-radius: 12px;
  cursor: pointer;
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin-top: 30px;
  box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
}

.btn-submit:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
}

.btn-submit:active {
  transform: translateY(-1px);
}

.btn-icon {
  font-size: 1.5rem;
  transition: transform 0.3s ease;
}

.btn-submit:hover .btn-icon {
  transform: translateX(5px);
}

/* Info Cards */
.info-icon {
  margin-bottom: 20px;
  display: inline-block;
  color: #667eea;
  transition: all 0.3s ease;
}

.info-card:hover .info-icon {
  transform: translateY(-5px);
  color: #764ba2;
}

.info-icon svg {
  display: block;
  margin: 0 auto;
}
.info-card {
  background: white;
  border-radius: 15px;
  padding: 35px 25px;
  text-align: center;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease;
  height: 100%;
}

.info-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
}

.info-icon {
  font-size: 3rem;
  margin-bottom: 20px;
  display: inline-block;
  animation: bounce 2s infinite;
}

.info-title {
  font-size: 1.3rem;
  font-weight: 700;
  color: #333;
  margin-bottom: 10px;
}

.info-text {
  color: #666;
  font-size: 1rem;
  margin: 0;
}

/* Animations */
@keyframes bounce {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}

/* Responsive */
@media (max-width: 768px) {
  .contact-hero-title {
    font-size: 2.2rem;
  }

  .contact-hero-subtitle {
    font-size: 1rem;
  }

  .contact-card {
    padding: 35px 25px;
  }

  .contact-title {
    font-size: 1.8rem;
  }

  .form-control {
    padding: 12px 15px;
  }

  .btn-submit {
    padding: 15px 25px;
    font-size: 1rem;
  }

  .info-card {
    margin-bottom: 20px;
  }
}

@media (max-width: 576px) {
  .contact-hero {
    padding: 60px 15px;
  }

  .contact-card {
    padding: 25px 20px;
  }

  .contact-title {
    font-size: 1.6rem;
  }

  .contact-description {
    font-size: 0.95rem;
  }
}
</style>

<script src="js/script.js"></script>
<?php include __DIR__ . '/includes/footer.php'; ?>