<?php
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_TEXT_TITLE', 'Netpay');
$_var = 'Netpay via Skrill';
if (_PAYMENT_MONEYBOOKERS_EMAILID=='') {
  $_var.='<br /><br /><b><font color="red">Si prega di configurare prima la configurazione di skrill.com! (Avv. Configurazione -> Partner -> Skrill.com)!</font></b>';
}
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_TEXT_DESCRIPTION', $_var);
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_NOCURRENCY_ERROR', 'Non &egrave; installata alcuna valuta accettata da Skrill!');
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_ERRORTEXT1', 'payment_error=');
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_TEXT_INFO','');
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_ERRORTEXT2', '&error=C\'&egrave; stato un errore durante il pagamento presso Skrill!');
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_ORDER_TEXT', 'Data dell\'ordine: ');
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_TEXT_ERROR', 'Errore di pagamento!');
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_CONFIRMATION_TEXT', 'Grazie per il vostro ordine!');
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_TRANSACTION_FAILED_TEXT', 'La vostra transazione di pagamento presso Skrill &egrave; fallita. Riprova, oppure seleziona un\'altra opzione di pagamento!');
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_STATUS_TITLE', 'Abilita Skrill');
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_STATUS_DESC', 'Vuoi accettare pagamenti tramite Skrill?');
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_SORT_ORDER_TITLE', 'Ordina l\'ordine di visualizzazione.');
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_SORT_ORDER_DESC', 'Ordina l\'ordine di visualizzazione. Il pi&ugrave; basso viene visualizzato per primo.');
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_ZONE_TITLE', 'Zona di pagamento');
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_ZONE_DESC', 'Se viene selezionata una zona, abilitare questo metodo di pagamento solo per quella zona.');
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_ALLOWED_TITLE' , 'Zone consentite');
define('MODULE_PAYMENT_MONEYBOOKERS_NETPAY_ALLOWED_DESC' , 'Si prega di inserire le zone <b>separatamente</b> che dovrebbero essere autorizzate ad utilizzare questo modulo (ad es. AT,DE (lasciare vuote se si desidera consentire tutte le zone))');
?>