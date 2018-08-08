<?php

class Product_action_list_b6c2ce66bced4e2015e2add15d5a61ffcf6d56ae extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments3['partial'] = 'Product/Filter';
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['searchArguments'] = $renderingContext->getVariableProvider()->getByPath('searchArguments', $array6);
$array5['action'] = 'list';
$arguments3['arguments'] = $array5;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

    <div class="table-fit">
        <table class="table table-striped typo3-dblist">
            <thead>
            <tr class="t3-row-header">
                <th style="text-align: left;">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['key'] = 'tx_cart_domain_model_product.sku';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext), ENT_QUOTES);

$output0 .= '
                </th>
                <th style="text-align: left;">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['key'] = 'tx_cart_domain_model_product.title';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext), ENT_QUOTES);

$output0 .= '
                </th>
                <th style="text-align: right; width: 75px;">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['key'] = 'tx_cart_domain_model_product.stock';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext), ENT_QUOTES);

$output0 .= '
                </th>
                <th style="text-align: right; width: 100px;">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['key'] = 'tx_cart_domain_model_product.price';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext), ENT_QUOTES);

$output0 .= '
                </th>
                <th>
                    &nbsp;
                </th>
            </tr>
            </thead>
            <tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
                <tr class="db_list_normal">
                    <td>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= ' ';
$array24 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('product.sku', $array24), ENT_QUOTES);
return $output23;
};
$arguments19 = array();
$arguments19['action'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['controller'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['pluginName'] = NULL;
$arguments19['pageUid'] = NULL;
$arguments19['pageType'] = 0;
$arguments19['noCache'] = false;
$arguments19['noCacheHash'] = false;
$arguments19['section'] = '';
$arguments19['format'] = '';
$arguments19['linkAccessRestrictedPages'] = false;
$arguments19['additionalParams'] = array (
);
$arguments19['absolute'] = false;
$arguments19['addQueryString'] = false;
$arguments19['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments19['addQueryStringMethod'] = NULL;
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['name'] = NULL;
$arguments19['rel'] = NULL;
$arguments19['rev'] = NULL;
$arguments19['target'] = NULL;
$arguments19['action'] = 'show';
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array22);
$arguments19['arguments'] = $array21;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
                    </td>
                    <td>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= ' ';
$array30 = array (
);
$output29 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('product.title', $array30), ENT_QUOTES);
return $output29;
};
$arguments25 = array();
$arguments25['action'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['controller'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['pluginName'] = NULL;
$arguments25['pageUid'] = NULL;
$arguments25['pageType'] = 0;
$arguments25['noCache'] = false;
$arguments25['noCacheHash'] = false;
$arguments25['section'] = '';
$arguments25['format'] = '';
$arguments25['linkAccessRestrictedPages'] = false;
$arguments25['additionalParams'] = array (
);
$arguments25['absolute'] = false;
$arguments25['addQueryString'] = false;
$arguments25['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments25['addQueryStringMethod'] = NULL;
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$arguments25['name'] = NULL;
$arguments25['rel'] = NULL;
$arguments25['rev'] = NULL;
$arguments25['target'] = NULL;
$arguments25['action'] = 'show';
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array28);
$arguments25['arguments'] = $array27;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output18 .= '
                    </td>
                    <td style="text-align: right;">
                        ';
$array31 = array (
);
$output18 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('product.stock', $array31), ENT_QUOTES);

$output18 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return '(!)';
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('product.variants', $array35);

$expression36 = function($context) {return ($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments32['__thenClosure'] = $renderChildrenClosure33;

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output18 .= '
                    </td>
                    <td style="text-align: right;">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['htmlEscape'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['key'] = 'tx_cart_domain_model_product.price.from';

$output57 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext), ENT_QUOTES);

$output57 .= '
                                :
                                ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$array63 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('product.minPrice', $array63), ENT_QUOTES);
};
$arguments60 = array();
$arguments60['currencySign'] = NULL;
$arguments60['decimalSeparator'] = NULL;
$arguments60['thousandsSeparator'] = NULL;
$arguments60['prependCurrency'] = NULL;
$arguments60['separateCurrency'] = NULL;
$arguments60['decimals'] = NULL;
$arguments60['currencyTranslation'] = 1.0;
$array62 = array (
);$arguments60['currencySign'] = $renderingContext->getVariableProvider()->getByPath('orderItem.currency', $array62);

$output57 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output57 .= '
                            ';
