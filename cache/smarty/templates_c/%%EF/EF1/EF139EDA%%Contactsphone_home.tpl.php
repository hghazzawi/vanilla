<?php /* Smarty version 2.6.11, created on 2016-04-18 19:41:41
         compiled from cache/modules/Import/Contactsphone_home.tpl */ ?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_home']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_home']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_home']['value']);  endif; ?>  

<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_home']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_home']['name']; ?>
' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='1'	  class="phone" >