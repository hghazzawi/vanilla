<?php /* Smarty version 2.6.11, created on 2016-04-18 14:40:18
         compiled from cache/modules/Import/Accountsbilling_address_postalcode.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['billing_address_postalcode']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['billing_address_postalcode']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['billing_address_postalcode']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['billing_address_postalcode']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['billing_address_postalcode']['name']; ?>
' size='30' 
    maxlength='20' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >