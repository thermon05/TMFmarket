<?php

class Order_action_statistic_96c1084759c89d62975fc8fa85a38fc79b9ede30 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'cart' => 
  array (
    0 => 'Extcode\\Cart\\ViewHelpers',
  ),
));
}

/**
 * section actions
 */
public function section_326b426f9ac7a96ed6baf62f8838565416d27df8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '
';
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['queueIdentifier'] = NULL;
$arguments1['as'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['section'] = NULL;
$arguments3['partial'] = NULL;
$arguments3['delegate'] = NULL;
$arguments3['arguments'] = array (
);
$arguments3['optional'] = false;
$arguments3['default'] = NULL;
$arguments3['contentAs'] = NULL;
$arguments3['partial'] = 'Order/Filter/Statistic';
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['searchArguments'] = $renderingContext->getVariableProvider()->getByPath('searchArguments', $array6);
$array5['action'] = 'statistic';
$arguments3['arguments'] = $array5;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

    <div class="clear"></div>

    <p>
        OrderItemCount: ';
$array7 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('statistics.orderItemCount', $array7), ENT_QUOTES);

$output0 .= '
    </p>
    <p>
        OrderProductCount: ';
$array8 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('statistics.orderProductCount', $array8), ENT_QUOTES);

$output0 .= '
    </p>

    <div class="table-fit">
        <table class="table table-striped typo3-dblist">
            <thead>
            <tr class="t3-row-header">
                <td>&nbsp;</td>
                <th>Total</th>
                <th>Average</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Gross:</th>
                <td>
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$array12 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('statistics.orderItemGross', $array12), ENT_QUOTES);
};
$arguments9 = array();
$arguments9['currencySign'] = NULL;
$arguments9['decimalSeparator'] = NULL;
$arguments9['thousandsSeparator'] = NULL;
$arguments9['prependCurrency'] = NULL;
$arguments9['separateCurrency'] = NULL;
$arguments9['decimals'] = NULL;
$arguments9['currencyTranslation'] = 1.0;
$array11 = array (
);$arguments9['currencySign'] = $renderingContext->getVariableProvider()->getByPath('orderItem.currency', $array11);

$output0 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
                </td>
                <td>
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$array16 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('statistics.orderItemAverageGross', $array16), ENT_QUOTES);
};
$arguments13 = array();
$arguments13['currencySign'] = NULL;
$arguments13['decimalSeparator'] = NULL;
$arguments13['thousandsSeparator'] = NULL;
$arguments13['prependCurrency'] = NULL;
$arguments13['separateCurrency'] = NULL;
$arguments13['decimals'] = NULL;
$arguments13['currencyTranslation'] = 1.0;
$array15 = array (
);$arguments13['currencySign'] = $renderingContext->getVariableProvider()->getByPath('orderItem.currency', $array15);

$output0 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
                </td>
            </tr>
            <tr>
                <th>Net:</th>
                <td>
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array20 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('statistics.orderItemNet', $array20), ENT_QUOTES);
};
$arguments17 = array();
$arguments17['currencySign'] = NULL;
$arguments17['decimalSeparator'] = NULL;
$arguments17['thousandsSeparator'] = NULL;
$arguments17['prependCurrency'] = NULL;
$arguments17['separateCurrency'] = NULL;
$arguments17['decimals'] = NULL;
$arguments17['currencyTranslation'] = 1.0;
$array19 = array (
);$arguments17['currencySign'] = $renderingContext->getVariableProvider()->getByPath('orderItem.currency', $array19);

$output0 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
                </td>
                <td>
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$array24 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('statistics.orderItemAverageNet', $array24), ENT_QUOTES);
};
$arguments21 = array();
$arguments21['currencySign'] = NULL;
$arguments21['decimalSeparator'] = NULL;
$arguments21['thousandsSeparator'] = NULL;
$arguments21['prependCurrency'] = NULL;
$arguments21['separateCurrency'] = NULL;
$arguments21['decimals'] = NULL;
$arguments21['currencyTranslation'] = 1.0;
$array23 = array (
);$arguments21['currencySign'] = $renderingContext->getVariableProvider()->getByPath('orderItem.currency', $array23);

$output0 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '
                </td>
            </tr>
            </tbody>
        </table>
    </div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output25 = '';

$output25 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['name'] = NULL;
$arguments26['name'] = 'Default';

