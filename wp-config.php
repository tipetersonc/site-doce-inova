<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'site_doce_inova');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Pc$2014%');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')VvLiEF-BooV<YT{=6~LFSx&F9k[S8  :P9g-pFUrkOC~3<C;ZLt|6OzOSXI#:jt');
define('SECURE_AUTH_KEY',  'DSA7yC/^)<9{%E+.K|T{3[JU5@WrvW&qa4UomN||U2Y}iZ45TDv$U_){.S!{j.*P');
define('LOGGED_IN_KEY',    'rjLy{Rt}AU]WM)FSH#7|V2qY<JPQ-1/-!<iW?W()UYAz)Ai@s,/-sDU5Jc]R;!}s');
define('NONCE_KEY',        'V,|.bv4[#vL#B574HCA_RxD3w)o~eJLZV{OyvDOf58VUeilqIuLW48x})cn6R,6Z');
define('AUTH_SALT',        'R~XXEr_f5-RWkb&sJM[pQ*/iKP!6 iTsIS*gD~9#6*.WO!|ax5)JR>2J|N5!.6]w');
define('SECURE_AUTH_SALT', 'l|Ld++<[ gptKfDY[v/t)uv7++.AOM(kY5.cLx-w|h4-BPan/oN~Dk,gd)@M.:%2');
define('LOGGED_IN_SALT',   'Pf-ysO/[b!+.]Jj9?vyUUT0|Dj%L:/<-|,G1,Qa~)B3OWU}~]Gd6rrMBRn9_CylR');
define('NONCE_SALT',       'eePte@;om#B<v|z@,twT5~[MYyP$H<<l;/}9&McALR3XrmswEiW,G~)8m+vr/;JI');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
