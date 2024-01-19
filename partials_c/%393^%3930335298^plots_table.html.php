<table>
    <tr>
        <th>Plot, number</th>
        <th>Size, acres</th>
        <th>Status</th>
        <th>Billing</th>
        <th>Price</th>
        <th>Owners</th>
        <th></th> 
    </tr>
    <?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['plots']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <td><?php echo self::$_tpl_vars['plots'][self::$_sections['i']['index']]['number']; ?>
</td>
        <td><?php echo self::$_tpl_vars['plots'][self::$_sections['i']['index']]['size']; ?>
</td>
        <td<?php if (self::$_tpl_vars['plots'][self::$_sections['i']['index']]['status'] == 0): ?> class="green" <?php endif; ?>><?php echo self::$_tpl_vars['plots'][self::$_sections['i']['index']]['status_str']; ?>
</td>
        <td><?php if (self::$_tpl_vars['plots'][self::$_sections['i']['index']]['billing'] == 1): ?>Yes<?php else: ?>No<?php endif; ?></td>
        <td><?php echo self::$_tpl_vars['plots'][self::$_sections['i']['index']]['price']; ?>
 AED</td>
        <td>
            <?php if (self::$_tpl_vars['plots'][self::$_sections['i']['index']]['users']): ?>
            <?php if (isset(self::$_sections['j'])) unset(self::$_sections['j']);
self::$_sections['j']['name'] = 'j';
self::$_sections['j']['loop'] = is_array($_loop=self::$_tpl_vars['plots'][self::$_sections['i']['index']]['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
self::$_sections['j']['show'] = true;
self::$_sections['j']['max'] = self::$_sections['j']['loop'];
self::$_sections['j']['step'] = 1;
self::$_sections['j']['start'] = self::$_sections['j']['step'] > 0 ? 0 : self::$_sections['j']['loop']-1;
if (self::$_sections['j']['show']) {
    self::$_sections['j']['total'] = self::$_sections['j']['loop'];
    if (self::$_sections['j']['total'] == 0)
        self::$_sections['j']['show'] = false;
} else
    self::$_sections['j']['total'] = 0;
if (self::$_sections['j']['show']):

            for (self::$_sections['j']['index'] = self::$_sections['j']['start'], self::$_sections['j']['iteration'] = 1;
                 self::$_sections['j']['iteration'] <= self::$_sections['j']['total'];
                 self::$_sections['j']['index'] += self::$_sections['j']['step'], self::$_sections['j']['iteration']++):
?>
            <div><?php echo self::$_tpl_vars['plots'][self::$_sections['i']['index']]['users'][self::$_sections['j']['index']]['first_name']; ?>
, <span class="gray"><?php echo self::$_tpl_vars['plots'][self::$_sections['i']['index']]['users'][self::$_sections['j']['index']]['phone_str']; ?>
</span></div>
            <?php endfor; endif; ?>
            <?php else: ?>
            -
            <?php endif; ?>
        </td>
        <td class="right_column">
            <i class="icon icon_ellipsis" onclick="common.menu_popup_toggle(this, event);">
                <div class="menu_popup">
                    <div onclick="common.plot_edit_window(<?php echo self::$_tpl_vars['plots'][self::$_sections['i']['index']]['id']; ?>
, event);">Edit</div>
                </div>
            </i>
        </td>
    </tr>
    <?php endfor; endif; ?>
</table>