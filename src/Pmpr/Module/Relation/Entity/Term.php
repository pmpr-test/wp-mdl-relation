<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801066ea155a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Manager\TermManager; use Pmpr\Module\Relation\Setting; use WP_Term; class Term extends Entity { public function __construct() { $this->name = Constants::yoayaissyomokiui; $this->title = __('Terms', PR__MDL__RELATION); parent::__construct(); } public function init() { parent::init(); $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag()); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { foreach ($igqsaukqcqscimok as $ayegqaqygsqsmews) { $this->qcsmikeggeemccuu("{$ayegqaqygsqsmews->{Constants::igecewwoemccgwsq}}_edit_form_fields", [$this, 'qaacgyyuqusekwya'], 10, 2); if ($ayegqaqygsqsmews->{Constants::iycuamekoueuemoy}) { $this->qcsmikeggeemccuu("{$ayegqaqygsqsmews->{Constants::gygsikewooaciecc}}_edit_form_fields", [$this, 'qaacgyyuqusekwya'], 10, 2); } } } } public function eyamqkqiykagecsw() : ?string { return IconInterface::uaimoioocayauuca; } public function qaacgyyuqusekwya($iwewcwusemqaiggk, $kesssewsiegssiya) { $nsmgceoqaqogqmuw = ''; $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $kesssewsiegssiya); $iwewcwusemqaiggk->ID = $iwewcwusemqaiggk->term_id; $ysecigwmacqymaku = $this->iuygowkemiiwqmiw('term_admin_field_holder'); foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $qkweikswegyciaie = $this->ysyeiiyqsecmgoyu($iwewcwusemqaiggk, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, false); if ($qkweikswegyciaie) { $nsmgceoqaqogqmuw .= sprintf($ysecigwmacqymaku, sprintf(__('Relation with %s', PR__MDL__RELATION), $this->mauewaeoemuusikw($kooyscwkscsogysg)->label), $qkweikswegyciaie); } } if ($nsmgceoqaqogqmuw) { printf($this->eqkimaoyqiaoyoqa(), $nsmgceoqaqogqmuw); } } public function eqkimaoyqiaoyoqa() : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); return $swqimwqeweekeusq->uuccukgasskgimsq('table', ['class' => 'form-table'], $swqimwqeweekeusq->uuccukgasskgimsq('tbody', [], '%s')); } public function mauewaeoemuusikw($muowmkwsoauukiag) { return $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->imgymusqgccqsqqq($muowmkwsoauukiag); } public function goqmcwikekcgyokg() : array { return []; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if ($mcaisukqqyosuasi instanceof WP_Term) { $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } return $oammesyieqmwuwyi; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { return $gqgemcmoicmgaqie; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, bool $kiyaqqoyagguscog = false) : array { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "{$iakkeikwceeomgyq}/([^/]+)/{$muowmkwsoauukiag}/{$aaokuekaimigoyue}/"; $gqgemcmoicmgaqie = "index.php?taxonomy={$muowmkwsoauukiag}&{$yygmoeguaqyumuui->target}={$iakkeikwceeomgyq}&{$yygmoeguaqyumuui->metakey}={$gwiwsycaaqgwmewg}&{$yygmoeguaqyumuui->side}=\$matches[1]"; if ($kiyaqqoyagguscog) { global $wp_rewrite; $qucissyoweagooww = $wp_rewrite->pagination_base; $ucccueqywigcukcc .= "{$qucissyoweagooww}/?([0-9]{1,})/"; $gqgemcmoicmgaqie .= "&paged=\$matches[2]"; } $ucccueqywigcukcc .= '?$'; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, 'top']; } public function ugmceccgwaaaigiy(Setting $amakmumgguksgmum) : array { $seyqqsmuaiegkeeq = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->ciugwooasaqcywas([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); return [$amakmumgguksgmum->qqmgmgasauucoago(self::uwoqgmuqskqcqsag())->omsoosuoikgueyke()->gswweykyogmsyawy(__('Items', PR__MDL__RELATION))->mkksewyosgeumwsa($amakmumgguksgmum->wcwmusaouiqaqeww(Constants::iccwcygaeqmomooo)->gswweykyogmsyawy(__('Enable', PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->wcwmusaouiqaqeww(Constants::iycuamekoueuemoy)->gswweykyogmsyawy(__('Inverse Side', PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->quaegkgkucwyeiqg(Constants::mkousmkiawwousws)->gswweykyogmsyawy(__('Image', PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::NAME)->gswweykyogmsyawy(__('Admin Panel Name', PR__MDL__RELATION))->gucwmccyimoagwcm(sprintf("%s: %s", $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(__('Notice', PR__MDL__RELATION)), __('Will be used as slug too.', PR__MDL__RELATION))))->mkksewyosgeumwsa($amakmumgguksgmum->mccagaqeagiikkec(Constants::igecewwoemccgwsq)->gswweykyogmsyawy(__('Origin', PR__MDL__RELATION))->acauweqyyugwisqc($seyqqsmuaiegkeeq)->eumecwmqmukqgyea())->mkksewyosgeumwsa($amakmumgguksgmum->mccagaqeagiikkec(Constants::gygsikewooaciecc)->gswweykyogmsyawy(__('Destination', PR__MDL__RELATION))->acauweqyyugwisqc($seyqqsmuaiegkeeq)->eumecwmqmukqgyea())->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::qgwwgcuuykqagamk)->gswweykyogmsyawy(__('Origin Title', PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::uyqakoogaigomqmq)->gswweykyogmsyawy(__('Destination Title', PR__MDL__RELATION)))]; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return TermManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } }
