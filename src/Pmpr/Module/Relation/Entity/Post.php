<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc57b482d1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Manager\PostManager; use Pmpr\Module\Relation\Setting; use WP_Post; use WP_Post_Type; class Post extends Entity { public function __construct() { $this->name = Constants::mswoacegomcucaik; $this->title = __("\x50\x6f\x73\x74\x20\124\171\x70\x65\163", PR__MDL__RELATION); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x64\137\155\145\x74\141\137\x62\157\170\x65\163", [$this, "\x73\151\153\x71\x67\x67\x77\x6d\155\x79\153\x75\151\171\155\171"]); parent::wigskegsqequoeks(); } public function eyamqkqiykagecsw() : ?string { return IconInterface::awmsmqouyuugigus; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, bool $kiyaqqoyagguscog = false) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "\x5e{$iakkeikwceeomgyq}\57\50\x5b\136\x2f\x5d\x2b\51\x2f{$muowmkwsoauukiag}\57{$aaokuekaimigoyue}\x2f"; $gqgemcmoicmgaqie = "\x69\x6e\144\145\170\56\x70\x68\160\77\160\x6f\163\x74\137\164\171\x70\145\x3d{$muowmkwsoauukiag}\x26{$yygmoeguaqyumuui->target}\75{$iakkeikwceeomgyq}\x26{$yygmoeguaqyumuui->metakey}\x3d{$gwiwsycaaqgwmewg}\46{$yygmoeguaqyumuui->side}\x3d\x24\155\x61\x74\x63\150\x65\163\133\61\x5d"; if ($kiyaqqoyagguscog) { $this->caokeucsksukesyo()->kuggecgwaickowwu()->wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2); } $ucccueqywigcukcc .= "\77\44"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\157\x70"]; } public function sikqggwmmykuiymy($useksmwkuswkwcqg) { $mgkceomocowocqyo = $this->weysguygiseoukqw(Constants::osiogououyayqyck, "\156\x6f\162\155\141\x6c"); if ($oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $useksmwkuswkwcqg)) { foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $mksyucucyswaukig = $this->mauewaeoemuusikw($kooyscwkscsogysg); if ($mksyucucyswaukig) { $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => "{$kooyscwkscsogysg}\x5f\x6d\x65\x74\141\x5f\x62\x6f\x78", Constants::okeuagwgwkmiokac => [$gsgwomokyuwmqqkg, $kooyscwkscsogysg], Constants::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), Constants::qescuiwgsyuikume => sprintf(__("\122\x65\x6c\x61\164\151\x6f\x6e\x20\x77\x69\164\x68\x20\x25\163", PR__MDL__RELATION), $mksyucucyswaukig->label), Constants::cacismqswgaewkuu => $useksmwkuswkwcqg, Constants::osiogououyayqyck => $mgkceomocowocqyo, Constants::wwgusigoaksqmwsm => [$this, "\171\163\x79\145\151\x69\x79\161\x73\145\143\155\147\x6f\x79\x75"]]); } } } } public function ysyeiiyqsecmgoyu($post, $qookweymeqawmcwo, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { [$gsgwomokyuwmqqkg, $kooyscwkscsogysg] = $this->gagauoqcuosakeiq($qookweymeqawmcwo); return parent::ysyeiiyqsecmgoyu($post, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, $koaqeegoeiaiccse); } public function gagauoqcuosakeiq($qookweymeqawmcwo) { if (isset($qookweymeqawmcwo[Constants::okeuagwgwkmiokac]) && $qookweymeqawmcwo[Constants::okeuagwgwkmiokac]) { return $qookweymeqawmcwo[Constants::okeuagwgwkmiokac]; } $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, __("\123\157\x6d\x65\164\x68\x69\x6e\147\40\x69\163\x20\x77\x72\x6f\156\147\40\x69\156\x20\162\145\154\141\x74\x69\157\x6e\40\146\151\x65\x6c\144\x20\x72\x65\x6e\144\x65\162\x69\x6e\x67", PR__MDL__RELATION), "\x72\145\154\141\x74\151\x6f\x6e", Constants::imkacwmiuiykyuim); return null; } public function mauewaeoemuusikw($muowmkwsoauukiag) : ?WP_Post_Type { return $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq($muowmkwsoauukiag); } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if ($mcaisukqqyosuasi instanceof WP_Post) { $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } return $oammesyieqmwuwyi; } public function goqmcwikekcgyokg() : array { $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get(); $oammesyieqmwuwyi = []; if ($post instanceof WP_Post) { $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $post->post_type); } return $oammesyieqmwuwyi; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { if ($ymqmyyeuycgmigyo instanceof WP_Post || is_numeric($ymqmyyeuycgmigyo)) { $mcaisukqqyosuasi = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($ymqmyyeuycgmigyo); } else { $mcaisukqqyosuasi = $this->caokeucsksukesyo()->kyqakacqeumicgag()->ssacaeeassumyuws($ymqmyyeuycgmigyo, Constants::ckmqoekmugkggeym, $sqeykgyoooqysmca); } return $mcaisukqqyosuasi; } public function muekkssosomcakme($mcaisukqqyosuasi, $ayegqaqygsqsmews) : array { $mguygkocuoaoqqkg = []; if ($gwiwsycaaqgwmewg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, Constants::moegqsqomeumiomk)) { $mguygkocuoaoqqkg = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ayegqaqygsqsmews->{Constants::gygsikewooaciecc}, $gwiwsycaaqgwmewg); } return $mguygkocuoaoqqkg; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { $gqgemcmoicmgaqie->set(Constants::eqomgewoayseioos, $oammesyieqmwuwyi); $gqgemcmoicmgaqie->set(Constants::gqiasegggowomgie, Constants::eqomgewoayseioos); return $gqgemcmoicmgaqie; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy(Setting $amakmumgguksgmum) : array { $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); return [$amakmumgguksgmum->yyuwuqsiucweeoue(Constants::osiogououyayqyck)->mkmssscwmeekwgqo()->acauweqyyugwisqc([Constants::qayiiikwusguoask => __("\x53\151\144\x65\x62\141\x72", PR__MDL__RELATION), Constants::ycusscwsoggmuweq => __("\x42\x6f\x74\164\x6f\155", PR__MDL__RELATION)])->gswweykyogmsyawy(__("\x4d\145\x74\x61\x42\157\x78\40\x50\x6f\x73\x69\x74\151\x6f\x6e", PR__MDL__RELATION))->gucwmccyimoagwcm(__("\120\157\x73\x69\164\151\157\156\x20\x6f\146\40\155\x65\x74\141\142\157\x78\40\x69\x6e\40\x65\144\151\x74\x20\x73\x63\162\x65\145\156\x20\157\x66\40\x63\165\x73\164\x6f\x6d\40\x70\x6f\163\x74\40\x74\171\x70\145\x73\56", PR__MDL__RELATION)), $amakmumgguksgmum->qqmgmgasauucoago(self::uwoqgmuqskqcqsag())->gswweykyogmsyawy(__("\111\x74\x65\155\x73", PR__MDL__RELATION))->omsoosuoikgueyke()->mkksewyosgeumwsa($amakmumgguksgmum->wcwmusaouiqaqeww(Constants::iccwcygaeqmomooo)->gswweykyogmsyawy(__("\105\x6e\x61\x62\x6c\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->wcwmusaouiqaqeww(Constants::iycuamekoueuemoy)->gswweykyogmsyawy(__("\111\x6e\166\x65\x72\x73\x65\x20\x53\x69\x64\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->quaegkgkucwyeiqg(Constants::mkousmkiawwousws)->gswweykyogmsyawy(__("\x49\x6d\x61\147\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::NAME)->gswweykyogmsyawy(__("\x41\x64\x6d\151\x6e\40\120\141\x6e\x65\x6c\x20\116\x61\x6d\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->mccagaqeagiikkec(Constants::igecewwoemccgwsq)->acauweqyyugwisqc($sciomagaqmgggsiu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x4f\162\151\x67\151\x6e\x20\x50\157\163\x74\x20\124\171\x70\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->mccagaqeagiikkec(Constants::gygsikewooaciecc)->acauweqyyugwisqc($sciomagaqmgggsiu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x44\145\163\164\151\x6e\x61\164\151\x6f\x6e\40\120\x6f\163\164\40\x54\x79\x70\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::qgwwgcuuykqagamk)->gswweykyogmsyawy(__("\117\162\x69\x67\x69\156\x20\120\157\x73\164\40\124\x79\160\145\x20\124\151\164\x6c\145", PR__MDL__RELATION))->gucwmccyimoagwcm(sprintf("\x25\x73\x3a\x20\x25\163", $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(__("\116\x6f\x74\151\143\145", PR__MDL__RELATION)), __("\127\151\154\x6c\40\x62\x65\x20\165\x73\x65\144\x20\141\x73\x20\163\x6c\x75\x67\x20\x74\x6f\157\x2e", PR__MDL__RELATION))))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::uyqakoogaigomqmq)->gswweykyogmsyawy(__("\104\145\163\x74\x69\156\x61\x74\x69\x6f\156\x20\x50\x6f\163\x74\x20\x54\x79\160\x65\40\124\151\x74\x6c\145", PR__MDL__RELATION)))]; } }
