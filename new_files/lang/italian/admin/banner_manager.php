<?php
define('HEADING_TITLE', 'Banner Manager');
define('TABLE_HEADING_BANNERS', 'Banner');
define('TABLE_HEADING_GROUPS', 'Gruppo');
define('TABLE_HEADING_STATISTICS', 'indicazione/ clic');
define('TABLE_HEADING_STATUS', 'Stato');
define('TABLE_HEADING_ACTION', 'Azione');
define('TABLE_HEADING_LANGUAGE', 'Lingua');
define('TEXT_BANNERS_TITLE', 'Titolo del Banner:'); 
define('TEXT_BANNERS_URL', 'Banner-URL:');
define('TEXT_BANNERS_URL_NOTE', 'URL di destinazione quando si clicca sul banner.'); 
define('TEXT_BANNERS_GROUP', 'Gruppo Banner:'); 
define('TEXT_BANNERS_NEW_GROUP', ', oppure inserisca sotto un altro gruppo di Banner'); 
define('TEXT_BANNERS_NEW_GROUP_NOTE', 'Per visualizzare un Banner nel modello, il modello deve essere esteso<br/>Esempio: Banner Gruppo Banner , il banner pu&ograve; essere visualizzato nel template nel index.html con ${BANNER}');
define('TEXT_BANNERS_IMAGE', 'immagine (File):'); 
define('TEXT_BANNERS_IMAGE_LOCAL', ', oppure immetta sotto il file locale del suo server'); 
define('TEXT_BANNERS_IMAGE_TARGET', 'destinazione immagine (memorizzare in):'); 
define('TEXT_BANNERS_HTML_TEXT', 'HTML Testo:');
define('TEXT_BANNERS_HTML_TEXT_NOTE', 'Qui potete inserire direttamente un codice HTML che avete ricevuto da un servizio affiliato per visualizzare il banner.');
define('TEXT_BANNERS_EXPIRES_ON', 'valido fino a:');
define('TEXT_BANNERS_OR_AT', ', o in');
define('TEXT_BANNERS_IMPRESSIONS', 'Impressioni/Indicazioni.');
define('TEXT_BANNERS_SCHEDULED_AT', 'valido a partire da:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>nota banner:</b><ul><li>Per il Banner pu&ograve; utilizzare l\'immagine o il testo HTML, non &egrave; possibile utilizzare entrambi nello stesso momento.</li><li>Se vengono utilizzati entrambi i tipi di Banner allo stesso momento, sar&agrave; mostrato solo il Banner testo HTML.</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>nota:</b><ul><li>sul registro immagine deve esserci uno scritto adatto!</li><li>non riempia il campo\'la destinazione dell\'immagine(memorizzare in)\', se non desidera copiare l\'immagine sul suo server (es. Se l\'immagine &egrave; disponibile sul suo server).</li><li>la \'destinazione immagine (memorizzare in)\' Il campo, alla fine, deve essere registrato con \'/\'(es. banners/).</li></ul>'); 
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>indicazioni valide:</b><ul><li>riempire solo un campo!</li><li>se il banner dovesse presentarsi oltre i limiti permessi, non deve essere inserito in questo campo.</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>indicazioni valide:</b><ul><li>nell\'utilizzo di questa funzione, il Banner sar&agrave; visibile solo a partire dalla data di emissione.</li><li>Tutti i Banner con questa funzione saranno disattivi, fino alla loro attivazione.</li></ul>');
define('TEXT_BANNERS_DATE_ADDED', 'aggiungere il:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'valida da: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'valida fino al: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'valida fino: <b>%s</b> impressioni/comunicazioni');
define('TEXT_BANNERS_STATUS_CHANGE', 'stato modifica: %s');
define('TEXT_BANNERS_DATA', 'D<br />A<br />T<br />E<br />N');
define('TEXT_BANNERS_LAST_3_DAYS', 'ultimi 3 giorni');
define('TEXT_BANNERS_BANNER_VIEWS', 'Mostra banner');
define('TEXT_BANNERS_BANNER_CLICKS', 'clic banner');
define('TEXT_INFO_DELETE_INTRO', '&eacute; sicuro di voler eliminare questo banner?');
define('TEXT_INFO_DELETE_IMAGE', 'elimina immagine banner');
define('SUCCESS_BANNER_INSERTED', 'Esito: il Banner &egrave; stato inserito.');
define('SUCCESS_BANNER_UPDATED', 'Esito: il Banner &egrave; stato attivato.');
define('SUCCESS_BANNER_REMOVED', 'Esito: il  Banner &egrave; stato cancellato.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Esito: lo stato del Banner &egrave; stato attivato.');
define('ERROR_BANNER_TITLE_REQUIRED', 'Errore: &egrave; necessario un titolo per il Banner.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Errore: &egrave; necessario un gruppo Banner.');
define('ERROR_BANNER_IMAGE_HTML_REQUIRED', 'Errore: &Egrave; richiesta l\'immagine del banner o il testo HTML.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Errore: Il registro destinazione %s non esiste.');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Errore: il registro destinazione %s non &egrave; scrivibile.');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Errore: l\'immagine non esiste.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Errore: l\'immagine non pu&ograve; essere cancellata.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Errore: Stato Flag sconosciuto.');
define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Errore: il registro \'graphs\' non esiste! Costruisca un registro \'graphs\' nel registro \'images\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Errore: il registro \'graphs\' &egrave; protetto da scrittura!');
// BOF - Tomcraft - 2009-11-06 - Use variable TEXT_BANNERS_DATE_FORMAT
define('TEXT_BANNERS_DATE_FORMAT', 'JJJJ-MM-TT');
// EOF - Tomcraft - 2009-11-06 - Use variable TEXT_BANNERS_DATE_FORMAT
define('TEXT_BANNERS_LANGUAGE', 'Lingua:');
define('TEXT_BANNERS_LANGUAGE_NOTE', 'Selezionare la lingua in cui il banner deve essere visualizzato?');
define('TEXT_NO_FILE', '-- nessun file --');
?>