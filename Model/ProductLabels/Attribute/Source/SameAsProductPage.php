<?php
namespace WeltPixel\ProductLabels\Model\ProductLabels\Attribute\Source;

use Magento\Eav\Model\Entity\Attribute\Source\SourceInterface;
use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class SameAsProductPage
 * @package WeltPixel\ProductLabels\Model\ProductLabels\Attribute\Source
 */
class SameAsProductPage implements SourceInterface, OptionSourceInterface
{

    /**
     * Frequencies
     */
    const SAME_AS_PRODUCT_PAGE_YES   = 1;
    const SAME_AS_PRODUCT_PAGE_NO = 0;


    /**
     * @return array
     */
    public function getAvailableStatuses()
    {
        return [
            self::SAME_AS_PRODUCT_PAGE_YES     => __('Yes'),
            self::SAME_AS_PRODUCT_PAGE_NO     => __('No')
        ];
    }

    /**
     * Retrieve All options
     *
     * @return array
     */
    public function getAllOptions() {
        $result = [];

        foreach ($this->getAvailableStatuses() as $index => $value) {
            $result[] = ['value' => $index, 'label' => $value];
        }

        return $result;
    }

    /**
     * Retrieve Option value text
     *
     * @param string $value
     * @return mixed
     */
    public function getOptionText($value) {
        $options = $this->getAvailableStatuses();

        return isset($options[$value]) ? $options[$value] : null;
    }

    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray() {
        return $this->getAllOptions();
    }

}
