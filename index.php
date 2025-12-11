<?php
get_header();
?>

<main id="primary" class="site-main">

    <section class="hero-gov-section">
        
    </section>

    <section class="quick-access-section">
        <div class="container">
            <div class="gov-grid-3">
                
                <article class="gov-card">
                    <div class="card-header">
                        <h3>Documento Oficial</h3>
                    </div>
                    <div class="card-body">
                        <p>Acceso completo al texto de la Norma Halal Latinoamericana versión 2021-3.0.</p>
                        <ul class="gov-list">
                            <li><a href="/norma/sacrificio">Sacrificio Animal Ritual</a></li>
                            <li><a href="/norma/aditivos">Clasificación de Aditivos</a></li>
                            <li><a href="/norma/insumos">Insumos y Materias Primas</a></li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="/norma" class="gov-link-arrow">Leer Norma Completa &rarr;</a>
                    </div>
                </article>

                <article class="gov-card">
                    <div class="card-header">
                        <h3>Entes Certificadores</h3>
                    </div>
                    <div class="card-body">
                        <p>Directorio de organismos acreditados bajo el Comité Latinoamericano (C.L.A.C.H).</p>
                        <p class="text-small">Verifique la validez de los certificados emitidos por ChileHalal, EcuadorHalal y socios.</p>
                    </div>
                    <div class="card-footer">
                        <a href="/certificadores" class="gov-link-arrow">Ver Directorio &rarr;</a>
                    </div>
                </article>

                <article class="gov-card">
                    <div class="card-header">
                        <h3>Validación de Certificados</h3>
                    </div>
                    <div class="card-body">
                        <p>Herramienta de verificación de autenticidad de lotes y certificados de exportación.</p>
                        <form class="mini-validate-form">
                            <input type="text" class="gov-input-small" placeholder="N° de Certificado">
                            <button class="gov-btn-small">Validar</button>
                        </form>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <?php if ( is_active_sidebar( 'home-widgets' ) ) : ?>
        <section class="home-widgets-section">
            <div class="container">
                <?php dynamic_sidebar( 'home-widgets' ); ?>
            </div>
        </section>
    <?php endif; ?>

</main>

<?php
get_footer();