<div class="login_page">
    <div class="login_page_strip" aria-hidden="true"></div>
    <div class="login_page_content">
        <div class="login_card">
            <header class="login_brand">
                <img src="img/logo.svg" alt="" class="login_brand_logo" width="120" height="120">
                <h1 class="login_brand_title"><strong>ViPS</strong> wallet</h1>
            </header>

            <form class="login_form login_form_twofa" action="#" method="post" novalidate>
                <h2 class="login_twofa_heading">Verificación en dos factores</h2>
                <p class="login_form_label login_form_label_center">Ingrese el código enviado por WhatsApp:</p>

                <div class="login_twofa_stack">
                    <div class="login_otp_row" role="group" aria-label="Código de verificación de 6 dígitos">
                        <?php for ($i = 1; $i <= 6; $i++) : ?>
                            <input
                                class="login_form_input login_form_input_otp"
                                type="text"
                                inputmode="numeric"
                                pattern="[0-9]*"
                                maxlength="1"
                                id="twofa-digit-<?php echo $i; ?>"
                                name="code[]"
                                autocomplete="<?php echo $i === 1 ? 'one-time-code' : 'off'; ?>"
                                aria-label="Dígito <?php echo $i; ?>"
                            >
                        <?php endfor; ?>
                    </div>

                    <div class="login_twofa_meta">
                        <span class="login_twofa_timer" id="twofa-timer" aria-live="polite">00:59</span>
                        <p class="recover_hint login_twofa_hint">
                            El código de verificación no llegó -
                            <a href="#" class="recover_resend" id="twofa-resend">reenviar.</a>
                        </p>
                    </div>

                    <button type="button" class="login_form_submit" id="twofa-verify-btn">Verificar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
(function () {
    var cells = [];
    for (var i = 1; i <= 6; i++) {
        cells.push(document.getElementById('twofa-digit-' + i));
    }
    cells = cells.filter(Boolean);

    function focusCell(index) {
        if (index >= 0 && index < cells.length && cells[index]) {
            cells[index].focus();
        }
    }

    cells.forEach(function (input, index) {
        input.addEventListener('input', function () {
            var v = input.value.replace(/\D/g, '');
            if (!v) {
                input.value = '';
                return;
            }
            input.value = v.slice(-1);
            if (index < cells.length - 1) {
                focusCell(index + 1);
            }
        });

        input.addEventListener('keydown', function (e) {
            if (e.key === 'Backspace' && !input.value && index > 0) {
                focusCell(index - 1);
            }
        });

        input.addEventListener('paste', function (e) {
            e.preventDefault();
            var text = (e.clipboardData || window.clipboardData).getData('text') || '';
            var digits = text.replace(/\D/g, '').slice(0, 6);
            if (!digits) return;
            for (var j = 0; j < cells.length; j++) {
                cells[j].value = digits[j] || '';
            }
            focusCell(Math.min(digits.length, cells.length) - 1);
        });
    });

    var timerId = null;
    function formatTime(totalSeconds) {
        var m = Math.floor(totalSeconds / 60);
        var s = totalSeconds % 60;
        return (m < 10 ? '0' : '') + m + ':' + (s < 10 ? '0' : '') + s;
    }

    function startCountdown(seconds) {
        var el = document.getElementById('twofa-timer');
        if (!el) return;
        if (timerId) {
            clearInterval(timerId);
        }
        var left = typeof seconds === 'number' ? seconds : 59;
        el.textContent = formatTime(left);
        timerId = setInterval(function () {
            left -= 1;
            if (left < 0) {
                clearInterval(timerId);
                timerId = null;
                el.textContent = '00:00';
                return;
            }
            el.textContent = formatTime(left);
        }, 1000);
    }

    startCountdown(59);

    var resend = document.getElementById('twofa-resend');
    if (resend) {
        resend.addEventListener('click', function (e) {
            e.preventDefault();
            startCountdown(59);
        });
    }

    var verifyBtn = document.getElementById('twofa-verify-btn');
    if (verifyBtn) {
        verifyBtn.addEventListener('click', function () {
            window.location.href = 'index.php?page=home';
        });
    }
})();
</script>
