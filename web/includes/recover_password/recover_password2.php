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
                            <p class="recover_label" id="recover-security-heading">Seguridad:</p>
                            <div class="recover_field_stack">
                                <input
                                    class="login_form_input"
                                    type="password"
                                    id="reset-password"
                                    name="password"
                                    placeholder="Ingrese la nueva contraseña"
                                    autocomplete="new-password"
                                    aria-labelledby="recover-security-heading"
                                >
                                <input
                                    class="login_form_input"
                                    type="password"
                                    id="reset-password-confirm"
                                    name="password_confirm"
                                    placeholder="Confirme la nueva contraseña"
                                    autocomplete="new-password"
                                    aria-labelledby="recover-security-heading"
                                >
                            </div>
                        </div>

                        <button type="button" onclick="window.location.href='index.php?page=login'" class="login_form_submit recover_submit">Guardar datos</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
