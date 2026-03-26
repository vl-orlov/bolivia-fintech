<?php
$cambio_active_icon_src = 'img/icons/' . "\xD0\xA1" . 'ambio_active.svg';
?>
<div class="cambio_page">
    <div class="cambio_strip" aria-hidden="true"></div>

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

    <main class="cambio_main app_content_column">
        <form class="cambio_form" action="#" method="post" novalidate>
            <div class="cambio_group">
                <span class="cambio_label" id="cambio-give-label">Entrego</span>
                <div class="cambio_input_row">
                    <div class="cambio_currency_select_wrap">
                        <button
                            type="button"
                            class="cambio_currency_btn"
                            id="cambio-give-picker"
                            aria-labelledby="cambio-give-label"
                            aria-haspopup="dialog"
                            aria-controls="cambio-currency-panel"
                            aria-expanded="false"
                        >
                            <span class="cambio_currency_btn_code" id="cambio-give-code">USD</span>
                        </button>
                    </div>
                    <div class="cambio_amount_wrap">
                        <input
                            class="cambio_amount_input"
                            type="text"
                            id="cambio-give-amount"
                            name="give_amount"
                            inputmode="decimal"
                            value="0"
                            autocomplete="off"
                            aria-label="Monto que entrega"
                        >
                        <span class="cambio_amount_suffix" id="cambio-give-suffix">USD</span>
                    </div>
                </div>
                <p class="cambio_hint" id="cambio-give-hint">Disponible: USD 1.000</p>
                <input type="hidden" name="give_currency" id="cambio-give-currency" value="USD">
                <input type="hidden" name="give_account" id="cambio-give-account" value="Saldo USD">
            </div>

            <div class="cambio_group">
                <span class="cambio_label" id="cambio-receive-label">Recibo</span>
                <div class="cambio_input_row">
                    <div class="cambio_currency_select_wrap">
                        <button
                            type="button"
                            class="cambio_currency_btn"
                            id="cambio-receive-picker"
                            aria-labelledby="cambio-receive-label"
                            aria-haspopup="dialog"
                            aria-controls="cambio-currency-panel"
                            aria-expanded="false"
                        >
                            <span class="cambio_currency_btn_code" id="cambio-receive-code">BOB</span>
                        </button>
                    </div>
                    <div class="cambio_amount_wrap">
                        <input
                            class="cambio_amount_input"
                            type="text"
                            id="cambio-receive-amount"
                            name="receive_amount"
                            inputmode="decimal"
                            value="0"
                            autocomplete="off"
                            aria-label="Monto que recibe"
                        >
                        <span class="cambio_amount_suffix" id="cambio-receive-suffix">BOB</span>
                    </div>
                </div>
                <p class="cambio_hint" id="cambio-receive-hint">BOB = USD 0.15</p>
                <input type="hidden" name="receive_currency" id="cambio-receive-currency" value="BOB">
                <input type="hidden" name="receive_account" id="cambio-receive-account" value="Saldo BOB">
            </div>

            <button type="submit" class="login_form_submit cambio_submit">Confirmar</button>
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
            <a onclick="window.location.href='index.php?page=pagos'" class="home_nav_link">
                <span class="home_nav_icon_wrap">
                    <img src="img/icons/Pagos.svg" alt="" class="home_nav_icon" width="26" height="26">
                </span>
                <span class="home_nav_label">Pagos</span>
            </a>
            <a onclick="window.location.href='index.php?page=cambio'" class="home_nav_link home_nav_link--active" aria-current="page">
                <span class="home_nav_icon_wrap">
                    <img src="<?php echo htmlspecialchars($cambio_active_icon_src, ENT_QUOTES, 'UTF-8'); ?>" alt="" class="home_nav_icon" width="26" height="26">
                </span>
                <span class="home_nav_label">Cambio</span>
            </a>
            <a onclick="window.location.href='index.php?page=recibos'" class="home_nav_link">
                <span class="home_nav_icon_wrap">
                    <img src="img/icons/Recibos.svg" alt="" class="home_nav_icon" width="26" height="26">
                </span>
                <span class="home_nav_label">Recibos</span>
            </a>
            <a onclick="window.location.href='index.php?page=profile'" class="home_nav_link">
                <span class="home_nav_icon_wrap">
                    <img src="img/icons/user.svg" alt="" class="home_nav_icon" width="26" height="26">
                </span>
                <span class="home_nav_label">Datos</span>
            </a>
        </div>
    </nav>

    <div
        class="cambio_pick_overlay"
        id="cambio-currency-panel"
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
                            <span class="home_asset_dot" aria-hidden="true"></span>
                            <div class="home_account_body">
                                <span class="home_account_name">PayPal</span>
                                <span class="home_account_currency">USD</span>
                            </div>
                            <span class="home_asset_amount">700</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="cambio_pick_item" data-currency="USD" data-account="Bank 1" data-available="Disponible: USD 300" data-amount="300">
                            <span class="home_asset_dot" aria-hidden="true"></span>
                            <div class="home_account_body">
                                <span class="home_account_name">Bank 1</span>
                                <span class="home_account_currency">USD</span>
                            </div>
                            <span class="home_asset_amount">300</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="cambio_pick_item" data-currency="ARS" data-account="Bank Argentina" data-available="Disponible: ARS 17.000" data-amount="17.000">
                            <span class="home_asset_dot" aria-hidden="true"></span>
                            <div class="home_account_body">
                                <span class="home_account_name">Bank Argentina</span>
                                <span class="home_account_currency">ARS</span>
                            </div>
                            <span class="home_asset_amount">17.000</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="cambio_pick_item" data-currency="ARS" data-account="Mercado Pago" data-available="Disponible: ARS 10.000" data-amount="10.000">
                            <span class="home_asset_dot" aria-hidden="true"></span>
                            <div class="home_account_body">
                                <span class="home_account_name">Mercado Pago</span>
                                <span class="home_account_currency">ARS</span>
                            </div>
                            <span class="home_asset_amount">10.000</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="cambio_pick_item" data-currency="BOB" data-account="Bank Bolivia" data-available="Disponible: BOB 3.400" data-amount="3.400">
                            <span class="home_asset_dot" aria-hidden="true"></span>
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
                    <a onclick="window.location.href='index.php?page=cambio'" class="home_nav_link home_nav_link--active" aria-current="page">
                        <span class="home_nav_icon_wrap">
                            <img src="<?php echo htmlspecialchars($cambio_active_icon_src, ENT_QUOTES, 'UTF-8'); ?>" alt="" class="home_nav_icon" width="26" height="26">
                        </span>
                        <span class="home_nav_label">Cambio</span>
                    </a>
                    <a onclick="window.location.href='index.php?page=recibos'" class="home_nav_link">
                        <span class="home_nav_icon_wrap">
                            <img src="img/icons/Recibos.svg" alt="" class="home_nav_icon" width="26" height="26">
                        </span>
                        <span class="home_nav_label">Recibos</span>
                    </a>
                    <a onclick="window.location.href='index.php?page=profile'" class="home_nav_link">
                        <span class="home_nav_icon_wrap">
                            <img src="img/icons/user.svg" alt="" class="home_nav_icon" width="26" height="26">
                        </span>
                        <span class="home_nav_label">Datos</span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>

