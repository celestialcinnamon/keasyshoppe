<?
class Product
{
    public $name;
    public $description;
    public $specs; # JSON string
    public $customAttributes; # JSON string
    public $mainImage; # path to the main image
    public $secondaryImages; # array of paths to secondary images
    public $category;
    public $keywords; # JSON string

    public function __construct(string $name)
    {
        $this->name = $name;
    }

}


?>