<?php

class TermsAndConditionsPage extends Page
{
    private static $icon = "termsandconditions/images/treeicons/TermsAndConditionsPage";

    public function canCreate($member = null)
    {
        return TermsAndConditionsPage::get()->count ? false : true;
    }
}

class TermsAndConditionsPageController extends Page_Controller/*
### @@@@ START UPGRADE REQUIRED @@@@ ###
FIND: _Controller extends Page_Controller
NOTE: Remove the underscore in your classname - check all references! 
### @@@@ END UPGRADE REQUIRED @@@@ ###
*/
{
}