return $output57;
};
$arguments55 = array();

$output54 .= '';

$output54 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
                                ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$array70 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('product.price', $array70), ENT_QUOTES);
};
$arguments67 = array();
$arguments67['currencySign'] = NULL;
$arguments67['decimalSeparator'] = NULL;
$arguments67['thousandsSeparator'] = NULL;
$arguments67['prependCurrency'] = NULL;
$arguments67['separateCurrency'] = NULL;
$arguments67['decimals'] = NULL;
$arguments67['currencyTranslation'] = 1.0;
$array69 = array (
);$arguments67['currencySign'] = $renderingContext->getVariableProvider()->getByPath('orderItem.currency', $array69);

$output66 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
                            ';
return $output66;
};
$arguments64 = array();
$arguments64['if'] = NULL;

$output54 .= '';

$output54 .= '
                        ';
return $output54;
};
$arguments37 = array();
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$arguments37['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['0'] = $renderingContext->getVariableProvider()->getByPath('product.variants', $array52);

$expression53 = function($context) {return ($context["node0"]);};
$arguments37['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$arguments37['__thenClosure'] = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['key'] = NULL;
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['htmlEscape'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['key'] = 'tx_cart_domain_model_product.price.from';

$output39 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext), ENT_QUOTES);

$output39 .= '
                                :
                                ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$array45 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('product.minPrice', $array45), ENT_QUOTES);
};
$arguments42 = array();
$arguments42['currencySign'] = NULL;
$arguments42['decimalSeparator'] = NULL;
$arguments42['thousandsSeparator'] = NULL;
$arguments42['prependCurrency'] = NULL;
$arguments42['separateCurrency'] = NULL;
$arguments42['decimals'] = NULL;
$arguments42['currencyTranslation'] = 1.0;
$array44 = array (
);$arguments42['currencySign'] = $renderingContext->getVariableProvider()->getByPath('orderItem.currency', $array44);

$output39 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output39 .= '
                            ';
return $output39;
};
$arguments37['__elseClosures'][] = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
                                ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$array50 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('product.price', $array50), ENT_QUOTES);
};
$arguments47 = array();
$arguments47['currencySign'] = NULL;
$arguments47['decimalSeparator'] = NULL;
$arguments47['thousandsSeparator'] = NULL;
$arguments47['prependCurrency'] = NULL;
$arguments47['separateCurrency'] = NULL;
$arguments47['decimals'] = NULL;
$arguments47['currencyTranslation'] = 1.0;
$array49 = array (
);$arguments47['currencySign'] = $renderingContext->getVariableProvider()->getByPath('orderItem.currency', $array49);

$output46 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
                            ';
return $output46;
};

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output18 .= '
                    </td>
                    <td>
                        <div class="">
                            <a class="btn btn-default btn-sm"
                               href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['action'] = NULL;
$arguments71['arguments'] = array (
);
$arguments71['controller'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['pluginName'] = NULL;
$arguments71['pageUid'] = NULL;
$arguments71['pageType'] = 0;
$arguments71['noCache'] = false;
$arguments71['noCacheHash'] = false;
$arguments71['section'] = '';
$arguments71['format'] = '';
$arguments71['linkAccessRestrictedPages'] = false;
$arguments71['additionalParams'] = array (
);
$arguments71['absolute'] = false;
$arguments71['addQueryString'] = false;
$arguments71['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments71['addQueryStringMethod'] = NULL;
$arguments71['action'] = 'show';
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array74);
$arguments71['arguments'] = $array73;

$output18 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext), ENT_QUOTES);

$output18 .= '"
                               title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['key'] = NULL;
$arguments75['id'] = NULL;
$arguments75['default'] = NULL;
$arguments75['htmlEscape'] = NULL;
$arguments75['arguments'] = NULL;
$arguments75['extensionName'] = NULL;
$arguments75['key'] = 'tx_cart.controller.product.action.show';

$output18 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext), ENT_QUOTES);

$output18 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['identifier'] = NULL;
$arguments77['size'] = 'small';
$arguments77['overlay'] = NULL;
$arguments77['state'] = 'default';
$arguments77['alternativeMarkupIdentifier'] = NULL;
$arguments77['identifier'] = 'actions-view';

$output18 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output18 .= '
                            </a>
                        </div>
                    </td>
                </tr>
            ';
