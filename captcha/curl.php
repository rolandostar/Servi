<?php
$variable = $_POST["key"];
$captcha = $_POST["cap"];

$postdata = http_build_query(
    array(
        '__EVENTTARGET' => '',
        '__EVENTARGUMENT' => '',
        '__VIEWSTATE' => '/wEPDwUJNDM4MjMwNTM1D2QWAmYPZBYCAgMPZBYKAgEPDxYCHghJbWFnZVVybAUVfi9JbWFnZXMvbG9nb3MvNjMucG5nZGQCBQ88KwANAgAPFgIeC18hRGF0YUJvdW5kZ2QMFCsAAgUDMDowFCsAAhYSHgVWYWx1ZQUGSW5pY2lvHglEYXRhQm91bmRnHghTZWxlY3RlZGceBFRleHQFBkluaWNpbx4LTmF2aWdhdGVVcmwFDS9kZWZhdWx0LmFzcHgeB0VuYWJsZWRnHgpTZWxlY3RhYmxlZx4HVG9vbFRpcAUGSW5pY2lvHghEYXRhUGF0aAUNL2RlZmF1bHQuYXNweBQrAAMFBzA6MCwwOjEUKwACFhAfBQUKUmVnbGFtZW50bx8CBQpSZWdsYW1lbnRvHwYFGC9SZWdsYW1lbnRvL0RlZmF1bHQuYXNweB8JBQpSZWdsYW1lbnRvHwdnHwhnHwoFGC9yZWdsYW1lbnRvL2RlZmF1bHQuYXNweB8DZ2QUKwACFhAfBQUFQXl1ZGEfAgUFQXl1ZGEfBgURL0F5dWRhL0F5dWRhLmFzcHgfCQUFQXl1ZGEfB2cfCGcfCgURL2F5dWRhL2F5dWRhLmFzcHgfA2dkZAIID2QWAgIDDw8WAh8FZWRkAgkPPCsADQEADxYCHwFnZGQCCg9kFgICAQ8WAh4HVmlzaWJsZWhkGAEFDmN0bDAwJG1haW5tZW51Dw9kBQZJbmljaW9kOU0swjPS9o0dnUw48KNtDvZqelo=',
        '__VIEWSTATEGENERATOR' => 'CA0B0334',
        '__EVENTVALIDATION' => '/wEWBQKW4enXBgKplu7qAwKz5ZDgDwKlyZNfAqbvnfYMvrAHNTnCBOsX9pdowV0FCzhSkgg=',
        'ctl00$leftColumn$LoginUser$UserName' => '2014601685',
        'ctl00$leftColumn$LoginUser$Password' => '601685',
        'ctl00$leftColumn$LoginUser$CaptchaCodeTextBox' => $captcha,
        'LBD_VCID_c_default_ctl00_leftcolumn_loginuser_logincaptcha' => $variable, //!!! Cambia!
        'LBD_BackWorkaround_c_default_ctl00_leftcolumn_loginuser_logincaptcha' => '0',
    )
);

$url = "https://www.saes.escom.ipn.mx/(X(1)S(kcm2bh553n1feoiik2qijc2g))/default.aspx";

// Initialise cURL
$ch = curl_init($url);

// Set options (post request, return body from exec)
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// Do the request
$result = curl_exec($ch);

//show/check the result
echo $result;
?>