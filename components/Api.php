<?php
namespace app\components;

use Yii;
use yii\base\Component;

/**
 * Api component.
 */
class Api extends Component
{

    public function getBalance($uuid, $token) {
	if(empty($uuid)) return "0";
        $headers = array(
            'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
            'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
          "u": "' . $uuid . '"
        }';
        $url = Yii::$app->params['balanceUrl'];
        $ch = Api::initCurl($url, $headers, $fields);
	$resp = curl_exec($ch);
	$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	$json = json_decode($resp, true);
        return $code != 200 || !isset($json['balance'])
            ? "0"
            : $json["balance"];
    }

    public function getChart($uuid, $token, $start, $end) {
        if(empty($uuid)) return array();
        $headers = array(
           'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
           'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
          "u": "' . $uuid . '"
        }';
        $url = Yii::$app->params['chartUrl'] . "?start=" . $start . "&end=" . $end;
        $ch = Api::initCurl($url, $headers, $fields);
        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $json = json_decode($resp, true);
        return $code != 200 || !isset($json["labels"])
            ? array()
            : $json;
    }


    public function getInfo($uuid, $token, $start, $end) {
        if(empty($uuid)) return null;
        $headers = array(
            'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
            'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
          "u": "' . $uuid . '"
        }';
        $url = Yii::$app->params['infoUrl'] . "?start=" . $start . "&end=" . $end;
        $ch = Api::initCurl($url, $headers, $fields);
        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	$json = json_decode($resp, true);
        return $code != 200
            ? null
            : $json;
    }

    public function getTopups($uuid, $token, $start, $end, $offset, $limit) {
	$headers = array(
           'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
           'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
          "u": "' . $uuid . '"
        }';
        $url = Yii::$app->params['topupsUrl'] . "?start=" . $start . "&end=" . $end . "&offset=" . $offset . "&limit=" . $limit;
        $ch = Api::initCurl($url, $headers, $fields);
        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $json = json_decode($resp, true);
        return $code != 200 || !isset($json["data"])
            ? array()
            : $json["data"];
    }

    public function searchTopups($uuid, $token, $query) {
        if(empty($uuid)) return array();
        $headers = array(
            'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
            'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
          "u": "' . $uuid . '",
          "q": "' . $query . '"
        }';
        $url = Yii::$app->params['topupsUrl'];
        $ch = Api::initCurl($url, $headers, $fields);
        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $json = json_decode($resp, true);
        return $code != 200 || !isset($json["data"])
            ? array()
            : $json["data"];
    }


    public function getPendingTopups($uuid, $token, $start, $end, $limit) {
        if(empty($uuid)) return "";
        $headers = array(
            'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
            'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
          "s": "topup_pending",
          "u": "' . $uuid . '"
        }';
        $url = Yii::$app->params['infoUrl'] . "?start=" . $start . "&end=" . $end;
        $ch = Api::initCurl($url, $headers, $fields);
        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $json = json_decode($resp, true);
        return $code != 200 || !isset($json['pending'])
            ? ""
            : $json['pending'];
    }

    public function approveTopup($uuid, $token, $ref, $amount, $pin) {
        if(empty($uuid)) return "-";
        $headers = array(
           'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
           'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
	  "a": "' . $amount . '",
	  "n": "' . $pin . '",
          "r": "' . $ref . '",
          "u": "' . $uuid . '"
        }';
        $url = Yii::$app->params['approveUrl'] . "/topup";
        $ch = Api::initCurl($url, $headers, $fields);
        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $json = json_decode($resp, true);
        return $code != 200 || !isset($json["msg"])
            ? "Error " . $code
            : $json["msg"];
    }

    public function createTopup($uuid, $token, $amount, $ref, $type) {
        if(empty($uuid)) return array();
        $headers = array(
           'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
           'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
	  "a": "' . $amount . '",
	  "r": "' . $ref . '",
	  "t": "' . $type . '",
	  "u": "' . $uuid . '"
        }';
        $url = Yii::$app->params['topupUrl'];
        $ch = Api::initCurl($url, $headers, $fields);
        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $json = json_decode($resp, true);
        return $code != 200 || !isset($json["msg"])
            ? array()
            : $json["msg"];
    }