return $output18;
};
$arguments15 = array();
$arguments15['each'] = NULL;
$arguments15['as'] = NULL;
$arguments15['key'] = NULL;
$arguments15['reverse'] = false;
$arguments15['iteration'] = NULL;
$array17 = array (
);$arguments15['each'] = $renderingContext->getVariableProvider()->getByPath('products', $array17);
$arguments15['as'] = 'product';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
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
$output79 = '';

$output79 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['name'] = NULL;
$arguments80['name'] = 'Default';

$output79 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext), ENT_QUOTES);

$output79 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return '
';
};
$arguments82 = array();
$arguments82['name'] = NULL;
$arguments82['name'] = 'actions';

$output79 .= '';

$output79 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['queueIdentifier'] = NULL;
$arguments87['as'] = NULL;

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['section'] = NULL;
$arguments89['partial'] = NULL;
$arguments89['delegate'] = NULL;
$arguments89['arguments'] = array (
);
$arguments89['optional'] = false;
$arguments89['default'] = NULL;
$arguments89['contentAs'] = NULL;
$arguments89['partial'] = 'Product/Filter';
// Rendering Array
$array91 = array();
$array92 = array (
);$array91['searchArguments'] = $renderingContext->getVariableProvider()->getByPath('searchArguments', $array92);
$array91['action'] = 'list';
$arguments89['arguments'] = $array91;

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output86 .= '

    <div class="table-fit">
        <table class="table table-striped typo3-dblist">
            <thead>
            <tr class="t3-row-header">
                <th style="text-align: left;">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['key'] = NULL;
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['htmlEscape'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['key'] = 'tx_cart_domain_model_product.sku';

$output86 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext), ENT_QUOTES);

$output86 .= '
                </th>
                <th style="text-align: left;">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['key'] = NULL;
$arguments95['id'] = NULL;
$arguments95['default'] = NULL;
$arguments95['htmlEscape'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['extensionName'] = NULL;
$arguments95['key'] = 'tx_cart_domain_model_product.title';

$output86 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext), ENT_QUOTES);

$output86 .= '
                </th>
                <th style="text-align: right; width: 75px;">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['key'] = NULL;
$arguments97['id'] = NULL;
$arguments97['default'] = NULL;
$arguments97['htmlEscape'] = NULL;
$arguments97['arguments'] = NULL;
$arguments97['extensionName'] = NULL;
$arguments97['key'] = 'tx_cart_domain_model_product.stock';

$output86 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext), ENT_QUOTES);

$output86 .= '
                </th>
                <th style="text-align: right; width: 100px;">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['key'] = NULL;
$arguments99['id'] = NULL;
$arguments99['default'] = NULL;
$arguments99['htmlEscape'] = NULL;
$arguments99['arguments'] = NULL;
$arguments99['extensionName'] = NULL;
$arguments99['key'] = 'tx_cart_domain_model_product.price';

$output86 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext), ENT_QUOTES);

$output86 .= '
                </th>
                <th>
                    &nbsp;
                </th>
            </tr>
            </thead>
            <tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
                <tr class="db_list_normal">
                    <td>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= ' ';
