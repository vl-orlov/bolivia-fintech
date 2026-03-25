<div class="login_page">
    <div class="login_page_strip" aria-hidden="true"></div>
    <div class="login_page_content recover_page_content">
        <div class="app_content_column recover_page_column">
            <div class="recover_page_header_anchor">
                <?php
                $app_header_action_href = 'index.php?page=login';
                $app_header_action_text = 'Ingresar';
                include __DIR__ . '/partials/app_header_bar.php';
                ?>
            </div>
            <div class="recover_page_card_area">
                <div class="recover_card">
                    <form class="recover_form reg_form" action="#" method="post" novalidate>
                        <div class="recover_section">
                            <label class="recover_label" for="reg-phone">Ingrese su numero de teléfono:</label>
                            <div class="recover_row">
                                <input
                                    class="login_form_input recover_row_input"
                                    type="tel"
                                    id="reg-phone"
                                    name="phone"
                                    placeholder="XX X XX XXXXXXXX"
                                    autocomplete="tel"
                                >
                                <button type="button" class="recover_row_btn reg_row_action_btn" id="reg-phone-send">Enviar código</button>
                            </div>
                            <div class="reg_verify_block" id="reg-phone-verify" hidden>
                                <div class="recover_row reg_verify_row">
                                    <input
                                        class="login_form_input recover_row_input"
                                        type="text"
                                        id="reg-phone-code"
                                        name="phone_code"
                                        placeholder="Introduce el código recibido"
                                        inputmode="numeric"
                                        autocomplete="one-time-code"
                                    >
                                    <button type="button" class="recover_row_btn reg_row_action_btn" id="reg-phone-verify-btn">Verificar</button>
                                </div>
                                <p class="recover_hint reg_verify_hint">
                                    <span class="reg_timer" id="reg-phone-timer" aria-live="polite">01:00</span>
                                    El código de verificación no llegó -
                                    <a href="#" class="recover_resend" data-reg-timer="reg-phone-timer">reenviar</a>.
                                </p>
                            </div>
                            <div class="reg_verified_status" id="reg-phone-verified" hidden>
                                <p class="reg_verified_text">
                                    <span class="reg_verified_icon" aria-hidden="true">&#10003;</span>
                                    Número de teléfono verificado.
                                </p>
                            </div>
                        </div>

                        <div class="recover_section">
                            <label class="recover_label" for="reg-email">Ingrese su correo electrónico:</label>
                            <div class="recover_row">
                                <input
                                    class="login_form_input recover_row_input"
                                    type="email"
                                    id="reg-email"
                                    name="email"
                                    placeholder="example@gmail.com"
                                    autocomplete="email"
                                >
                                <button type="button" class="recover_row_btn reg_row_action_btn" id="reg-email-send">Enviar código</button>
                            </div>
                            <div class="reg_verify_block" id="reg-email-verify" hidden>
                                <div class="recover_row reg_verify_row">
                                    <input
                                        class="login_form_input recover_row_input"
                                        type="text"
                                        id="reg-email-code"
                                        name="email_code"
                                        placeholder="Introduce el código recibido"
                                        inputmode="numeric"
                                        autocomplete="one-time-code"
                                    >
                                    <button type="button" class="recover_row_btn reg_row_action_btn" id="reg-email-verify-btn">Verificar</button>
                                </div>
                                <p class="recover_hint reg_verify_hint">
                                    <span class="reg_timer" id="reg-email-timer" aria-live="polite">01:00</span>
                                    El código de verificación no llegó -
                                    <a href="#" class="recover_resend" data-reg-timer="reg-email-timer">reenviar</a>.
                                </p>
                            </div>
                            <div class="reg_verified_status" id="reg-email-verified" hidden>
                                <p class="reg_verified_text">
                                    <span class="reg_verified_icon" aria-hidden="true">&#10003;</span>
                                    Correo electrónico verificado.
                                </p>
                            </div>
                        </div>

                        <div class="recover_section">
                            <span class="recover_label">Ingrese sus datos personales:</span>
                            <div class="recover_field_stack">
                                <input
                                    class="login_form_input"
                                    type="text"
                                    id="reg-firstname"
                                    name="firstname"
                                    placeholder="Nombre"
                                    autocomplete="given-name"
                                >
                                <input
                                    class="login_form_input"
                                    type="text"
                                    id="reg-lastname"
                                    name="lastname"
                                    placeholder="Apellido"
                                    autocomplete="family-name"
                                >
                                <input
                                    class="login_form_input"
                                    type="text"
                                    id="reg-doc"
                                    name="document_id"
                                    placeholder="Número de documento de identidad"
                                >
                            </div>
                        </div>

                        <div class="recover_section">
                            <span class="recover_label">Seguridad:</span>
                            <div class="recover_field_stack">
                                <input
                                    class="login_form_input"
                                    type="password"
                                    id="reg-password"
                                    name="password"
                                    placeholder="Ingrese la contraseña"
                                    autocomplete="new-password"
                                >
                                <input
                                    class="login_form_input"
                                    type="password"
                                    id="reg-password-confirm"
                                    name="password_confirm"
                                    placeholder="Confirme la contraseña"
                                    autocomplete="new-password"
                                >
                            </div>
                        </div>

                        <button type="submit" class="login_form_submit reg_submit_muted recover_submit" id="reg-submit-btn" disabled>Crear cuenta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
