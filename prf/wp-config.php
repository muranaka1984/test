<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'prf');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[bw))$WSS69Y];~6N48FXbR/6vh^&~MU `u*YA a<5%F?<-5!o%O~0 7-*~D2(ty');
define('SECURE_AUTH_KEY',  ';)t[d5.,IcL6x4m5WF@1w6S?MbRMn8$k~ t-3F?Y&K$4WL5*#zIcJ>JPb%q+}w@@');
define('LOGGED_IN_KEY',    'wak`89GJMei7&N8lFfG)Sv^( ?y~YV}7w)d?]R49*^GHscy{<S0io48fR*$+|>KD');
define('NONCE_KEY',        '=T}qY[mBvR:!?*DDVT![aI+tD<,Wsq|W<3uR]-j>][|#y^V5n#kTUT9v7f[j&} h');
define('AUTH_SALT',        '(4)p5Fc[ ajd|U#1DSAI#pFp+7-nHnx_Nd;CMF]*~Xhhwv`hG%L0wmK-7?-yFPI2');
define('SECURE_AUTH_SALT', 'vfyN_onNopDJoN07>nt/_9I3c~rz<vW`EA+}C*1).u-:yZf!eO63=_G!Iwi0g%`a');
define('LOGGED_IN_SALT',   '#jVNIir*4J8peebZ(>Ny|[ V@F+4* SPTgfkC!lLIoY~[dh+N6x`.Cbec,:j5vlf');
define('NONCE_SALT',       '%AA!h1|-H>G3RrHsMh/A+KW(+rv(Ws~CDF5${:?W~OG%TwkbjY%/X-K9SqM%?)Ev');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'prf_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
