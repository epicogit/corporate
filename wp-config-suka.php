<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'epicocorpo' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', 'root' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vL4=<u7ELj4wpG*(GtD=OhZTu|R{&H0MpDMy>UX:_p[xxK,}E73%}bhjpL#xf51o' );
define( 'SECURE_AUTH_KEY',  '$ffrK8D>1L2)oER2QuIb ZBY&IqXq<VRroe>1s-%WfJzw+ujjza[YpeqSMtlEO|i' );
define( 'LOGGED_IN_KEY',    'oiK27%=;7HJ1H*ozE%m+olC^*i5l^+vom)T+eeg!lH+_6zWXtDXy?{Kn->`vPOd*' );
define( 'NONCE_KEY',        'Q(hlMj:w40cvAiK$&8Wj1-r&eo(o%PG0n5t05=(rsp/%b-K~huc6YyP!^&BDy%0K' );
define( 'AUTH_SALT',        'S67Y;V{B4B:#D5xaRo3i,5xhTULM^/t/&6?!27^d2wFo3go)vuGu$wBXjDi<S#Wh' );
define( 'SECURE_AUTH_SALT', 'T7leq.5Lse?So%^cs~0^@iu{)`?4h+KYUMz)${Otz.0A=N%J;h}JoGxCUAB/6PdP' );
define( 'LOGGED_IN_SALT',   ';[y7yN1:p|`FWH3R-3Y_,~pxYKq9.?[nO^r.rT4{pYu:!i3p@ 0N^da>yVCtjIh=' );
define( 'NONCE_SALT',       '-w!;b,i%-G/h>5h*@aUZ@..8q a-C8OHwxMsAQxP1Bi-(^-aasl^rZs*W~o-rut1' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
