<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716d9a70a639             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Relation\Manager\PostManager; use Pmpr\Module\Relation\Manager\TermManager; use WP_Post; use WP_Term; class Ajax extends Container { const amccaiqeuogmuceu = Relation::esgskoesuqecuuwg . "\163\145\141\x72\143\150"; const iyasaywiokaugmoo = Relation::esgskoesuqecuuwg . "\165\160\x64\141\164\x65\x5f\x6d\145\164\141"; const mqguesggycecgcqe = Relation::esgskoesuqecuuwg . "\x72\145\x6d\x6f\x76\145\x5f\155\x65\164\141"; const uoyscomuyuwuomew = "\160\x65\x72\163\x69\x73\x74\137\x6d\x65\164\141\137\164\x6f\x5f\x72\x65\x6c\141\164\x69\x6f\x6e"; const myikkigscysoykgy = [Constants::ukgaqugcgiggoekw => self::uoyscomuyuwuomew, Constants::yayciqueeakqwese => self::amccaiqeuogmuceu, Constants::UPDATE => self::iyasaywiokaugmoo, Constants::yaeeqsosiaimuqma => self::mqguesggycecgcqe]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::amccaiqeuogmuceu, [$this, "\x71\167\143\155\165\145\x61\x75\163\161\x67\x69\167\151\x67\x79"])->koaegcswmcqsiykq(self::iyasaywiokaugmoo, [$this, "\x75\x70\x64\x61\x74\145"])->koaegcswmcqsiykq(self::mqguesggycecgcqe, [$this, "\162\145\155\x6f\x76\145"])->koaegcswmcqsiykq(self::uoyscomuyuwuomew, [$this, "\x70\145\x72\x73\x69\x73\x74"]); } public function persist() { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); if ($this->woaqsosmiukqsuoy($icwicymcioeyeyek, self::uoyscomuyuwuomew)) { $oikmcqwkmsyiicqs = $icwicymcioeyeyek[Constants::ENTITY]; $icwicymcioeyeyek = $this->ksicesygeskkewug(Constants::ukgaqugcgiggoekw, $oikmcqwkmsyiicqs, $icwicymcioeyeyek[Constants::iockmgiyoygcswog], $icwicymcioeyeyek["\155\145\x74\141\x4b\x65\171"], $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]); $this->kycqsyyakyocmeso($icwicymcioeyeyek, $this->sgmeusiqkacigqqq($oikmcqwkmsyiicqs, $icwicymcioeyeyek), __("\101\x6c\x72\x65\x61\144\171\x20\x61\144\144\145\x64", PR__MDL__RELATION)); } } public function qwcmueausqgiwigy() { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!$gkyciwoiiisgywcs->uuegkqwagymmusiy($icwicymcioeyeyek, [Constants::uqgcmmosieyimiku, Constants::ciyoccqkiamemcmm, Constants::iockmgiyoygcswog, Constants::mgsccwumkcawaqcy, Constants::ENTITY]) && self::amccaiqeuogmuceu === $icwicymcioeyeyek[Constants::uqgcmmosieyimiku]) { $eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]; $miowmmgaiagcuyoo = $icwicymcioeyeyek[Constants::iockmgiyoygcswog]; $ccamueccusigaaio = $icwicymcioeyeyek[Constants::mgsccwumkcawaqcy]; $oikmcqwkmsyiicqs = $icwicymcioeyeyek[Constants::ENTITY]; $yemgmmgogcwccuky = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::ccyeycyyykwuymsy, []); $yemgmmgogcwccuky[] = $miowmmgaiagcuyoo; if (Constants::mswoacegomcucaik === $oikmcqwkmsyiicqs) { $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->kmegaqgyciwwmegk($eqgoocgaqwqcimie, $ccamueccusigaaio, [Constants::kcaoouwiygwwmiok => $yemgmmgogcwccuky, Constants::gikuasuikwemyqoq => [Constants::wmmucsiyiyusmssm]]); } else { $oammesyieqmwuwyi = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->igkcwemyysqkwuuy($eqgoocgaqwqcimie, $ccamueccusigaaio, [Constants::ccyeycyyykwuymsy => $yemgmmgogcwccuky]); } $this->caokeucsksukesyo()->giiecckwoyiawoyy()->uaggqsoeugksgooc($this->wgciqaauaiemimqq($oammesyieqmwuwyi)); } else { $this->caokeucsksukesyo()->giiecckwoyiawoyy()->uaggqsoeugksgooc($this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy(__("\124\x72\171\x20\x6d\157\162\x65\40\x77\157\x72\144", PR__MDL__RELATION))); } } public function update() { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); if ($this->woaqsosmiukqsuoy($icwicymcioeyeyek, self::iyasaywiokaugmoo)) { $icwicymcioeyeyek = $this->ksicesygeskkewug(Constants::UPDATE, $icwicymcioeyeyek[Constants::ENTITY], $icwicymcioeyeyek[Constants::iockmgiyoygcswog], $icwicymcioeyeyek["\155\145\164\x61\x4b\x65\x79"], $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]); $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->kycqsyyakyocmeso($icwicymcioeyeyek, $gosmywauqawmcyga->mumsqekeeuykyemy([Constants::ssmskyqgcmeiayco => __("\123\165\x63\143\145\x73\163\146\x75\154\154\171\x20\165\x70\144\141\164\x65\144\56", PR__MDL__RELATION), Constants::squoamkioomemiyi => Constants::ckcawaoawwioqecq]), $gosmywauqawmcyga->mumsqekeeuykyemy(__("\123\157\155\x65\164\150\x69\x6e\147\x20\x69\x73\x20\x77\x72\157\156\x67\40\x69\x6e\40\165\x70\144\x61\164\x65\40\x70\x72\x6f\x63\145\163\163\x2c\40\160\x6c\145\x61\163\145\40\164\162\x79\x20\x6c\x61\x74\145\x72\x2e", PR__MDL__RELATION))); } } public function remove() { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); if ($this->woaqsosmiukqsuoy($icwicymcioeyeyek, self::mqguesggycecgcqe)) { $icwicymcioeyeyek = $this->ksicesygeskkewug(Constants::yaeeqsosiaimuqma, $icwicymcioeyeyek[Constants::ENTITY], $icwicymcioeyeyek[Constants::iockmgiyoygcswog], $icwicymcioeyeyek["\155\145\164\x61\113\x65\x79"], $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]); $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->kycqsyyakyocmeso($icwicymcioeyeyek, $gosmywauqawmcyga->mumsqekeeuykyemy([Constants::ssmskyqgcmeiayco => __("\x53\165\143\143\x65\163\x73\146\165\x6c\154\x79\x20\x64\145\x6c\145\x74\145\x64\x2e", PR__MDL__RELATION), Constants::squoamkioomemiyi => Constants::ckcawaoawwioqecq]), $gosmywauqawmcyga->mumsqekeeuykyemy(__("\x53\157\155\x65\x74\x68\151\156\147\x20\151\163\40\x77\162\x6f\156\x67\40\151\156\x20\144\145\x6c\145\164\145\x20\160\x72\x6f\x63\145\163\163\54\40\160\154\145\x61\x73\x65\40\164\162\171\x20\154\141\x74\145\162\56", PR__MDL__RELATION))); } } public function seyyiqmgwymyumoq() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(); } public function woaqsosmiukqsuoy($icwicymcioeyeyek, $aiamqeawckcsuaou) : bool { return isset($icwicymcioeyeyek[Constants::uqgcmmosieyimiku], $icwicymcioeyeyek[Constants::iockmgiyoygcswog], $icwicymcioeyeyek["\155\x65\x74\141\113\145\x79"], $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm], $icwicymcioeyeyek[Constants::ENTITY]) && $aiamqeawckcsuaou === $icwicymcioeyeyek[Constants::uqgcmmosieyimiku]; } public function wgciqaauaiemimqq($oammesyieqmwuwyi) : array { $aqykuigiuwmmcieu = []; if ($oammesyieqmwuwyi) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($igqsaukqcqscimok instanceof WP_Post) { $aokagokqyuysuksm = $seumokooiykcomco->iooowgsqoyqseyuu($igqsaukqcqscimok); $aqykuigiuwmmcieu[$aokagokqyuysuksm] = [Constants::uissasisiuymwsmu => $seumokooiykcomco->qcgakseyaikigqco($igqsaukqcqscimok), Constants::ciyoccqkiamemcmm => $aokagokqyuysuksm]; } else { if ($igqsaukqcqscimok instanceof WP_Term) { $aokagokqyuysuksm = $aoskwucuugeuaeus->iooowgsqoyqseyuu($oammesyieqmwuwyi); $aqykuigiuwmmcieu[$igqsaukqcqscimok->term_id] = [Constants::uissasisiuymwsmu => $aoskwucuugeuaeus->qcgakseyaikigqco($aokagokqyuysuksm), Constants::ciyoccqkiamemcmm => $aokagokqyuysuksm]; } } } } return $aqykuigiuwmmcieu; } public function sgmeusiqkacigqqq($oikmcqwkmsyiicqs, $icwicymcioeyeyek) : ?string { $aokagokqyuysuksm = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, Constants::gouqcwikiiygyasc); if (Constants::mswoacegomcucaik === $oikmcqwkmsyiicqs) { $igqsaukqcqscimok = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($aokagokqyuysuksm); } else { $igqsaukqcqscimok = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->get($aokagokqyuysuksm); } return $this->iuygowkemiiwqmiw("\x65\156\x74\x69\x74\171\57\155\145\164\x61\137\x62\x6f\170\x5f\151\x74\x65\x6d", [Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok, "\155\x6f\166\x65\137\x68\141\156\x64\154\x65" => $this->cmeuowkiswiuocqa(), Constants::iuqumwggccmcuyem => $icwicymcioeyeyek[Constants::iuqumwggccmcuyem], "\x72\145\x6d\x6f\x76\145\137\155\x6f\x64\141\x6c" => $this->amsaeiymyieqksqy($aokagokqyuysuksm)]); } public function kycqsyyakyocmeso($icwicymcioeyeyek, $iwgcmyqkkmukqoyg, $ykwokmkkyoykccgk) { if ($icwicymcioeyeyek) { $this->caokeucsksukesyo()->giiecckwoyiawoyy()->uaggqsoeugksgooc($iwgcmyqkkmukqoyg); } else { $this->caokeucsksukesyo()->giiecckwoyiawoyy()->uaggqsoeugksgooc($ykwokmkkyoykccgk, false); } } private function ksicesygeskkewug($aiamqeawckcsuaou, $oikmcqwkmsyiicqs, $miowmmgaiagcuyoo, $gwiwsycaaqgwmewg, $eqgoocgaqwqcimie) { try { $egkyssmuqcwaciya = PostManager::class; if (Constants::gmmygyiecgmggaam === $oikmcqwkmsyiicqs) { $egkyssmuqcwaciya = TermManager::class; } $icwicymcioeyeyek = call_user_func([$egkyssmuqcwaciya, $aiamqeawckcsuaou], $miowmmgaiagcuyoo, $gwiwsycaaqgwmewg, $eqgoocgaqwqcimie); } catch (Exception $wgaoewqkwgomoaai) { $icwicymcioeyeyek = null; $this->caokeucsksukesyo()->giiecckwoyiawoyy()->uaggqsoeugksgooc($this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy([Constants::ssmskyqgcmeiayco => $wgaoewqkwgomoaai->sagusgigmkeysock(), Constants::squoamkioomemiyi => Constants::imkacwmiuiykyuim]), false); } return $icwicymcioeyeyek; } }
