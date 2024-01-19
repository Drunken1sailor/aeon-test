<div id="modal">
    <div id="modal_container">
        <div id="modal_overlay">
            <div class="dn" id="modal_close" onclick="common.modal_hide();"></div>
            <div id="modal_content"></div>
        </div>
    </div>
</div>
<div class="wrap">
    <div class="main_menu">
        <div>
            <a href="#">News</a>
            <a href="#">Delivery</a>
            <a href="#">Services</a>
            <a href="#">Payments</a>
            <a href="plots"<?php if (self::$_tpl_vars['global']['path'] == 'plots'): ?> class="active"<?php endif; ?>>Plots</a>
            <a href="users"<?php if (self::$_tpl_vars['global']['path'] == 'users'): ?> class="active"<?php endif; ?>>Users</a>
            <a href="#">Messages</a>
        </div>
        <div>
            <a href="/logout">Logout</a>
        </div>
    </div>
    <div>
        <?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>(self::$_tpl_vars['section']), 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>
    </div>
</div>