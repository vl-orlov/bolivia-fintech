<div class="login_page">
    <div class="login_page_strip" aria-hidden="true"></div>
    <div class="login_page_content">
        <div class="login_card">
            <header class="login_brand">
                <img src="img/logo.svg" alt="" class="login_brand_logo" width="120" height="120">
                <h1 class="login_brand_title"><strong>ViPS</strong> wallet</h1>
            </header>

            <form class="login_form" action="#" method="post" novalidate>
                <div class="login_form_group">
                    <label class="login_form_label" for="login-phone">Ingrese su numero de teléfono:</label>
                    <input
                        class="login_form_input"
                        type="tel"
                        id="login-phone"
                        name="phone"
                        placeholder="XX X XX XXXXXXXX"
                        autocomplete="tel"
                    >
                </div>

                <div class="login_form_group">
                    <label class="login_form_label" for="login-password">Ingrese su contraseña:</label>
                    <div class="login_form_password_wrap">
                        <input
                            class="login_form_input login_form_input_password"
                            type="password"
                            id="login-password"
                            name="password"
                            autocomplete="current-password"
                        >
                        <button
                            type="button"
                            class="login_form_toggle_password"
                            id="login-toggle-password"
                            aria-label="Mostrar u ocultar contraseña"
                            aria-pressed="false"
                        >
                            <img
                                src="img/icons/eye_clossed_icon.svg"
                                alt=""
                                class="login_form_toggle_icon login_form_toggle_icon_hidden"
                                width="22"
                                height="22"
                            >
                            <img
                                src="img/icons/eye_icon.svg"
                                alt=""
                                class="login_form_toggle_icon login_form_toggle_icon_visible"
                                width="22"
                                height="22"
                                hidden
                            >
                        </button>
                    </div>
                </div>

                <div class="login_form_links">
                    <a href="index.php?page=regnew" class="login_form_link">Registrar nuevo</a>
                    <a onclick="window.location.href='?page=recover_password_1'" class="login_form_link">Me olvidé la contraseña</a>
                </div>

                <button type="button" class="login_form_submit" onclick="window.location.href='?page=home'">Iniciar sesión</button>
            </form>
        </div>
    </div>
</div>

<script>
(function () {
    var btn = document.getElementById('login-toggle-password');
    var input = document.getElementById('login-password');
    if (!btn || !input) return;
    var iconHidden = btn.querySelector('.login_form_toggle_icon_hidden');
    var iconVisible = btn.querySelector('.login_form_toggle_icon_visible');
    btn.addEventListener('click', function () {
        var show = input.type === 'password';
        input.type = show ? 'text' : 'password';
        btn.setAttribute('aria-pressed', show ? 'true' : 'false');
        if (iconHidden && iconVisible) {
            iconHidden.hidden = show;
            iconVisible.hidden = !show;
        }
    });
})();
</script>
