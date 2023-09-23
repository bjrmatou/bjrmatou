<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bjrmatou' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xv9C<z%kNIJA;6G_jix`1EUu{{}V~q^vIJPP;om7|fu}`-^pb4H<:8]jzp^I@{Ok' );
define( 'SECURE_AUTH_KEY',  'mh4KRXT0,3vw7zM7@D@k,B!>ey1DX:a%c3 nchq]4UNpiMhJs;t.7opwG;T^N./%' );
define( 'LOGGED_IN_KEY',    'b@sp$Z[! QRJNR&parq#^E@7$;:<MfPY~naLW+U[9UAS:iwXKSudUHn^MkB*@|$h' );
define( 'NONCE_KEY',        '0M52/(s+vGs|U<Z-0 Y3C/R<*AJH4=):}f8|9Cz)?}8*Yp^Cc4Y{zc.Y!5K9yqmX' );
define( 'AUTH_SALT',        'B!TTqsl14+=VWdV{>m#SIRV}KOG4:W}qNkR|Nph8E,>rt=: dql@%j8no,!NRCfp' );
define( 'SECURE_AUTH_SALT', '{Q}o]nHYZW,eiv+$!h6k(rQ>u=kXs;L{pRn_)>ZlqqS||Vc%2>rqPh}/UY2|cQ~e' );
define( 'LOGGED_IN_SALT',   '*}X>:#~ E5PUr=4W?@SUhJ%Y&[bB>_XS+rOn@P&=n_[kxu4YVl76D7/fM&h3^R)!' );
define( 'NONCE_SALT',       'n{QBnh}ee}~A,NrWR$sk:oBMo&%%R#,7s)%_2Vn.&Pu1BH[v{:E`=^ tzT=#sdE1' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
