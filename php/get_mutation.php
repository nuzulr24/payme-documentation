<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://pay.temanstudio.com/api/wallet/index_get/<type ewallet>/<token api dari ewallet nomer itu, bisa dicek di detail wallet>',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_POSTFIELDS => array('type' => '1','auth' => 'TSGO01'),
  CURLOPT_HTTPHEADER => array(
    'Cookie: ci_session=9d53315b207a1a67c0bf04533ecf932412056b0e'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;