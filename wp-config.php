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
define( 'AUTH_KEY',         'q+aNS&u,WMIEC*_c><gHlPq6X^b,]g}lrx1pNNr=]L4&TLyQCA~CwrAdZya$Q(&o' );
define( 'SECURE_AUTH_KEY',  'p`zvd/v2$,qP/.=C+n|8o?;%7wy/$47G]UEmqvp#<V!^wHza8@HwSY#h1*3{Q{FH' );
define( 'LOGGED_IN_KEY',    '1()u~0!A&1L353Ex<CSHb@&RGs3glUg=-z=[qeVFVP35)c&KGLUWBqMjjUF<rE[n' );
define( 'NONCE_KEY',        '</>mtD:z>z-)-.~^b{D=i`h=ya6>Eed={|),{E0OiXTx#k}WS;tWB0n@L+h{qHBt' );
define( 'AUTH_SALT',        'CYXrUffjK^i=s9sGz<[78K?Oc`E`]9`xk7nojUX_WtYGLDA}_x#oi)Yc7[]a0S1*' );
define( 'SECURE_AUTH_SALT', 'i4212:}_G8Sn4G%q9c58mjVE2tpIIqaLH%fzf#VX++ [,URG3JqcORrU#XY$5=rs' );
define( 'LOGGED_IN_SALT',   '|:9OjG<d8HZW^]_>%FF);1$|9?a@q(nqj~RJS5J,q)l)d4o1Y03~Ba>n|}K!&X3,' );
define( 'NONCE_SALT',       'wsQe$P%4K8{7u<iIn1mcQ=Nn43Gj;Uxkq(N8.=LK7iK(i?%8Y!IkY,?Y9166+RI5' );

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
