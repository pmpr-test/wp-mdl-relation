<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b74ba1149             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Manager\PostManager; use Pmpr\Module\Relation\Setting; use WP_Post; use WP_Post_Type; class Post extends Entity { public function __construct() { $this->name = Constants::mswoacegomcucaik; $this->title = __("\120\x6f\x73\x74\40\x54\171\x70\145\163", PR__MDL__RELATION); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x64\x5f\x6d\x65\x74\141\137\x62\157\170\x65\163", [$this, "\x73\x69\x6b\x71\147\x67\167\155\x6d\x79\153\165\151\x79\x6d\x79"]); parent::wigskegsqequoeks(); } public function eyamqkqiykagecsw() : ?string { return IconInterface::awmsmqouyuugigus; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, bool $kiyaqqoyagguscog = false) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "\136{$iakkeikwceeomgyq}\x2f\x28\133\x5e\57\135\53\x29\x2f{$muowmkwsoauukiag}\57{$aaokuekaimigoyue}\57"; $gqgemcmoicmgaqie = "\151\x6e\144\x65\x78\x2e\x70\150\x70\x3f\160\157\163\x74\137\x74\171\x70\x65\x3d{$muowmkwsoauukiag}\46{$yygmoeguaqyumuui->target}\75{$iakkeikwceeomgyq}\x26{$yygmoeguaqyumuui->metakey}\x3d{$gwiwsycaaqgwmewg}\x26{$yygmoeguaqyumuui->side}\x3d\x24\x6d\141\164\x63\x68\x65\163\133\x31\135"; if ($kiyaqqoyagguscog) { $this->caokeucsksukesyo()->kuggecgwaickowwu()->wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2); } $ucccueqywigcukcc .= "\x3f\44"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\x6f\160"]; } public function sikqggwmmykuiymy($useksmwkuswkwcqg) { $mgkceomocowocqyo = $this->weysguygiseoukqw(Constants::osiogououyayqyck, "\x6e\157\x72\155\x61\154"); if ($oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $useksmwkuswkwcqg)) { foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $mksyucucyswaukig = $this->mauewaeoemuusikw($kooyscwkscsogysg); if ($mksyucucyswaukig) { $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => "{$kooyscwkscsogysg}\x5f\x6d\x65\x74\x61\x5f\142\x6f\x78", Constants::okeuagwgwkmiokac => [$gsgwomokyuwmqqkg, $kooyscwkscsogysg], Constants::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), Constants::qescuiwgsyuikume => sprintf(__("\122\145\x6c\141\x74\x69\157\x6e\x20\167\x69\164\x68\x20\x25\x73", PR__MDL__RELATION), $mksyucucyswaukig->label), Constants::cacismqswgaewkuu => $useksmwkuswkwcqg, Constants::osiogououyayqyck => $mgkceomocowocqyo, Constants::wwgusigoaksqmwsm => [$this, "\171\163\x79\x65\151\151\171\x71\163\x65\x63\155\x67\x6f\x79\165"]]); } } } } public function ysyeiiyqsecmgoyu($post, $qookweymeqawmcwo, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { [$gsgwomokyuwmqqkg, $kooyscwkscsogysg] = $this->gagauoqcuosakeiq($qookweymeqawmcwo); return parent::ysyeiiyqsecmgoyu($post, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, $koaqeegoeiaiccse); } public function gagauoqcuosakeiq($qookweymeqawmcwo) { if (isset($qookweymeqawmcwo[Constants::okeuagwgwkmiokac]) && $qookweymeqawmcwo[Constants::okeuagwgwkmiokac]) { return $qookweymeqawmcwo[Constants::okeuagwgwkmiokac]; } $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, __("\x53\x6f\x6d\145\x74\x68\x69\156\x67\x20\151\163\x20\167\x72\x6f\156\x67\x20\x69\156\x20\x72\145\154\141\x74\x69\157\x6e\x20\x66\x69\145\x6c\144\x20\162\145\x6e\x64\x65\162\151\x6e\147", PR__MDL__RELATION), "\x72\145\x6c\141\x74\x69\x6f\156", Constants::imkacwmiuiykyuim); return null; } public function mauewaeoemuusikw($muowmkwsoauukiag) : ?WP_Post_Type { return $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq($muowmkwsoauukiag); } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if ($mcaisukqqyosuasi instanceof WP_Post) { $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } return $oammesyieqmwuwyi; } public function goqmcwikekcgyokg() : array { $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get(); $oammesyieqmwuwyi = []; if ($post instanceof WP_Post) { $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $post->post_type); } return $oammesyieqmwuwyi; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { if ($ymqmyyeuycgmigyo instanceof WP_Post || is_numeric($ymqmyyeuycgmigyo)) { $mcaisukqqyosuasi = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($ymqmyyeuycgmigyo); } else { $mcaisukqqyosuasi = $this->caokeucsksukesyo()->kyqakacqeumicgag()->ssacaeeassumyuws($ymqmyyeuycgmigyo, Constants::ckmqoekmugkggeym, $sqeykgyoooqysmca); } return $mcaisukqqyosuasi; } public function muekkssosomcakme($mcaisukqqyosuasi, $ayegqaqygsqsmews) : array { $mguygkocuoaoqqkg = []; if ($gwiwsycaaqgwmewg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, Constants::moegqsqomeumiomk)) { $mguygkocuoaoqqkg = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ayegqaqygsqsmews->{Constants::gygsikewooaciecc}, $gwiwsycaaqgwmewg); } return $mguygkocuoaoqqkg; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { $gqgemcmoicmgaqie->set(Constants::eqomgewoayseioos, $oammesyieqmwuwyi); $gqgemcmoicmgaqie->set(Constants::gqiasegggowomgie, Constants::eqomgewoayseioos); return $gqgemcmoicmgaqie; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy(Setting $amakmumgguksgmum) : array { $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); return [$amakmumgguksgmum->yyuwuqsiucweeoue(Constants::osiogououyayqyck)->mkmssscwmeekwgqo()->acauweqyyugwisqc([Constants::qayiiikwusguoask => __("\x53\x69\x64\x65\142\x61\162", PR__MDL__RELATION), Constants::ycusscwsoggmuweq => __("\102\157\164\164\x6f\155", PR__MDL__RELATION)])->gswweykyogmsyawy(__("\115\145\164\x61\x42\x6f\170\x20\120\x6f\x73\151\164\x69\x6f\156", PR__MDL__RELATION))->gucwmccyimoagwcm(__("\120\157\163\x69\164\151\157\x6e\40\x6f\x66\x20\155\x65\164\141\142\157\170\40\151\156\40\145\x64\151\x74\40\163\x63\162\145\x65\156\40\x6f\x66\x20\x63\165\x73\x74\x6f\155\x20\x70\x6f\163\164\x20\x74\171\160\x65\x73\x2e", PR__MDL__RELATION)), $amakmumgguksgmum->qqmgmgasauucoago(self::uwoqgmuqskqcqsag())->gswweykyogmsyawy(__("\x49\x74\145\155\163", PR__MDL__RELATION))->omsoosuoikgueyke()->mkksewyosgeumwsa($amakmumgguksgmum->wcwmusaouiqaqeww(Constants::iccwcygaeqmomooo)->gswweykyogmsyawy(__("\105\156\141\x62\154\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->wcwmusaouiqaqeww(Constants::iycuamekoueuemoy)->gswweykyogmsyawy(__("\111\x6e\166\145\x72\163\x65\x20\123\151\x64\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->quaegkgkucwyeiqg(Constants::mkousmkiawwousws)->gswweykyogmsyawy(__("\x49\155\141\x67\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::NAME)->gswweykyogmsyawy(__("\101\144\x6d\x69\x6e\40\120\141\156\x65\x6c\40\x4e\x61\x6d\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->mccagaqeagiikkec(Constants::igecewwoemccgwsq)->acauweqyyugwisqc($sciomagaqmgggsiu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x4f\x72\151\147\x69\156\40\120\157\163\164\x20\124\x79\x70\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->mccagaqeagiikkec(Constants::gygsikewooaciecc)->acauweqyyugwisqc($sciomagaqmgggsiu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x44\145\163\x74\x69\x6e\x61\164\151\157\x6e\40\x50\x6f\163\164\x20\124\171\x70\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::qgwwgcuuykqagamk)->gswweykyogmsyawy(__("\117\162\x69\x67\151\x6e\40\120\x6f\163\164\x20\124\x79\x70\145\40\x54\151\164\x6c\145", PR__MDL__RELATION))->gucwmccyimoagwcm(sprintf("\45\163\x3a\x20\45\163", $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(__("\x4e\157\164\x69\143\x65", PR__MDL__RELATION)), __("\x57\151\x6c\154\40\142\x65\x20\x75\x73\145\x64\40\x61\x73\40\163\154\x75\147\40\164\x6f\157\x2e", PR__MDL__RELATION))))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::uyqakoogaigomqmq)->gswweykyogmsyawy(__("\104\145\163\x74\x69\156\141\x74\x69\157\x6e\40\120\157\163\x74\x20\124\x79\x70\145\x20\x54\151\164\154\x65", PR__MDL__RELATION)))]; } }