$output25 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext), ENT_QUOTES);

$output25 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return '
';
};
$arguments28 = array();
$arguments28['name'] = NULL;
$arguments28['name'] = 'actions';

$output25 .= '';

$output25 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['queueIdentifier'] = NULL;
$arguments33['as'] = NULL;

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['section'] = NULL;
$arguments35['partial'] = NULL;
$arguments35['delegate'] = NULL;
$arguments35['arguments'] = array (
);
$arguments35['optional'] = false;
$arguments35['default'] = NULL;
$arguments35['contentAs'] = NULL;
$arguments35['partial'] = 'Order/Filter/Statistic';
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['searchArguments'] = $renderingContext->getVariableProvider()->getByPath('searchArguments', $array38);
$array37['action'] = 'statistic';
$arguments35['arguments'] = $array37;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output32 .= '

    <div class="clear"></div>

    <p>
        OrderItemCount: ';
$array39 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('statistics.orderItemCount', $array39), ENT_QUOTES);

$output32 .= '
    </p>
    <p>
        OrderProductCount: ';
$array40 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('statistics.orderProductCount', $array40), ENT_QUOTES);

$output32 .= '
    </p>

    <div class="table-fit">
        <table class="table table-striped typo3-dblist">
            <thead>
            <tr class="t3-row-header">
                <td>&nbsp;</td>
                <th>Total</th>
                <th>Average</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Gross:</th>
                <td>
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$array44 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('statistics.orderItemGross', $array44), ENT_QUOTES);
};
$arguments41 = array();
$arguments41['currencySign'] = NULL;
$arguments41['decimalSeparator'] = NULL;
$arguments41['thousandsSeparator'] = NULL;
$arguments41['prependCurrency'] = NULL;
$arguments41['separateCurrency'] = NULL;
$arguments41['decimals'] = NULL;
$arguments41['currencyTranslation'] = 1.0;
$array43 = array (
);$arguments41['currencySign'] = $renderingContext->getVariableProvider()->getByPath('orderItem.currency', $array43);

$output32 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output32 .= '
                </td>
                <td>
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$array48 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('statistics.orderItemAverageGross', $array48), ENT_QUOTES);
};
$arguments45 = array();
$arguments45['currencySign'] = NULL;
$arguments45['decimalSeparator'] = NULL;
$arguments45['thousandsSeparator'] = NULL;
$arguments45['prependCurrency'] = NULL;
$arguments45['separateCurrency'] = NULL;
$arguments45['decimals'] = NULL;
$arguments45['currencyTranslation'] = 1.0;
$array47 = array (
);$arguments45['currencySign'] = $renderingContext->getVariableProvider()->getByPath('orderItem.currency', $array47);

$output32 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output32 .= '
                </td>
            </tr>
            <tr>
                <th>Net:</th>
                <td>
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$array52 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('statistics.orderItemNet', $array52), ENT_QUOTES);
};
$arguments49 = array();
$arguments49['currencySign'] = NULL;
$arguments49['decimalSeparator'] = NULL;
$arguments49['thousandsSeparator'] = NULL;
$arguments49['prependCurrency'] = NULL;
$arguments49['separateCurrency'] = NULL;
$arguments49['decimals'] = NULL;
$arguments49['currencyTranslation'] = 1.0;
$array51 = array (
);$arguments49['currencySign'] = $renderingContext->getVariableProvider()->getByPath('orderItem.currency', $array51);

$output32 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output32 .= '
                </td>
                <td>
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$array56 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('statistics.orderItemAverageNet', $array56), ENT_QUOTES);
};
$arguments53 = array();
$arguments53['currencySign'] = NULL;
$arguments53['decimalSeparator'] = NULL;
$arguments53['thousandsSeparator'] = NULL;
$arguments53['prependCurrency'] = NULL;
$arguments53['separateCurrency'] = NULL;
$arguments53['decimals'] = NULL;
$arguments53['currencyTranslation'] = 1.0;
$array55 = array (
);$arguments53['currencySign'] = $renderingContext->getVariableProvider()->getByPath('orderItem.currency', $array55);

$output32 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output32 .= '
                </td>
            </tr>
            </tbody>
        </table>
    </div>
';
return $output32;
};
$arguments30 = array();
$arguments30['name'] = NULL;
$arguments30['name'] = 'content';

$output25 .= '';

return $output25;
}


}
#