(function () {
    var timers = {};

    function fieldFilled(id) {
        var el = document.getElementById(id);
        return el && el.value.trim() !== '';
    }

    function isBannerVerified(bannerId) {
        var el = document.getElementById(bannerId);
        return el && !el.hidden;
    }

    function isRegisterFormComplete() {
        return (
            fieldFilled('reg-phone') &&
            fieldFilled('reg-email') &&
            fieldFilled('reg-firstname') &&
            fieldFilled('reg-lastname') &&
            fieldFilled('reg-doc') &&
            fieldFilled('reg-password') &&
            fieldFilled('reg-password-confirm') &&
            isBannerVerified('reg-phone-verified') &&
            isBannerVerified('reg-email-verified')
        );
    }

    function updateRegSubmit() {
        var btn = document.getElementById('reg-submit-btn');
        if (!btn) return;
        var ok = isRegisterFormComplete();
        btn.disabled = !ok;
        if (ok) {
            btn.classList.remove('reg_submit_muted');
        } else {
            btn.classList.add('reg_submit_muted');
        }
    }

    function formatTime(totalSeconds) {
        var m = Math.floor(totalSeconds / 60);
        var s = totalSeconds % 60;
        return (m < 10 ? '0' : '') + m + ':' + (s < 10 ? '0' : '') + s;
    }

    function startCountdown(timerElId, seconds) {
        if (timers[timerElId]) {
            clearInterval(timers[timerElId]);
        }
        var el = document.getElementById(timerElId);
        if (!el) return;
        var left = typeof seconds === 'number' ? seconds : 60;
        el.textContent = formatTime(left);
        timers[timerElId] = setInterval(function () {
            left -= 1;
            if (left < 0) {
                clearInterval(timers[timerElId]);
                timers[timerElId] = null;
                el.textContent = '00:00';
                return;
            }
            el.textContent = formatTime(left);
        }, 1000);
    }

    function clearTimer(timerElId) {
        if (timers[timerElId]) {
            clearInterval(timers[timerElId]);
            timers[timerElId] = null;
        }
    }

    function openVerify(blockId, timerId, verifiedId) {
        var block = document.getElementById(blockId);
        var verified = document.getElementById(verifiedId);
        if (verified) {
            verified.hidden = true;
        }
        if (!block) return;
        block.hidden = false;
        startCountdown(timerId, 59);
    }

    function completeVerify(blockId, timerId, verifiedId) {
        var block = document.getElementById(blockId);
        var verified = document.getElementById(verifiedId);
        clearTimer(timerId);
        if (block) {
            block.hidden = true;
        }
        if (verified) {
            verified.hidden = false;
        }
        updateRegSubmit();
    }

    var phoneSend = document.getElementById('reg-phone-send');
    if (phoneSend) {
        phoneSend.addEventListener('click', function () {
            openVerify('reg-phone-verify', 'reg-phone-timer', 'reg-phone-verified');
            updateRegSubmit();
        });
    }

    var phoneVerifyBtn = document.getElementById('reg-phone-verify-btn');
    if (phoneVerifyBtn) {
        phoneVerifyBtn.addEventListener('click', function () {
            completeVerify('reg-phone-verify', 'reg-phone-timer', 'reg-phone-verified');
        });
    }

    var emailSend = document.getElementById('reg-email-send');
    if (emailSend) {
        emailSend.addEventListener('click', function () {
            openVerify('reg-email-verify', 'reg-email-timer', 'reg-email-verified');
            updateRegSubmit();
        });
    }

    var emailVerifyBtn = document.getElementById('reg-email-verify-btn');
    if (emailVerifyBtn) {
        emailVerifyBtn.addEventListener('click', function () {
            completeVerify('reg-email-verify', 'reg-email-timer', 'reg-email-verified');
        });
    }

    document.querySelectorAll('.recover_resend[data-reg-timer]').forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            var tid = link.getAttribute('data-reg-timer');
            if (tid) {
                startCountdown(tid, 59);
            }
        });
    });

    var regForm = document.querySelector('.reg_form');
    if (regForm) {
        regForm.addEventListener('input', updateRegSubmit);
        regForm.addEventListener('change', updateRegSubmit);
        regForm.addEventListener('submit', function (e) {
            e.preventDefault();
            if (!isRegisterFormComplete()) return;
            window.location.href = 'index.php?page=home';
        });
    }
    updateRegSubmit();
})();
</script>
