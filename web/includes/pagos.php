<?php
$cambio_icon_src = 'img/icons/' . "\xD0\xA1" . 'ambio.svg';
?>
<div class="pagos_page">
    <div class="pagos_strip" aria-hidden="true"></div>

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

    <main class="pagos_main app_content_column">
        <form class="pagos_form" action="#" method="post" novalidate>
            <div class="pagos_block">
                <span class="cambio_label" id="pagos-salary-label">Cobrar el sueldo</span>
                <div class="cambio_input_row">
                    <div class="cambio_currency_select_wrap">
                        <button
                            type="button"
                            class="cambio_currency_btn"
                            id="pagos-currency-btn"
                            aria-labelledby="pagos-salary-label"
                            aria-haspopup="dialog"
                            aria-controls="pagos-currency-panel"
                            aria-expanded="false"
                        >
                            <span class="cambio_currency_btn_code" id="pagos-currency-code">USD</span>
                        </button>
                    </div>
                    <div class="cambio_amount_wrap">
                        <input
                            class="cambio_amount_input"
                            type="text"
                            id="pagos-salary-amount"
                            name="salary_amount"
                            inputmode="decimal"
                            value="0"
                            autocomplete="off"
                            aria-label="Monto a cobrar"
                        >
                        <span class="cambio_amount_suffix" id="pagos-salary-suffix">USD</span>
                    </div>
                </div>
                <input type="hidden" name="salary_currency" id="pagos-salary-currency" value="USD">
                <input type="hidden" name="salary_account" id="pagos-salary-account" value="PayPal">
                <button type="button" class="login_form_submit pagos_qr_btn" id="pagos-generate-qr">Generar código QR</button>

                <div class="pagos_qr_panel" id="pagos-qr-panel" hidden>
                    <div class="pagos_qr_frame">
                        <img
                            class="pagos_qr_image"
                            id="pagos-qr-image"
                            src=""
                            alt="Código QR para recibir el pago"
                            width="240"
                            height="240"
                            decoding="async"
                        >
                    </div>
                    <p class="pagos_qr_caption">Muestra este código para recibir el pago.</p>
                    <p class="pagos_qr_timer" id="pagos-qr-timer" aria-live="polite">01:00</p>
                </div>
            </div>

            <div class="pagos_block pagos_block--pay">
                <span class="cambio_label" id="pagos-pay-label">Pagar</span>
                <button
                    type="button"
                    class="login_form_submit pagos_scan_btn"
                    id="pagos-scan-pay"
                    aria-labelledby="pagos-pay-label"
                    aria-haspopup="dialog"
                    aria-controls="pagos-scan-panel"
                    aria-expanded="false"
                >
                    Escanear el código para pagar
                </button>
            </div>
        </form>
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
            <a onclick="window.location.href='index.php?page=pagos'" class="home_nav_link home_nav_link--active" aria-current="page">
                <span class="home_nav_icon_wrap">
                    <img src="img/icons/Pagos_active.svg" alt="" class="home_nav_icon" width="26" height="26">
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
            <?php $nav_mas_active = false; include __DIR__ . '/partials/home_nav_mas.php'; ?>
        </div>
    </nav>

    <div
        class="cambio_pick_overlay"
        id="pagos-currency-panel"
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
                        <button type="button" class="cambio_pick_item" data-currency="USD" data-account="PayPal" data-available="Disponible: USD 700" data-amount="700">
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
                        <button type="button" class="cambio_pick_item" data-currency="USD" data-account="Bank 1" data-available="Disponible: USD 300" data-amount="300">
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
                        <button type="button" class="cambio_pick_item" data-currency="ARS" data-account="Bank Argentina" data-available="Disponible: ARS 17.000" data-amount="17.000">
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
                        <button type="button" class="cambio_pick_item" data-currency="ARS" data-account="Mercado Pago" data-available="Disponible: ARS 10.000" data-amount="10.000">
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
                        <button type="button" class="cambio_pick_item" data-currency="BOB" data-account="Bank Bolivia" data-available="Disponible: BOB 3.400" data-amount="3.400">
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
                    <a onclick="window.location.href='index.php?page=pagos'" class="home_nav_link home_nav_link--active" aria-current="page">
                        <span class="home_nav_icon_wrap">
                            <img src="img/icons/Pagos_active.svg" alt="" class="home_nav_icon" width="26" height="26">
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
                    <?php $nav_mas_active = false; include __DIR__ . '/partials/home_nav_mas.php'; ?>
                </div>
            </nav>
        </div>
    </div>

    <div
        class="cambio_pick_overlay pagos_scan_overlay"
        id="pagos-scan-panel"
        role="dialog"
        aria-modal="true"
        aria-label="Escanear código QR para pagar"
        hidden
    >
        <div class="cambio_pick_sheet pagos_scan_sheet">
            <div class="pagos_strip" aria-hidden="true"></div>

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

            <div class="pagos_scan_main app_content_column">
                <p class="pagos_scan_hint">Escanea el código para pagar</p>
                <div class="pagos_scan_viewport">
                    <video class="pagos_scan_video" id="pagos-scan-video" playsinline muted autoplay></video>
                    <div class="pagos_scan_corners" aria-hidden="true">
                        <span class="pagos_scan_corner pagos_scan_corner--tl"></span>
                        <span class="pagos_scan_corner pagos_scan_corner--tr"></span>
                        <span class="pagos_scan_corner pagos_scan_corner--bl"></span>
                        <span class="pagos_scan_corner pagos_scan_corner--br"></span>
                    </div>
                </div>
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
                    <a onclick="window.location.href='index.php?page=pagos'" class="home_nav_link home_nav_link--active" aria-current="page">
                        <span class="home_nav_icon_wrap">
                            <img src="img/icons/Pagos_active.svg" alt="" class="home_nav_icon" width="26" height="26">
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
                    <?php $nav_mas_active = false; include __DIR__ . '/partials/home_nav_mas.php'; ?>
                </div>
            </nav>
        </div>
    </div>
