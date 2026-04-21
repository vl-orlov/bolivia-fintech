<?php
$cambio_icon_src = 'img/icons/' . "\xD0\xA1" . 'ambio.svg';
// Backend: set true when the user has completed two-factor authentication.
$profile_two_factor_enabled = false;
?>
<div class="profile_page">
    <div class="profile_strip" aria-hidden="true"></div>

    <header class="profile_header app_content_column">
        <div class="profile_header_user">
            <img src="img/icons/user.svg" alt="" class="profile_header_avatar" width="44" height="44">
            <div class="profile_header_text">
                <strong class="profile_header_name">Juan López</strong>
                <span class="profile_header_phone">+54 9 11 6264-4638</span>
            </div>
        </div>
        <a href="index.php?page=login" class="profile_logout" aria-label="Salir">
            <img src="img/icons/logout.svg" alt="" class="profile_logout_icon" width="26" height="26">
        </a>
    </header>

    <main class="profile_main app_content_column">
        <h2 class="profile_section_title">Datos personales</h2>

        <form class="profile_form" action="#" method="post" novalidate>
            <div class="profile_field_row">
                <label class="profile_label" for="profile-email">Correo</label>
                <input class="profile_input" type="email" id="profile-email" name="email" value="juanlopez@gmail.com" autocomplete="email">
            </div>
            <div class="profile_field_row">
                <label class="profile_label" for="profile-phone">Teléfono</label>
                <input class="profile_input" type="tel" id="profile-phone" name="phone" value="+54 9 11 6264-4638" autocomplete="tel">
            </div>
            <div class="profile_field_row">
                <label class="profile_label" for="profile-firstname">Nombre</label>
                <input class="profile_input" type="text" id="profile-firstname" name="firstname" value="Juan" autocomplete="given-name">
            </div>
            <div class="profile_field_row">
                <label class="profile_label" for="profile-lastname">Apellido</label>
                <input class="profile_input" type="text" id="profile-lastname" name="lastname" value="López" autocomplete="family-name">
            </div>
            <div class="profile_field_row">
                <label class="profile_label" for="profile-password">Contraseña</label>
                <input class="profile_input" type="password" id="profile-password" name="password" autocomplete="new-password">
            </div>
            <div class="profile_field_row">
                <label class="profile_label" for="profile-password-confirm">Confirmarla</label>
                <input class="profile_input" type="password" id="profile-password-confirm" name="password_confirm" autocomplete="new-password">
            </div>

            <div class="profile_checks">
                <div class="profile_checks_row profile_checks_row--2fa">
                    <span class="profile_2fa_title">Identificación de dos factores</span>
                    <a
                        href="index.php?page=two_factor"
                        class="profile_2fa_btn"
                        id="profile-2fa-btn"
                    ><?php echo $profile_two_factor_enabled ? 'Editar' : 'Configurar'; ?></a>
                </div>
                <label class="profile_checks_row profile_checks_row--theme" for="profile-dark-theme">
                    <input
                        type="checkbox"
                        class="profile_theme_checkbox"
                        id="profile-dark-theme"
                        name="dark_theme"
                        role="switch"
                    >
                    <span class="profile_theme_switch" aria-hidden="true">
                        <span class="profile_theme_knob"></span>
                    </span>
                    <span class="profile_theme_text">Tema oscuro</span>
                </label>
            </div>

            <button type="button" class="login_form_submit profile_save_btn" id="profile-save-btn">Guardar</button>
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
            <a onclick="window.location.href='index.php?page=cambio'" class="home_nav_link">
                <span class="home_nav_icon_wrap">
                    <img src="<?php echo htmlspecialchars($cambio_icon_src, ENT_QUOTES, 'UTF-8'); ?>" alt="" class="home_nav_icon" width="26" height="26">
                </span>
                <span class="home_nav_label">Cambio</span>
            </a>
            <a onclick="window.location.href='index.php?page=profile'" class="home_nav_link home_nav_link--active" aria-current="page">
                <span class="home_nav_icon_wrap">
                    <img src="img/icons/user_active.svg" alt="" class="home_nav_icon" width="26" height="26">
                </span>
                <span class="home_nav_label">Datos</span>
            </a>
            <?php $nav_mas_active = false; include __DIR__ . '/partials/home_nav_mas.php'; ?>
        </div>
    </nav>
</div>

<script>
(function () {
    var btn = document.getElementById('profile-save-btn');
    if (!btn) return;
    btn.addEventListener('click', function () {
        // demo-only: no backend yet
        window.location.href = 'index.php?page=home';
    });
})();
</script>