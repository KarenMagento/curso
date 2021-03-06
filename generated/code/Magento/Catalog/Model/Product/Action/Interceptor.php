<?php
namespace Magento\Catalog\Model\Product\Action;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Action
 */
class Interceptor extends \Magento\Catalog\Model\Product\Action implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Catalog\Model\Product\WebsiteFactory $productWebsiteFactory, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, \Magento\Eav\Model\Config $eavConfig, \Magento\Catalog\Model\Indexer\Product\Eav\Processor $productEavIndexerProcessor, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $productWebsiteFactory, $indexerRegistry, $eavConfig, $productEavIndexerProcessor, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function updateAttributes($productIds, $attrData, $storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateAttributes');
        return $pluginInfo ? $this->___callPlugins('updateAttributes', func_get_args(), $pluginInfo) : parent::updateAttributes($productIds, $attrData, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function updateWebsites($productIds, $websiteIds, $type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateWebsites');
        return $pluginInfo ? $this->___callPlugins('updateWebsites', func_get_args(), $pluginInfo) : parent::updateWebsites($productIds, $websiteIds, $type);
    }
}
