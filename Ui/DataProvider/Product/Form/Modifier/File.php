<?php
/**
 * Webkul Software
 *
 * @category Magento
 * @package  Webkul_ProductFileAttribute
 * @author   Webkul
 * @license  https://store.webkul.com/license.html
 */
namespace Webkul\ProductFileAttribute\Ui\DataProvider\Product\Form\Modifier;
 
use Magento\Framework\Stdlib\ArrayManager;
use Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\AbstractModifier;
 
class File extends AbstractModifier
{
    /**
     * @var Magento\Framework\Stdlib\ArrayManager
     */
    protected $arrayManager;
 
    /**
     * @param ArrayManager                $arrayManager
     */
    public function __construct(
        ArrayManager $arrayManager
    ) {
        $this->arrayManager = $arrayManager;
    }
 
    public function modifyMeta(array $meta)
    {
        $fieldCode = 'agreement_file';
        $elementPath = $this->arrayManager->findPath($fieldCode, $meta, null, 'children');
        $containerPath = $this->arrayManager->findPath(static::CONTAINER_PREFIX . $fieldCode, $meta, null, 'children');
 
        if (!$elementPath) {
            return $meta;
        }
 
        $meta = $this->arrayManager->merge(
            $containerPath,
            $meta,
            [
                'children'  => [
                    $fieldCode => [
                        'arguments' => [
                            'data' => [
                                'config' => [
                                    'elementTmpl'   => 'Webkul_ProductFileAttribute/elements/file',
                                ],
                            ],
                        ],
                    ]
                ]
            ]
        );
        return $meta;
    }
 
    /**
     * {@inheritdoc}
     */
    public function modifyData(array $data)
    {
        return $data;
    }
}
