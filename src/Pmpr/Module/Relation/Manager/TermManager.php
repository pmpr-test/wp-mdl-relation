<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec2680ee5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Manager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Relation\Entity\Term; use Pmpr\Module\Relation\Hook; class TermManager extends Manager { public static function awiyyawscoigiuae($gwiwsycaaqgwmewg) : array { $ksaameoqigiaoigg = []; $igqsaukqcqscimok = Hook::symcgieuakksimmu()->ugcmciwwskkeimse(Term::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!($igqsaukqcqscimok && isset($igqsaukqcqscimok->{Constants::igecewwoemccgwsq}))) { goto mugqyyeayeyggqqk; } $iakkeikwceeomgyq = $igqsaukqcqscimok->{Constants::igecewwoemccgwsq}; $ksaameoqigiaoigg = [$iakkeikwceeomgyq, self::iwgqamekocwaigci()->kckogqkiycqeumoa()->qgisekcaywsmigga($gwiwsycaaqgwmewg, $iakkeikwceeomgyq)]; mugqyyeayeyggqqk: return $ksaameoqigiaoigg; } public static function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = self::omaawkkwwyesqwcc($ywmkwiwkosakssii); $mcaisukqqyosuasi = self::iwgqamekocwaigci()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($mcaisukqqyosuasi); $soqqyqgmmuigoqiy = self::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); $icwicymcioeyeyek = []; if (!$soqqyqgmmuigoqiy) { goto oomguqikqokqwgku; } $soqqyqgmmuigoqiy = self::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->sagscekukkacqaaw($soqqyqgmmuigoqiy, Constants::iuqumwggccmcuyem); $icwicymcioeyeyek = array_keys($soqqyqgmmuigoqiy); if (!(Constants::ckmqoekmugkggeym === $ywmkwiwkosakssii[Constants::aisguagukaewucii])) { goto acsqgiuageaasiyy; } $icwicymcioeyeyek = self::iwgqamekocwaigci()->kckogqkiycqeumoa()->ciugwooasaqcywas($ccamueccusigaaio, [Constants::ackcaikowcokggsc => $icwicymcioeyeyek]); acsqgiuageaasiyy: oomguqikqokqwgku: return $icwicymcioeyeyek; } protected static function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy) { self::haqswuugoswcyoia()->kckogqkiycqeumoa()->giwmekimakcaawsq($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); } protected static function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { self::haqswuugoswcyoia()->kckogqkiycqeumoa()->ksmqawcowkmegigw($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek); return $mcaisukqqyosuasi; } protected static function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg) { return self::iwgqamekocwaigci()->kckogqkiycqeumoa()->igawqaomowicuayw($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, true); } }
