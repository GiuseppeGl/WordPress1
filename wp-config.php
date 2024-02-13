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
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'repo_wp' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?eMK:X30/P aHhPnNhgJnKz)gas/PC3T*a9d|_/-L7(@WI`5n;uYY>)Ch3g[Du|Y' );
define( 'SECURE_AUTH_KEY',  '(`w+sP9wNyKj[_9$t{:J;$s`ApSZy^*<9QR4}u#SYc<wHtfy[n<.N /{Ss3T&AQ.' );
define( 'LOGGED_IN_KEY',    'ZBbX*&;oGr,gh.z;E{0,?Z@h#DLCn^b~oeg/H,Ptm&VZoJZ3@tXBh7o1!;_S{GHP' );
define( 'NONCE_KEY',        '_.0(suyuoMg^x&AN#?f:hm]PJ;Z~i{p/*0Or%>dyqt`D)~uK&ZF.7O2-;6kONWa?' );
define( 'AUTH_SALT',        'V5!Z;hVN~r]J3k#6XMFi#jK3I1EhIp!c{0({Sg,}|r I|dEGG+|ehOW>-O-Nr1f%' );
define( 'SECURE_AUTH_SALT', ':V/IiGan>W;/-jNJ=eO-T,ozxw*yR^^8<dnBZkG;^iN<I;gP9>;(<J+G: #<SKQd' );
define( 'LOGGED_IN_SALT',   ']oJHl*#kSAv-chej<LueIO+Av@jSFU})K+sk^hwGXOz|}H6OzTy[q^y|u(~qxo>T' );
define( 'NONCE_SALT',       ')1?O]sH0_#G_u(>K#RoW{7ZhGAhG}kB?TB/hU`C/*^v]Euh{.Pfl{+i^ASV57~!:' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
