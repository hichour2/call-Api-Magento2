<?php
/**
 * Created by Amine Hichour.
 * User: hichour
 * Date: 06/10/19
 * Time: 21:01
 */

namespace Mdm\ConsumeApi\Controller\Color;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class GetColorList extends  Action
{
    /**
     * @var PageFactory
     */
    protected $pageFactory;

    /**
     * GetColorList constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory
    ) {
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        return $this->pageFactory->create();
    }
}