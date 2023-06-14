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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'facilitapay_blog' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', '127.0.0.1' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '!r2k`/`b$P5ZJFYQ@ub<e8+ZlUg{gYHxO$WR<N!P#a4]HTnP)Nhl8M.Ja:D@p.%P' );
define( 'SECURE_AUTH_KEY',  'xf}$,@H&(lTP(vj*U_Uh:OjHgiJ]htKP7f~]ncAlO@rbVw)/9s@!k+{^[a+)8_sI' );
define( 'LOGGED_IN_KEY',    '&8rDs@<KdUQQ/*70_cvqq|Oq-^IH@*eRX7k0E0{IWjP*T9~w*Q$am[P6Y~w3Xq`0' );
define( 'NONCE_KEY',        'j`1y93(nh{3CDU9DM$K2zgz_Q(:_^//cT]b%*OG~aHI,N^-c|FQn}4zzsF8sSA?8' );
define( 'AUTH_SALT',        '7qB}3N-x[;4(Lv*.xjfM/*U ?fq$[rs4<[a$beuoTZevMiJmrx8:f~(;<A)GzrJ|' );
define( 'SECURE_AUTH_SALT', '=X.skU-.F(:`dz4x}P39W7|Cgw?-(]EB,Oxd{&(j?Mfc(J7DY1c@&#4=O/PArMS|' );
define( 'LOGGED_IN_SALT',   '?JR/:$|[Tj%f`c:i`?b0}@TZl>s,ZXS4|[XTQ<x7=S)Fsx$_$Q_s)Cm/<sseAeFT' );
define( 'NONCE_SALT',       'igG#,fQ{$TM^B(hnzknz[w]dGd~6pLa<;E=vJ}nsBDZ?f69}=P@eiRMv&hbz1;#6' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'fcb_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
