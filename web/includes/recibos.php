<?php
$cambio_icon_src = 'img/icons/' . "\xD0\xA1" . 'ambio.svg';

$recibos_items = [
    '1' => [
        'kind' => 'Pago realizado ARS',
        'list_amount' => '20.000',
        'list_amount_sign' => 'minus',
        'datetime_attr' => '2026-03-08T13:40',
        'list_datetime' => '08.03.2026 13:40',
        'rows' => [
            ['Monto del pago', 'ARS 20.000'],
            ['Destinatario', 'Alex Kirk'],
            ['Cuenta', 'Bank Argentina'],
            ['Fecha de la transacción', '08.03.2026'],
            ['Hora de la transacción', '13:40'],
        ],
    ],
    '2' => [
        'kind' => 'Pago recibido USD',
        'list_amount' => '70',
        'list_amount_sign' => 'plus',
        'datetime_attr' => '2026-03-07T09:15',
        'list_datetime' => '07.03.2026 09:15',
        'rows' => [
            ['Monto recibido', 'USD 70'],
            ['Remitente', 'María García'],
            ['Cuenta', 'PayPal'],
            ['Fecha de la transacción', '07.03.2026'],
            ['Hora de la transacción', '09:15'],
        ],
    ],
    '3' => [
        'kind' => 'Conversión USD -> BOB',
        'list_amount' => '344',
        'list_amount_sign' => 'none',
        'datetime_attr' => '2026-03-06T18:22',
        'list_datetime' => '06.03.2026 18:22',
        'rows' => [
            ['Monto de origen', 'USD 100'],
            ['Monto recibido', 'BOB 344'],
            ['Cuenta', 'Bank Bolivia'],
            ['Fecha de la transacción', '06.03.2026'],
            ['Hora de la transacción', '18:22'],
        ],
    ],
    '4' => [
        'kind' => 'Pago realizado BOB',
        'list_amount' => '500',
        'list_amount_sign' => 'minus',
        'datetime_attr' => '2026-03-05T11:03',
        'list_datetime' => '05.03.2026 11:03',
        'rows' => [
            ['Monto del pago', 'BOB 500'],
            ['Destinatario', 'Juan Paz'],
            ['Cuenta', 'Bank Bolivia'],
            ['Fecha de la transacción', '05.03.2026'],
            ['Hora de la transacción', '11:03'],
        ],
    ],
    '5' => [
        'kind' => 'Pago recibido ARS',
        'list_amount' => '12.500',
        'list_amount_sign' => 'plus',
        'datetime_attr' => '2026-03-04T16:48',
        'list_datetime' => '04.03.2026 16:48',
        'rows' => [
            ['Monto recibido', 'ARS 12.500'],
            ['Remitente', 'Carlos Ruiz'],
            ['Cuenta', 'Mercado Pago'],
            ['Fecha de la transacción', '04.03.2026'],
            ['Hora de la transacción', '16:48'],
        ],
    ],
];

$recibo_param = isset($_REQUEST['recibo']) ? trim((string) $_REQUEST['recibo']) : '';
$recibo_detail = ($recibo_param !== '' && isset($recibos_items[$recibo_param])) ? $recibos_items[$recibo_param] : null;
?>
<div class="recibos_page">
    <div class="recibos_strip" aria-hidden="true"></div>

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

    <?php if ($recibo_detail) : ?>
        <main class="recibos_main recibos_main--detail app_content_column">
            <a href="index.php?page=recibos" class="recibos_detail_back">&larr; Volver</a>
            <h1 class="recibos_detail_title"><?php echo htmlspecialchars($recibo_detail['kind'], ENT_QUOTES, 'UTF-8'); ?></h1>
            <dl class="recibos_detail_spec">
                <?php foreach ($recibo_detail['rows'] as $row) : ?>
                    <dt><?php echo htmlspecialchars($row[0], ENT_QUOTES, 'UTF-8'); ?></dt>
                    <dd><?php echo htmlspecialchars($row[1], ENT_QUOTES, 'UTF-8'); ?></dd>
                <?php endforeach; ?>
            </dl>
            <button type="button" class="login_form_submit recibos_pdf_btn" id="recibos-pdf-btn">Descargar PDF</button>
        </main>
    <?php else : ?>
        <main class="recibos_main app_content_column">
            <h2 class="recibos_section_title">Información de transacciones</h2>
            <ul class="recibos_list">
                <?php foreach ($recibos_items as $rid => $tx) :
                    $sign = $tx['list_amount_sign'];
                    $amt_class = 'recibos_amount';
                    if ($sign === 'minus') {
                        $amt_class .= ' recibos_amount--out';
                    } elseif ($sign === 'plus') {
                        $amt_class .= ' recibos_amount--in';
                    }
                    $href = 'index.php?' . http_build_query(['page' => 'recibos', 'recibo' => $rid]);
                    $amt_disp = htmlspecialchars($tx['list_amount'], ENT_QUOTES, 'UTF-8');
                    if ($sign === 'minus') {
                        $amt_html = '&minus;' . $amt_disp;
                    } elseif ($sign === 'plus') {
                        $amt_html = '+' . $amt_disp;
                    } else {
                        $amt_html = $amt_disp;
                    }
                    ?>
                    <li>
                        <a href="<?php echo htmlspecialchars($href, ENT_QUOTES, 'UTF-8'); ?>" class="recibos_row recibos_row_link">
                            <div class="recibos_row_text">
                                <span class="recibos_kind"><?php echo htmlspecialchars($tx['kind'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <time class="recibos_date" datetime="<?php echo htmlspecialchars($tx['datetime_attr'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($tx['list_datetime'], ENT_QUOTES, 'UTF-8'); ?></time>
                            </div>
                            <span class="<?php echo htmlspecialchars($amt_class, ENT_QUOTES, 'UTF-8'); ?>"><?php echo $amt_html; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </main>
    <?php endif; ?>

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
</div>

<script>
(function () {
    var btn = document.getElementById('recibos-pdf-btn');
    if (!btn) return;
    btn.addEventListener('click', function () {
        // demo: sin backend de PDF aún
    });
})();
</script>
