<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec2680ee5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Manager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Relation\Entity\Post; use Pmpr\Module\Relation\Hook; use WP_Post; class PostManager extends Manager { public static function awiyyawscoigiuae($gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; $ayegqaqygsqsmews = Hook::symcgieuakksimmu()->ugcmciwwskkeimse(Post::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!($ayegqaqygsqsmews && isset($ayegqaqygsqsmews->{Constants::igecewwoemccgwsq}))) { goto wgewmqieuamsoayy; } $useksmwkuswkwcqg = $ayegqaqygsqsmews->{Constants::igecewwoemccgwsq}; $ywmkwiwkosakssii[Constants::osocaqqumyuooqyo] = $gwiwsycaaqgwmewg; $ywmkwiwkosakssii[Constants::iwmgegikocuwggua] = null; $ywmkwiwkosakssii[Constants::gikuasuikwemyqoq] = Constants::wmmucsiyiyusmssm; $oammesyieqmwuwyi = [$useksmwkuswkwcqg, self::iwgqamekocwaigci()->ayueggmoqeeukqmq()->ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii)]; wgewmqieuamsoayy: return $oammesyieqmwuwyi; } public static function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = self::omaawkkwwyesqwcc($ywmkwiwkosakssii); $soqqyqgmmuigoqiy = self::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); $icwicymcioeyeyek = []; if (!$soqqyqgmmuigoqiy) { goto ueigkucgaucgeimc; } $soqqyqgmmuigoqiy = self::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->sagscekukkacqaaw($soqqyqgmmuigoqiy, Constants::iuqumwggccmcuyem, $ywmkwiwkosakssii[Constants::cgiswgcumueqgcmw]); $icwicymcioeyeyek = array_keys($soqqyqgmmuigoqiy); if (!(Constants::ckmqoekmugkggeym === $ywmkwiwkosakssii[Constants::aisguagukaewucii])) { goto kqgcyoscsusgoaqi; } $icwicymcioeyeyek = self::iwgqamekocwaigci()->ayueggmoqeeukqmq()->ciugwooasaqcywas($ccamueccusigaaio, [Constants::gqiasegggowomgie => Constants::eqomgewoayseioos, Constants::eqomgewoayseioos => $icwicymcioeyeyek, "\x73\165\160\x70\x72\145\163\x73\137\x66\x69\x6c\164\x65\x72\163" => true]); kqgcyoscsusgoaqi: ueigkucgaucgeimc: return $icwicymcioeyeyek; } protected static function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy) { self::iwgqamekocwaigci()->ayueggmoqeeukqmq()->giwmekimakcaawsq($gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy, $mcaisukqqyosuasi); } protected static function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { self::haqswuugoswcyoia()->ayueggmoqeeukqmq()->ksmqawcowkmegigw($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek); return $mcaisukqqyosuasi; } protected static function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg) { return self::iwgqamekocwaigci()->ayueggmoqeeukqmq()->igawqaomowicuayw($gwiwsycaaqgwmewg, $mcaisukqqyosuasi, true); } }
