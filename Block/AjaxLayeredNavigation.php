<?php
/**
 * Class AjaxLayeredNavigation
 *
 * PHP version 7
 *
 * @category Risecommerce
 * @package  Risecommerce_AjaxLayeredNavigation
 * @author   Risecommerce <magento@risecommerce.com>
 * @license  https://www.risecommerce.com  Open Software License (OSL 3.0)
 * @link     https://www.risecommerce.com
 */
namespace Risecommerce\AjaxLayeredNavigation\Block;


class AjaxLayeredNavigation extends \Magento\Framework\View\Element\Template
{
    /**
     * StoreManagerInterface
     *
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;

    /**
     * ScopeConfigInterface
     *
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * AjaxLayeredNavigation constructor.
     *
     * @param \Magento\Framework\View\Element\Template\Context   $context
     * @param \Magento\Store\Model\StoreManagerInterface         $storeManager
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     * @param array                                              $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->storeManager = $storeManager;
        $this->scopeConfig = $scopeConfig;
    }

    /**
     *  XML_PATH_AJAXLAYERED_ENABLED
     */
    const XML_PATH_AJAXLAYERED_ENABLED = 'risecommerce_ajax_layered_navigation/ajax_layered_navigation/enabled';

    /**
     * Is enabled module
     *
     * @return boolean
     */
    public function isEnabled()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;

        return $this->scopeConfig->getValue(self::XML_PATH_AJAXLAYERED_ENABLED, $storeScope);
    }
}
