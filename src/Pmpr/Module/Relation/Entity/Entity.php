<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec2680ee5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Container; use Pmpr\Module\Relation\Setting; use stdClass; use WP_Post; use WP_Query; use WP_Term; abstract class Entity extends Container { const gsogeeomsuykagku = "\x72\145\x6c\x61\164\x69\157\x6e\137\163\151\144\145"; const osaqscycewgywasc = "\162\x65\x6c\x61\x74\151\x6f\156\137\x74\141\162\x67\x65\x74"; const gummygkewuamuwec = "\162\x65\154\141\x74\x69\x6f\156\x5f\x6d\145\x74\141\137\153\x65\x79"; public ?string $name = null; protected ?string $title = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $uusmaiomayssaecw = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\x69\x6e\x69\164"], 0)->qcsmikeggeemccuu("\x70\x61\162\163\145\x5f\x71\165\x65\162\x79", [$this, "\x75\x75\x71\161\x63\x75\153\x63\153\165\163\x63\157\171\141\x73"], 999)->qcsmikeggeemccuu("\x77\157\x6f\x63\157\155\155\x65\x72\x63\x65\137\160\x72\x6f\x64\x75\x63\164\x5f\x71\165\x65\x72\x79", [$this, "\165\x75\x71\161\x63\165\153\143\153\165\x73\x63\157\x79\x61\163"], 999)->qcsmikeggeemccuu("\x62\145\146\x6f\x72\145\x5f\x75\160\x64\x61\164\145\137{$uusmaiomayssaecw}", [$this, "\151\141\163\x79\x77\167\x6b\x67\165\x79\x61\165\151\x79\167\165"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x71\x75\x65\x72\171\x5f\166\x61\x72\x73", [$this, "\155\165\x6f\x75\x6d\x67\x6d\151\x75\x75\x6f\x61\167\x73\x69\167"])->cecaguuoecmccuse("\x75\160\x64\x61\x74\x65\137{$this->aakmagwggmkoiiyu()}\x5f\x69\164\x65\155\x73\x5f\x62\171\x5f\155\x65\x74\x61\153\x65\171", [$this, "\x67\151\x6d\x73\x69\x69\x69\x77\x69\x61\x69\x71\x63\x69\151\x63"], 10, 2)->cecaguuoecmccuse($this->caokeucsksukesyo()->mmsykuomogaqoaye()->wysmcwgiaskkoeam($this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc()), [$this, "\x61\x63\145\157\x63\143\163\153\143\167\167\x6d\155\147\x79\x71"], 10, 2); parent::kgquecmsgcouyaya(); } public function init() { $this->uuycqmsuyqokygky(); } public function uuycqmsuyqokygky() { $acqqmqmcquukaqsc = []; if (!($gsgwomokyuwmqqkg = $this->comscwiqyuuesess(self::uwoqgmuqskqcqsag()))) { goto oqugqwcyomiaaoqu; } foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $this->uueaoikucyigousq($ayegqaqygsqsmews, $acqqmqmcquukaqsc); if (!$this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, Constants::iycuamekoueuemoy)) { goto eeqesooyqagwawae; } $this->uueaoikucyigousq($this->ggiqwoiwqoieoeqe($ayegqaqygsqsmews), $acqqmqmcquukaqsc); eeqesooyqagwawae: suswcqoyyqkkquuo: } acaqummmoyiemqss: $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee($acqqmqmcquukaqsc); oqugqwcyomiaaoqu: } public function gimsiiiwiaiqciic($qcgkuqesqqymcuui, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x73\151\144\145\163" => [], Constants::cgiswgcumueqgcmw => 5, Constants::osocaqqumyuooqyo => '']); $oammesyieqmwuwyi = []; $yguacsiqkqgiauaa = $ywmkwiwkosakssii["\163\x69\x64\145\163"]; $gwiwsycaaqgwmewg = $ywmkwiwkosakssii[Constants::osocaqqumyuooqyo]; $ayegqaqygsqsmews = $this->ugcmciwwskkeimse(self::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto kymkucucyeoeikim; } $iakkeikwceeomgyq = $ayegqaqygsqsmews->{Constants::igecewwoemccgwsq}; $muowmkwsoauukiag = $ayegqaqygsqsmews->{Constants::gygsikewooaciecc}; if (!($iakkeikwceeomgyq && $muowmkwsoauukiag && is_array($yguacsiqkqgiauaa))) { goto hoeeyiowekaeemko; } foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $mcaisukqqyosuasi = $this->kuksecseqkakwguo($mcaisukqqyosuasi); $mcaisukqqyosuasi->archive = $this->weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi); $mcaisukqqyosuasi->related = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $muowmkwsoauukiag, $gwiwsycaaqgwmewg, ["\x6c\x69\155\151\x74" => $ywmkwiwkosakssii["\154\151\155\x69\164"]]); $oammesyieqmwuwyi[] = $mcaisukqqyosuasi; iekumemscwieugqw: } foeeqckqsyockkak: hoeeyiowekaeemko: $qcgkuqesqqymcuui = [$oammesyieqmwuwyi, $ayegqaqygsqsmews]; kymkucucyeoeikim: return $qcgkuqesqqymcuui; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return []; } public function uueaoikucyigousq($ayegqaqygsqsmews, &$acqqmqmcquukaqsc = []) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $iakkeikwceeomgyq = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, Constants::igecewwoemccgwsq); $gwiwsycaaqgwmewg = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, Constants::moegqsqomeumiomk); $muowmkwsoauukiag = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, Constants::gygsikewooaciecc); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, true); } public function agciaameqmyisqgo() { return ConvertArray::kamisyecckmwywwo([self::gummygkewuamuwec, self::osaqscycewgywasc, self::gsogeeomsuykagku], ["\155\x65\x74\x61\x6b\x65\x79", Constants::mgsccwumkcawaqcy, Constants::qayiiikwusguoask]); } public function oewsgacismqeuomk($gqgemcmoicmgaqie = null) { if ($gqgemcmoicmgaqie) { goto usquiuuyiyqaeyiu; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; usquiuuyiyqaeyiu: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto uguigkcmukuouway; } $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $gwiwsycaaqgwmewg = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->metakey); $ccamueccusigaaio = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->target); $mcaisukqqyosuasi = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->side); if (!($gwiwsycaaqgwmewg && $ccamueccusigaaio && $mcaisukqqyosuasi)) { goto qicwaskssogcokgm; } return ConvertArray::kamisyecckmwywwo([$gwiwsycaaqgwmewg, $ccamueccusigaaio, $mcaisukqqyosuasi], ["\x6d\x65\x74\141\x4b\145\171", Constants::mgsccwumkcawaqcy, Constants::qayiiikwusguoask]); qicwaskssogcokgm: uguigkcmukuouway: return false; } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto gaomwagkcciesyqy; } $kkeqqkkkqwkocsyu = $this->oewsgacismqeuomk($gqgemcmoicmgaqie); if (!$kkeqqkkkqwkocsyu) { goto esuiysskoweawsue; } $mcaisukqqyosuasi = $this->kuksecseqkakwguo($kkeqqkkkqwkocsyu->side, $kkeqqkkkqwkocsyu->target); $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($mcaisukqqyosuasi, $kkeqqkkkqwkocsyu->target, $kkeqqkkkqwkocsyu->metaKey, [Constants::aisguagukaewucii => Constants::gouqcwikiiygyasc]); if (!$oammesyieqmwuwyi) { goto uqqaiagaeqgqgaiy; } $gqgemcmoicmgaqie = $this->ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); uqqaiagaeqgqgaiy: esuiysskoweawsue: gaomwagkcciesyqy: return $gqgemcmoicmgaqie; } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::gummygkewuamuwec; $kkeqqkkkqwkocsyu[] = self::osaqscycewgywasc; $kkeqqkkkqwkocsyu[] = self::gsogeeomsuykagku; return $kkeqqkkkqwkocsyu; } public static function uwoqgmuqskqcqsag() { return self::symcgieuakksimmu()->aakmagwggmkoiiyu() . Constants::gmsyiecgeegkooym; } public function ysyeiiyqsecmgoyu($igqsaukqcqscimok, $gsgwomokyuwmqqkg, $kooyscwkscsogysg = null, bool $koaqeegoeiaiccse = true) : ?string { $uaqusiikkokccqou = []; $aiwgcyaewwagisoo = []; foreach ($gsgwomokyuwmqqkg as $aaokuekaimigoyue => $ayegqaqygsqsmews) { $aiwgcyaewwagisoo[$aaokuekaimigoyue] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, Constants::NAME); $uaqusiikkokccqou[$aaokuekaimigoyue] = $this->giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $kooyscwkscsogysg); suqkuqygkkgwyaie: } aegysmeecgcgayyw: return $this->iuygowkemiiwqmiw("\x6d\x65\164\x61\x5f\142\157\x78\137\x74\x61\142\x73", ["\x6d\145\x74\141\x42\x6f\170\145\163" => $uaqusiikkokccqou, Constants::mgsccwumkcawaqcy => "\x23\162\145\x6c\x61\x74\151\157\156\55\x73\x74\x75\x66\x66", Constants::emgcgiseaoouacge => $aiwgcyaewwagisoo], ["\x65\x63\x68\x6f" => $koaqeegoeiaiccse]); } public function giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $ccamueccusigaaio) : ?string { $gwiwsycaaqgwmewg = $ayegqaqygsqsmews->metakey; $ccamueccusigaaio = $this->mauewaeoemuusikw($ccamueccusigaaio); $icwicymcioeyeyek = $this->seyyiqmgwymyumoq($igqsaukqcqscimok, $ccamueccusigaaio->name, $gwiwsycaaqgwmewg); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x6d\x65\164\x61\x5f\142\x6f\170", ["\x6d\145\x74\x61\113\145\x79" => $gwiwsycaaqgwmewg, Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek, Constants::iockmgiyoygcswog => $igqsaukqcqscimok->ID, Constants::NAME => $ccamueccusigaaio->labels->singular_name, Constants::mgsccwumkcawaqcy => $ccamueccusigaaio->name, Constants::ENTITY => $this->aakmagwggmkoiiyu(), "\145\170\x63\x6c\165\144\145\x73" => $icwicymcioeyeyek ? $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike(array_map(function ($igqsaukqcqscimok) { $aokagokqyuysuksm = 0; if (is_numeric($igqsaukqcqscimok)) { goto cgiscsqwwgqqaeqi; } if ($igqsaukqcqscimok instanceof WP_Term) { goto wiysogeqqwgioyka; } if (!$igqsaukqcqscimok instanceof WP_Post) { goto soaccwqimeksgwiw; } $aokagokqyuysuksm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($igqsaukqcqscimok); soaccwqimeksgwiw: goto skkamseieeusycye; wiysogeqqwgioyka: $aokagokqyuysuksm = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($igqsaukqcqscimok); skkamseieeusycye: goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $aokagokqyuysuksm = $igqsaukqcqscimok; syiqkaasoueowwui: return $aokagokqyuysuksm; }, $icwicymcioeyeyek)) : "\x7b\x7d", "\151\x6e\160\165\x74\x5f\x70\154\x61\143\145\x68\x6f\x6c\x64\145\162" => __("\x54\171\160\145\x20\x4e\141\x6d\145\x20\157\146\x20\x61\40\45\163", PR__MDL__RELATION), "\155\x6f\x76\x65\x5f\150\141\x6e\x64\154\x65" => $this->cmeuowkiswiuocqa(), "\162\x65\155\157\166\x65\137\155\x6f\144\141\154" => $this->amsaeiymyieqksqy("\45\x69\x64\45")]); return $nsmgceoqaqogqmuw; } public function aceoccskcwwmmgyq($wsqkgswwooewwekw, $amakmumgguksgmum) { if (!$amakmumgguksgmum instanceof Setting) { goto giaacoqqqsekcayy; } $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $wsqkgswwooewwekw[$ymqmyyeuycgmigyo] = $amakmumgguksgmum->mkcwgaeaaweamyyg($ymqmyyeuycgmigyo)->gswweykyogmsyawy($this->qcgakseyaikigqco())->saemoowcasogykak($this->eyamqkqiykagecsw())->gucwmccyimoagwcm(sprintf(__("\x25\163\40\x72\145\154\141\164\x69\x6f\x6e\x20\x63\x6f\x6e\146\x69\x67\165\162\141\164\151\157\156", PR__MDL__RELATION), $this->qcgakseyaikigqco()))->kwkugmqouisgkqig($amakmumgguksgmum->ycgeeoiieoiakgam("{$ymqmyyeuycgmigyo}\137\162\145\154\141\x74\151\157\x6e\x73")->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->gswweykyogmsyawy(__("\x52\x65\x6c\x61\x74\151\x6f\156\x73", PR__MDL__RELATION))->ewweaossowcqywaw($this->ugmceccgwaaaigiy($amakmumgguksgmum))); giaacoqqqsekcayy: return $wsqkgswwooewwekw; } public function ugmceccgwaaaigiy(Setting $amakmumgguksgmum) : array { return []; } public function iasywwkguyauiywu($qiouiwasaauyaaue) { return $this->kmuweyayaqoeqiyw()::wcoqgwyekgsmiueo($qiouiwasaauyaaue, self::uwoqgmuqskqcqsag(), 5); } public abstract function eyamqkqiykagecsw() : ?string; public abstract function mauewaeoemuusikw($muowmkwsoauukiag); public abstract function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); public abstract function goqmcwikekcgyokg() : array; public abstract function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null); public abstract function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); public abstract function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, bool $kiyaqqoyagguscog = false); }
