<?php

namespace {

    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Assets\Image;
    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\Forms\DropdownField;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Forms\TextField;

class Page extends SiteTree
    {
        private static $db = [
            "Subtitle"=>"Text",
            "IconOne"=>"Enum('fa-gem,fa-heart,solid fa-code','fa-heart')"
        ];

        private static $has_one = [
            "ContentImageOne"=>Image::class
        ];

        private static $owns = [
            "ContentImageOne"
        ];

        public function getCMSFields()
        {
         $fields = parent::getCMSFields();
         $fields->addFieldToTab("Root.Main",$subtitle = TextareaField::create("Subtitle"),"Content");
         $fields->addFieldToTab("Root.Main",DropdownField::create("IconOne","Icon One",singleton("Page")->dbObject("IconOne")->enumValues()),"Content");
         $subtitle->setRightTitle("This text is shown on the banner image");

         $fields->addFieldToTab("Root.Main",UploadField::create("ContentImageOne"),"Content");
         $fields->removeFieldFromTab("Root.Main","Content");
         return $fields;
        }
    }
}
