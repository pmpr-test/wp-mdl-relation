<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b74ba1149             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Relation\Entity\Post; use Pmpr\Module\Relation\Manager\PostManager; class Hook extends Container { const ggsoiqkcasskkeae = "\160\x6f\163\164\x5f\137\x69\x6e\x5f\162\145\x6c\141\164\151\157\x6e"; public function wigskegsqequoeks() { $this->waqewsckuayqguos(Relation::esgskoesuqecuuwg . "\141\144\x64\137\144\x65\146\141\165\x6c\x74\x5f\x69\164\145\155\163", [$this, "\143\x79\x6b\171\153\x67\x65\171\x6d\x6b\x65\143\155\157\145\x6b"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(Relation::esgskoesuqecuuwg . "\147\x65\x74\137\160\x6f\163\x74\163", [$this, "\151\x79\x73\x73\147\157\151\167\x67\167\171\147\145\x61\x63\147"], 10, 4)->aqaqisyssqeomwom("\147\145\x74\137\x76\141\154\151\x64\x5f\162\x65\x6c\x61\x74\151\157\x6e\163", [$this, "\x73\167\147\145\x77\x61\157\x77\x6b\x77\x69\151\163\153\x6b\x63"], 10, 2)->aqaqisyssqeomwom("\x67\x65\164\x5f\160\x6f\x73\x74\163\x5f\141\x72\147\163", [$this, "\155\163\171\171\161\x61\x69\143\157\145\161\161\143\157\155\x63"], 10, 2)->aqaqisyssqeomwom(Relation::esgskoesuqecuuwg . "\x67\x65\164\137\x70\x6f\163\164\x5f\142\x79\137\x6d\145\x74\141\153\x65\x79", [$this, "\153\x6f\167\145\145\x73\x63\155\x69\x63\157\x6b\165\x6f\x6f\153"], 10, 2); } public function koweescmicokuook($ayegqaqygsqsmews, $gwiwsycaaqgwmewg = null) { if ($gwiwsycaaqgwmewg) { $ayegqaqygsqsmews = $this->ugcmciwwskkeimse(Post::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); } return $ayegqaqygsqsmews; } public function cykykgeymkecmoek($oammesyieqmwuwyi = []) { if ($oammesyieqmwuwyi) { $uwomkgseoiegeume = []; $amakmumgguksgmum = Post::uwoqgmuqskqcqsag(); $cmaccwokqweqweqi = $this->iucouyoswwsakqyc($amakmumgguksgmum); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) { $kcguiwgkqgcuyiku = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::gygsikewooaciecc); $iakkeikwceeomgyq = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::igecewwoemccgwsq); $gwiwsycaaqgwmewg = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::moegqsqomeumiomk); if (!isset($cmaccwokqweqweqi[$gwiwsycaaqgwmewg]) && $uusmaiomayssaecw && $kcguiwgkqgcuyiku && $iakkeikwceeomgyq) { $uwomkgseoiegeume[] = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($igqsaukqcqscimok, [Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::iccwcygaeqmomooo => Constants::ON, Constants::iycuamekoueuemoy => true]); } } if ($uwomkgseoiegeume) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($amakmumgguksgmum, array_values(array_merge($cmaccwokqweqweqi, $uwomkgseoiegeume))); } } } public function iyssgoiwgwygeacg($wyoiwuqokyeeuguk, $mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { if ($mcaisukqqyosuasi && $ccamueccusigaaio && $gwiwsycaaqgwmewg) { $wyoiwuqokyeeuguk = PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } return $wyoiwuqokyeeuguk; } public function msyyqaicoeqqcomc($ywmkwiwkosakssii = []) { if (isset($ywmkwiwkosakssii[self::ggsoiqkcasskkeae]) && !isset($ywmkwiwkosakssii[Constants::eqomgewoayseioos])) { $ayegqaqygsqsmews = $ywmkwiwkosakssii[self::ggsoiqkcasskkeae]; if ($ayegqaqygsqsmews) { [$iakkeikwceeomgyq, $oammesyieqmwuwyi] = PostManager::awiyyawscoigiuae($ayegqaqygsqsmews, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $ywmkwiwkosakssii[Constants::eqomgewoayseioos] = $oammesyieqmwuwyi; $ywmkwiwkosakssii[Constants::kcaoouwiygwwmiok] = $iakkeikwceeomgyq; unset($ywmkwiwkosakssii[self::ggsoiqkcasskkeae]); } } return $ywmkwiwkosakssii; } public function swgewaowkwiiskkc($gsgwomokyuwmqqkg = [], $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qayiiikwusguoask => null, Constants::mgsccwumkcawaqcy => Post::uwoqgmuqskqcqsag(), Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); return $this->gyykaeouuskoqiye($ywmkwiwkosakssii[Constants::mgsccwumkcawaqcy], $ywmkwiwkosakssii[Constants::qayiiikwusguoask], $ywmkwiwkosakssii[Constants::aisguagukaewucii]); } }
