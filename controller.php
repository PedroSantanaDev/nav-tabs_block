<?php  namespace Application\Block\NavTabsBlock;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Core;
use Concrete\Core\Editor\LinkAbstractor;

class Controller extends BlockController
{
    public $helpers = array('form');
    public $btFieldsRequired = array();
    protected $btExportFileColumns = array();
    protected $btExportPageColumns = array();
    protected $btTable = 'btNavTabsBlock';
    protected $btInterfaceWidth = 400;
    protected $btInterfaceHeight = 500;
    protected $btIgnorePageThemeGridFrameworkContainer = false;
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;
    protected $btCacheBlockOutputLifetime = 0;
    protected $pkg = false;
    
    public function getBlockTypeDescription()
    {
        return t("Bootstrap Navigation Tabs C5 Block. ");
    }

    public function getBlockTypeName()
    {
        return t("Nav Tabs Block");
    }

    public function getSearchableContent()
    {
        $content = array();
        $content[] = $this->fieldOne;
        $content[] = $this->fieldOneContent;
        $content[] = $this->fieldTwo;
        $content[] = $this->fieldTwoContent;
        $content[] = $this->fieldThree;
        $content[] = $this->fieldThreeContent;
        $content[] = $this->fieldFour;
        $content[] = $this->fieldFourContent;
        $content[] = $this->fieldFive;
        $content[] = $this->fieldFiveContent;
        return implode(" ", $content);
    }

    public function view()
    {
        $this->set('fieldOneContent', LinkAbstractor::translateFrom($this->fieldOneContent));
        $this->set('fieldTwoContent', LinkAbstractor::translateFrom($this->fieldTwoContent));
        $this->set('fieldThreeContent', LinkAbstractor::translateFrom($this->fieldThreeContent));
        $this->set('fieldFourContent', LinkAbstractor::translateFrom($this->fieldFourContent));
        $this->set('fieldFiveContent', LinkAbstractor::translateFrom($this->fieldFiveContent));
    }

    public function add()
    {
        $this->addEdit();
    }

    public function edit()
    {
        $this->addEdit();
        
        $this->set('fieldOneContent', LinkAbstractor::translateFromEditMode($this->fieldOneContent));
        
        $this->set('fieldTwoContent', LinkAbstractor::translateFromEditMode($this->fieldTwoContent));
        
        $this->set('fieldThreeContent', LinkAbstractor::translateFromEditMode($this->fieldThreeContent));
        
        $this->set('fieldFourContent', LinkAbstractor::translateFromEditMode($this->fieldFourContent));
        
        $this->set('fieldFiveContent', LinkAbstractor::translateFromEditMode($this->fieldFiveContent));
    }

    protected function addEdit()
    {
        $this->requireAsset('redactor');
        $this->requireAsset('core/file-manager');
        $this->set('btFieldsRequired', $this->btFieldsRequired);
        $this->set('identifier_getString', Core::make('helper/validation/identifier')->getString(18));
    }

    public function save($args)
    {
        $args['fieldOneContent'] = LinkAbstractor::translateTo($args['fieldOneContent']);
        $args['fieldTwoContent'] = LinkAbstractor::translateTo($args['fieldTwoContent']);
        $args['fieldThreeContent'] = LinkAbstractor::translateTo($args['fieldThreeContent']);
        $args['fieldFourContent'] = LinkAbstractor::translateTo($args['fieldFourContent']);
        $args['fieldFiveContent'] = LinkAbstractor::translateTo($args['fieldFiveContent']);
        parent::save($args);
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("fieldOne", $this->btFieldsRequired) && (trim($args["fieldOne"]) == "")) {
            $e->add(t("The %s field is required.", t("Field #1 Title")));
        }
        if (in_array("fieldOneContent", $this->btFieldsRequired) && (trim($args["fieldOneContent"]) == "")) {
            $e->add(t("The %s field is required.", t("Field #1 Content")));
        }
        if (in_array("fieldTwo", $this->btFieldsRequired) && (trim($args["fieldTwo"]) == "")) {
            $e->add(t("The %s field is required.", t("Field #2 Title")));
        }
        if (in_array("fieldTwoContent", $this->btFieldsRequired) && (trim($args["fieldTwoContent"]) == "")) {
            $e->add(t("The %s field is required.", t("Field #2 Content")));
        }
        if (in_array("fieldThree", $this->btFieldsRequired) && (trim($args["fieldThree"]) == "")) {
            $e->add(t("The %s field is required.", t("Field #3 Title")));
        }
        if (in_array("fieldThreeContent", $this->btFieldsRequired) && (trim($args["fieldThreeContent"]) == "")) {
            $e->add(t("The %s field is required.", t("Field #3 Content")));
        }
        if (in_array("fieldFour", $this->btFieldsRequired) && (trim($args["fieldFour"]) == "")) {
            $e->add(t("The %s field is required.", t("Field #4 Title")));
        }
        if (in_array("fieldFourContent", $this->btFieldsRequired) && (trim($args["fieldFourContent"]) == "")) {
            $e->add(t("The %s field is required.", t("Field #4 Content")));
        }
        if (in_array("fieldFive", $this->btFieldsRequired) && (trim($args["fieldFive"]) == "")) {
            $e->add(t("The %s field is required.", t("Field #5 Title")));
        }
        if (in_array("fieldFiveContent", $this->btFieldsRequired) && (trim($args["fieldFiveContent"]) == "")) {
            $e->add(t("The %s field is required.", t("Field #5 Content")));
        }
        return $e;
    }

    public function composer()
    {
        $this->edit();
    }
}