<?php

namespace Omnipay\Acehub\Message\Helpers;


class Helper
{
     public static $brandIds = array(
         //Cards By Redirect
         '2010' => "Union Pay",
         '2020' => "Yandex Card",
         //Direct Banking
         '3010' => "iDeal",
         '3020' => "Sofort",
         '3025' => "Giropay",
         '3030' => "EPS",
         '3040' => "POLi",
         '3060' => "P24",
         '3070' => "Paytrail",
         '3080' => "Post Finance",
         '3100' => "Trustpay",
         '3110' => "Trustly",
         '3120' => "Entercash",
         '3130' => "Interac Online",
         '3140' => "Prepayment",
         '3200' => "BCMC",
         //Wallets
         '4010' => "Paypal",
         '4020' => "Alipay",
         '4030' => "Yandex",
         '4040' => "Onecard",
         '4050' => "QiWI",
         '4080' => "CashU",
         //Direct Debit
         '6010' => "SEPA",
         //Mobile
         '7010' => "Daopay",
         //Voucher
         '8010' => "Paysafecard",
     );


     public static $cards = array(
         '1010' => "Visa",
         '1011' => "Visa Electron",
         '1012' => "Dankort",
         '1013' => "Visa Debit",
         '1014' => "Visa-Carte Bancaire",
         '1015' => "VPAY",
         '1017' => "Delta",
         '1020' => "MasterCard",
         '1023' => "Mastercard Debit",
         '1024' => "Mastercard-Carte Bancaire",
         '1030' => "American Express",
         '1040' => "Discover",
         '1050' => "Maestro",
         '1060' => "Diners Club",
         '1070' => "Carte Bancaire",
         '1080' => "CartaSi",
         '1090' => "JCB",
         '1100' => "Argencard",
         '1101' => "Cabal",
         '1102' => "Elo",
         '1103' => "Hipercard",
         '1104' => "Presto",
         '1106' => "Tarjeta Naranja",
         '1109' => "Bonus (VISA)",
         '1111' => "Cartebleue (VISA, Mastercard)",
         '1113' => "MercadoLivre",
         '1114' => "Nativa",
         '1117' => "Tarjeta Shopping",
         '1118' => "World",
         '1119' => "Cencosud"
     );


     public static function determineBrandId($type)
     {
         $toCheck =  self::$brandIds + self::$cards;
         return (string) array_search(strtoupper($type),array_map('strtoupper',$toCheck));
    }
}