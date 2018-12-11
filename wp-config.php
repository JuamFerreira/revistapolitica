<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'revistapolitica');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JonF_2S,SZ(i2{*lizXiM,&F{Cg]U!?UHW`G0PA_S)D7GJ~OP=w#vTMX:ll9YT&B');
define('SECURE_AUTH_KEY',  'J?3`#&BraX/MX~`N IIdTG^KC?W|{Vu>7#MSY~%2<;RIVF.Bd$9<g)SQ/Si;$U[R');
define('LOGGED_IN_KEY',    '^9Vo6@m:jiQBwfaS;9:dr[hZz#4pF3Uv3^6QY5*%y2l~7mK*<3@nkXV@`)XZ-68Z');
define('NONCE_KEY',        'URagY_eoXH.{ef[PA,]q_kJ&4G*+!fUc.,ux[<`(qq[&:2a~o<aiKs~,DNcUn}-M');
define('AUTH_SALT',        'U{AD;1X3SZ6Fc>]2GFnYT))#$zeOhuP>zVQX=jJYHoea|?.n&%UJ1)_V>G]~u+:V');
define('SECURE_AUTH_SALT', 'CqiFZzC[5KGB`NB:8Cde!5J)&mzA 3J$5I#,<o^PDL+qLOF+xXA??X<*f$2ZH%}Q');
define('LOGGED_IN_SALT',   'prgrBO},ug]VCWT{/o|L{mJRI/wCTRyZ$]15Eg;:BB(.68jR4_>|#LK*a-Wl!u(J');
define('NONCE_SALT',       '&A=&P4mYs1ks9d7ZYUQp1Ar^QRnXH#yzPM-`DA1*7RDo%xFo=Jo>9G(b:2)Xpwr1');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
