<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63275eb2d2571             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; use Pmpr\Common\Foundation\Woocommerce\Setting as BaseClass; class Setting extends BaseClass { const eiyccksaowygmicm = self::soqkucakwksaeyce . "\x73\150\x6f\x70\x5f\160\145\162\x5f\160\x61\x67\x65"; const mgaiesaoggoicmqi = self::soqkucakwksaeyce . "\146\162\145\x65\x5f\160\x72\x69\143\145\137\154\x61\142\x65\x6c"; const siyomqwiwwmgqswi = self::soqkucakwksaeyce . "\x61\164\164\162\x69\x62\x75\164\145\x73\137\x74\x61\x62\137\164\151\164\x6c\x65"; const qqiuqmkwamakmmky = self::soqkucakwksaeyce . "\166\141\x72\151\x61\x62\x6c\145\137\160\x72\x6f\x64\x75\143\164\x5f\x67\x75\151\x64\145"; const kqaecmeyeicscaye = self::soqkucakwksaeyce . "\x73\150\x6f\160\x5f\x74\x61\142\x6c\x65\x5f\166\x69\x65\167\137\x63\157\154\x75\x6d\x6e\x73"; const cuqwmqwgcuuceoqo = self::soqkucakwksaeyce . "\x6d\x79\141\143\143\x6f\x75\x6e\x74\137\145\170\x63\154\165\x64\x65\137\156\x61\166\151\x67\141\164\151\x6f\x6e"; const lkawsqiicuikigyu = self::soqkucakwksaeyce . "\160\x72\x69\x63\145\x5f\141\165\164\x6f\155\141\164\151\x63\137\163\150\157\x72\x74\x5f\x63\x75\x72\x72\x65\x6e\143\171"; public function ogsqeuumuqcqkuuk($ikgwqyuyckaewsow = []) { $eciuecguuowmeyqg = []; if (!ManipulateWoocommerce::mkiigkeqaeiwqyua()) { goto gsygwgsiawgmqiyi; } $eciuecguuowmeyqg[self::lkawsqiicuikigyu] = ["\x64\x65\x73\143" => __("\123\x68\x6f\167\x20\x70\x72\x69\x63\145\40\x73\x68\157\162\164", PR__MDL__WOOCOMMERCE), self::squoamkioomemiyi => self::semqugiuwygamias, self::qescuiwgsyuikume => __("\x53\150\x6f\x72\164\x20\x50\162\x69\143\145", PR__MDL__WOOCOMMERCE), self::wikgqsqysyuoykse => "\x6e\x6f"]; gsygwgsiawgmqiyi: $eciuecguuowmeyqg[self::mgaiesaoggoicmqi] = ["\144\145\x73\x63" => __("\x54\x68\151\163\40\x6c\141\142\145\x6c\40\x73\150\x6f\167\x20\x69\156\x73\164\x65\x61\x64\40\157\x66\40\x30\x20\160\x72\157\144\x75\143\164\47\163\x20\160\162\151\143\145\x2c\40\154\145\141\166\x65\40\145\x6d\x70\x74\x79\40\x69\x66\40\171\x6f\x75\x20\x64\157\x6e\47\x74\x20\x77\x61\156\164\40\164\150\x69\x73\x20\143\x68\141\156\x67\x65", PR__MDL__WOOCOMMERCE), self::squoamkioomemiyi => self::TEXT, self::qescuiwgsyuikume => __("\106\x72\145\x65\x20\120\162\x69\143\x65\x20\x4c\141\142\x65\x6c", PR__MDL__WOOCOMMERCE)]; if (!$eciuecguuowmeyqg) { goto qsgqwyqaqiowkmco; } $ikgwqyuyckaewsow = $this->ucgocwsamgumcyiq($eciuecguuowmeyqg, $ikgwqyuyckaewsow, self::ieegmywouoqgceii, false); qsgqwyqaqiowkmco: return $ikgwqyuyckaewsow; } public function eiwicgsqoiaeawkk($ikgwqyuyckaewsow = []) : array { $oammesyieqmwuwyi = DecoratorWoocommerce::qyyygkguqcmgkmey("\x77\143\137\147\x65\164\137\141\x63\x63\157\x75\x6e\x74\137\x6d\145\x6e\165\137\151\164\145\155\x73", []); ManipulateArray::unset($oammesyieqmwuwyi, "\144\141\163\150\142\x6f\141\162\144"); if (!$oammesyieqmwuwyi) { goto yqagomygmeoecwey; } $oammesyieqmwuwyi["\x6e\157\164\x68\151\x6e\x67"] = __("\116\157\164\x68\151\156\x67\x20\x73\x65\x6c\x65\x63\164\145\144", PR__MDL__WOOCOMMERCE); $ikgwqyuyckaewsow = $this->gmqowegieyawsgau(["\144\x65\163\143" => __("\x53\x65\x6c\145\x63\164\x20\x74\x68\145\40\x69\x74\x65\155\x73\x20\x74\150\141\164\x20\171\x6f\165\x20\x64\157\x20\x6e\157\164\40\x77\x61\156\x74\40\164\x6f\40\142\145\40\144\x69\x73\160\x6c\141\x79\x65\x64\40\151\156\x20\156\141\166\151\x67\x61\x74\x69\x6f\156\40\x62\x61\162\x2e", PR__MDL__WOOCOMMERCE), "\x6f\x70\164\151\157\x6e\x73" => $oammesyieqmwuwyi, self::gouqcwikiiygyasc => self::cuqwmqwgcuuceoqo, self::squoamkioomemiyi => "\143\x75\163\164\x6f\155", "\143\165\x73\164\x6f\155\55\164\x79\160\145" => "\142\163\163\x65\154\x65\143\164", self::qescuiwgsyuikume => __("\x45\x78\x63\154\165\x64\x65\x20\116\141\x76\40\111\164\145\155\x73", PR__MDL__WOOCOMMERCE), self::wikgqsqysyuoykse => [], "\x61\163\55\155\165\x6c\164\151\x70\154\145", "\x70\141\x72\x65\x6e\x74\x2d\x63\x6c\x61\163\x73" => "\x70\x78\55\60"], $ikgwqyuyckaewsow, "\141\143\x63\x6f\x75\156\164\137\x72\x65\147\151\x73\x74\162\x61\x74\x69\157\x6e\x5f\157\160\x74\x69\157\156\163", false); yqagomygmeoecwey: return $ikgwqyuyckaewsow; } public function qssqicawwgqqscui($ikgwqyuyckaewsow = []) { return $this->ucgocwsamgumcyiq([self::eiyccksaowygmicm => [self::qescuiwgsyuikume => __("\123\150\x6f\160\x20\151\x74\x65\155\163\40\160\145\162\40\160\141\147\145", PR__MDL__WOOCOMMERCE), self::wikgqsqysyuoykse => 10], self::siyomqwiwwmgqswi => [self::qescuiwgsyuikume => __("\x41\x74\164\162\151\x62\165\x74\145\x73\x20\x74\141\x62\40\164\x69\x74\154\x65", PR__MDL__WOOCOMMERCE), self::wikgqsqysyuoykse => __("\x41\x64\x64\x69\164\151\157\156\141\154\40\111\156\146\157\x72\155\141\164\x69\157\156", PR__MDL__WOOCOMMERCE)], self::qqiuqmkwamakmmky => [self::qescuiwgsyuikume => __("\x56\141\x72\151\141\164\x69\157\x6e\x20\x50\x72\157\x64\x75\143\x74\x20\107\165\x69\x64\x65", PR__MDL__WOOCOMMERCE)]], $ikgwqyuyckaewsow, self::imgaumeywmqsacas); } public static function ioukqkmiwsokywyy() { $cgqowqqsswqmocyc = self::ciyeymqmquocggeg(); $gqgemcmoicmgaqie = ManipulateServer::get(self::owuiaqkkkayouugm, $cgqowqqsswqmocyc); if (!($gqgemcmoicmgaqie !== $cgqowqqsswqmocyc)) { goto eucqomyqykgoiuge; } $kuuugksiksqcaaaa = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x73\x68\x6f\160\137\x69\164\145\x6d\x73\x5f\x70\145\x72\x5f\160\141\147\145\137\x69\163\137\166\x61\154\151\144"), true, $gqgemcmoicmgaqie); if (!$kuuugksiksqcaaaa) { goto qikaewekoecykeou; } $cgqowqqsswqmocyc = $gqgemcmoicmgaqie; qikaewekoecykeou: eucqomyqykgoiuge: return $cgqowqqsswqmocyc; } public static function ckgyyysykiycqwwm() { return self::eiwcuqigayigimak(self::qqiuqmkwamakmmky, ''); } public static function ciyeymqmquocggeg() { return self::eiwcuqigayigimak(self::eiyccksaowygmicm, 9); } public static function oowsugsmwuqmaaii() { return self::eiwcuqigayigimak(self::siyomqwiwwmgqswi, ''); } public static function uusioiccyseocsmw() : bool { return ManipulateWoocommerce::mkiigkeqaeiwqyua() && self::eiwcuqigayigimak(self::lkawsqiicuikigyu) === "\171\145\x73"; } public static function sqsceoaumcqaqqmw() : array { $ygmmaywsqqycaaok = ManipulateNumber::ywqgcuymeiswqyqc(9, 36, 1, 9); $qiouiwasaauyaaue = []; foreach ($ygmmaywsqqycaaok as $eusockqasqqmoess) { $qiouiwasaauyaaue[$eusockqasqqmoess] = sprintf(__("\x25\x73\40\111\x74\145\x6d", PR__MDL__WOOCOMMERCE), $eusockqasqqmoess); aiccyaswigkaycqk: } usymasgsyqgsuocg: return $qiouiwasaauyaaue; } }
