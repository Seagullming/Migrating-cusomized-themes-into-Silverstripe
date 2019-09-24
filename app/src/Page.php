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
            "Subtitle" => "Text",
                    
            "IconTitle" => "Text",
            "IconContent" => "Text",
            "IconOne" => "Enum('fa-gem,fa-heart,solid fa-code','fa-heart')",
            "IconTwo" => "Enum('fa-gem,fa-heart,solid fa-code','fa-heart')",
            "IconThree" => "Enum('fa-gem,fa-heart,solid fa-code','fa-heart')",

            "ImageTitleOne" => "Text",
            "ImageTitleTwo" => "Text",
            "ImageTitleThree" => "Text",

            "ImageParagrahOne" => "Text",
            "ImageParagrahTwo" => "Text",
            "ImageParagrahThree" => "Text",

            "FeatureTitle" => "Text",
            "FeatureSubtitle"=> "Text",

            "FeatureOneTitle" => "Text",
            "FeatureTwoTitle" => "Text",
            "FeatureThreeTitle" => "Text",
            "FeatureFourTitle" => "Text",
            "FeatureFiveTitle" => "Text",
            "FeatureSixTitle" => "Text",

            "FeatureOneContent" => "Text",
            "FeatureTwoContent" => "Text",
            "FeatureThreeContent" => "Text",
            "FeatureFourContent" => "Text",
            "FeatureFiveContent" => "Text",
            "FeatureSixContent" => "Text",

            "FooterTitle" => "Text",
            "FooterContent" => "Text",
        ];

        private static $has_one = [
            "ContentImageOne" => Image::class,
            "ContentImageTwo" => Image::class,
            "ContentImageThree" => Image::class
        ];

        private static $owns = [
            "ContentImageOne",
            "ContentImageTwo",
            "ContentImageThree"
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab("Root.Main", $Title = TextField::create("Title"),"Content");
            $fields->addFieldToTab("Root.Main", $subtitle = TextareaField::create("Subtitle"),"Content");
            $subtitle->setRightTitle("This text is shown on the banner image");

            //Icon Section
            $fields->addFieldToTab("Root.Icon", $IconTitle = TextareaField::create("IconTitle"));
            $fields->addFieldToTab("Root.Icon", $IconContent = TextareaField::create("IconContent"));
            $fields->addFieldToTab("Root.Icon", DropdownField::create("IconOne", "Icon One", singleton("Page")->dbObject("IconOne")->enumValues()));
            $fields->addFieldToTab("Root.Icon", DropdownField::create("IconTwo", "Icon Two", singleton("Page")->dbObject("IconTwo")->enumValues()));
            $fields->addFieldToTab("Root.Icon", DropdownField::create("IconThree", "Icon Three", singleton("Page")->dbObject("IconThree")->enumValues()));

            //Section to manage the content in the thrid part of pages with image
            $fields->addFieldToTab("Root.Image", $ImageTitleOne = TextareaField::create("ImageTitleOne"));
            $fields->addFieldToTab("Root.Image", $ImageParagrahOne = TextareaField::create("ImageParagrahOne"));
            $fields->addFieldToTab("Root.Image", UploadField::create("ContentImageOne"));
            $fields->addFieldToTab("Root.Image", $ImageTitleTwo = TextareaField::create("ImageTitleTwo"));
            $fields->addFieldToTab("Root.Image", $ImageParagrahTwo = TextareaField::create("ImageParagrahTwo"));
            $fields->addFieldToTab("Root.Image", UploadField::create("ContentImageTwo"));
            $fields->addFieldToTab("Root.Image", $ImageTitleThree = TextareaField::create("ImageTitleThree"));
            $fields->addFieldToTab("Root.Image", $ImageParagrahThree = TextareaField::create("ImageParagrahThree"));
            $fields->addFieldToTab("Root.Image", UploadField::create("ContentImageThree"));

            //Section to mange the Feature Session
            $fields->addFieldToTab("Root.Feature", $FeatureTitle = TextField::create("FeatureTitle"));
            $fields->addFieldToTab("Root.Feature", $FeatureSubtitle = TextareaField::create("FeatureSubtitle"));

            $fields->addFieldToTab('Root.Feature', $FeatureOneTitle = TextField::create("FeatureOneTitle"));
            $fields->addFieldToTab('Root.Feature', $FeatureOneContent = TextareaField::create("FeatureOneContent"));
            $fields->addFieldToTab('Root.Feature', $FeatureTwoTitle = TextField::create("FeatureTwoTitle"));
            $fields->addFieldToTab('Root.Feature', $FeatureTwoContent = TextareaField::create("FeatureTwoContent"));
            $fields->addFieldToTab('Root.Feature', $FeatureThreeTitle = TextField::create("FeatureThreeTitle"));
            $fields->addFieldToTab('Root.Feature', $FeatureThreeContent = TextareaField::create("FeatureThreeContent"));
            $fields->addFieldToTab('Root.Feature', $FeatureFourTitle = TextField::create("FeatureFourTitle"));
            $fields->addFieldToTab('Root.Feature', $FeatureFourContent = TextareaField::create("FeatureFourContent"));
            $fields->addFieldToTab('Root.Feature', $FeatureFiveTitle = TextField::create("FeatureFiveTitle"));
            $fields->addFieldToTab('Root.Feature', $FeatureFiveContent = TextareaField::create("FeatureFiveContent"));
            $fields->addFieldToTab('Root.Feature', $FeatureSixTitle = TextField::create("FeatureSixTitle"));
            $fields->addFieldToTab('Root.Feature', $FeatureSixContent = TextareaField::create("FeatureSixContent"));

            $fields->addFieldToTab('Root.Footer', $FooterTitle = TextField::create("FooterTitle"));
            $fields->addFieldToTab('Root.Footer', $FooterContent = TextField::create("FooterContent"));



            $fields->removeFieldFromTab("Root.Main", "Content");
            return $fields;
        }
    }
}
