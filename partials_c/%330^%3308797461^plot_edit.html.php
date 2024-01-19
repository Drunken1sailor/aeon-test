<div class="modal_head">
    <i class="icon_close" onclick="common.modal_hide()"></i>
</div>
<div class="modal_body">
    <div class="input_group_modal">
        <div>Status</div>
        <select id="status">
            <option value="0"<?php if (self::$_tpl_vars['plot']['status_id'] == 0): ?> selected<?php endif; ?>>Free</option>
            <option value="1"<?php if (self::$_tpl_vars['plot']['status_id'] == 1): ?> selected<?php endif; ?>>Reserved</option>
            <option value="2"<?php if (self::$_tpl_vars['plot']['status_id'] == 2): ?> selected<?php endif; ?>>Sold</option>
        </select>
    </div>
    <div class="input_group_modal">
        <div>Billing</div>
        <select id="billing">
            <option value="0"<?php if (self::$_tpl_vars['plot']['billing'] == 0): ?> selected<?php endif; ?>>No</option>
            <option value="1"<?php if (self::$_tpl_vars['plot']['billing'] == 1): ?> selected<?php endif; ?>>Yes</option>
        </select>
    </div>
    <div class="input_group_modal">
        <div>Lot number</div>
        <input type="text" id="number" value="<?php echo self::$_tpl_vars['plot']['number']; ?>
">
    </div>
    <div class="input_group_modal">
        <div>Size, acres</div>
        <input type="text" id="size" value="<?php echo self::$_tpl_vars['plot']['size']; ?>
">
    </div>
    <div class="input_group_modal">
        <div>Price, AED</div>
        <input type="text" id="price" value="<?php echo self::$_tpl_vars['plot']['price']; ?>
">
    </div>
    <div class="modal_controls">
        <div>
            <div class="btn_modal" onclick="common.plot_edit_update(<?php echo self::$_tpl_vars['plot']['id']; ?>
);">Save</div>
        </div>
        <div>
            <div class="btn_modal light" onclick="common.modal_hide();">Cancel</div>
        </div>
    </div>
</div>