    public function getTransaction($uuid, $token, $tid, $pid) {
        if(empty($uuid)) return "";
        $headers = array(
            'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
            'Content-Type:application/json',
        );
        $fields = '{
	  "p": "b2b",
	  "u": "' . $uuid . '"
        }';
        $url = Yii::$app->params['transactionUrl'] . "?tid=" . $tid . "&pid=" . $pid;
        $ch = Api::initCurl($url, $headers, $fields);
        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $json = json_decode($resp, true);
        return $code != 200
            ? "{'error': " . $code . "}"
            : $json;
    }

    public function getTransactions($uuid, $token, $start, $end, $offset, $limit) {
	if(empty($uuid)) return array();
        $headers = array(
            'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
            'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
          "u": "' . $uuid . '"
        }';
        $url = Yii::$app->params['transactionsUrl'] . "?start=" . $start . "&end=" . $end . "&offset=" . $offset . "&limit=" . $limit;
        $ch = Api::initCurl($url, $headers, $fields);
	$resp = curl_exec($ch);
	$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	$json = json_decode($resp, true);
        return $code != 200 || !isset($json["data"])
            ? array()
            : $json["data"];
    }

     public function searchTransactions($uuid, $token, $query) {
        if(empty($uuid)) return array();
        $headers = array(
            'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
            'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
	  "u": "' . $uuid . '",
	  "q": "' . $query . '"
        }';
        $url = Yii::$app->params['transactionsUrl'];
        $ch = Api::initCurl($url, $headers, $fields);
        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $json = json_decode($resp, true);
        return $code != 200 || !isset($json["data"])
            ? array()
            : $json["data"];
    }

    public function getSuccessfulTransactions($uuid, $token, $start, $end, $limit) {
        if(empty($uuid)) return "";
        $headers = array(
            'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
            'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
          "s": "transactions_success",
          "u": "' . $uuid . '"
        }';
        $url = Yii::$app->params['infoUrl'] . "?start=" . $start . "&end=" . $end;
        $ch = Api::initCurl($url, $headers, $fields);
        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $json = json_decode($resp, true);
        return $code != 200 || !isset($json['success'])
            ? ""
            : $json['success'];
    }

    public function getCallback($uuid, $token) {
        if(empty($uuid)) return "";
        $headers = array(
            'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
            'Content-Type:application/json',
        );
        $fields = '{
	  "p": "b2b",
	  "s": "callback",
          "u": "' . $uuid . '"
        }';
        $url = Yii::$app->params['infoUrl'];
        $ch = Api::initCurl($url, $headers, $fields);
        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $json = json_decode($resp, true);
        return $code != 200 || !isset($json['callback'])
            ? ""
            : $json['callback'];
    }


    public function setCallback($uuid, $token, $callback) {
        $headers = array(
            'Authorization: Bearer '. (empty($token) ? Api::getToken() : $token),
            'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
          "u": "' . $uuid . '",
          "c": "' . $callback . '"
        }';
        $url = Yii::$app->params['callbackUrl'];
        $ch = Api::initCurl($url, $headers, $fields);
	$resp = curl_exec($ch);
	$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $code != 200
            ? "N/A"
            : $resp;
    }

    public function approveToken($uuid, $token, $pin) {
	if(empty($uuid)) return "";
        $headers = array(
           'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
           'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
          "n": "' . $pin . '",
          "u": "' . $uuid . '"
	}';
        $url = Yii::$app->params['approveUrl'] . "/token";
        $ch = Api::initCurl($url, $headers, $fields);
        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
	$json = json_decode($resp, true);
        return $code != 200 || !isset($json["msg"])
            ? "Error " . $code
            : $json["msg"];
    }

    public function generateToken($uuid, $token) {
	$headers = array( 
	    'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
            'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
          "u": "' . $uuid . '"
        }';
        $url = Yii::$app->params['generateUrl'];
        $ch = Api::initCurl($url, $headers, $fields);
	$resp = curl_exec($ch);
	$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $code != 200
            ? "N/A"
            : $resp;
    }

    public function approveWhitelist($uuid, $token, $pin) {
        if(empty($uuid)) return "-";
        $headers = array(
           'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
           'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
          "n": "' . $pin . '",
          "u": "' . $uuid . '"
        }';
        $url = Yii::$app->params['approveUrl'] . "/whitelist";
        $ch = Api::initCurl($url, $headers, $fields);
        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $json = json_decode($resp, true);
        return $code != 200 || !isset($json["msg"])
            ? "Error " . $code
            : $json["msg"];
    }

    public function createWhitelist($uuid, $token, $whitelist) {
        $headers = array(
            'Authorization: Bearer '. (empty($token) ? Api::getToken() : $token),
            'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
          "u": "' . $uuid . '",
          "w": "' . $whitelist . '"
        }';
        $url = Yii::$app->params['whitelistUrl'];
        $ch = Api::initCurl($url, $headers, $fields);
        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $code != 200
            ? "Error " . $code
            : $resp;
    }

    public function getWhitelist($uuid, $token) {
        if(empty($uuid)) return "";
        $headers = array(
            'Authorization: Bearer ' . (empty($token) ? Api::getToken() : $token),
            'Content-Type:application/json',
        );
        $fields = '{
          "p": "b2b",
          "s": "whitelist",
          "u": "' . $uuid . '"
        }';
        $url = Yii::$app->params['infoUrl'];
        $ch = Api::initCurl($url, $headers, $fields);
        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $json = json_decode($resp, true);
        return $code != 200 || !isset($json['whitelist'])
            ? ""
            : $json['whitelist'];
    }

    public function getToken() {
        $credentials = Yii::$app->params['bnbUser'] . ":" . Yii::$app->params['bnbPass'];
        $headers = array(
            'Authorization: Basic '. base64_encode($credentials),
            'Content-Type:application/x-www-form-urlencoded',
        );
        $fields = array(
          'grant_type' => "client_credentials"
        );
        $url = Yii::$app->params['tokenUrl'];
        $ch = Api::initCurl($url, $headers, $fields);
	$resp = curl_exec($ch);
	$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $resp = $code != 200
            ? "Http error: " . $code
            : json_decode($resp, true)["access_token"] ;
        curl_close($ch);
        return $resp;
    }

    private function initCurl($url, $headers, $fields) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        return $ch;
    }

}

?>

