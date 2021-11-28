<?php
namespace V4U\Kojs\Block;

class Clock extends \Magento\Framework\View\Element\Template
{        
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,        
        array $data = []
    )
    {        
        parent::__construct($context, $data);
    }
}