<?php
namespace Paybear\Cryptocurrency\Model\Config;
use Magento\Framework\Locale\Bundle\CurrencyBundle;

class Cryptocurrency extends \Magento\Framework\Locale\TranslatedLists
{

    public function getCryptoCurrencies()
    {
        return [
            ['value' => 'ETH', 'label' => 'Etherium'],
            ['value' => 'BTC', 'label' => 'Bitcoin'],
            ['value' => 'LTC', 'label' => 'Litecoin'],
            ['value' => 'BCH', 'label' => 'Bitcoin Cash'],
            ['value' => 'DASH','label' => 'DASH'],
            ['value' => 'ETC', 'label' => 'Eth. Classic']
        ];
    }

    public function getOptionAllCurrencies()
    {
        $currencyBundle = new \Magento\Framework\Locale\Bundle\CurrencyBundle();
        $locale = $this->localeResolver->getLocale();
        $currencies = $currencyBundle->get($locale)['Currencies'] ?: [];

        $options = [];
        foreach ($currencies as $code => $data) {
            $options[] = ['label' => $data[1], 'value' => $code];
        }
        $options = array_merge($options, $this->getCryptoCurrencies());

        return $this->_sortOptionArray($options);
    }

    public function getOptionCurrencies()
    {
        $currencies = (new CurrencyBundle())->get($this->localeResolver->getLocale())['Currencies'] ?: [];
        $options = [];
        $allowed = $this->_config->getAllowedCurrencies();
        foreach ($currencies as $code => $data) {
            if (!in_array($code, $allowed)) {
                continue;
            }
            $options[] = ['label' => $data[1], 'value' => $code];
        }
        $options = array_merge($options, $this->getCryptoCurrencies());

        return $this->_sortOptionArray($options);
    }


}