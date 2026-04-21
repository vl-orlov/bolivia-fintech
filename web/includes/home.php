<?php
$cambio_icon_src = 'img/icons/' . "\xD0\xA1" . 'ambio.svg';
?>
<div class="home_page">
    <div class="home_strip" aria-hidden="true"></div>

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

    <main class="home_main app_content_column">
        <section class="home_section home_section--balance" aria-labelledby="home-balance-heading">
            <div class="home_balance_heading">
                <h2 class="home_balance_title" id="home-balance-heading">Saldo disponible</h2>
                <button
                    type="button"
                    class="home_balance_eye"
                    id="home-toggle-balance"
                    aria-label="Mostrar u ocultar saldos"
                    aria-pressed="false"
                >
                    <img src="img/icons/eye_icon.svg" alt="" class="home_balance_eye_icon home_balance_eye_icon--open" width="22" height="22">
                    <img src="img/icons/eye_clossed_icon.svg" alt="" class="home_balance_eye_icon home_balance_eye_icon--closed" width="22" height="22" hidden>
                </button>
            </div>

            <div class="home_cards_grid">
                <article class="home_balance_card">
                    <span class="home_balance_card_currency">USD</span>
                    <div class="home_balance_card_values">
                        <span class="home_balance_card_amount js-home-amount" data-value="1.000">1.000</span>
                        <span class="home_balance_card_rate">USD = USD 1.0</span>
                    </div>
                </article>
                <article class="home_balance_card">
                    <span class="home_balance_card_currency">ARS</span>
                    <div class="home_balance_card_values">
                        <span class="home_balance_card_amount js-home-amount" data-value="27.000">27.000</span>
                        <span class="home_balance_card_rate">ARS = USD 0.00070</span>
                    </div>
                </article>
                <article class="home_balance_card">
                    <span class="home_balance_card_currency">BOB</span>
                    <div class="home_balance_card_values">
                        <span class="home_balance_card_amount js-home-amount" data-value="3.400">3.400</span>
                        <span class="home_balance_card_rate">BOB = USD 0.00017</span>
                    </div>
                </article>
                <article class="home_balance_card">
                    <span class="home_balance_card_currency home_balance_card_currency--sentence">Efectivo disponible</span>
                    <div class="home_balance_card_values">
                        <span class="home_balance_card_amount js-home-amount" data-value="20.000">20.000</span>
                        <span class="home_balance_card_rate">ARS = USD 0.00070</span>
                    </div>
                </article>
            </div>
        </section>

        <section class="home_section" aria-label="Activos y cuentas">
            <div class="home_tabs" role="tablist" aria-label="Activos y cuentas">
                <button type="button" class="home_tab home_tab--active" role="tab" id="home-tab-activos" aria-selected="true" aria-controls="home-panel-activos">Activos</button>
                <button type="button" class="home_tab" role="tab" id="home-tab-cuentas" aria-selected="false" aria-controls="home-panel-cuentas">Cuentas</button>
            </div>
            <div class="home_tabpanels">
                <div class="home_tabpanel" role="tabpanel" id="home-panel-activos" aria-labelledby="home-tab-activos">
                    <ul class="home_asset_list">
                        <li class="home_asset_row">
                            <span class="home_asset_icon_wrap" aria-hidden="true">
                                <img src="img/icons/dollar_icon.png" alt="" class="home_asset_icon" width="36" height="36">
                            </span>
                            <span class="home_asset_code">USD</span>
                            <span class="home_asset_amount js-home-amount" data-value="1.000">1.000</span>
                        </li>
                        <li class="home_asset_row">
                            <span class="home_asset_icon_wrap" aria-hidden="true">
                                <img src="img/icons/dollar_latam_icon.png" alt="" class="home_asset_icon" width="36" height="36">
                            </span>
                            <span class="home_asset_code">ARS</span>
                            <span class="home_asset_amount js-home-amount" data-value="27.000">27.000</span>
                        </li>
                        <li class="home_asset_row">
                            <span class="home_asset_icon_wrap" aria-hidden="true">
                                <img src="img/icons/dollar_latam_icon.png" alt="" class="home_asset_icon" width="36" height="36">
                            </span>
                            <span class="home_asset_code">BOB</span>
                            <span class="home_asset_amount js-home-amount" data-value="3.400">3.400</span>
                        </li>
                        <li class="home_asset_row">
                            <span class="home_asset_icon_wrap" aria-hidden="true">
                                <img src="img/icons/Efectivo_icon.png" alt="" class="home_asset_icon" width="36" height="36">
                            </span>
                            <span class="home_asset_code">Efectivo</span>
                            <span class="home_asset_amount js-home-amount" data-value="20.000">20.000</span>
                        </li>
                    </ul>
                </div>
                <div class="home_tabpanel" role="tabpanel" id="home-panel-cuentas" aria-labelledby="home-tab-cuentas" hidden>
                    <ul class="home_asset_list">
                        <li class="home_account_row">
                            <span class="home_asset_icon_wrap" aria-hidden="true">
                                <img src="img/icons/paypal_icon.png" alt="" class="home_asset_icon" width="36" height="36">
                            </span>
                            <div class="home_account_body">
                                <span class="home_account_name">PayPal</span>
                                <span class="home_account_currency">USD</span>
                            </div>
                            <span class="home_asset_amount js-home-amount" data-value="700">700</span>
                        </li>
                        <li class="home_account_row">
                            <span class="home_asset_icon_wrap" aria-hidden="true">
                                <img src="img/icons/bank_icon.png" alt="" class="home_asset_icon" width="36" height="36">
                            </span>
                            <div class="home_account_body">
                                <span class="home_account_name">Bank 1</span>
                                <span class="home_account_currency">USD</span>
                            </div>
                            <span class="home_asset_amount js-home-amount" data-value="300">300</span>
                        </li>
                        <li class="home_account_row">
                            <span class="home_asset_icon_wrap" aria-hidden="true">
                                <img src="img/icons/bank_icon.png" alt="" class="home_asset_icon" width="36" height="36">
                            </span>
                            <div class="home_account_body">
                                <span class="home_account_name">Bank Argentina</span>
                                <span class="home_account_currency">ARS</span>
                            </div>
                            <span class="home_asset_amount js-home-amount" data-value="17.000">17.000</span>
                        </li>
                        <li class="home_account_row">
                            <span class="home_asset_icon_wrap" aria-hidden="true">
                                <img src="img/icons/bank_icon.png" alt="" class="home_asset_icon" width="36" height="36">
                            </span>
                            <div class="home_account_body">
                                <span class="home_account_name">Mercado Pago</span>
                                <span class="home_account_currency">ARS</span>
                            </div>
                            <span class="home_asset_amount js-home-amount" data-value="10.000">10.000</span>
                        </li>
                        <li class="home_account_row">
                            <span class="home_asset_icon_wrap" aria-hidden="true">
                                <img src="img/icons/bank_icon.png" alt="" class="home_asset_icon" width="36" height="36">
                            </span>
                            <div class="home_account_body">
                                <span class="home_account_name">Bank Bolivia</span>
                                <span class="home_account_currency">BOB</span>
                            </div>
                            <span class="home_asset_amount js-home-amount" data-value="3.400">3.400</span>
                        </li>
                        <li class="home_account_row">
                            <span class="home_asset_icon_wrap" aria-hidden="true">
                                <img src="img/icons/Efectivo_icon.png" alt="" class="home_asset_icon" width="36" height="36">
                            </span>
                            <div class="home_account_body">
                                <span class="home_account_name">Efectivo</span>
                                <span class="home_account_currency">ARS</span>
                            </div>
                            <span class="home_asset_amount js-home-amount" data-value="20.000">20.000</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <nav class="home_bottom_nav" aria-label="Principal">
        <div class="home_bottom_strip" aria-hidden="true"></div>
        <div class="home_bottom_nav_inner app_content_column">
            <a href="index.php?page=home" class="home_nav_link home_nav_link--active" aria-current="page">
                <span class="home_nav_icon_wrap">
                    <img src="img/icons/Saldo_active.svg" alt="" class="home_nav_icon" width="26" height="26">
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
            <?php $nav_mas_active = false; include __DIR__ . '/partials/home_nav_mas.php'; ?>
        </div>
    </nav>
