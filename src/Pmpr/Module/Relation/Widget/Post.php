<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d46e79d321             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Widget; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Relation\Entity\Post as EntityPost; use Pmpr\Module\Relation\Manager\PostManager; use Pmpr\Common\Foundation\Widget; class Post extends Widget { const wmuqcowyusckkwwo = "\x61\x75\x74\157\x66\x69\x6c\154\x5f\142\171\x5f\164\141\170\x6f\x6e\x6f\155\151\x65\x73"; public function __construct() { parent::__construct(__("\x50\x6f\x73\164\40\122\145\x6c\141\164\151\x6f\156\x73", PR__MDL__RELATION), __("\104\x69\x73\160\x6c\x61\x79\40\x74\150\145\40\x72\x65\x6c\x61\x74\145\x64\x20\x70\x6f\163\x74\x73\56", PR__MDL__RELATION)); } public function ecwgiiuacoaokqkw() { $kuguwoaesuqsqysu = $this->ocksiywmkyaqseou("\x6d\x65\164\x61\144\x61\164\141\x5f\151\164\x65\155\x73", []); $gsgwomokyuwmqqkg = []; if ($gsoqsicuqagoqiko = EntityPost::symcgieuakksimmu()) { $gsgwomokyuwmqqkg = $gsoqsicuqagoqiko->gyykaeouuskoqiye($gsoqsicuqagoqiko::uwoqgmuqskqcqsag(), null, Constants::eoaiagsgqsmskugs); } $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\124\x69\164\154\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::ygyiacciqgemekwc)->gswweykyogmsyawy(__("\122\145\154\141\x74\151\157\156", PR__MDL__RELATION))->acauweqyyugwisqc($gsgwomokyuwmqqkg))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qiyqwyiiwykeccmo)->gswweykyogmsyawy(__("\x43\x6f\165\x6e\x74", PR__MDL__RELATION))->escqqisecooswqgo()->eyygsasuqmommkua(5))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::ckcuiukmyisueqeo)->gswweykyogmsyawy(__("\115\x65\164\141\x64\141\164\x61", PR__MDL__RELATION))->acauweqyyugwisqc($kuguwoaesuqsqysu)->oikgogcweiiaocka()->wywmmeyauqkeskeq(!empty($kuguwoaesuqsqysu)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::kcgwauqkqcyuwwgs)->gswweykyogmsyawy(__("\x52\x65\x6e\x64\x65\x72\40\x54\145\155\x70\154\x61\164\x65", PR__MDL__RELATION))->acauweqyyugwisqc([Constants::ugmwekegkosuuwii => __("\x4c\x69\163\164", PR__MDL__RELATION), Constants::ugsuecoyuqcamsac => __("\124\141\142\154\x65", PR__MDL__RELATION), Constants::iouekwycqkqiceea => __("\123\151\x6d\x70\154\x65\x20\x4c\x69\163\x74", PR__MDL__RELATION)])); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $wyoiwuqokyeeuguk = []; $meqocwsecsywiiqs = $owgumcsyqsamiemg[Constants::qescuiwgsyuikume]; $gaeqamemwmwsyukm = $owgumcsyqsamiemg[Constants::qiyqwyiiwykeccmo] ?? 5; if (($gwiwsycaaqgwmewg = $owgumcsyqsamiemg[Constants::ygyiacciqgemekwc] ?? 5) && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->cukiusasccucgwqc()) { $gcqseksiskwueksc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); $seauiwyeoycowegg = [Constants::goqgcigmiawyauai => $gaeqamemwmwsyukm, Constants::kcaoouwiygwwmiok => [$gcqseksiskwueksc]]; if ($gsoqsicuqagoqiko = EntityPost::symcgieuakksimmu()) { $ayegqaqygsqsmews = $gsoqsicuqagoqiko->ugcmciwwskkeimse($gsoqsicuqagoqiko::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!$meqocwsecsywiiqs) { $meqocwsecsywiiqs = $ayegqaqygsqsmews->{Constants::qgwwgcuuykqagamk}; } $wyoiwuqokyeeuguk = PostManager::get($gcqseksiskwueksc, $ayegqaqygsqsmews->{Constants::gygsikewooaciecc}, $gwiwsycaaqgwmewg, $seauiwyeoycowegg); } } return [Constants::qwumqqyuasyskkkc => $wyoiwuqokyeeuguk, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ckcuiukmyisueqeo => $owgumcsyqsamiemg[Constants::ckcuiukmyisueqeo] ?? '', Constants::okciuaikiyaecwmy => $owgumcsyqsamiemg[Constants::kcgwauqkqcyuwwgs] ?? Constants::ugmwekegkosuuwii]; } }
