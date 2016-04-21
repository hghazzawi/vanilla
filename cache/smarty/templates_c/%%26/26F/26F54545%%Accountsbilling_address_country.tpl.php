<?php /* Smarty version 2.6.11, created on 2016-04-18 14:40:14
         compiled from cache/modules/Import/Accountsbilling_address_country.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['billing_address_country']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['billing_address_country']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['billing_address_country']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['billing_address_country']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['billing_address_country']['name']; ?>
' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >