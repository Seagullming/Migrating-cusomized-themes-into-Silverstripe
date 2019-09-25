<?php

namespace {

    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Forms\TextField;

    class Generic extends Page
    {
        private static $db = [
            "SubTitle"=>"Text",
            "ParaOneTitle"=>"Text",
            "ParaOneContent"=>"Text",
            "ParaTwoTitle"=>"Text",
            "ParaTwoContent"=>"Text",
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->addFieldsToTab("Root.Main", $Title = TextField::create("Title"));
            $fields->addFieldsToTab("Root.Main", $SubTitle = TextField::create("SubTitle"),"Content");

            $fields->addFieldsToTab("Root.Content", $ParaOneTitle = TextField::create("ParaOneTitle"));
            $fields->addFieldsToTab("Root.Content", $ParaOneContent = TextareaField::create("ParaOneContent"));

            $fields->addFieldsToTab("Root.Content", $ParaTwoTitle = TextField::create("ParaTwoTitle"));
            $fields->addFieldsToTab("Root.Content", $ParaTwoContent = TextareaField::create("ParaTwoContent"));
            
            return $fields;
        }
     
    }
}
