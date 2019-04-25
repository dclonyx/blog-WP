<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Blog' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'mydev' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'developpeur' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|pOrE2iR_a6pq{GzF3m.u5 =4nvsL1a{uO`0?<X?HQ]yp@wbE=[n$9zCdU#.J:}_' );
define( 'SECURE_AUTH_KEY',  'Em~1ki??2B&TMhn+U@-_M<FY/- 1Pi3NTQ&HsRfQDgmxfPh~j1>6-t?P$Ql/6pj;' );
define( 'LOGGED_IN_KEY',    '5fab*%IH9NYa%Nm-Y%P#^Pk[T3>)4M`BnhSb|r|>J]2vaUrzb$9~2Ca;I.N!e!^9' );
define( 'NONCE_KEY',        'nuM#0b[ cY;m-Qn4H57`0V~%DlI]UW)Z11JOkjwbO}H.g}jA]C1uXK=J^Rn&k9dr' );
define( 'AUTH_SALT',        '&EUGRI^#-H8Mk6h&#Q3l,W0%3`$BmzRrq^9VKA^?-2PcKP>;b~<P{Hd$3ChC60BY' );
define( 'SECURE_AUTH_SALT', '_$sJztwFdU.>^$OAT0/%erV++J{$/3qz*HRz9{,0,%K;2?hxQw&BK:US:F/3sY g' );
define( 'LOGGED_IN_SALT',   '(wAb||#4Al6_|O0N#F:`gdz`<Nfs@^>{cjCr&KJ`*jf?&{0.d?^pw[r&PQN9I<Rf' );
define( 'NONCE_SALT',       'vS?P/TUIB4GK?L=`|*S,v1^UKEM6^&XJ#0pkT30ZxBFh#~gjA2j)97+.rF#@w)4T' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'blog_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
