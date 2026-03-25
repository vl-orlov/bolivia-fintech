<?php
/**
 * Top bar: logo at start, optional action link at end.
 * Set any of these before include to override defaults:
 *   $app_header_logo_src (string)
 *   $app_header_logo_w, $app_header_logo_h (int)
 *   $app_header_action_href (string) — empty string hides the action slot
 *   $app_header_action_text (string)
 */
$app_header_logo_src = $app_header_logo_src ?? 'img/logo.svg';
$app_header_logo_w = isset($app_header_logo_w) ? (int) $app_header_logo_w : 72;
$app_header_logo_h = isset($app_header_logo_h) ? (int) $app_header_logo_h : 72;
$app_header_action_href = $app_header_action_href ?? 'index.php';
$app_header_action_text = $app_header_action_text ?? 'Ingresar';
$show_action = $app_header_action_href !== '';
?>
<header class="app_header_bar">
    <img
        src="<?php echo htmlspecialchars($app_header_logo_src, ENT_QUOTES, 'UTF-8'); ?>"
        alt=""
        class="app_header_bar_logo"
        width="<?php echo $app_header_logo_w; ?>"
        height="<?php echo $app_header_logo_h; ?>"
    >
    <?php if ($show_action) { ?>
        <div class="app_header_bar_tail">
            <a href="<?php echo htmlspecialchars($app_header_action_href, ENT_QUOTES, 'UTF-8'); ?>" class="app_btn_outline_accent"><?php echo htmlspecialchars($app_header_action_text, ENT_QUOTES, 'UTF-8'); ?></a>
        </div>
    <?php } ?>
</header>