</div>

<script>
(function () {
    var overlay = document.getElementById('pagos-currency-panel');
    var picker = document.getElementById('pagos-currency-btn');
    if (!overlay || !picker) return;

    var transitionMs = 320;
    var items = overlay.querySelectorAll('.cambio_pick_item');

    function setBodyScroll(lock) {
        document.body.style.overflow = lock ? 'hidden' : '';
    }

    function openPanel() {
        overlay.hidden = false;
        setBodyScroll(true);
        picker.setAttribute('aria-expanded', 'true');
        requestAnimationFrame(function () {
            overlay.classList.add('cambio_pick_overlay--open');
        });
    }

    function closePanel() {
        overlay.classList.remove('cambio_pick_overlay--open');
        picker.setAttribute('aria-expanded', 'false');
        window.setTimeout(function () {
            overlay.hidden = true;
            setBodyScroll(false);
        }, transitionMs);
    }

    picker.addEventListener('click', openPanel);

    items.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var cur = btn.getAttribute('data-currency');
            var acc = btn.getAttribute('data-account');
            if (!cur) return;
            document.getElementById('pagos-salary-currency').value = cur;
            var accEl = document.getElementById('pagos-salary-account');
            if (accEl) accEl.value = acc || '';
            document.getElementById('pagos-currency-code').textContent = cur;
            document.getElementById('pagos-salary-suffix').textContent = cur;
            closePanel();
        });
    });

    document.addEventListener('keydown', function (e) {
        if (e.key !== 'Escape') return;
        if (!overlay.classList.contains('cambio_pick_overlay--open')) return;
        closePanel();
    });
})();

