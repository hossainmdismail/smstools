<?php
class SMS
{

    public static function Send($number, $message)
    {

        $url = "http://bulksmsbd.net/api/smsapi";
        $api_key = "5Ga7wUBj70JdpiqVhe8t";
        $senderid = "809617611020";

        $data = [
            "api_key" => $api_key,
            "senderid" => $senderid,
            "number" => $number,
            "message" => $message
        ];

        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);

            if ($response == false) {
                throw new Exception(curl_error($ch));
            }

            curl_close($ch);
            return true; // SMS sent successfully
        } catch (Exception $e) {
            // Log the error or perform any necessary actions
            error_log("SMS sending failed: " . $e->getMessage());

            return false; // Failed to send SMS
        }
    }
}
