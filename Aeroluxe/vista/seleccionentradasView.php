<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">¿Quieres tus entradas para acceder a Aeroluxe?</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Aquí puedes comprar las distintas entradas</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#entradas" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Comprar entradas</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/user-profile.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section>
<!-- End Hero -->

  <!-- ======= Joinus Section ======= -->
  <section id="entradas" class="inicio-sesion-section">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Únete</h2>
        <p>Obtén tu pase al paraíso</p>
      </header>

      <div class="row">

        <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100">
          <div class="post-box">
            <div class="post-img"><img src="<?php echo URL ?>/assets/img/planbasicoup.png" class="img-fluid" alt=""></div>
            <h3 class="post-title">Pase único</h3>
            <div style="text-align: center;">
            <ul class="list-unstyled">
                <li>Piscina principal</li>
                <li>Aseo premium</li>
                <li>Transporte aéreo</li>
                <li style="text-decoration: line-through;">Piscinas secundarias</li>
                <li style="text-decoration: line-through;">Bufé libre</li>
                <li style="text-decoration: line-through;">Barra libre</li>
                <li style="text-decoration: line-through;">Suites</li>
              </ul>
            </div>
            <a href="#purchase" class="readmore stretched-link mt-auto"><span>Comprar</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100">
          <div class="post-box">
            <div class="post-img"><img src="<?php echo URL ?>/assets/img/planmensualup.png" class="img-fluid" alt=""></div>
            <h3 class="post-title">Pase mensual</h3>
            <div style="text-align: center;">
            <ul class="list-unstyled">
                <li>Piscina principal</li>
                <li>Aseo premium</li>
                <li>Transporte aéreo</li>
                <li>Piscinas secundarias</li>
                <li style="text-decoration: line-through;">Bufé libre</li>
                <li style="text-decoration: line-through;">Barra libre</li>
                <li style="text-decoration: line-through;">Suites</li>
              </ul>
            </div>
            <a href="#purchase" class="readmore stretched-link mt-auto"><span>Comprar</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100">
          <div class="post-box">
            <div class="post-img"><img src="<?php echo URL ?>/assets/img/plananualup.png" class="img-fluid" alt=""></div>
            <h3 class="post-title">Pase anual</h3>
            <div style="text-align: center;">
            <ul class="list-unstyled">
                <li>Piscina principal</li>
                <li>Aseo premium</li>
                <li>Transporte aéreo</li>
                <li>Piscinas secundarias</li>
                <li>Bufé libre</li>
                <li>Barra libre</li>
                <li style="text-decoration: line-through;">Suites</li>
              </ul>
            </div>
            <a href="#purchase" class="readmore stretched-link mt-auto"><span>Comprar</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100">
          <div class="post-box">
            <div class="post-img"><img src="<?php echo URL ?>/assets/img/planpremiumup.png" class="img-fluid" alt=""></div>
            <h3 class="post-title">Pase premium</h3>
            <div style="text-align: center;">
            <ul class="list-unstyled">
                <li>Piscina principal</li>
                <li>Aseo premium</li>
                <li>Transporte aéreo</li>
                <li>Piscinas secundarias</li>
                <li>Bufé libre</li>
                <li>Barra libre</li>
                <li>Suites</li>
              </ul>
            </div>
            <a href="#purchase"><span>Comprar</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Join Us Section -->

  <!-- ======= Purchase Section ======= -->
<section id="purchase" class="purchase-section">

<div class="container" data-aos="fade-up">

    <div class="form-container">
    <header class="section-header">
        <p>Compra tu entrada aquí</p>
      </header>

        <form method="post" action="<?php echo URL . '/procesarcompra'; ?>">

            <div class="form-group">
                <label for="inputEntryType">Tipo de entrada</label>
                <select name="tipo_entrada" class="form-control" id="inputEntryType" required>
                    <option value="" disabled selected>Selecciona el tipo de entrada</option>
                    <option value="Único">Pase único (2500€)</option>
                    <option value="Mensual">Pase mensual (5000€)</option>
                    <option value="Anual">Plan anual (30000€)</option>
                    <option value="Premium">Plan premium (50000€)</option>
                </select>
            </div>

            <hr>

            <div class="form-group">
                <label for="inputName">Nombre</label>
                <input type="text" name="nombre" maxlength="50" required class="form-control" id="inputName">
            </div>

            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" name="email" maxlength="100" required class="form-control" id="inputEmail" placeholder="a@a.com">
            </div>

            <div class="form-group">
                <label for="inputPhone">Teléfono</label>
                <input type="tel" name="telefono" maxlength="15" required class="form-control" id="inputPhone">
            </div>

            <hr>

            <div class="form-group">
                <label for="inputCardNumber">Número de tarjeta</label>
                <input type="text" name="numero_tarjeta" maxlength="16" required class="form-control" id="inputCardNumber" placeholder="XXXX-XXXX-XXXX-XXXX">
            </div>

            <div class="form-group">
                <label for="inputExpirationDate">Fecha de vencimiento</label>
                <input type="text" name="fecha_vencimiento" maxlength="7" required class="form-control" id="inputExpirationDate" placeholder="MM/YY">
            </div>

            <button type="submit" class="btn btn-primary btn-lg btn-block btn-center">Comprar entrada</button>

        </form>
    </div>

</div>

</section><!-- End Purchase Section -->