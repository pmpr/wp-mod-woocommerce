<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63275eb2d2571             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateDatabase; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Engine extends Common { protected ?Generator $generator = null; public function siciqscsekqaqess() : ?Generator { if ($this->generator) { goto hoeeyiowekaeemko; } $this->generator = Generator::symcgieuakksimmu(); hoeeyiowekaeemko: return $this->generator; } public function sywqsimcesscwamc() { $yeacayasgueouoqc = null; $wsgaqoyasieoiwuw = $this->eiwcuqigayigimak(Setting::aegqguumccieqwyk); $seauiwyeoycowegg = [self::ugsuecoyuqcamsac => "\x70\157\163\x74\155\145\164\141", self::cgiswgcumueqgcmw => 1, self::cqcimoqckgmaacyw => "\103\x41\x53\x54\50\155\145\164\x61\137\x76\141\x6c\x75\145\163\40\x41\123\x20\123\111\107\x4e\x45\104\x29", self::iowgsqgiaamyuswi => [self::osocaqqumyuooqyo => self::sqsaisksswaayayo]]; if (!$wsgaqoyasieoiwuw) { goto kymkucucyeoeikim; } $yooaaeuioeawcqms = date("\131\55\x30\61\55\x30\x31"); $seusouwwgeqagsce = date("\x59\55\61\62\55\63\x31"); $seauiwyeoycowegg[self::iowgsqgiaamyuswi]["\160\x6f\x73\164\137\x69\144"] = [self::ugsuecoyuqcamsac => "\160\157\x73\x74\155\x65\x74\141", self::soquiwyuimckgiow => "\x70\157\163\x74\x5f\x69\x64", self::iowgsqgiaamyuswi => [self::osocaqqumyuooqyo => self::cekyaeaeeigmwysa, [self::ciyoccqkiamemcmm => $yooaaeuioeawcqms, self::meisqwykgaymauka => self::iwmgegikocuwggua, self::eugyciakiowwcuwm => "\x3e\75"], [self::ciyoccqkiamemcmm => $seusouwwgeqagsce, self::meisqwykgaymauka => self::iwmgegikocuwggua, self::eugyciakiowwcuwm => "\74\x3d"]]]; kymkucucyeoeikim: $eioamqeaccimmisg = ManipulateDatabase::gmogewiwceqokqmy($seauiwyeoycowegg); if (!$eioamqeaccimmisg) { goto usquiuuyiyqaeyiu; } $yeacayasgueouoqc = ManipulateArray::get($eioamqeaccimmisg, self::iwmgegikocuwggua); usquiuuyiyqaeyiu: if (!$yeacayasgueouoqc) { goto uqqaiagaeqgqgaiy; } $mmwoqcwiwemokkue = $yeacayasgueouoqc + 1; goto esuiysskoweawsue; uqqaiagaeqgqgaiy: $occuycyyyycsosao = ManipulateDatabase::qaumqeeagueuqkcg([self::ugsuecoyuqcamsac => "\160\157\163\164\155\x65\164\x61", self::soquiwyuimckgiow => "\143\157\x75\156\164\x28\52\x29", self::iowgsqgiaamyuswi => [self::osocaqqumyuooqyo => self::sqsaisksswaayayo]]); $mmwoqcwiwemokkue = 1; $mesieoomaagsgyqe = $this->eiwcuqigayigimak(Setting::uumqsyagoeuaaimw, 0); if (!$mesieoomaagsgyqe) { goto uguigkcmukuouway; } if (!(!$wsgaqoyasieoiwuw || $occuycyyyycsosao == 0)) { goto qicwaskssogcokgm; } $mmwoqcwiwemokkue = $mesieoomaagsgyqe; qicwaskssogcokgm: uguigkcmukuouway: esuiysskoweawsue: $acwmgkosiwekkosk = $this->eiwcuqigayigimak(Setting::ysoqycicuciiyuaw, 0); if (!(!$wsgaqoyasieoiwuw && $acwmgkosiwekkosk > $mmwoqcwiwemokkue)) { goto gaomwagkcciesyqy; } $mmwoqcwiwemokkue = $acwmgkosiwekkosk; gaomwagkcciesyqy: return $mmwoqcwiwemokkue; } public function ywgkowokogikyoem($umwqusowiqmyseom) : string { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); $egaioscwooawuigc = ManipulatePost::igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm); $qqueccegigsqmmmg = $this->iaicueasqoiusuoo([self::awkcoioakcaougmq => $umwqusowiqmyseom]); $yuwymayicwwqiske = esc_html($this->eiwcuqigayigimak(Setting::mqcukmwiaqukgywi)); $yuwymayicwwqiske = $this->imuqeaaqmwwkgqui($yuwymayicwwqiske, $qqueccegigsqmmmg); $scqcgogsiaiksiiq = esc_html($this->eiwcuqigayigimak(Setting::wywskiqiowiagemy)); $scqcgogsiaiksiiq = $this->imuqeaaqmwwkgqui($scqcgogsiaiksiiq, $qqueccegigsqmmmg); if (!($wukmmiqowweyucaa = $this->eiwcuqigayigimak(Setting::osgqakokgccsywgw))) { goto aegysmeecgcgayyw; } $egaioscwooawuigc = str_pad($egaioscwooawuigc, strlen($wukmmiqowweyucaa), "\60", STR_PAD_LEFT); aegysmeecgcgayyw: return $yuwymayicwwqiske . $egaioscwooawuigc . $scqcgogsiaiksiiq; } public function mwmuaeuyequywmsq($umwqusowiqmyseom) { $qummwmsmceweyoqo = [self::ykqogmimmamwckwe => $this->eoagosyscaaqycai($umwqusowiqmyseom), self::sqsaisksswaayayo => $this->oskkikcewyayqmme($umwqusowiqmyseom), self::cekyaeaeeigmwysa => current_time("\x6d\171\163\x71\154"), self::mgisuqmqaesqscso => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::wmamggmmccsqcqwa), self::wkuaqkmwcegcgwim => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::qiookqywwgemeamk), self::sokaqgmykimmecwq => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::kwmkawqoiesweswy), self::owoskccgqgyycqoe => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::wsccocqiicegwska), self::cueaooscqucmcseu => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::aockomuqgkgqyaki), self::occkmmmsugiucmsi => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::kosymqioioyguigs), self::yisqmeewaaykaeqg => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::ekyyyewmowkgcgay), self::asmcgcuuyowickgq => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::qaowyaoaqwacmgeo), self::uicuqucwwkscyyyy => $this->ywgkowokogikyoem($umwqusowiqmyseom)]; $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); ManipulatePost::ksmqawcowkmegigw(self::uqkoiiemwwwicsyu, $qummwmsmceweyoqo, $gkkgcoiwayaccqgm); foreach ($qummwmsmceweyoqo as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { ManipulatePost::ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $gkkgcoiwayaccqgm); soaccwqimeksgwiw: } suqkuqygkkgwyaie: } public function eoagosyscaaqycai($umwqusowiqmyseom) : ?string { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); $umwqusowiqmyseom = ManipulateWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom); $ogegikscwkaowsqa = ManipulatePost::igawqaomowicuayw(self::ykqogmimmamwckwe, $gkkgcoiwayaccqgm); if ($ogegikscwkaowsqa) { goto cgiscsqwwgqqaeqi; } $oqycwugsseyiisou = $this->eiwcuqigayigimak(Setting::ekeaeyoouiiymayo); if ($oqycwugsseyiisou == self::amcogigwsaqssuai) { goto wiysogeqqwgioyka; } $ogegikscwkaowsqa = $umwqusowiqmyseom->get_date_created(); goto skkamseieeusycye; wiysogeqqwgioyka: $ogegikscwkaowsqa = current_time("\155\x79\x73\x71\154"); skkamseieeusycye: cgiscsqwwgqqaeqi: return $this->cqswciouesmewqke($ogegikscwkaowsqa); } public function oskkikcewyayqmme($umwqusowiqmyseom) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); $egaioscwooawuigc = ManipulatePost::igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm); if ($egaioscwooawuigc) { goto ewymsmkkiksgwysk; } if ($this->eiwcuqigayigimak(Setting::gooouyogomkqyiwa)) { goto syiqkaasoueowwui; } $egaioscwooawuigc = $this->sywqsimcesscwamc(); goto giaacoqqqsekcayy; syiqkaasoueowwui: $egaioscwooawuigc = $gkkgcoiwayaccqgm; giaacoqqqsekcayy: DecoratorOption::update(self::cgsyasqoqekikcue, date("\131")); $egaioscwooawuigc = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x64\x66\x5f\151\156\x76\157\x69\x63\145\x73\x5f\163\145\164\x5f\x69\156\x76\157\x69\x63\145\137\x6e\x75\x6d\x62\145\162"), $egaioscwooawuigc, $gkkgcoiwayaccqgm); ManipulatePost::ksmqawcowkmegigw(self::sqsaisksswaayayo, $egaioscwooawuigc, $gkkgcoiwayaccqgm); Setting::symcgieuakksimmu()->eiaacegkigqiwawg(Setting::ysoqycicuciiyuaw, $egaioscwooawuigc); ewymsmkkiksgwysk: return $egaioscwooawuigc; } }