</div>

<script>
(function () {
    var root = document.querySelector('.home_page');
    var btn = document.getElementById('home-toggle-balance');
    var amounts = document.querySelectorAll('.js-home-amount');
    if (!root || !btn || !amounts.length) return;

    var iconOpen = btn.querySelector('.home_balance_eye_icon--open');
    var iconClosed = btn.querySelector('.home_balance_eye_icon--closed');

    function setHidden(hidden) {
        root.classList.toggle('home_page--balances-hidden', hidden);
        btn.setAttribute('aria-pressed', hidden ? 'true' : 'false');
        amounts.forEach(function (el) {
            var v = el.getAttribute('data-value') || el.textContent.trim();
            el.textContent = hidden ? '••••' : v;
        });
        if (iconOpen && iconClosed) {
            iconOpen.hidden = hidden;
            iconClosed.hidden = !hidden;
        }
    }

    btn.addEventListener('click', function () {
        var hidden = !root.classList.contains('home_page--balances-hidden');
        setHidden(hidden);
    });
})();

(function () {
    var tabActivos = document.getElementById('home-tab-activos');
    var tabCuentas = document.getElementById('home-tab-cuentas');
    var panelActivos = document.getElementById('home-panel-activos');
    var panelCuentas = document.getElementById('home-panel-cuentas');
    if (!tabActivos || !tabCuentas || !panelActivos || !panelCuentas) return;

    function selectTab(which) {
        var isActivos = which === 'activos';
        tabActivos.classList.toggle('home_tab--active', isActivos);
        tabCuentas.classList.toggle('home_tab--active', !isActivos);
        tabActivos.setAttribute('aria-selected', isActivos ? 'true' : 'false');
        tabCuentas.setAttribute('aria-selected', !isActivos ? 'true' : 'false');
        panelActivos.hidden = !isActivos;
        panelCuentas.hidden = isActivos;
    }

    tabActivos.addEventListener('click', function () {
        selectTab('activos');
    });
    tabCuentas.addEventListener('click', function () {
        selectTab('cuentas');
    });
})();
</script>
