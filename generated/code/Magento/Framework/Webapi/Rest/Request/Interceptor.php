<?php
namespace Magento\Framework\Webapi\Rest\Request;

/**
 * Interceptor class for @see \Magento\Framework\Webapi\Rest\Request
 */
class Interceptor extends \Magento\Framework\Webapi\Rest\Request implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\Cookie\CookieReaderInterface $cookieReader, \Magento\Framework\Stdlib\StringUtils $converter, \Magento\Framework\App\AreaList $areaList, \Magento\Framework\Config\ScopeInterface $configScope, \Magento\Framework\Webapi\Rest\Request\DeserializerFactory $deserializerFactory, $uri = null)
    {
        $this->___init();
        parent::__construct($cookieReader, $converter, $areaList, $configScope, $deserializerFactory, $uri);
    }

    /**
     * {@inheritdoc}
     */
    public function getHttpMethod()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHttpMethod');
        return $pluginInfo ? $this->___callPlugins('getHttpMethod', func_get_args(), $pluginInfo) : parent::getHttpMethod();
    }
}
