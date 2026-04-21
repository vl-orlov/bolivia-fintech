(function () {
    function closeAll() {
        document.querySelectorAll('.home_nav_more_wrap').forEach(function (wrap) {
            var menu = wrap.querySelector('.home_nav_more_menu');
            var btn = wrap.querySelector('.home_nav_more_btn');
            if (menu) {
                menu.hidden = true;
            }
            if (btn) {
                btn.setAttribute('aria-expanded', 'false');
            }
            wrap.classList.remove('home_nav_more_wrap--open');
        });
    }

    document.querySelectorAll('.home_nav_more_wrap').forEach(function (wrap) {
        var btn = wrap.querySelector('.home_nav_more_btn');
        var menu = wrap.querySelector('.home_nav_more_menu');
        if (!btn || !menu) {
            return;
        }

        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            var willOpen = menu.hidden;
            closeAll();
            if (willOpen) {
                menu.hidden = false;
                btn.setAttribute('aria-expanded', 'true');
                wrap.classList.add('home_nav_more_wrap--open');
            }
        });
    });

    document.addEventListener('click', function () {
        closeAll();
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeAll();
        }
    });
})();
