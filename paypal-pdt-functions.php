<?php 
function process_pdt($tx)
{
        // Init cURL
        $request = curl_init();
        $pdt_identity_token = 'gvK-79xTEGKi7vlJJnvlNuBz-lgJnWCmK8l2jryNGEe4P7sp4hEh2Mbf4yW';
        // Set request options
        curl_setopt_array($request, array
        (
                CURLOPT_URL => 'https://www.sandbox.paypal.com/cgi-bin/webscr',
                CURLOPT_POST => TRUE,
                CURLOPT_POSTFIELDS => http_build_query(array
                (
                        'cmd' => '_notify-synch',
                        'tx' => $tx,
                        'at' => $pdt_identity_token,
                )),
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_HEADER => FALSE,
                //CURLOPT_SSL_VERIFYPEER => TRUE,
                //CURLOPT_CAINFO => 'cacert.pem',
        ));

        // Execute request and get response and status code
        $response = curl_exec($request);
        $status   = curl_getinfo($request, CURLINFO_HTTP_CODE);

        // Close connection
        curl_close($request);

        // Validate response
        if($status == 200 AND strpos($response, 'SUCCESS') === 0)
        {
                // Remove SUCCESS part (7 characters long)
                $response = substr($response, 7);

                // Urldecode it
                $response = urldecode($response);

                // Turn it into associative array
                preg_match_all('/^([^=\r\n]++)=(.*+)/m', $response, $m, PREG_PATTERN_ORDER);
                $response = array_combine($m[1], $m[2]);

                // Fix character encoding if needed
                if(isset($response['charset']) AND strtoupper($response['charset']) !== 'UTF-8')
                {
                        foreach($response as $key => &$value)
                        {
                                $value = mb_convert_encoding($value, 'UTF-8', $response['charset']);
                        }

                        $response['charset_original'] = $response['charset'];
                        $response['charset'] = 'UTF-8';
                }

                // Sort on keys
                ksort($response);

                // Done!
                return $response;
        }

        return FALSE;
}
?>