<script>
(function () {
    var RATE_HINT = {
        USD: 'USD = USD 1.0',
        ARS: 'ARS = USD 0.00070',
        BOB: 'BOB = USD 0.15'
    };

    var overlay = document.getElementById('cambio-currency-panel');
    var sheet = overlay ? overlay.querySelector('.cambio_pick_sheet') : null;
    var givePicker = document.getElementById('cambio-give-picker');
    var recvPicker = document.getElementById('cambio-receive-picker');
    if (!overlay || !sheet || !givePicker || !recvPicker) return;

    var activeTarget = null;
    var transitionMs = 320;

    function setBodyScroll(lock) {
        document.body.style.overflow = lock ? 'hidden' : '';
    }

    function openPanel(target) {
        activeTarget = target;
        overlay.hidden = false;
        setBodyScroll(true);
        givePicker.setAttribute('aria-expanded', activeTarget === 'give' ? 'true' : 'false');
        recvPicker.setAttribute('aria-expanded', activeTarget === 'receive' ? 'true' : 'false');
        requestAnimationFrame(function () {
            overlay.classList.add('cambio_pick_overlay--open');
        });
    }

    function closePanel() {
        overlay.classList.remove('cambio_pick_overlay--open');
        givePicker.setAttribute('aria-expanded', 'false');
        recvPicker.setAttribute('aria-expanded', 'false');
        window.setTimeout(function () {
            overlay.hidden = true;
            setBodyScroll(false);
            activeTarget = null;
        }, transitionMs);
    }

    function applyChoice(btn) {
        var cur = btn.getAttribute('data-currency');
        var acc = btn.getAttribute('data-account');
        var available = btn.getAttribute('data-available');
        if (!cur || !activeTarget) return;

        if (activeTarget === 'give') {
            document.getElementById('cambio-give-currency').value = cur;
            document.getElementById('cambio-give-account').value = acc || '';
            document.getElementById('cambio-give-code').textContent = cur;
            document.getElementById('cambio-give-suffix').textContent = cur;
            var gh = document.getElementById('cambio-give-hint');
            if (gh && available) gh.textContent = available;
        } else {
            document.getElementById('cambio-receive-currency').value = cur;
            document.getElementById('cambio-receive-account').value = acc || '';
            document.getElementById('cambio-receive-code').textContent = cur;
            document.getElementById('cambio-receive-suffix').textContent = cur;
            var rh = document.getElementById('cambio-receive-hint');
            if (rh) rh.textContent = RATE_HINT[cur] || '';
        }
    }

    givePicker.addEventListener('click', function () {
        openPanel('give');
    });
    recvPicker.addEventListener('click', function () {
        openPanel('receive');
    });

    document.querySelectorAll('.cambio_pick_item').forEach(function (btn) {
        btn.addEventListener('click', function () {
            applyChoice(btn);
            closePanel();
        });
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && overlay.classList.contains('cambio_pick_overlay--open')) {
            closePanel();
        }
    });
})();
</script>
