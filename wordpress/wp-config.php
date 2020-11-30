<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von
 * wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define( 'DB_NAME', 'wordpress' );

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define( 'DB_USER', 'wordpress' );

/** Ersetze password_here mit deinem MySQL-Passwort */
define( 'DB_PASSWORD', 'wordpress' );

/** Ersetze localhost mit der MySQL-Serveradresse */
define( 'DB_HOST', 'localhost' );

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define( 'DB_CHARSET', 'utf8mb4' );

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define( 'AUTH_KEY',         'Mmo-9G),0qE/O@s{#Cy3lk{E4O/&Y7CYA*O9YTbWDCn_kk*MRu8m^bhf!}i5HG.}' );
define( 'SECURE_AUTH_KEY',  '1|ewqnt=3fgEwwn=K}e|x64d Gb-l V)isH|LE`ctBkl5|4&5pZL^lVFr@+W8%~s' );
define( 'LOGGED_IN_KEY',    'j T!ge+r;LW<S4*?:P}%)fji)h=SRRE.%?X+ZBU=R{JVqlZx3 %+$J{X52.UgVJK' );
define( 'NONCE_KEY',        'AJ~Tkb(e^6{$f:_PArcV) :Lq{/De`Q|,u-4sQ0_&Z(J$MP`TQs*0d JKlRMGzCK' );
define( 'AUTH_SALT',        'sW>X>Jl4Sx.4p8a0Bnmibo:@WIVp_:I`O_9a|UnJ[:%&>Z9d[#u[Ri[[,C$X)@O]' );
define( 'SECURE_AUTH_SALT', 'SvT`9#LR)L<{z+M~N hksemx#bFmIviK_*~2CtL^y(i}7v`8vx^odCn^R0dp|J~7' );
define( 'LOGGED_IN_SALT',   '}lWO*}%xLgo5Nn]NpT9:@6(l9uHt^?_:QZQvRo$lcA+G{hf-}D ;U{ )fmY97MgP' );
define( 'NONCE_SALT',       '*[+Tf;HB~%BO!f46mu9^A<)P`H<N  3%oE+f(IP*n(FQfvEpf^PD~a+2lg`XtH6V' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
