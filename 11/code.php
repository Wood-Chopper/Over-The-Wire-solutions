<?

$defaultdata = array( "showpassword"=>"no", "bgcolor"=>"#ffffff");

$cookiesite = "ClVLIh4ASCsCBE8lAxMacFMZV2hdVVotEhhUJQNVAmhSEV4sFxFeaAw%3D";
$cookiesitedencode = base64_decode($cookiesite);
$cookiesitedexor = xor_encrypt($cookiesitedencode);
//echo $cookiesitedexor . "\n";

function xor_encrypt($in) {
    $key = "qw8J";
    $text = $in;
    $outText = '';

    // Iterate through each character
    for($i=0;$i<strlen($text);$i++) {
    $outText .= $text[$i] ^ $key[$i % strlen($key)];
    }

    return $outText;
}

echo base64_encode(xor_encrypt(json_encode(array( "showpassword"=>"yes", "bgcolor"=>"#ffffff"))));
?>