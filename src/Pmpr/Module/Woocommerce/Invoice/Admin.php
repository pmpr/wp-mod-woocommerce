<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eb4b631b99             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Admin extends Common { const kiumkuawagkiqyyo = "\x70\144\146\137\x69\156\x76\157\x69\143\x65\137\x6e\165\x6d"; const uiyyaciimwoaokgo = "\x70\144\146\x5f\x65\x6d\x61\x69\x6c\x5f\151\156\x76\157\x69\x63\145"; const cysoyggakakyywwg = "\160\x64\146\137\143\x72\x65\141\164\145\137\151\x6e\166\x6f\x69\143\145"; const kykiacaosyqigmgm = "\x70\x64\146\x5f\143\162\145\141\x74\145\x5f\145\x6d\141\151\x6c\x5f\x69\x6e\166\x6f\x69\x63\145"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\137\x69\x6e\x69\x74", [$this, "\x69\151\x67\x79\153\x79\171\x6f\x63\x6d\161\141\157\x77\x6d\155"])->qcsmikeggeemccuu("\x6d\x61\156\x61\x67\145\137\x73\x68\x6f\160\137\157\x72\x64\145\162\x5f\x70\x6f\163\x74\163\137\x63\165\163\x74\157\155\137\x63\x6f\154\x75\x6d\x6e", [$this, "\163\x6f\143\141\163\161\147\155\x75\x63\161\x69\163\157\171\x71"], 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\142\x75\154\153\x5f\141\x63\164\x69\157\x6e\x73\x2d\145\144\151\x74\x2d\163\x68\157\x70\137\x6f\162\144\145\162", [$this, "\165\x73\161\x73\x69\x79\163\x65\x67\x77\157\141\157\x67\155\x61"])->cecaguuoecmccuse("\x6d\x61\156\141\x67\145\x5f\x65\144\x69\164\x2d\163\150\157\160\137\x6f\162\144\x65\x72\x5f\143\x6f\x6c\165\x6d\156\x73", [$this, "\155\151\x79\x6b\147\171\x75\157\x75\163\155\x71\x79\151\145\x79"]); $this->cecaguuoecmccuse("\150\x61\x6e\x64\154\145\137\142\165\x6c\x6b\137\141\x63\x74\x69\157\156\x73\55\x65\144\151\164\55\163\x68\157\x70\137\157\x72\x64\145\x72", [$this, "\x67\x77\x69\161\x79\147\153\x73\x6f\153\x63\x79\145\x63\x6b\161"], 10, 3); $this->cecaguuoecmccuse("\167\157\x6f\x63\x6f\155\155\x65\x72\143\x65\x5f\141\x64\x6d\x69\x6e\137\x6f\x72\x64\x65\x72\137\x61\x63\164\151\157\x6e\x73", [$this, "\x63\161\x6f\x67\151\x71\151\x71\145\x67\x67\171\x79\x77\153\161"], 11, 2); } public function ayyeiqikwseeegqg($umwqusowiqmyseom) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); if ($gkkgcoiwayaccqgm) { goto qoqskyuuwueqkquk; } global $post; $gkkgcoiwayaccqgm = ManipulatePost::mwikyscisascoeea($post); qoqskyuuwueqkquk: return $gkkgcoiwayaccqgm; } public function yiqqcseogewckugw($ccowyogiqwikkkie, $umwqusowiqmyseom) { $gkkgcoiwayaccqgm = $this->ayyeiqikwseeegqg($umwqusowiqmyseom); if (!$this->igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm)) { goto iwsuawwqomaowuii; } $ccowyogiqwikkkie["\x73\x65\x6e\x64\x2d\x70\144\146"] = [ "\x75\x72\x6c" => "\x23", "\156\x61\x6d\x65" => __("\x53\x65\x6e\x64\40\120\104\x46", PR__MDL__WOOCOMMERCE), "\141\143\x74\x69\157\x6e" => "\x73\x65\x6e\144\55\x70\x64\146", ]; iwsuawwqomaowuii: return $ccowyogiqwikkkie; } public function cqogiqiqeggyywkq($ccowyogiqwikkkie, $umwqusowiqmyseom) { $gkkgcoiwayaccqgm = $this->ayyeiqikwseeegqg($umwqusowiqmyseom); $musqmgugskoycykq = true; if (!($this->eiwcuqigayigimak(Setting::cysoyggakakyywwg) == self::ayeiaucmmgooomya && !$this->igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm))) { goto wcugqegqsuuuwqao; } $musqmgugskoycykq = false; wcugqegqsuuuwqao: if (!$musqmgugskoycykq) { goto asiqwuoswmigcaki; } $ccowyogiqwikkkie["\x64\157\167\x6e\x6c\x6f\x61\144\x5f\x70\144\x66"] = [self::auqoykcmsiauccao => DecoratorQuery::yqymaqmqiqmmmsoo(self::woacsaigwaqsmqaa, $gkkgcoiwayaccqgm, ManipulateServer::ekcymmyqoceukosc()), self::NAME => __("\x44\157\167\x6e\154\x6f\x61\x64\40\x50\104\x46", PR__MDL__WOOCOMMERCE), self::uqgcmmosieyimiku => "\x64\157\x77\156\x6c\157\141\144\x2d\160\144\x66"]; asiqwuoswmigcaki: return $ccowyogiqwikkkie; } public function iigykyyocmqaowmm() { $cgsaiiokwycueeeo = ManipulateServer::get(self::woacsaigwaqsmqaa); if (!($cgsaiiokwycueeeo && is_admin())) { goto mqicocmqegwukkwg; } $cgsaiiokwycueeeo = stripslashes($cgsaiiokwycueeeo); $iiwwoeukeeweaisc = ManipulateWoocommerce::mmmcswscsiecscwg($cgsaiiokwycueeeo); if (!$iiwwoeukeeweaisc) { goto ciykoyeioqgyaeqo; } $this->uykissogmuaaocsg()->siciqscsekqaqess()->imasugowgqyekses($iiwwoeukeeweaisc, true); ciykoyeioqgyaeqo: mqicocmqegwukkwg: } public function gwiqygksokcyeckq($cekycuiyagyouawk, $aiamqeawckcsuaou, $oysoyeaucuawyaky) : string { $kuuugksiksqcaaaa = in_array($aiamqeawckcsuaou, [self::uiyyaciimwoaokgo, self::cysoyggakakyywwg, self::kykiacaosyqigmgm]); if (!($kuuugksiksqcaaaa && is_array($oysoyeaucuawyaky) && $oysoyeaucuawyaky)) { goto acsqgiuageaasiyy; } $oysoyeaucuawyaky = array_map("\x61\142\163\x69\156\164", $oysoyeaucuawyaky); sort($oysoyeaucuawyaky); foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) { switch ($aiamqeawckcsuaou) { case self::uiyyaciimwoaokgo: $this->kmmqugkowuimgwuk($aokagokqyuysuksm); goto ouamogymawucwswu; case self::cysoyggakakyywwg: $this->iseiakqweswykkys($aokagokqyuysuksm); goto ouamogymawucwswu; case self::kykiacaosyqigmgm: $this->aqimiwwqygqeiuqk($aokagokqyuysuksm); goto ouamogymawucwswu; } mugqyyeayeyggqqk: ouamogymawucwswu: emmsycooskoqmgeg: } qgeugwymkkiacwoc: acsqgiuageaasiyy: return esc_url_raw($cekycuiyagyouawk); } public function kmmqugkowuimgwuk($aokagokqyuysuksm) { if (!$this->igawqaomowicuayw(self::sqsaisksswaayayo, $aokagokqyuysuksm)) { goto oomguqikqokqwgku; } $this->gaisoeyogkaguouo($aokagokqyuysuksm); oomguqikqokqwgku: } public function iseiakqweswykkys($aokagokqyuysuksm) { if ($this->igawqaomowicuayw(self::sqsaisksswaayayo, $aokagokqyuysuksm)) { goto samwkqgwouggsguc; } $this->ykogmkwyscmsmuki($aokagokqyuysuksm); samwkqgwouggsguc: } public function aqimiwwqygqeiuqk($aokagokqyuysuksm) { $this->iseiakqweswykkys($aokagokqyuysuksm); $this->kmmqugkowuimgwuk($aokagokqyuysuksm); } public function usqsiysegwoaogma($ccowyogiqwikkkie) { ManipulateArray::unset($ccowyogiqwikkkie, "\145\x64\151\x74"); $ccowyogiqwikkkie[self::cysoyggakakyywwg] = __("\103\162\145\141\x74\145\40\111\x6e\166\x6f\x69\143\145\x28\163\x29", PR__MDL__WOOCOMMERCE); $ccowyogiqwikkkie[self::kykiacaosyqigmgm] = __("\x43\x72\145\x61\164\145\40\141\x6e\x64\x20\105\x6d\x61\x69\x6c\x20\111\x6e\x76\157\151\143\145\x28\163\x29", PR__MDL__WOOCOMMERCE); $ccowyogiqwikkkie[self::uiyyaciimwoaokgo] = __("\105\x6d\141\151\154\x20\111\156\166\157\151\x63\145\x28\163\51", PR__MDL__WOOCOMMERCE); return $ccowyogiqwikkkie; } public function socasqgmucqisoyq($qgoqiacsiccwoawi) { global $post; $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post); if (!($gcqseksiskwueksc && $qgoqiacsiccwoawi == self::kiumkuawagkiqyyo)) { goto guykyqecgswcsmws; } if (!($eusockqasqqmoess = ManipulatePost::igawqaomowicuayw(self::uicuqucwwkscyyyy, $gcqseksiskwueksc))) { goto wyuemgggaqogsmsq; } $ocogsiouoiuuguym = ManipulatePost::igawqaomowicuayw(self::ykqogmimmamwckwe, $gcqseksiskwueksc); $aqykuigiuwmmcieu = ManipulateHTML::yuawgssgauywkiia("{$eusockqasqqmoess}\x3c\x62\162\76{$ocogsiouoiuuguym}", DecoratorQuery::yqymaqmqiqmmmsoo(self::woacsaigwaqsmqaa, $gcqseksiskwueksc, ManipulateServer::ekcymmyqoceukosc())); echo $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\144\x66\137\151\156\x76\157\x69\143\x65\137\x6e\x75\x6d\x62\x65\162\137\157\162\x64\x65\x72\x5f\x73\x63\x72\x65\x65\x6e\137\157\165\x74\x70\165\164"), $aqykuigiuwmmcieu, $eusockqasqqmoess, $ocogsiouoiuuguym, $gcqseksiskwueksc); wyuemgggaqogsmsq: guykyqecgswcsmws: } public function miykgyuousmqyiey($wkkweuacukumqmya) : array { return ManipulateArray::ooskewwqwieyucec($wkkweuacukumqmya, [self::kiumkuawagkiqyyo => __("\x49\x6e\166\x6f\151\143\x65", PR__MDL__WOOCOMMERCE)], 2); } }
