<?php
$cambio_icon_src = 'img/icons/' . "\xD0\xA1" . 'ambio.svg';
?>
<div class="transf_page">
    <div class="transf_strip" aria-hidden="true"></div>

    <header class="home_header app_content_column">
        <div class="home_header_user">
            <img src="img/icons/user.svg" alt="" class="home_header_avatar" width="44" height="44">
            <div class="home_header_text">
                <strong class="home_header_name">Juan López</strong>
                <span class="home_header_phone">+54 9 11 6264-4638</span>
            </div>
        </div>
        <img src="img/logo.svg" alt="" class="home_header_logo" width="56" height="40">
    </header>

    <!-- VIEW: main -->
    <main class="transf_main app_content_column" id="transf-view-main">
        <p class="cambio_label">Transferencias en efectivo</p>
        <div class="transf_btns">
            <button type="button" class="login_form_submit" id="transf-btn-enviar">Enviar una transferencia</button>
            <button type="button" class="transf_btn_outline" id="transf-btn-recibir">Recibe una transferencia</button>
        </div>
    </main>

    <!-- VIEW: enviar - form -->
    <main class="transf_main app_content_column" id="transf-view-enviar" hidden>
        <form class="transf_form" action="#" method="post" novalidate id="transf-enviar-form">
            <div>
                <p class="cambio_label">Ingrese los datos del destinatario</p>
                <div class="transf_fields_group">
                    <div class="transf_field_row">
                        <label class="transf_field_label" for="transf-dest-nombre">Nombre</label>
                        <input class="transf_field_input" type="text" id="transf-dest-nombre" name="dest_nombre" autocomplete="given-name">
                    </div>
                    <div class="transf_field_row">
                        <label class="transf_field_label" for="transf-dest-apellido">Apellido</label>
                        <input class="transf_field_input" type="text" id="transf-dest-apellido" name="dest_apellido" autocomplete="family-name">
                    </div>
                    <div class="transf_field_row">
                        <label class="transf_field_label" for="transf-dest-telefono">Teléfono</label>
                        <input class="transf_field_input" type="tel" id="transf-dest-telefono" name="dest_telefono" autocomplete="tel">
                    </div>
                </div>
            </div>

            <div>
                <p class="cambio_label">Verifique los datos del remitente</p>
                <div class="transf_fields_group">
                    <div class="transf_field_row">
                        <span class="transf_field_label">Nombre</span>
                        <input class="transf_field_input transf_field_input--readonly" type="text" value="Juan" readonly aria-label="Nombre del remitente">
                    </div>
                    <div class="transf_field_row">
                        <span class="transf_field_label">Apellido</span>
                        <input class="transf_field_input transf_field_input--readonly" type="text" value="López" readonly aria-label="Apellido del remitente">
                    </div>
                    <div class="transf_field_row">
                        <span class="transf_field_label">Teléfono</span>
                        <input class="transf_field_input transf_field_input--readonly" type="text" value="+54 9 11 6264-4638" readonly aria-label="Teléfono del remitente">
                    </div>
                </div>
            </div>

            <div>
                <p class="cambio_label">Ingrese el monto de la transferencia</p>
                <div class="cambio_input_row">
                    <div class="cambio_currency_select_wrap">
                        <button
                            type="button"
                            class="cambio_currency_btn"
                            id="transf-currency-btn"
                            aria-haspopup="dialog"
                            aria-controls="transf-currency-panel"
                            aria-expanded="false"
                            aria-label="Seleccionar moneda"
                        >
                            <span class="cambio_currency_btn_code" id="transf-currency-code">ARS</span>
                        </button>
                    </div>
                    <div class="cambio_amount_wrap">
                        <input
                            class="cambio_amount_input"
                            type="text"
                            id="transf-amount"
                            name="monto"
                            inputmode="decimal"
                            value="0"
                            autocomplete="off"
                            aria-label="Monto de la transferencia"
                        >
                        <span class="cambio_amount_suffix" id="transf-amount-suffix">ARS</span>
                    </div>
                </div>
            </div>

            <button type="submit" class="login_form_submit">Confirmar</button>
        </form>
    </main>

    <!-- VIEW: enviar done - receipt for sender -->
    <main class="transf_main app_content_column" id="transf-view-enviar-done" hidden>
        <div class="transf_result_icon" aria-hidden="true">
            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" width="64" height="64">
                <circle cx="32" cy="32" r="32" fill="#f46a4a"/>
                <path d="M18 32l10 10 18-18" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <p class="transf_result_text">Solicitud de transferencia aceptada.<br>Diríjase a una oficina para enviar el efectivo.</p>
        <dl class="transf_spec">
            <dt>Monto del pago</dt>
            <dd id="transf-done-monto">ARS 100.000</dd>
            <dt>Destinatario</dt>
            <dd id="transf-done-dest">Alex Kirk</dd>
            <dt>Teléfono del destinatario</dt>
            <dd id="transf-done-telefono">+54 9 11 2222-3333</dd>
            <dt>Fecha de la solicitud</dt>
            <dd id="transf-done-fecha">19.04.2026</dd>
        </dl>
        <button type="button" class="login_form_submit" id="transf-enviar-done-volver">Volver</button>
    </main>

    <!-- VIEW: recibir - no pending requests -->
    <main class="transf_main app_content_column" id="transf-view-recibir-empty" hidden>
        <div class="transf_result_icon" aria-hidden="true">
            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" width="64" height="64">
                <circle cx="32" cy="32" r="32" fill="#f46a4a"/>
                <path d="M20 20l24 24M44 20L20 44" stroke="#fff" stroke-width="4" stroke-linecap="round"/>
            </svg>
        </div>
        <p class="transf_result_text">Actualmente no tiene solicitudes<br>de transferencia de efectivo.</p>
        <button type="button" class="login_form_submit" id="transf-recibir-empty-volver">Volver</button>
    </main>

    <!-- VIEW: recibir - pending (request created, waiting for sender to go to office) -->
    <main class="transf_main app_content_column" id="transf-view-recibir-pending" hidden>
        <p class="transf_pending_text">Se ha creado la solicitud para el envío de efectivo:</p>
        <dl class="transf_spec">
            <dt>Monto del pago</dt>
            <dd>ARS 80.000</dd>
            <dt>Remitente</dt>
            <dd>Alex Kirk</dd>
        </dl>
        <p class="transf_pending_note">Espere el envío de los fondos.</p>
        <button type="button" class="login_form_submit" id="transf-recibir-pending-volver">Volver</button>
    </main>

    <!-- VIEW: recibir - ready to pick up (cash sent, code needed) -->
    <main class="transf_main app_content_column" id="transf-view-recibir-ready" hidden>
        <p class="transf_pending_text">Transferencia en efectivo recibida</p>
        <dl class="transf_spec">
            <dt>Monto del pago</dt>
            <dd>ARS 80.000</dd>
            <dt>Remitente</dt>
            <dd>Alex Kirk</dd>
            <dt>Fecha de la transacción</dt>
            <dd>19.04.2026</dd>
            <dt>Hora de la transacción</dt>
            <dd>11:15</dd>
        </dl>
        <p class="transf_pending_note">Para recibir el efectivo, indique el código de acceso al personal de la empresa.</p>
        <button type="button" class="login_form_submit" id="transf-btn-obtener-codigo">Obtener código</button>
    </main>

    <!-- VIEW: recibir - code shown with timer -->
    <main class="transf_main app_content_column" id="transf-view-recibir-code" hidden>
        <p class="transf_pending_text">Transferencia en efectivo recibida</p>
        <dl class="transf_spec">
            <dt>Monto del pago</dt>
            <dd>ARS 80.000</dd>
            <dt>Remitente</dt>
            <dd>Alex Kirk</dd>
            <dt>Fecha de la transacción</dt>
            <dd>19.04.2026</dd>
            <dt>Hora de la transacción</dt>
            <dd>11:15</dd>
        </dl>
        <div class="transf_code_row" aria-label="Código de retiro">
            <span class="transf_code_box" aria-hidden="true">1</span>
            <span class="transf_code_box" aria-hidden="true">1</span>
            <span class="transf_code_box" aria-hidden="true">1</span>
            <span class="transf_code_box" aria-hidden="true">1</span>
            <span class="transf_code_box" aria-hidden="true">1</span>
            <span class="transf_code_box" aria-hidden="true">1</span>
        </div>
        <div class="transf_code_meta">
            <span class="transf_code_hint">El código de retiro se actualiza cada 5 minutos.</span>
            <span class="transf_code_timer" id="transf-code-timer" aria-live="polite">Tiempo restante: 04:59</span>
        </div>
        <button type="button" class="transf_btn_new_code" id="transf-btn-new-code" disabled>Solicitar un nuevo código</button>
    </main>

    <!-- VIEW: recibir done - receipt after code accepted -->
    <main class="transf_main app_content_column" id="transf-view-recibir-done" hidden>
        <div class="transf_result_icon" aria-hidden="true">
            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" width="64" height="64">
                <circle cx="32" cy="32" r="32" fill="#f46a4a"/>
                <path d="M18 32l10 10 18-18" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <p class="transf_result_text">¡Efectivo recibido!</p>
        <dl class="transf_spec">
            <dt>Monto del pago</dt>
            <dd>ARS 80.000</dd>
            <dt>Remitente</dt>
            <dd>Alex Kirk</dd>
            <dt>Fecha de retiro de efectivo</dt>
            <dd>19.04.2026</dd>
            <dt>Hora de retiro de efectivo</dt>
            <dd>11:15</dd>
        </dl>
        <button type="button" class="login_form_submit" id="transf-recibir-done-cerrar">Cerrar</button>
    </main>

    <nav class="home_bottom_nav" aria-label="Principal">
        <div class="home_bottom_strip" aria-hidden="true"></div>
        <div class="home_bottom_nav_inner app_content_column">
            <a onclick="window.location.href='index.php?page=home'" class="home_nav_link">
                <span class="home_nav_icon_wrap">
                    <img src="img/icons/Saldo.svg" alt="" class="home_nav_icon" width="26" height="26">
                </span>
                <span class="home_nav_label">Saldo</span>
            </a>
            <a onclick="window.location.href='index.php?page=pagos'" class="home_nav_link">
                <span class="home_nav_icon_wrap">
                    <img src="img/icons/Pagos.svg" alt="" class="home_nav_icon" width="26" height="26">
                </span>
                <span class="home_nav_label">Pagos</span>
            </a>
            <a onclick="window.location.href='index.php?page=cambio'" class="home_nav_link">
                <span class="home_nav_icon_wrap">
                    <img src="<?php echo htmlspecialchars($cambio_icon_src, ENT_QUOTES, 'UTF-8'); ?>" alt="" class="home_nav_icon" width="26" height="26">
                </span>
                <span class="home_nav_label">Cambio</span>
            </a>
            <a onclick="window.location.href='index.php?page=profile'" class="home_nav_link">
                <span class="home_nav_icon_wrap">
                    <img src="img/icons/user.svg" alt="" class="home_nav_icon" width="26" height="26">
                </span>
                <span class="home_nav_label">Datos</span>
            </a>
            <?php $nav_mas_active = true; include __DIR__ . '/partials/home_nav_mas.php'; ?>
        </div>
    </nav>

    <!-- Currency picker overlay (same pattern as cambio) -->
    <div
        class="cambio_pick_overlay"
        id="transf-currency-panel"
        role="dialog"
        aria-modal="true"
        aria-label="Seleccione la moneda y la cuenta"
        hidden
    >
        <div class="cambio_pick_sheet">
            <div class="cambio_pick_rule" aria-hidden="true"></div>

            <header class="home_header app_content_column cambio_pick_userbar">
                <div class="home_header_user">
                    <img src="img/icons/user.svg" alt="" class="home_header_avatar" width="44" height="44">
                    <div class="home_header_text">
                        <strong class="home_header_name">Juan López</strong>
                        <span class="home_header_phone">+54 9 11 6264-4638</span>
                    </div>
                </div>
                <img src="img/logo.svg" alt="" class="home_header_logo" width="56" height="40">
            </header>

            <div class="cambio_pick_body app_content_column">
                <p class="cambio_pick_subtitle">Seleccione la moneda y la cuenta</p>
                <ul class="cambio_pick_list">
                    <li>
                        <button type="button" class="cambio_pick_item" data-currency="ARS" data-account="Bank Argentina">
                            <span class="home_asset_icon_wrap" aria-hidden="true">
                                <img src="img/icons/bank_icon.png" alt="" class="home_asset_icon" width="36" height="36">
                            </span>
                            <div class="home_account_body">
                                <span class="home_account_name">Bank Argentina</span>
                                <span class="home_account_currency">ARS</span>
                            </div>
                            <span class="home_asset_amount">17.000</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="cambio_pick_item" data-currency="ARS" data-account="Mercado Pago">
                            <span class="home_asset_icon_wrap" aria-hidden="true">
                                <img src="img/icons/bank_icon.png" alt="" class="home_asset_icon" width="36" height="36">
                            </span>
                            <div class="home_account_body">
                                <span class="home_account_name">Mercado Pago</span>
                                <span class="home_account_currency">ARS</span>
                            </div>
                            <span class="home_asset_amount">10.000</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="cambio_pick_item" data-currency="USD" data-account="PayPal">
                            <span class="home_asset_icon_wrap" aria-hidden="true">
                                <img src="img/icons/paypal_icon.png" alt="" class="home_asset_icon" width="36" height="36">
                            </span>
                            <div class="home_account_body">
                                <span class="home_account_name">PayPal</span>
                                <span class="home_account_currency">USD</span>
                            </div>
                            <span class="home_asset_amount">700</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="cambio_pick_item" data-currency="USD" data-account="Bank 1">
                            <span class="home_asset_icon_wrap" aria-hidden="true">
                                <img src="img/icons/bank_icon.png" alt="" class="home_asset_icon" width="36" height="36">
                            </span>
                            <div class="home_account_body">
                                <span class="home_account_name">Bank 1</span>
                                <span class="home_account_currency">USD</span>
                            </div>
                            <span class="home_asset_amount">300</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="cambio_pick_item" data-currency="BOB" data-account="Bank Bolivia">
                            <span class="home_asset_icon_wrap" aria-hidden="true">
                                <img src="img/icons/bank_icon.png" alt="" class="home_asset_icon" width="36" height="36">
                            </span>
                            <div class="home_account_body">
                                <span class="home_account_name">Bank Bolivia</span>
                                <span class="home_account_currency">BOB</span>
                            </div>
                            <span class="home_asset_amount">3.400</span>
                        </button>
                    </li>
                </ul>
            </div>

            <nav class="home_bottom_nav cambio_pick_bottom_nav" aria-label="Principal">
                <div class="home_bottom_strip" aria-hidden="true"></div>
                <div class="home_bottom_nav_inner app_content_column">
                    <a onclick="window.location.href='index.php?page=home'" class="home_nav_link">
                        <span class="home_nav_icon_wrap">
                            <img src="img/icons/Saldo.svg" alt="" class="home_nav_icon" width="26" height="26">
                        </span>
                        <span class="home_nav_label">Saldo</span>
                    </a>
                    <a onclick="window.location.href='index.php?page=pagos'" class="home_nav_link">
                        <span class="home_nav_icon_wrap">
                            <img src="img/icons/Pagos.svg" alt="" class="home_nav_icon" width="26" height="26">
                        </span>
                        <span class="home_nav_label">Pagos</span>
                    </a>
                    <a onclick="window.location.href='index.php?page=cambio'" class="home_nav_link">
                        <span class="home_nav_icon_wrap">
                            <img src="<?php echo htmlspecialchars($cambio_icon_src, ENT_QUOTES, 'UTF-8'); ?>" alt="" class="home_nav_icon" width="26" height="26">
                        </span>
                        <span class="home_nav_label">Cambio</span>
                    </a>
                    <a onclick="window.location.href='index.php?page=profile'" class="home_nav_link">
                        <span class="home_nav_icon_wrap">
                            <img src="img/icons/user.svg" alt="" class="home_nav_icon" width="26" height="26">
                        </span>
                        <span class="home_nav_label">Datos</span>
                    </a>
                    <?php $nav_mas_active = true; include __DIR__ . '/partials/home_nav_mas.php'; ?>
                </div>
            </nav>
        </div>
    </div>
