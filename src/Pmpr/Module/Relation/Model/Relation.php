<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c839ce1dc83             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Model; class Relation extends Model { const mcoomcioicmuwoou = 'record_id'; const ueqckuesyikyymsg = 'bilateral'; public function register() { $this->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->guiaswksukmgageq(__('Relation', PR__MDL__RELATION))->muuwuqssqkaieqge(__('Relations', PR__MDL__RELATION)); $this->ecmiqywsauuoccwo(Constants::ukwaycqmyyuekwqg)->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::awysmmukegasimmq)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__('Title', PR__MDL__RELATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::ouywiegeiyuaaawo)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__('Slug', PR__MDL__RELATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::squoamkioomemiyi)->acokiqqgsmoqaeyu()->kesomeowemmyygey(1, Constants::uouymeyqasaeckso, __('Post Type', PR__MDL__DOMAIN_MANAGER))->gswweykyogmsyawy(__('Type', PR__MDL__RELATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->kesomeowemmyygey(1, Constants::eqewsqmqmsiocaeg, __('Active', PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(2, Constants::uucoeqmmykkwsmqc, __('Inactive', PR__MDL__DOMAIN_MANAGER))->gswweykyogmsyawy(__('Status', PR__MDL__RELATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::igecewwoemccgwsq)->gswweykyogmsyawy(__('Origin', PR__MDL__RELATION))->iwwmociiuayuwssq([$this, 'igmgyywoawcgmkoq']))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::gygsikewooaciecc)->gswweykyogmsyawy(__('Destination', PR__MDL__RELATION))->iwwmociiuayuwssq([$this, 'igmgyywoawcgmkoq']))->cquokmemekqqywgi($eqwoegegiamegqsm->omkueasmegecueyk(self::ueqckuesyikyymsg)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__('Bilateral Relation', PR__MDL__RELATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::mcoomcioicmuwoou)->acokiqqgsmoqaeyu()->uwmyqckcyamwaiww(Record::class)->ckgquisaimmgwuyu()->gswweykyogmsyawy(__('Records', PR__MDL__RELATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->gswweykyogmsyawy(__('Created At', PR__MDL__RELATION))->qcqeqimisiisswky()); parent::uwmqacgewuauagai(); } public function aoqwywcqmoqaukkq() { $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->uouyygwcgsmygaee(Constants::qescuiwgsyuikume))->mkksewyosgeumwsa($uuyucgkyusckoaeq->uouyygwcgsmygaee(Constants::ouywiegeiyuaaawo)->kqqqugemmqagucuq())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::squoamkioomemiyi))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::ciywsqoeiymemsys))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::igecewwoemccgwsq)->acauweqyyugwisqc($sciomagaqmgggsiu))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::gygsikewooaciecc)->acauweqyyugwisqc($sciomagaqmgggsiu))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::ueqckuesyikyymsg)); } public function igmgyywoawcgmkoq($eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw($eqgoocgaqwqcimie); } return $eqgoocgaqwqcimie; } }
