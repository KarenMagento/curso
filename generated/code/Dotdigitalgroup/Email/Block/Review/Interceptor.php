<?php
namespace Dotdigitalgroup\Email\Block\Review;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Review
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Review implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Dotdigitalgroup\Email\Block\Helper\Font $font, \Dotdigitalgroup\Email\Model\Catalog\UrlFinder $urlFinder, \Dotdigitalgroup\Email\Model\Product\ImageType\Context\DynamicContent $imageType, \Dotdigitalgroup\Email\Model\Product\ImageFinder $imageFinder, \Magento\Sales\Model\Spi\OrderResourceInterface $orderResource, \Dotdigitalgroup\Email\Model\ResourceModel\Review $review, \Magento\Sales\Api\Data\OrderInterfaceFactory $orderFactory, \Dotdigitalgroup\Email\Helper\Data $helper, \Magento\Framework\Pricing\Helper\Data $priceHelper, \Magento\Catalog\Model\ProductRepository $productRepository, \Dotdigitalgroup\Email\Logger\Logger $logger, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $font, $urlFinder, $imageType, $imageFinder, $orderResource, $review, $orderFactory, $helper, $priceHelper, $productRepository, $logger, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage($product, $imageId, $attributes);
    }
}
