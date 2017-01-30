<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24.01.17
 * Time: 11:42
 */
namespace Magecom\Learning\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    protected $_itemFactory;

    public function __construct(\Magecom\Learning\Model\ItemFactory $itemFactory)
    {
        $this->_itemFactory = $itemFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $data = [
            ['title' => "Sunny",
                'content' => "Sunny is not a funny,but she's shiny, meow",
                'url_key' => "Url_Key_Sunny",
                'creation_time' => date_create()
            ],
            ['title' => "Bunny",
                'content' => "Bunny is not sunny,but she's funny, chuck-chuck",
                'url_key' => "Url_Key_Bunny",
                'creation_time' => date_create()
            ],
            ['title' => "Funny",
                'content' => "Funny is not a bunny,but she'sunny, shhhhh",
                'url_key' => "Url_Key_Funny",
                'creation_time' => date_create()
            ]
        ];
        foreach ($data as $value) {
            $this->_itemFactory->create()->addData($value)->save();
        }
    }
}