$array110 = array (
);
$output109 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('product.sku', $array110), ENT_QUOTES);
return $output109;
};
$arguments105 = array();
$arguments105['action'] = NULL;
$arguments105['arguments'] = array (
);
$arguments105['controller'] = NULL;
$arguments105['extensionName'] = NULL;
$arguments105['pluginName'] = NULL;
$arguments105['pageUid'] = NULL;
$arguments105['pageType'] = 0;
$arguments105['noCache'] = false;
$arguments105['noCacheHash'] = false;
$arguments105['section'] = '';
$arguments105['format'] = '';
$arguments105['linkAccessRestrictedPages'] = false;
$arguments105['additionalParams'] = array (
);
$arguments105['absolute'] = false;
$arguments105['addQueryString'] = false;
$arguments105['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments105['addQueryStringMethod'] = NULL;
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$arguments105['class'] = NULL;
$arguments105['dir'] = NULL;
$arguments105['id'] = NULL;
$arguments105['lang'] = NULL;
$arguments105['style'] = NULL;
$arguments105['title'] = NULL;
$arguments105['accesskey'] = NULL;
$arguments105['tabindex'] = NULL;
$arguments105['onclick'] = NULL;
$arguments105['name'] = NULL;
$arguments105['rel'] = NULL;
$arguments105['rev'] = NULL;
$arguments105['target'] = NULL;
$arguments105['action'] = 'show';
// Rendering Array
$array107 = array();
$array108 = array (
);$array107['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array108);
$arguments105['arguments'] = $array107;

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
                    </td>
                    <td>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= ' ';
$array116 = array (
);
$output115 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('product.title', $array116), ENT_QUOTES);
return $output115;
};
$arguments111 = array();
$arguments111['action'] = NULL;
$arguments111['arguments'] = array (
);
$arguments111['controller'] = NULL;
$arguments111['extensionName'] = NULL;
$arguments111['pluginName'] = NULL;
$arguments111['pageUid'] = NULL;
$arguments111['pageType'] = 0;
$arguments111['noCache'] = false;
$arguments111['noCacheHash'] = false;
$arguments111['section'] = '';
$arguments111['format'] = '';
$arguments111['linkAccessRestrictedPages'] = false;
$arguments111['additionalParams'] = array (
);
$arguments111['absolute'] = false;
$arguments111['addQueryString'] = false;
$arguments111['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments111['addQueryStringMethod'] = NULL;
$arguments111['additionalAttributes'] = NULL;
$arguments111['data'] = NULL;
$arguments111['class'] = NULL;
$arguments111['dir'] = NULL;
$arguments111['id'] = NULL;
$arguments111['lang'] = NULL;
$arguments111['style'] = NULL;
$arguments111['title'] = NULL;
$arguments111['accesskey'] = NULL;
$arguments111['tabindex'] = NULL;
$arguments111['onclick'] = NULL;
$arguments111['name'] = NULL;
$arguments111['rel'] = NULL;
$arguments111['rev'] = NULL;
$arguments111['target'] = NULL;
$arguments111['action'] = 'show';
// Rendering Array
$array113 = array();
$array114 = array (
);$array113['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array114);
$arguments111['arguments'] = $array113;

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output104 .= '
                    </td>
                    <td style="text-align: right;">
                        ';
$array117 = array (
);
$output104 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('product.stock', $array117), ENT_QUOTES);

$output104 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return '(!)';
};
$arguments118 = array();
$arguments118['then'] = NULL;
$arguments118['else'] = NULL;
$arguments118['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['0'] = $renderingContext->getVariableProvider()->getByPath('product.variants', $array121);

$expression122 = function($context) {return ($context["node0"]);};
$arguments118['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)
					),
					$renderingContext
				);
$arguments118['__thenClosure'] = $renderChildrenClosure119;

$output104 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output104 .= '
                    </td>
                    <td style="text-align: right;">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output143 = '';

$output143 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['key'] = NULL;
$arguments144['id'] = NULL;
$arguments144['default'] = NULL;
$arguments144['htmlEscape'] = NULL;
$arguments144['arguments'] = NULL;
$arguments144['extensionName'] = NULL;
$arguments144['key'] = 'tx_cart_domain_model_product.price.from';

$output143 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext), ENT_QUOTES);

$output143 .= '
                                :
                                ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$array149 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('product.minPrice', $array149), ENT_QUOTES);
};
$arguments146 = array();
$arguments146['currencySign'] = NULL;
$arguments146['decimalSeparator'] = NULL;
$arguments146['thousandsSeparator'] = NULL;
$arguments146['prependCurrency'] = NULL;
$arguments146['separateCurrency'] = NULL;
$arguments146['decimals'] = NULL;
$arguments146['currencyTranslation'] = 1.0;
$array148 = array (
);$arguments146['currencySign'] = $renderingContext->getVariableProvider()->getByPath('orderItem.currency', $array148);

$output143 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output143 .= '
                            ';
return $output143;
};
$arguments141 = array();

$output140 .= '';

$output140 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                                ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$array156 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('product.price', $array156), ENT_QUOTES);
};
$arguments153 = array();
$arguments153['currencySign'] = NULL;
$arguments153['decimalSeparator'] = NULL;
$arguments153['thousandsSeparator'] = NULL;
$arguments153['prependCurrency'] = NULL;
$arguments153['separateCurrency'] = NULL;
$arguments153['decimals'] = NULL;
$arguments153['currencyTranslation'] = 1.0;
$array155 = array (
);$arguments153['currencySign'] = $renderingContext->getVariableProvider()->getByPath('orderItem.currency', $array155);

$output152 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
                            ';
return $output152;
};
$arguments150 = array();
$arguments150['if'] = NULL;

$output140 .= '';

$output140 .= '
                        ';