(function () {
    var QR_DURATION_SEC = 60;
    var genBtn = document.getElementById('pagos-generate-qr');
    var panel = document.getElementById('pagos-qr-panel');
    var img = document.getElementById('pagos-qr-image');
    var timerEl = document.getElementById('pagos-qr-timer');
    if (!genBtn || !panel || !img || !timerEl) return;

    var timerId = null;
    var remainSec = 0;

    function formatMmSs(sec) {
        var m = Math.floor(sec / 60);
        var s = sec % 60;
        return (m < 10 ? '0' : '') + m + ':' + (s < 10 ? '0' : '') + s;
    }

    function buildQrPayload() {
        var amountEl = document.getElementById('pagos-salary-amount');
        var curEl = document.getElementById('pagos-salary-currency');
        var accEl = document.getElementById('pagos-salary-account');
        var amount = amountEl ? String(amountEl.value).trim() : '0';
        var cur = curEl ? curEl.value : 'USD';
        var acc = accEl ? accEl.value : '';
        return (
            'vips://collect?amt=' + encodeURIComponent(amount) +
            '&cur=' + encodeURIComponent(cur) +
            '&acc=' + encodeURIComponent(acc) +
            '&ts=' + Date.now()
        );
    }

    function qrImageUrl(data) {
        return (
            'https://api.qrserver.com/v1/create-qr-code/?size=240x240&margin=8&color=000000&bgcolor=ffffff&data=' +
            encodeURIComponent(data)
        );
    }

    function stopTimer() {
        if (timerId !== null) {
            window.clearInterval(timerId);
            timerId = null;
        }
    }

    function finishQrSession() {
        panel.hidden = true;
        img.removeAttribute('src');
        genBtn.disabled = false;
        remainSec = 0;
    }

    genBtn.addEventListener('click', function () {
        if (genBtn.disabled) return;
        stopTimer();

        var payload = buildQrPayload();
        img.alt = 'Código QR para recibir el pago';
        img.src = qrImageUrl(payload);

        remainSec = QR_DURATION_SEC;
        timerEl.textContent = formatMmSs(remainSec);
        panel.hidden = false;
        genBtn.disabled = true;

        timerId = window.setInterval(function () {
            remainSec--;
            timerEl.textContent = formatMmSs(Math.max(0, remainSec));
            if (remainSec <= 0) {
                stopTimer();
                window.setTimeout(finishQrSession, 500);
            }
        }, 1000);
    });
})();

(function () {
    var overlay = document.getElementById('pagos-scan-panel');
    var scanBtn = document.getElementById('pagos-scan-pay');
    var video = document.getElementById('pagos-scan-video');
    if (!overlay || !scanBtn || !video) return;

    var transitionMs = 320;
    var stream = null;

    function setBodyScroll(lock) {
        document.body.style.overflow = lock ? 'hidden' : '';
    }

    function stopCamera() {
        if (stream) {
            stream.getTracks().forEach(function (t) {
                t.stop();
            });
            stream = null;
        }
        video.srcObject = null;
    }

    function openScan() {
        overlay.hidden = false;
        setBodyScroll(true);
        scanBtn.setAttribute('aria-expanded', 'true');
        requestAnimationFrame(function () {
            overlay.classList.add('cambio_pick_overlay--open');
        });

        if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            navigator.mediaDevices
                .getUserMedia({ video: { facingMode: 'environment' }, audio: false })
                .catch(function () {
                    return navigator.mediaDevices.getUserMedia({ video: true, audio: false });
                })
                .then(function (s) {
                    stream = s;
                    video.srcObject = s;
                    return video.play();
                })
                .catch(function () {
                    stopCamera();
                });
        }
    }

    function closeScan() {
        overlay.classList.remove('cambio_pick_overlay--open');
        scanBtn.setAttribute('aria-expanded', 'false');
        stopCamera();
        window.setTimeout(function () {
            overlay.hidden = true;
            setBodyScroll(false);
        }, transitionMs);
    }

    scanBtn.addEventListener('click', function () {
        if (overlay.classList.contains('cambio_pick_overlay--open')) return;
        openScan();
    });

    document.addEventListener('keydown', function (e) {
        if (e.key !== 'Escape') return;
        if (!overlay.classList.contains('cambio_pick_overlay--open')) return;
        closeScan();
    });
})();
</script>
