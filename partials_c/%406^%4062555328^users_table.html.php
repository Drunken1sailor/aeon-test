<table>
    <tr>
        <th>Plot ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Last Login</th>
        <th></th>
    </tr>
    <?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
self::$_sections['i']['show'] = true;
self::$_sections['i']['max'] = self::$_sections['i']['loop'];
self::$_sections['i']['step'] = 1;
self::$_sections['i']['start'] = self::$_sections['i']['step'] > 0 ? 0 : self::$_sections['i']['loop']-1;
if (self::$_sections['i']['show']) {
    self::$_sections['i']['total'] = self::$_sections['i']['loop'];
    if (self::$_sections['i']['total'] == 0)
        self::$_sections['i']['show'] = false;
} else
    self::$_sections['i']['total'] = 0;
if (self::$_sections['i']['show']):

            for (self::$_sections['i']['index'] = self::$_sections['i']['start'], self::$_sections['i']['iteration'] = 1;
                 self::$_sections['i']['iteration'] <= self::$_sections['i']['total'];
                 self::$_sections['i']['index'] += self::$_sections['i']['step'], self::$_sections['i']['iteration']++):
?>
    <tr>
        <td><?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['plot_id']; ?>
</td>
        <td><?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['first_name']; ?>
</td>
        <td><?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['last_name']; ?>
</td>
        <td><?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['phone']; ?>
</td>
        <td><?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['email']; ?>
</td>
        <td><?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['last_login']; ?>
</td>
        <td class="right_column">
            <i class="icon icon_ellipsis" onclick="common.menu_popup_toggle(this, event);">
                <div class="menu_popup">
                    <div onclick="common.user_edit_window(<?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['id']; ?>
, event);">Edit</div>
                    <div onclick="common.user_edit_delete(<?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['id']; ?>
, event);">Delete</div>
                </div>
            </i>
        </td>
    </tr>
    <?php endfor; endif; ?>
</table>