<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e7b954abb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Manager\TermManager; use Pmpr\Module\Relation\Setting; use WP_Term; class Term extends Entity { public function __construct() { $this->name = Constants::yoayaissyomokiui; $this->title = __("\x54\x65\x72\155\x73", PR__MDL__RELATION); parent::__construct(); } public function init() { parent::init(); $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag()); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { foreach ($igqsaukqcqscimok as $ayegqaqygsqsmews) { $this->qcsmikeggeemccuu("{$ayegqaqygsqsmews->{Constants::igecewwoemccgwsq}}\137\x65\144\x69\x74\137\146\x6f\162\155\x5f\x66\x69\145\x6c\144\x73", [$this, "\161\141\x61\143\147\x79\171\165\x71\165\x73\x65\x6b\167\x79\x61"], 10, 2); if (!$ayegqaqygsqsmews->{Constants::iycuamekoueuemoy}) { goto ooeausyowguqicuo; } $this->qcsmikeggeemccuu("{$ayegqaqygsqsmews->{Constants::gygsikewooaciecc}}\x5f\x65\x64\151\x74\137\146\x6f\162\x6d\137\x66\x69\145\x6c\144\x73", [$this, "\x71\x61\x61\143\x67\x79\171\165\161\x75\x73\x65\x6b\167\171\141"], 10, 2); ooeausyowguqicuo: gkyawqqcmigqgaiq: } wmywuusgukmmaams: cmegwsegsosyqcai: } ewymsmkkiksgwysk: } public function eyamqkqiykagecsw() : ?string { return IconInterface::uaimoioocayauuca; } public function qaacgyyuqusekwya($iwewcwusemqaiggk, $kesssewsiegssiya) { $nsmgceoqaqogqmuw = ''; $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $kesssewsiegssiya); $iwewcwusemqaiggk->ID = $iwewcwusemqaiggk->term_id; $ysecigwmacqymaku = $this->iuygowkemiiwqmiw("\164\x65\x72\x6d\x5f\141\x64\155\151\156\x5f\146\x69\x65\x6c\144\x5f\x68\x6f\154\144\x65\x72"); foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $qkweikswegyciaie = $this->ysyeiiyqsecmgoyu($iwewcwusemqaiggk, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, false); if (!$qkweikswegyciaie) { goto cewmoqyysgsmuiya; } $nsmgceoqaqogqmuw .= sprintf($ysecigwmacqymaku, sprintf(__("\x52\145\x6c\x61\x74\151\x6f\x6e\40\x77\151\164\150\x20\45\163", PR__MDL__RELATION), $this->mauewaeoemuusikw($kooyscwkscsogysg)->label), $qkweikswegyciaie); cewmoqyysgsmuiya: scisgsyemmsekgos: } egyyiccaeeiooaua: if (!$nsmgceoqaqogqmuw) { goto igooksugieceoege; } printf($this->eqkimaoyqiaoyoqa(), $nsmgceoqaqogqmuw); igooksugieceoege: } public function eqkimaoyqiaoyoqa() : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); return $swqimwqeweekeusq->uuccukgasskgimsq("\x74\141\142\x6c\x65", ["\143\154\x61\x73\163" => "\146\157\162\x6d\55\164\x61\142\154\x65"], $swqimwqeweekeusq->uuccukgasskgimsq("\x74\x62\x6f\144\171", [], "\x25\163")); } public function mauewaeoemuusikw($muowmkwsoauukiag) { return $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->imgymusqgccqsqqq($muowmkwsoauukiag); } public function goqmcwikekcgyokg() : array { return []; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if (!$mcaisukqqyosuasi instanceof WP_Term) { goto omqiayeucoioqoao; } $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); omqiayeucoioqoao: return $oammesyieqmwuwyi; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { return $gqgemcmoicmgaqie; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, bool $kiyaqqoyagguscog = false) : array { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "{$iakkeikwceeomgyq}\x2f\x28\133\x5e\57\x5d\x2b\x29\x2f{$muowmkwsoauukiag}\57{$aaokuekaimigoyue}\57"; $gqgemcmoicmgaqie = "\x69\x6e\x64\x65\170\56\160\x68\x70\77\164\141\x78\157\156\x6f\155\171\75{$muowmkwsoauukiag}\x26{$yygmoeguaqyumuui->target}\x3d{$iakkeikwceeomgyq}\x26{$yygmoeguaqyumuui->metakey}\x3d{$gwiwsycaaqgwmewg}\x26{$yygmoeguaqyumuui->side}\x3d\x24\155\141\x74\x63\x68\145\x73\133\x31\x5d"; if (!$kiyaqqoyagguscog) { goto ugqaaewwmkocwwgy; } global $wp_rewrite; $qucissyoweagooww = $wp_rewrite->pagination_base; $ucccueqywigcukcc .= "{$qucissyoweagooww}\57\x3f\50\133\60\55\71\x5d\173\61\x2c\x7d\x29\57"; $gqgemcmoicmgaqie .= "\46\x70\141\147\145\x64\x3d\x24\x6d\141\164\143\150\x65\x73\133\62\x5d"; ugqaaewwmkocwwgy: $ucccueqywigcukcc .= "\x3f\44"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\157\160"]; } public function ugmceccgwaaaigiy(Setting $amakmumgguksgmum) : array { $seyqqsmuaiegkeeq = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->ciugwooasaqcywas([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); return [$amakmumgguksgmum->qqmgmgasauucoago(self::uwoqgmuqskqcqsag())->omsoosuoikgueyke()->gswweykyogmsyawy(__("\x49\x74\x65\x6d\x73", PR__MDL__RELATION))->mkksewyosgeumwsa($amakmumgguksgmum->wcwmusaouiqaqeww(Constants::iccwcygaeqmomooo)->gswweykyogmsyawy(__("\x45\156\x61\142\154\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->wcwmusaouiqaqeww(Constants::iycuamekoueuemoy)->gswweykyogmsyawy(__("\x49\156\x76\x65\x72\x73\x65\x20\x53\151\x64\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->quaegkgkucwyeiqg(Constants::mkousmkiawwousws)->gswweykyogmsyawy(__("\111\x6d\x61\147\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::NAME)->gswweykyogmsyawy(__("\x41\144\x6d\151\x6e\40\x50\141\156\x65\154\40\116\x61\155\145", PR__MDL__RELATION))->gucwmccyimoagwcm(sprintf("\x25\x73\x3a\40\x25\163", $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(__("\116\157\x74\x69\143\x65", PR__MDL__RELATION)), __("\127\x69\x6c\154\40\x62\x65\x20\165\x73\145\x64\40\x61\x73\40\x73\154\165\x67\x20\x74\x6f\157\x2e", PR__MDL__RELATION))))->mkksewyosgeumwsa($amakmumgguksgmum->mccagaqeagiikkec(Constants::igecewwoemccgwsq)->gswweykyogmsyawy(__("\x4f\162\x69\147\x69\156", PR__MDL__RELATION))->acauweqyyugwisqc($seyqqsmuaiegkeeq)->eumecwmqmukqgyea())->mkksewyosgeumwsa($amakmumgguksgmum->mccagaqeagiikkec(Constants::gygsikewooaciecc)->gswweykyogmsyawy(__("\104\145\163\x74\151\x6e\141\164\x69\157\x6e", PR__MDL__RELATION))->acauweqyyugwisqc($seyqqsmuaiegkeeq)->eumecwmqmukqgyea())->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::qgwwgcuuykqagamk)->gswweykyogmsyawy(__("\117\162\151\x67\151\x6e\x20\x54\x69\164\154\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::uyqakoogaigomqmq)->gswweykyogmsyawy(__("\104\145\163\x74\x69\156\x61\164\x69\157\x6e\40\x54\x69\164\154\x65", PR__MDL__RELATION)))]; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return TermManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } }
