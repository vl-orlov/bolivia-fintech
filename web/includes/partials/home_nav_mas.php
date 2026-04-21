<?php
$nav_mas_active = !empty($nav_mas_active);
$mas_icon_file = $nav_mas_active ? 'Mas_active.svg' : 'Mas.svg';
?>
<div class="home_nav_more_wrap">
    <button
        type="button"
        class="home_nav_link home_nav_more_btn<?php echo $nav_mas_active ? ' home_nav_link--active' : ''; ?>"
        aria-expanded="false"
        aria-haspopup="menu"<?php echo $nav_mas_active ? ' aria-current="page"' : ''; ?>
    >
        <span class="home_nav_icon_wrap">
            <img
                src="img/icons/<?php echo htmlspecialchars($mas_icon_file, ENT_QUOTES, 'UTF-8'); ?>"
                alt=""
                class="home_nav_icon"
                width="26"
                height="26"
            >
        </span>
        <span class="home_nav_label">Más</span>
    </button>
    <div class="home_nav_more_menu" role="menu" hidden>
        <a href="index.php?page=recibos" class="home_nav_more_item" role="menuitem">
            <img src="img/icons/Recibos.svg" alt="" class="home_nav_more_item_icon" width="28" height="28">
            <span class="home_nav_more_item_text">Recibos</span>
        </a>
        <a href="index.php?page=transferencias" class="home_nav_more_item" role="menuitem">
            <img src="img/icons/Transferencias.svg" alt="" class="home_nav_more_item_icon" width="28" height="28">
            <span class="home_nav_more_item_text">Transferencias en efectivo</span>
        </a>
    </div>
</div>
<?php unset($nav_mas_active); ?>
