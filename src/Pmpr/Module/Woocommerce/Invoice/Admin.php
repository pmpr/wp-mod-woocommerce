<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             627f5c0c1ef62             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Admin extends Common { const kiumkuawagkiqyyo = "\x70\x64\x66\x5f\x69\x6e\166\157\151\143\145\137\x6e\x75\155"; const uiyyaciimwoaokgo = "\x70\144\146\137\x65\x6d\141\x69\x6c\137\151\156\166\157\x69\x63\145"; const cysoyggakakyywwg = "\x70\144\x66\x5f\143\x72\145\x61\164\x65\137\151\156\x76\x6f\x69\143\145"; const kykiacaosyqigmgm = "\160\144\146\137\x63\x72\x65\x61\x74\145\137\145\155\x61\x69\x6c\x5f\151\x6e\x76\x6f\x69\143\145"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\x69\156\x5f\151\x6e\x69\x74", [$this, "\151\x69\x67\171\153\x79\171\x6f\143\155\161\141\157\x77\x6d\155"])->qcsmikeggeemccuu("\155\141\156\x61\147\x65\x5f\x73\x68\x6f\x70\137\x6f\x72\144\145\162\137\x70\157\x73\164\x73\137\x63\165\x73\x74\x6f\x6d\137\x63\157\x6c\x75\155\x6e", [$this, "\x73\157\143\x61\163\161\x67\155\165\x63\x71\x69\x73\157\x79\x71"], 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\142\x75\154\153\x5f\141\x63\x74\151\157\156\163\x2d\x65\144\x69\x74\x2d\163\150\157\160\137\157\162\144\x65\x72", [$this, "\x75\163\161\163\151\171\163\145\147\x77\x6f\141\157\x67\x6d\x61"])->cecaguuoecmccuse("\155\x61\156\141\x67\145\137\145\x64\151\x74\x2d\x73\x68\x6f\x70\x5f\x6f\x72\x64\145\162\137\143\157\154\x75\155\x6e\x73", [$this, "\155\x69\x79\x6b\x67\171\165\x6f\165\163\155\x71\x79\151\145\171"]); $this->cecaguuoecmccuse("\x68\141\156\x64\154\145\x5f\x62\165\x6c\x6b\x5f\x61\143\x74\151\x6f\156\x73\55\x65\144\151\164\x2d\x73\150\157\x70\137\x6f\x72\x64\x65\162", [$this, "\147\167\151\x71\x79\147\x6b\x73\157\x6b\x63\x79\145\x63\153\161"], 10, 3); $this->cecaguuoecmccuse("\x77\x6f\157\143\157\x6d\155\145\x72\x63\x65\137\x61\144\x6d\x69\x6e\x5f\157\162\x64\145\x72\x5f\141\143\x74\151\157\x6e\x73", [$this, "\x63\x71\157\147\151\161\x69\161\145\147\147\171\171\x77\x6b\161"], 11, 2); } public function ayyeiqikwseeegqg($umwqusowiqmyseom) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); if ($gkkgcoiwayaccqgm) { goto samwkqgwouggsguc; } global $post; $gkkgcoiwayaccqgm = ManipulatePost::mwikyscisascoeea($post); samwkqgwouggsguc: return $gkkgcoiwayaccqgm; } public function yiqqcseogewckugw($ccowyogiqwikkkie, $umwqusowiqmyseom) { $gkkgcoiwayaccqgm = $this->ayyeiqikwseeegqg($umwqusowiqmyseom); if (!$this->igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm)) { goto wyuemgggaqogsmsq; } $ccowyogiqwikkkie["\x73\145\x6e\x64\55\x70\144\x66"] = [ "\165\x72\x6c" => "\x23", "\x6e\x61\155\145" => __("\123\145\156\144\x20\x50\104\x46", PR__MDL__WOOCOMMERCE), "\141\143\164\151\x6f\156" => "\x73\x65\x6e\144\55\x70\x64\146", ]; wyuemgggaqogsmsq: return $ccowyogiqwikkkie; } public function cqogiqiqeggyywkq($ccowyogiqwikkkie, $umwqusowiqmyseom) { $gkkgcoiwayaccqgm = $this->ayyeiqikwseeegqg($umwqusowiqmyseom); $musqmgugskoycykq = true; if (!($this->eiwcuqigayigimak(Setting::cysoyggakakyywwg) == self::ayeiaucmmgooomya && !$this->igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm))) { goto guykyqecgswcsmws; } $musqmgugskoycykq = false; guykyqecgswcsmws: if (!$musqmgugskoycykq) { goto kkumywowcoycymeo; } $ccowyogiqwikkkie["\x64\157\167\x6e\x6c\157\141\x64\137\x70\144\146"] = [self::auqoykcmsiauccao => DecoratorQuery::yqymaqmqiqmmmsoo(self::woacsaigwaqsmqaa, $gkkgcoiwayaccqgm, ManipulateServer::ekcymmyqoceukosc()), self::NAME => __("\x44\157\x77\156\154\157\x61\144\x20\x50\104\x46", PR__MDL__WOOCOMMERCE), self::uqgcmmosieyimiku => "\x64\x6f\167\156\x6c\x6f\141\144\55\x70\144\x66"]; kkumywowcoycymeo: return $ccowyogiqwikkkie; } public function iigykyyocmqaowmm() { $cgsaiiokwycueeeo = ManipulateServer::get(self::woacsaigwaqsmqaa); if (!($cgsaiiokwycueeeo && is_admin())) { goto kqqiegkuqagcqsya; } $cgsaiiokwycueeeo = stripslashes($cgsaiiokwycueeeo); $iiwwoeukeeweaisc = ManipulateWoocommerce::mmmcswscsiecscwg($cgsaiiokwycueeeo); if (!$iiwwoeukeeweaisc) { goto miweggwqeiaeweia; } $this->uykissogmuaaocsg()->siciqscsekqaqess()->imasugowgqyekses($iiwwoeukeeweaisc, true); miweggwqeiaeweia: kqqiegkuqagcqsya: } public function gwiqygksokcyeckq($cekycuiyagyouawk, $aiamqeawckcsuaou, $oysoyeaucuawyaky) : string { $kuuugksiksqcaaaa = in_array($aiamqeawckcsuaou, [self::uiyyaciimwoaokgo, self::cysoyggakakyywwg, self::kykiacaosyqigmgm]); if (!($kuuugksiksqcaaaa && is_array($oysoyeaucuawyaky) && $oysoyeaucuawyaky)) { goto aomysykcgikegiau; } $oysoyeaucuawyaky = array_map("\141\x62\163\x69\x6e\164", $oysoyeaucuawyaky); sort($oysoyeaucuawyaky); foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) { switch ($aiamqeawckcsuaou) { case self::uiyyaciimwoaokgo: $this->kmmqugkowuimgwuk($aokagokqyuysuksm); goto iwekmyyccgiyuecc; case self::cysoyggakakyywwg: $this->iseiakqweswykkys($aokagokqyuysuksm); goto iwekmyyccgiyuecc; case self::kykiacaosyqigmgm: $this->aqimiwwqygqeiuqk($aokagokqyuysuksm); goto iwekmyyccgiyuecc; } ikqqskkqqwmwssoo: iwekmyyccgiyuecc: ogsaaqsaogcqiouy: } ousiuuwgwkiyikyq: aomysykcgikegiau: return esc_url_raw($cekycuiyagyouawk); } public function kmmqugkowuimgwuk($aokagokqyuysuksm) { if (!$this->igawqaomowicuayw(self::sqsaisksswaayayo, $aokagokqyuysuksm)) { goto cwwmimggaaecmucw; } $this->gaisoeyogkaguouo($aokagokqyuysuksm); cwwmimggaaecmucw: } public function iseiakqweswykkys($aokagokqyuysuksm) { if ($this->igawqaomowicuayw(self::sqsaisksswaayayo, $aokagokqyuysuksm)) { goto awoaooyoeoyeeqee; } $this->ykogmkwyscmsmuki($aokagokqyuysuksm); awoaooyoeoyeeqee: } public function aqimiwwqygqeiuqk($aokagokqyuysuksm) { $this->iseiakqweswykkys($aokagokqyuysuksm); $this->kmmqugkowuimgwuk($aokagokqyuysuksm); } public function usqsiysegwoaogma($ccowyogiqwikkkie) { ManipulateArray::unset($ccowyogiqwikkkie, "\x65\144\151\x74"); $ccowyogiqwikkkie[self::cysoyggakakyywwg] = __("\103\x72\x65\141\164\x65\40\111\x6e\x76\x6f\151\x63\x65\x28\x73\x29", PR__MDL__WOOCOMMERCE); $ccowyogiqwikkkie[self::kykiacaosyqigmgm] = __("\x43\x72\x65\x61\164\x65\x20\x61\156\144\40\x45\155\x61\151\154\x20\x49\156\x76\157\x69\143\145\50\163\51", PR__MDL__WOOCOMMERCE); $ccowyogiqwikkkie[self::uiyyaciimwoaokgo] = __("\105\155\141\151\x6c\40\111\x6e\x76\x6f\x69\x63\x65\50\163\51", PR__MDL__WOOCOMMERCE); return $ccowyogiqwikkkie; } public function socasqgmucqisoyq($qgoqiacsiccwoawi) { global $post; $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post); if (!($gcqseksiskwueksc && $qgoqiacsiccwoawi == self::kiumkuawagkiqyyo)) { goto ykomgumacooyomsk; } if (!($eusockqasqqmoess = ManipulatePost::igawqaomowicuayw(self::uicuqucwwkscyyyy, $gcqseksiskwueksc))) { goto ogqmesokykywseys; } $ocogsiouoiuuguym = ManipulatePost::igawqaomowicuayw(self::ykqogmimmamwckwe, $gcqseksiskwueksc); $aqykuigiuwmmcieu = ManipulateHTML::yuawgssgauywkiia("{$eusockqasqqmoess}\74\142\x72\x3e{$ocogsiouoiuuguym}", DecoratorQuery::yqymaqmqiqmmmsoo(self::woacsaigwaqsmqaa, $gcqseksiskwueksc, ManipulateServer::ekcymmyqoceukosc())); echo $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x64\x66\x5f\x69\x6e\166\157\x69\x63\145\x5f\x6e\x75\155\142\x65\x72\137\157\162\x64\x65\162\137\163\x63\x72\x65\x65\x6e\x5f\157\x75\x74\160\165\x74"), $aqykuigiuwmmcieu, $eusockqasqqmoess, $ocogsiouoiuuguym, $gcqseksiskwueksc); ogqmesokykywseys: ykomgumacooyomsk: } public function miykgyuousmqyiey($wkkweuacukumqmya) : array { return ManipulateArray::ooskewwqwieyucec($wkkweuacukumqmya, [self::kiumkuawagkiqyyo => __("\x49\156\166\x6f\151\x63\145", PR__MDL__WOOCOMMERCE)], 2); } }
