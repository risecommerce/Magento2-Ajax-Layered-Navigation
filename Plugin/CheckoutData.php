<?php
/**
 * Class CheckoutData
 *
 * PHP version 7
 *
 * @category Risecommerce
 * @package  Risecommerce_AjaxLayeredNavigation
 * @author   Risecommerce <magento@risecommerce.com>
 * @license  https://www.risecommerce.com  Open Software License (OSL 3.0)
 * @link     https://www.risecommerce.com
 */
namespace Risecommerce\AjaxLayeredNavigation\Plugin;


class CheckoutData
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * Recipient email config path
     */
    const XML_PATH_AJAXLAYERED_ENABLED = 'risecommerce_ajax_layered_navigation/ajax_layered_navigation/enabled';

    /**
     * CheckoutData constructor.
     *
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @param \Magento\Checkout\Block\Cart\Sidebar $subject
     * @param $result
     * @return mixed
     */
    public function afterGetConfig(\Magento\Checkout\Block\Cart\Sidebar $subject, $result)
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $isEnabled = $this->scopeConfig->getValue(self::XML_PATH_AJAXLAYERED_ENABLED, $storeScope);
        if ($isEnabled) {
            $result['isRisecommerceALNEnable'] = 1;
        } else {
            $result['isRisecommerceALNEnable'] = 0;
        }

        return $result;
    }
}
