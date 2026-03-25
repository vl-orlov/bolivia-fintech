<div class="login_page">
    <div class="login_page_strip" aria-hidden="true"></div>
    <div class="login_page_content recover_page_content">
        <div class="app_content_column recover_page_column">
            <div class="recover_page_header_anchor">
                <?php
                $app_header_action_href = 'index.php?page=login';
                $app_header_action_text = 'Ingresar';
                include __DIR__ . '/../partials/app_header_bar.php';
                ?>
            </div>
            <div class="recover_page_card_area">
                <div class="recover_card">
                <form class="recover_form" action="#" method="post" novalidate>
                    <div class="recover_section">
                        <label class="recover_label" for="recover-phone">Ingrese su numero de teléfono:</label>
                        <div class="recover_row">
                            <input
                                class="login_form_input recover_row_input"
                                type="tel"
                                id="recover-phone"
                                name="phone"
                                placeholder="XX X XX XXXXXXXX"
                                autocomplete="tel"
                            >
                            <button type="button" class="recover_row_btn">Enviar</button>
                        </div>
                        <p class="recover_hint">Introduce el número de teléfono vinculado a su cuenta para recibir el código de restablecimiento de contraseña.</p>
                    </div>

                    <div class="recover_section">
                        <label class="recover_label" for="recover-code">Introduce el código recibido:</label>
                        <div class="recover_row">
                            <input
                                class="login_form_input recover_row_input"
                                type="text"
                                id="recover-code"
                                name="code"
                                inputmode="numeric"
                                autocomplete="one-time-code"
                            >
                            <button type="button" class="recover_row_btn">Verificar</button>
                        </div>
                        <p class="recover_hint">El código de verificación no llegó - <a href="#" class="recover_resend">reenviar</a>.</p>
                    </div>

                    <button type="button" class="login_form_submit recover_submit" onclick="window.location.href='index.php?page=recover_password_2'">Continuar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