return $output140;
};
$arguments123 = array();
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array137 = array();
$array138 = array (
);$array137['0'] = $renderingContext->getVariableProvider()->getByPath('product.variants', $array138);

$expression139 = function($context) {return ($context["node0"]);};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression139(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array137)
					),
					$renderingContext
				);
$arguments123['__thenClosure'] = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['key'] = NULL;
$arguments126['id'] = NULL;
$arguments126['default'] = NULL;
$arguments126['htmlEscape'] = NULL;
$arguments126['arguments'] = NULL;
$arguments126['extensionName'] = NULL;
$arguments126['key'] = 'tx_cart_domain_model_product.price.from';

$output125 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext), ENT_QUOTES);

$output125 .= '
                                :
                                ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$array131 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('product.minPrice', $array131), ENT_QUOTES);
};
$arguments128 = array();
$arguments128['currencySign'] = NULL;
$arguments128['decimalSeparator'] = NULL;
$arguments128['thousandsSeparator'] = NULL;
$arguments128['prependCurrency'] = NULL;
$arguments128['separateCurrency'] = NULL;
$arguments128['decimals'] = NULL;
$arguments128['currencyTranslation'] = 1.0;
$array130 = array (
);$arguments128['currencySign'] = $renderingContext->getVariableProvider()->getByPath('orderItem.currency', $array130);

$output125 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output125 .= '
                            ';
return $output125;
};
$arguments123['__elseClosures'][] = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                                ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$array136 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('product.price', $array136), ENT_QUOTES);
};
$arguments133 = array();
$arguments133['currencySign'] = NULL;
$arguments133['decimalSeparator'] = NULL;
$arguments133['thousandsSeparator'] = NULL;
$arguments133['prependCurrency'] = NULL;
$arguments133['separateCurrency'] = NULL;
$arguments133['decimals'] = NULL;
$arguments133['currencyTranslation'] = 1.0;
$array135 = array (
);$arguments133['currencySign'] = $renderingContext->getVariableProvider()->getByPath('orderItem.currency', $array135);

$output132 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
                            ';
return $output132;
};

$output104 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output104 .= '
                    </td>
                    <td>
                        <div class="">
                            <a class="btn btn-default btn-sm"
                               href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['action'] = NULL;
$arguments157['arguments'] = array (
);
$arguments157['controller'] = NULL;
$arguments157['extensionName'] = NULL;
$arguments157['pluginName'] = NULL;
$arguments157['pageUid'] = NULL;
$arguments157['pageType'] = 0;
$arguments157['noCache'] = false;
$arguments157['noCacheHash'] = false;
$arguments157['section'] = '';
$arguments157['format'] = '';
$arguments157['linkAccessRestrictedPages'] = false;
$arguments157['additionalParams'] = array (
);
$arguments157['absolute'] = false;
$arguments157['addQueryString'] = false;
$arguments157['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments157['addQueryStringMethod'] = NULL;
$arguments157['action'] = 'show';
// Rendering Array
$array159 = array();
$array160 = array (
);$array159['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array160);
$arguments157['arguments'] = $array159;

$output104 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext), ENT_QUOTES);

$output104 .= '"
                               title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['key'] = NULL;
$arguments161['id'] = NULL;
$arguments161['default'] = NULL;
$arguments161['htmlEscape'] = NULL;
$arguments161['arguments'] = NULL;
$arguments161['extensionName'] = NULL;
$arguments161['key'] = 'tx_cart.controller.product.action.show';

$output104 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext), ENT_QUOTES);

$output104 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['identifier'] = NULL;
$arguments163['size'] = 'small';
$arguments163['overlay'] = NULL;
$arguments163['state'] = 'default';
$arguments163['alternativeMarkupIdentifier'] = NULL;
$arguments163['identifier'] = 'actions-view';

$output104 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output104 .= '
                            </a>
                        </div>
                    </td>
                </tr>
            ';
return $output104;
};
$arguments101 = array();
$arguments101['each'] = NULL;
$arguments101['as'] = NULL;
$arguments101['key'] = NULL;
$arguments101['reverse'] = false;
$arguments101['iteration'] = NULL;
$array103 = array (
);$arguments101['each'] = $renderingContext->getVariableProvider()->getByPath('products', $array103);
$arguments101['as'] = 'product';

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output86 .= '
            </tbody>
        </table>
    </div>
';
return $output86;
};
$arguments84 = array();
$arguments84['name'] = NULL;
$arguments84['name'] = 'content';

$output79 .= '';

return $output79;
}


}
#