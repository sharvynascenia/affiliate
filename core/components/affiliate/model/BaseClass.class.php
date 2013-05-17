<?
/**
 * Class affiliate
 *
 *
 */
namespace BaseClass;

class BaseClass{

    public $modx;

    function __construct(\modx &$modx){
       $this->modx = & $modx;

        $path = MODX_CORE_PATH . 'components/affiliate/';
        $this->modx->addPackage('affiliate',$path . 'model/','affiliate_');

        $this->modx->lexicon->load('affiliate:default');

    }

}