</div>

<script>
(function () {
    var ALL_VIEWS = [
        'transf-view-main',
        'transf-view-enviar',
        'transf-view-enviar-done',
        'transf-view-recibir-empty',
        'transf-view-recibir-pending',
        'transf-view-recibir-ready',
        'transf-view-recibir-code',
        'transf-view-recibir-done'
    ];

    function showView(id) {
        ALL_VIEWS.forEach(function (vid) {
            var el = document.getElementById(vid);
            if (el) el.hidden = (vid !== id);
        });
    }

    /* Main buttons */
    document.getElementById('transf-btn-enviar').addEventListener('click', function () {
        showView('transf-view-enviar');
    });

    document.getElementById('transf-btn-recibir').addEventListener('click', function () {
        showView('transf-view-recibir-ready');
    });

    /* Enviar form */
    document.getElementById('transf-enviar-form').addEventListener('submit', function (e) {
        e.preventDefault();

        var nombre   = document.getElementById('transf-dest-nombre').value.trim();
        var apellido = document.getElementById('transf-dest-apellido').value.trim();
        var telefono = document.getElementById('transf-dest-telefono').value.trim();
        var monto    = document.getElementById('transf-amount').value.trim() || '0';
        var cur      = document.getElementById('transf-currency-code').textContent.trim();

        var fullName = [nombre, apellido].filter(Boolean).join(' ') || 'Alex Kirk';

        document.getElementById('transf-done-dest').textContent     = fullName;
        document.getElementById('transf-done-telefono').textContent = telefono || '+54 9 11 2222-3333';
        document.getElementById('transf-done-monto').textContent    = cur + ' ' + monto;

        var now = new Date();
        var d   = String(now.getDate()).padStart(2, '0');
        var m   = String(now.getMonth() + 1).padStart(2, '0');
        var y   = now.getFullYear();
        document.getElementById('transf-done-fecha').textContent = d + '.' + m + '.' + y;

        showView('transf-view-enviar-done');
    });

    /* Volver / Cerrar buttons */
    [
        'transf-enviar-done-volver',
        'transf-recibir-empty-volver',
        'transf-recibir-pending-volver',
        'transf-recibir-done-cerrar'
    ].forEach(function (id) {
        var el = document.getElementById(id);
        if (el) el.addEventListener('click', function () { showView('transf-view-main'); });
    });

    /* Obtener código */
    document.getElementById('transf-btn-obtener-codigo').addEventListener('click', function () {
        showView('transf-view-recibir-code');
        startCodeTimer();
    });

    /* Solicitar un nuevo código */
    document.getElementById('transf-btn-new-code').addEventListener('click', function () {
        if (this.disabled) return;
        showView('transf-view-recibir-ready');
    });

    /* Code countdown timer */
    var codeTimerInterval = null;

    function startCodeTimer() {
        if (codeTimerInterval) clearInterval(codeTimerInterval);

        var TOTAL      = 299; /* 04:59 */
        var remaining  = TOTAL;
        var timerEl    = document.getElementById('transf-code-timer');
        var newCodeBtn = document.getElementById('transf-btn-new-code');

        if (newCodeBtn) newCodeBtn.disabled = true;

        function fmt(sec) {
            var mm = Math.floor(sec / 60);
            var ss = sec % 60;
            return 'Tiempo restante: ' +
                (mm < 10 ? '0' : '') + mm + ':' +
                (ss < 10 ? '0' : '') + ss;
        }

        if (timerEl) timerEl.textContent = fmt(remaining);

        codeTimerInterval = setInterval(function () {
            remaining--;
            if (timerEl) timerEl.textContent = remaining > 0 ? fmt(remaining) : 'Tiempo restante: 00:00';
            if (remaining <= 0) {
                clearInterval(codeTimerInterval);
                codeTimerInterval = null;
                if (newCodeBtn) newCodeBtn.disabled = false;
            }
        }, 1000);
    }

    /* Currency picker overlay (same logic as cambio) */
    (function () {
        var overlay    = document.getElementById('transf-currency-panel');
        var sheet      = overlay ? overlay.querySelector('.cambio_pick_sheet') : null;
        var curBtn     = document.getElementById('transf-currency-btn');
        if (!overlay || !sheet || !curBtn) return;

        var transitionMs = 320;

        function setBodyScroll(lock) {
            document.body.style.overflow = lock ? 'hidden' : '';
        }

        function openPanel() {
            overlay.hidden = false;
            setBodyScroll(true);
            curBtn.setAttribute('aria-expanded', 'true');
            requestAnimationFrame(function () {
                overlay.classList.add('cambio_pick_overlay--open');
            });
        }

        function closePanel() {
            overlay.classList.remove('cambio_pick_overlay--open');
            curBtn.setAttribute('aria-expanded', 'false');
            window.setTimeout(function () {
                overlay.hidden = true;
                setBodyScroll(false);
            }, transitionMs);
        }

        curBtn.addEventListener('click', openPanel);

        overlay.querySelectorAll('.cambio_pick_item').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var cur = btn.getAttribute('data-currency');
                if (!cur) return;
                document.getElementById('transf-currency-code').textContent = cur;
                document.getElementById('transf-amount-suffix').textContent = cur;
                closePanel();
            });
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && overlay.classList.contains('cambio_pick_overlay--open')) {
                closePanel();
            }
        });
    })();
})();
</script>
