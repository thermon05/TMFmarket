<?php

class WizardContent_action_list_a28649620a0fe87bf91259d1a2f97c5cdeaa8fa6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'mask' => 
  array (
    0 => 'MASK\\Mask\\ViewHelpers',
  ),
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['section'] = NULL;
$arguments1['partial'] = NULL;
$arguments1['delegate'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$arguments1['default'] = NULL;
$arguments1['contentAs'] = NULL;
$arguments1['partial'] = 'General/Tabs';
// Rendering Array
$array3 = array();
$array3['active'] = 'WizardContent';
$arguments1['arguments'] = $array3;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="DTM-mask-1">
			<div class="form-section">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['queueIdentifier'] = NULL;
$arguments4['as'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
					<div class="typo3-message message-error"><strong>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['key'] = NULL;
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['htmlEscape'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['key'] = 'tx_mask.content.error';

$output9 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext), ENT_QUOTES);

$output9 .= '
					</strong> ';
$array12 = array (
);
$output9 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message', $array12), ENT_QUOTES);

$output9 .= '
					</div>
				';
return $output9;
};
$arguments6 = array();
$arguments6['each'] = NULL;
$arguments6['as'] = NULL;
$arguments6['key'] = NULL;
$arguments6['reverse'] = false;
$arguments6['iteration'] = NULL;
$array8 = array (
);$arguments6['each'] = $renderingContext->getVariableProvider()->getByPath('messages', $array8);
$arguments6['as'] = 'message';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['name'] = NULL;
$arguments22['value'] = NULL;
$arguments22['property'] = NULL;
$arguments22['disabled'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['key'] = NULL;
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['htmlEscape'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$arguments24['key'] = 'tx_mask.all.createmissingfolders';
$arguments22['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);
$arguments22['class'] = 'btn btn-primary';

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
					';
return $output21;
};
$arguments19 = array();
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['action'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['controller'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['pluginName'] = NULL;
$arguments19['pageUid'] = NULL;
$arguments19['object'] = NULL;
$arguments19['pageType'] = 0;
$arguments19['noCache'] = false;
$arguments19['noCacheHash'] = false;
$arguments19['section'] = '';
$arguments19['format'] = '';
$arguments19['additionalParams'] = array (
);
$arguments19['absolute'] = false;
$arguments19['addQueryString'] = false;
$arguments19['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments19['addQueryStringMethod'] = 'GET';
$arguments19['fieldNamePrefix'] = NULL;
$arguments19['actionUri'] = NULL;
$arguments19['objectName'] = NULL;
$arguments19['hiddenFieldClassName'] = NULL;
$arguments19['enctype'] = NULL;
$arguments19['method'] = NULL;
$arguments19['name'] = NULL;
$arguments19['onreset'] = NULL;
$arguments19['onsubmit'] = NULL;
$arguments19['target'] = NULL;
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['action'] = 'createMissingFolders';
$arguments19['controller'] = 'WizardContent';

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
				';
return $output18;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('missingFolders', $array16);

$expression17 = function($context) {return ($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = $renderChildrenClosure14;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '

				<div class="panel panel-space panel-default">
					<div class="panel-heading">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['key'] = NULL;
$arguments26['id'] = NULL;
$arguments26['default'] = NULL;
$arguments26['htmlEscape'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['extensionName'] = NULL;
$arguments26['key'] = 'tx_mask.all.contentelements';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext), ENT_QUOTES);

$output0 .= '
					</div>


					<div class="table-fit collapse in" id="recordlist-be_users" data-state="expanded">
						<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-hover">
							<thead>
							<tr>
								<th class="text-nowrap col-icon">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['identifier'] = NULL;
$arguments31['size'] = 'small';
$arguments31['overlay'] = NULL;
$arguments31['state'] = 'default';
$arguments31['alternativeMarkupIdentifier'] = NULL;
$arguments31['identifier'] = 'actions-document-new';

$output30 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
									';
return $output30;
};
$arguments28 = array();
$arguments28['action'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['controller'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['pluginName'] = NULL;
$arguments28['pageUid'] = NULL;
$arguments28['pageType'] = 0;
$arguments28['noCache'] = false;
$arguments28['noCacheHash'] = false;
$arguments28['section'] = '';
$arguments28['format'] = '';
$arguments28['linkAccessRestrictedPages'] = false;
$arguments28['additionalParams'] = array (
);
$arguments28['absolute'] = false;
$arguments28['addQueryString'] = false;
$arguments28['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments28['addQueryStringMethod'] = NULL;
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['name'] = NULL;
$arguments28['rel'] = NULL;
$arguments28['rev'] = NULL;
$arguments28['target'] = NULL;
$arguments28['action'] = 'new';
$arguments28['class'] = 'btn btn-default';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output0 .= '
								</th>
								<th class="text-nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['key'] = NULL;
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['htmlEscape'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$arguments33['key'] = 'tx_mask.content.image';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext), ENT_QUOTES);

$output0 .= '
								</th>
								<th class="text-nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['key'] = NULL;
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['htmlEscape'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$arguments35['key'] = 'tx_mask.content.titlekey';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext), ENT_QUOTES);

$output0 .= '
								</th>
								<th class="text-nowrap col-title">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['key'] = NULL;
$arguments37['id'] = NULL;
$arguments37['default'] = NULL;
$arguments37['htmlEscape'] = NULL;
$arguments37['arguments'] = NULL;
$arguments37['extensionName'] = NULL;
$arguments37['key'] = 'tx_mask.content.description';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext), ENT_QUOTES);

$output0 .= '
								</th>
								<th class="text-nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['key'] = NULL;
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['htmlEscape'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['key'] = 'tx_mask.content.count';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext), ENT_QUOTES);

$output0 .= '
								</th>
								<th class="text-nowrap col-control">&nbsp;
								</td>
							</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
								<tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$arguments45['condition'] = false;
$arguments45['then'] = 'element-hidden';

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '">
									<td></td>
									<td>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['identifier'] = NULL;
$arguments52['size'] = 'small';
$arguments52['overlay'] = NULL;
$arguments52['state'] = 'default';
$arguments52['alternativeMarkupIdentifier'] = NULL;
$output54 = '';

$output54 .= 'mask-ce-';
$array55 = array (
);
$output54 .= $renderingContext->getVariableProvider()->getByPath('key', $array55);
$arguments52['identifier'] = $output54;
$arguments52['size'] = 'large';

$output51 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
										';
return $output51;
};
$arguments47 = array();
$arguments47['action'] = NULL;
$arguments47['arguments'] = array (
);
$arguments47['controller'] = NULL;
$arguments47['extensionName'] = NULL;
$arguments47['pluginName'] = NULL;
$arguments47['pageUid'] = NULL;
$arguments47['pageType'] = 0;
$arguments47['noCache'] = false;
$arguments47['noCacheHash'] = false;
$arguments47['section'] = '';
$arguments47['format'] = '';
$arguments47['linkAccessRestrictedPages'] = false;
$arguments47['additionalParams'] = array (
);
$arguments47['absolute'] = false;
$arguments47['addQueryString'] = false;
$arguments47['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments47['addQueryStringMethod'] = NULL;
$arguments47['additionalAttributes'] = NULL;
$arguments47['data'] = NULL;
$arguments47['class'] = NULL;
$arguments47['dir'] = NULL;
$arguments47['id'] = NULL;
$arguments47['lang'] = NULL;
$arguments47['style'] = NULL;
$arguments47['title'] = NULL;
$arguments47['accesskey'] = NULL;
$arguments47['tabindex'] = NULL;
$arguments47['onclick'] = NULL;
$arguments47['name'] = NULL;
$arguments47['rel'] = NULL;
$arguments47['rev'] = NULL;
$arguments47['target'] = NULL;
$arguments47['action'] = 'edit';
// Rendering Array
$array49 = array();
$array49['type'] = 'tt_content';
$array50 = array (
);$array49['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array50);
$arguments47['arguments'] = $array49;

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output44 .= '
									</td>
									<td class="text-nowrap">
										<p><strong>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$array64 = array (
);return $renderingContext->getVariableProvider()->getByPath('storage.label', $array64);
};
$arguments61 = array();
$arguments61['key'] = NULL;
$arguments61['id'] = NULL;
$arguments61['default'] = NULL;
$arguments61['htmlEscape'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['extensionName'] = NULL;
$array63 = array (
);$arguments61['key'] = $renderingContext->getVariableProvider()->getByPath('storage.label', $array63);

$output60 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext), ENT_QUOTES);

$output60 .= '
											';
return $output60;
};
$arguments56 = array();
$arguments56['action'] = NULL;
$arguments56['arguments'] = array (
);
$arguments56['controller'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['pluginName'] = NULL;
$arguments56['pageUid'] = NULL;
$arguments56['pageType'] = 0;
$arguments56['noCache'] = false;
$arguments56['noCacheHash'] = false;
$arguments56['section'] = '';
$arguments56['format'] = '';
$arguments56['linkAccessRestrictedPages'] = false;
$arguments56['additionalParams'] = array (
);
$arguments56['absolute'] = false;
$arguments56['addQueryString'] = false;
$arguments56['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments56['addQueryStringMethod'] = NULL;
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['class'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['id'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
$arguments56['name'] = NULL;
$arguments56['rel'] = NULL;
$arguments56['rev'] = NULL;
$arguments56['target'] = NULL;
$arguments56['action'] = 'edit';
// Rendering Array
$array58 = array();
$array58['type'] = 'tt_content';
$array59 = array (
);$array58['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array59);
$arguments56['arguments'] = $array58;

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output44 .= '
										</strong><br/>';
$array65 = array (
);
$output44 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('key', $array65), ENT_QUOTES);

$output44 .= '
										</p>
									</td>

									<td>
										<p>';
$array66 = array (
);
$output44 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('storage.description', $array66), ENT_QUOTES);

$output44 .= '</p>
										';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LinkViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['data'] = NULL;
$array69 = array (
);$arguments67['data'] = $renderingContext->getVariableProvider()->getByPath('key', $array69);

$output44 .= MASK\Mask\ViewHelpers\LinkViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output44 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return '
												<i class="fa fa-plus-circle "></i>
											';
};
$arguments78 = array();
$arguments78['action'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['controller'] = NULL;
$arguments78['extensionName'] = NULL;
$arguments78['pluginName'] = NULL;
$arguments78['pageUid'] = NULL;
$arguments78['pageType'] = 0;
$arguments78['noCache'] = false;
$arguments78['noCacheHash'] = false;
$arguments78['section'] = '';
$arguments78['format'] = '';
$arguments78['linkAccessRestrictedPages'] = false;
$arguments78['additionalParams'] = array (
);
$arguments78['absolute'] = false;
$arguments78['addQueryString'] = false;
$arguments78['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments78['addQueryStringMethod'] = NULL;
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['name'] = NULL;
$arguments78['rel'] = NULL;
$arguments78['rev'] = NULL;
$arguments78['target'] = NULL;
$arguments78['action'] = 'createHtml';
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array81);
$arguments78['arguments'] = $array80;

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
										';
return $output77;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\LinkViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['data'] = NULL;
$array75 = array (
);$arguments73['data'] = $renderingContext->getVariableProvider()->getByPath('key', $array75);
$array72['0'] = MASK\Mask\ViewHelpers\LinkViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$expression76 = function($context) {return ($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression76(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$arguments70['__thenClosure'] = $renderChildrenClosure71;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output44 .= '
									</td>
									<td class="text-center text-muted">
										';
// Rendering ViewHelper MASK\Mask\ViewHelpers\ElementCountViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['key'] = NULL;
$array84 = array (
);$arguments82['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array84);

$output44 .= htmlspecialchars(MASK\Mask\ViewHelpers\ElementCountViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext), ENT_QUOTES);

$output44 .= '
									</td>
									<td class="text-nowrap">
										<div class="btn-group" role="group">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['identifier'] = NULL;
$arguments89['size'] = 'small';
$arguments89['overlay'] = NULL;
$arguments89['state'] = 'default';
$arguments89['alternativeMarkupIdentifier'] = NULL;
$arguments89['identifier'] = 'sysnote-type-2';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);
};
$arguments85 = array();
$arguments85['action'] = NULL;
$arguments85['arguments'] = array (
);
$arguments85['controller'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['pluginName'] = NULL;
$arguments85['pageUid'] = NULL;
$arguments85['pageType'] = 0;
$arguments85['noCache'] = false;
$arguments85['noCacheHash'] = false;
$arguments85['section'] = '';
$arguments85['format'] = '';
$arguments85['linkAccessRestrictedPages'] = false;
$arguments85['additionalParams'] = array (
);
$arguments85['absolute'] = false;
$arguments85['addQueryString'] = false;
$arguments85['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments85['addQueryStringMethod'] = NULL;
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['name'] = NULL;
$arguments85['rel'] = NULL;
$arguments85['rev'] = NULL;
$arguments85['target'] = NULL;
$arguments85['action'] = 'showHtml';
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array88);
$array87['table'] = 'tt_content';
$arguments85['arguments'] = $array87;
$arguments85['onclick'] = 'window.open(this.href, \'HTML\', \'width=800,height=600,resizable=yes,scrollbars=yes\');
												return false;';
$arguments85['class'] = 'btn btn-default';

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output44 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['identifier'] = NULL;
$arguments95['size'] = 'small';
$arguments95['overlay'] = NULL;
$arguments95['state'] = 'default';
$arguments95['alternativeMarkupIdentifier'] = NULL;
$arguments95['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);
};
$arguments91 = array();
$arguments91['action'] = NULL;
$arguments91['arguments'] = array (
);
$arguments91['controller'] = NULL;
$arguments91['extensionName'] = NULL;
$arguments91['pluginName'] = NULL;
$arguments91['pageUid'] = NULL;
$arguments91['pageType'] = 0;
$arguments91['noCache'] = false;
$arguments91['noCacheHash'] = false;
$arguments91['section'] = '';
$arguments91['format'] = '';
$arguments91['linkAccessRestrictedPages'] = false;
$arguments91['additionalParams'] = array (
);
$arguments91['absolute'] = false;
$arguments91['addQueryString'] = false;
$arguments91['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments91['addQueryStringMethod'] = NULL;
$arguments91['additionalAttributes'] = NULL;
$arguments91['data'] = NULL;
$arguments91['class'] = NULL;
$arguments91['dir'] = NULL;
$arguments91['id'] = NULL;
$arguments91['lang'] = NULL;
$arguments91['style'] = NULL;
$arguments91['title'] = NULL;
$arguments91['accesskey'] = NULL;
$arguments91['tabindex'] = NULL;
$arguments91['onclick'] = NULL;
$arguments91['name'] = NULL;
$arguments91['rel'] = NULL;
$arguments91['rev'] = NULL;
$arguments91['target'] = NULL;
$arguments91['action'] = 'edit';
// Rendering Array
$array93 = array();
$array93['type'] = 'tt_content';
$array94 = array (
);$array93['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array94);
$arguments91['arguments'] = $array93;
$arguments91['class'] = 'btn btn-default';

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output44 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['identifier'] = NULL;
$arguments124['size'] = 'small';
$arguments124['overlay'] = NULL;
$arguments124['state'] = 'default';
$arguments124['alternativeMarkupIdentifier'] = NULL;
$arguments124['identifier'] = 'actions-edit-unhide';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);
};
$arguments120 = array();
$arguments120['action'] = NULL;
$arguments120['arguments'] = array (
);
$arguments120['controller'] = NULL;
$arguments120['extensionName'] = NULL;
$arguments120['pluginName'] = NULL;
$arguments120['pageUid'] = NULL;
$arguments120['pageType'] = 0;
$arguments120['noCache'] = false;
$arguments120['noCacheHash'] = false;
$arguments120['section'] = '';
$arguments120['format'] = '';
$arguments120['linkAccessRestrictedPages'] = false;
$arguments120['additionalParams'] = array (
);
$arguments120['absolute'] = false;
$arguments120['addQueryString'] = false;
$arguments120['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments120['addQueryStringMethod'] = NULL;
$arguments120['additionalAttributes'] = NULL;
$arguments120['data'] = NULL;
$arguments120['class'] = NULL;
$arguments120['dir'] = NULL;
$arguments120['id'] = NULL;
$arguments120['lang'] = NULL;
$arguments120['style'] = NULL;
$arguments120['title'] = NULL;
$arguments120['accesskey'] = NULL;
$arguments120['tabindex'] = NULL;
$arguments120['onclick'] = NULL;
$arguments120['name'] = NULL;
$arguments120['rel'] = NULL;
$arguments120['rev'] = NULL;
$arguments120['target'] = NULL;
$arguments120['action'] = 'activate';
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array123);
$arguments120['arguments'] = $array122;
$arguments120['class'] = 'btn btn-default';

$output119 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output119 .= '
												';
return $output119;
};
$arguments117 = array();

$output116 .= '';

$output116 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['identifier'] = NULL;
$arguments133['size'] = 'small';
$arguments133['overlay'] = NULL;
$arguments133['state'] = 'default';
$arguments133['alternativeMarkupIdentifier'] = NULL;
$arguments133['identifier'] = 'actions-edit-hide';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);
};
$arguments129 = array();
$arguments129['action'] = NULL;
$arguments129['arguments'] = array (
);
$arguments129['controller'] = NULL;
$arguments129['extensionName'] = NULL;
$arguments129['pluginName'] = NULL;
$arguments129['pageUid'] = NULL;
$arguments129['pageType'] = 0;
$arguments129['noCache'] = false;
$arguments129['noCacheHash'] = false;
$arguments129['section'] = '';
$arguments129['format'] = '';
$arguments129['linkAccessRestrictedPages'] = false;
$arguments129['additionalParams'] = array (
);
$arguments129['absolute'] = false;
$arguments129['addQueryString'] = false;
$arguments129['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments129['addQueryStringMethod'] = NULL;
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$arguments129['class'] = NULL;
$arguments129['dir'] = NULL;
$arguments129['id'] = NULL;
$arguments129['lang'] = NULL;
$arguments129['style'] = NULL;
$arguments129['title'] = NULL;
$arguments129['accesskey'] = NULL;
$arguments129['tabindex'] = NULL;
$arguments129['onclick'] = NULL;
$arguments129['name'] = NULL;
$arguments129['rel'] = NULL;
$arguments129['rev'] = NULL;
$arguments129['target'] = NULL;
$arguments129['action'] = 'hide';
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array132);
$arguments129['arguments'] = $array131;
$arguments129['class'] = 'btn btn-default';

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output128 .= '
												';
return $output128;
};
$arguments126 = array();
$arguments126['if'] = NULL;

$output116 .= '';

$output116 .= '
											';
return $output116;
};
$arguments97 = array();
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$arguments97['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array113 = array();
$array114 = array (
);$array113['0'] = $renderingContext->getVariableProvider()->getByPath('storage.hidden', $array114);

$expression115 = function($context) {return ($context["node0"]);};
$arguments97['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression115(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);
$arguments97['__thenClosure'] = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['identifier'] = NULL;
$arguments104['size'] = 'small';
$arguments104['overlay'] = NULL;
$arguments104['state'] = 'default';
$arguments104['alternativeMarkupIdentifier'] = NULL;
$arguments104['identifier'] = 'actions-edit-unhide';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);
};
$arguments100 = array();
$arguments100['action'] = NULL;
$arguments100['arguments'] = array (
);
$arguments100['controller'] = NULL;
$arguments100['extensionName'] = NULL;
$arguments100['pluginName'] = NULL;
$arguments100['pageUid'] = NULL;
$arguments100['pageType'] = 0;
$arguments100['noCache'] = false;
$arguments100['noCacheHash'] = false;
$arguments100['section'] = '';
$arguments100['format'] = '';
$arguments100['linkAccessRestrictedPages'] = false;
$arguments100['additionalParams'] = array (
);
$arguments100['absolute'] = false;
$arguments100['addQueryString'] = false;
$arguments100['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments100['addQueryStringMethod'] = NULL;
$arguments100['additionalAttributes'] = NULL;
$arguments100['data'] = NULL;
$arguments100['class'] = NULL;
$arguments100['dir'] = NULL;
$arguments100['id'] = NULL;
$arguments100['lang'] = NULL;
$arguments100['style'] = NULL;
$arguments100['title'] = NULL;
$arguments100['accesskey'] = NULL;
$arguments100['tabindex'] = NULL;
$arguments100['onclick'] = NULL;
$arguments100['name'] = NULL;
$arguments100['rel'] = NULL;
$arguments100['rev'] = NULL;
$arguments100['target'] = NULL;
$arguments100['action'] = 'activate';
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array103);
$arguments100['arguments'] = $array102;
$arguments100['class'] = 'btn btn-default';

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
												';
return $output99;
};
$arguments97['__elseClosures'][] = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['identifier'] = NULL;
$arguments111['size'] = 'small';
$arguments111['overlay'] = NULL;
$arguments111['state'] = 'default';
$arguments111['alternativeMarkupIdentifier'] = NULL;
$arguments111['identifier'] = 'actions-edit-hide';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);
};
$arguments107 = array();
$arguments107['action'] = NULL;
$arguments107['arguments'] = array (
);
$arguments107['controller'] = NULL;
$arguments107['extensionName'] = NULL;
$arguments107['pluginName'] = NULL;
$arguments107['pageUid'] = NULL;
$arguments107['pageType'] = 0;
$arguments107['noCache'] = false;
$arguments107['noCacheHash'] = false;
$arguments107['section'] = '';
$arguments107['format'] = '';
$arguments107['linkAccessRestrictedPages'] = false;
$arguments107['additionalParams'] = array (
);
$arguments107['absolute'] = false;
$arguments107['addQueryString'] = false;
$arguments107['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments107['addQueryStringMethod'] = NULL;
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['class'] = NULL;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
$arguments107['name'] = NULL;
$arguments107['rel'] = NULL;
$arguments107['rev'] = NULL;
$arguments107['target'] = NULL;
$arguments107['action'] = 'hide';
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array110);
$arguments107['arguments'] = $array109;
$arguments107['class'] = 'btn btn-default';

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
												';
return $output106;
};

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output44 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['identifier'] = NULL;
$arguments154['size'] = 'small';
$arguments154['overlay'] = NULL;
$arguments154['state'] = 'default';
$arguments154['alternativeMarkupIdentifier'] = NULL;
$arguments154['identifier'] = 'actions-edit-delete';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);
};
$arguments135 = array();
$arguments135['action'] = NULL;
$arguments135['arguments'] = array (
);
$arguments135['controller'] = NULL;
$arguments135['extensionName'] = NULL;
$arguments135['pluginName'] = NULL;
$arguments135['pageUid'] = NULL;
$arguments135['pageType'] = 0;
$arguments135['noCache'] = false;
$arguments135['noCacheHash'] = false;
$arguments135['section'] = '';
$arguments135['format'] = '';
$arguments135['linkAccessRestrictedPages'] = false;
$arguments135['additionalParams'] = array (
);
$arguments135['absolute'] = false;
$arguments135['addQueryString'] = false;
$arguments135['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments135['addQueryStringMethod'] = NULL;
$arguments135['additionalAttributes'] = NULL;
$arguments135['data'] = NULL;
$arguments135['class'] = NULL;
$arguments135['dir'] = NULL;
$arguments135['id'] = NULL;
$arguments135['lang'] = NULL;
$arguments135['style'] = NULL;
$arguments135['title'] = NULL;
$arguments135['accesskey'] = NULL;
$arguments135['tabindex'] = NULL;
$arguments135['onclick'] = NULL;
$arguments135['name'] = NULL;
$arguments135['rel'] = NULL;
$arguments135['rev'] = NULL;
$arguments135['target'] = NULL;
$arguments135['action'] = 'delete';
// Rendering Array
$array137 = array();
$array137['type'] = 'tt_content';
$array138 = array (
);$array137['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array138);
$arguments135['arguments'] = $array137;
$arguments135['class'] = 'deleteCe btn btn-default';
// Rendering Array
$array139 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['action'] = NULL;
$arguments140['arguments'] = array (
);
$arguments140['controller'] = NULL;
$arguments140['extensionName'] = NULL;
$arguments140['pluginName'] = NULL;
$arguments140['pageUid'] = NULL;
$arguments140['pageType'] = 0;
$arguments140['noCache'] = false;
$arguments140['noCacheHash'] = false;
$arguments140['section'] = '';
$arguments140['format'] = '';
$arguments140['linkAccessRestrictedPages'] = false;
$arguments140['additionalParams'] = array (
);
$arguments140['absolute'] = false;
$arguments140['addQueryString'] = false;
$arguments140['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments140['addQueryStringMethod'] = NULL;
$arguments140['action'] = 'purge';
// Rendering Array
$array142 = array();
$array142['type'] = 'tt_content';
$array143 = array (
);$array142['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array143);
$arguments140['arguments'] = $array142;
$array139['data-purge-url'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);
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
$arguments144['key'] = 'tx_mask.field.titleDelete';
$array139['data-title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['key'] = NULL;
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['htmlEscape'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$arguments146['key'] = 'tx_mask.all.confirmdelete';
$array139['data-content'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['key'] = NULL;
$arguments148['id'] = NULL;
$arguments148['default'] = NULL;
$arguments148['htmlEscape'] = NULL;
$arguments148['arguments'] = NULL;
$arguments148['extensionName'] = NULL;
$arguments148['key'] = 'tx_mask.all.abort';
$array139['data-button-close-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['key'] = NULL;
$arguments150['id'] = NULL;
$arguments150['default'] = NULL;
$arguments150['htmlEscape'] = NULL;
$arguments150['arguments'] = NULL;
$arguments150['extensionName'] = NULL;
$arguments150['key'] = 'tx_mask.all.delete';
$array139['data-button-ok-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['key'] = NULL;
$arguments152['id'] = NULL;
$arguments152['default'] = NULL;
$arguments152['htmlEscape'] = NULL;
$arguments152['arguments'] = NULL;
$arguments152['extensionName'] = NULL;
$arguments152['key'] = 'tx_mask.all.purge';
$array139['data-button-purge-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);
$arguments135['additionalAttributes'] = $array139;

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output44 .= '
										</div>
									</td>
								</tr>
							';
return $output44;
};
$arguments41 = array();
$arguments41['each'] = NULL;
$arguments41['as'] = NULL;
$arguments41['key'] = NULL;
$arguments41['reverse'] = false;
$arguments41['iteration'] = NULL;
$array43 = array (
);$arguments41['each'] = $renderingContext->getVariableProvider()->getByPath('storages.tt_content.elements', $array43);
$arguments41['as'] = 'storage';
$arguments41['key'] = 'key';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output0 .= '
							</tbody>
						</table>
					</div>
				</div>
				<div class="typo3-messages">
					<div class="alert alert-info" style="background: #d8d8d8;color: #333;">
						<div class="media">
							<div class="media-left">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-info fa-stack-1x"></i>
								</span>
							</div>
							<div class="media-body"><p class="alert-message">Information about Mask for TYPO3 9: <a href="https://mask.webprofil.at/mask/typo3-9" target="_blank">https://mask.webprofil.at/mask/typo3-9</a></p></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output156 = '';

$output156 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['name'] = NULL;
$arguments157['name'] = 'Default';

$output156 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext), ENT_QUOTES);

$output156 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output161 = '';

$output161 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['section'] = NULL;
$arguments162['partial'] = NULL;
$arguments162['delegate'] = NULL;
$arguments162['arguments'] = array (
);
$arguments162['optional'] = false;
$arguments162['default'] = NULL;
$arguments162['contentAs'] = NULL;
$arguments162['partial'] = 'General/Tabs';
// Rendering Array
$array164 = array();
$array164['active'] = 'WizardContent';
$arguments162['arguments'] = $array164;

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output161 .= '

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="DTM-mask-1">
			<div class="form-section">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['queueIdentifier'] = NULL;
$arguments165['as'] = NULL;

$output161 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output161 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
					<div class="typo3-message message-error"><strong>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['key'] = NULL;
$arguments171['id'] = NULL;
$arguments171['default'] = NULL;
$arguments171['htmlEscape'] = NULL;
$arguments171['arguments'] = NULL;
$arguments171['extensionName'] = NULL;
$arguments171['key'] = 'tx_mask.content.error';

$output170 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext), ENT_QUOTES);

$output170 .= '
					</strong> ';
$array173 = array (
);
$output170 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message', $array173), ENT_QUOTES);

$output170 .= '
					</div>
				';
return $output170;
};
$arguments167 = array();
$arguments167['each'] = NULL;
$arguments167['as'] = NULL;
$arguments167['key'] = NULL;
$arguments167['reverse'] = false;
$arguments167['iteration'] = NULL;
$array169 = array (
);$arguments167['each'] = $renderingContext->getVariableProvider()->getByPath('messages', $array169);
$arguments167['as'] = 'message';

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output161 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['additionalAttributes'] = NULL;
$arguments183['data'] = NULL;
$arguments183['name'] = NULL;
$arguments183['value'] = NULL;
$arguments183['property'] = NULL;
$arguments183['disabled'] = NULL;
$arguments183['class'] = NULL;
$arguments183['dir'] = NULL;
$arguments183['id'] = NULL;
$arguments183['lang'] = NULL;
$arguments183['style'] = NULL;
$arguments183['title'] = NULL;
$arguments183['accesskey'] = NULL;
$arguments183['tabindex'] = NULL;
$arguments183['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['key'] = NULL;
$arguments185['id'] = NULL;
$arguments185['default'] = NULL;
$arguments185['htmlEscape'] = NULL;
$arguments185['arguments'] = NULL;
$arguments185['extensionName'] = NULL;
$arguments185['key'] = 'tx_mask.all.createmissingfolders';
$arguments183['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);
$arguments183['class'] = 'btn btn-primary';

$output182 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output182 .= '
					';
return $output182;
};
$arguments180 = array();
$arguments180['additionalAttributes'] = NULL;
$arguments180['data'] = NULL;
$arguments180['action'] = NULL;
$arguments180['arguments'] = array (
);
$arguments180['controller'] = NULL;
$arguments180['extensionName'] = NULL;
$arguments180['pluginName'] = NULL;
$arguments180['pageUid'] = NULL;
$arguments180['object'] = NULL;
$arguments180['pageType'] = 0;
$arguments180['noCache'] = false;
$arguments180['noCacheHash'] = false;
$arguments180['section'] = '';
$arguments180['format'] = '';
$arguments180['additionalParams'] = array (
);
$arguments180['absolute'] = false;
$arguments180['addQueryString'] = false;
$arguments180['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments180['addQueryStringMethod'] = 'GET';
$arguments180['fieldNamePrefix'] = NULL;
$arguments180['actionUri'] = NULL;
$arguments180['objectName'] = NULL;
$arguments180['hiddenFieldClassName'] = NULL;
$arguments180['enctype'] = NULL;
$arguments180['method'] = NULL;
$arguments180['name'] = NULL;
$arguments180['onreset'] = NULL;
$arguments180['onsubmit'] = NULL;
$arguments180['target'] = NULL;
$arguments180['class'] = NULL;
$arguments180['dir'] = NULL;
$arguments180['id'] = NULL;
$arguments180['lang'] = NULL;
$arguments180['style'] = NULL;
$arguments180['title'] = NULL;
$arguments180['accesskey'] = NULL;
$arguments180['tabindex'] = NULL;
$arguments180['onclick'] = NULL;
$arguments180['action'] = 'createMissingFolders';
$arguments180['controller'] = 'WizardContent';

$output179 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
				';
return $output179;
};
$arguments174 = array();
$arguments174['then'] = NULL;
$arguments174['else'] = NULL;
$arguments174['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array176 = array();
$array177 = array (
);$array176['0'] = $renderingContext->getVariableProvider()->getByPath('missingFolders', $array177);

$expression178 = function($context) {return ($context["node0"]);};
$arguments174['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression178(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array176)
					),
					$renderingContext
				);
$arguments174['__thenClosure'] = $renderChildrenClosure175;

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output161 .= '

				<div class="panel panel-space panel-default">
					<div class="panel-heading">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['key'] = NULL;
$arguments187['id'] = NULL;
$arguments187['default'] = NULL;
$arguments187['htmlEscape'] = NULL;
$arguments187['arguments'] = NULL;
$arguments187['extensionName'] = NULL;
$arguments187['key'] = 'tx_mask.all.contentelements';

$output161 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext), ENT_QUOTES);

$output161 .= '
					</div>


					<div class="table-fit collapse in" id="recordlist-be_users" data-state="expanded">
						<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-hover">
							<thead>
							<tr>
								<th class="text-nowrap col-icon">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['identifier'] = NULL;
$arguments192['size'] = 'small';
$arguments192['overlay'] = NULL;
$arguments192['state'] = 'default';
$arguments192['alternativeMarkupIdentifier'] = NULL;
$arguments192['identifier'] = 'actions-document-new';

$output191 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output191 .= '
									';
return $output191;
};
$arguments189 = array();
$arguments189['action'] = NULL;
$arguments189['arguments'] = array (
);
$arguments189['controller'] = NULL;
$arguments189['extensionName'] = NULL;
$arguments189['pluginName'] = NULL;
$arguments189['pageUid'] = NULL;
$arguments189['pageType'] = 0;
$arguments189['noCache'] = false;
$arguments189['noCacheHash'] = false;
$arguments189['section'] = '';
$arguments189['format'] = '';
$arguments189['linkAccessRestrictedPages'] = false;
$arguments189['additionalParams'] = array (
);
$arguments189['absolute'] = false;
$arguments189['addQueryString'] = false;
$arguments189['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments189['addQueryStringMethod'] = NULL;
$arguments189['additionalAttributes'] = NULL;
$arguments189['data'] = NULL;
$arguments189['class'] = NULL;
$arguments189['dir'] = NULL;
$arguments189['id'] = NULL;
$arguments189['lang'] = NULL;
$arguments189['style'] = NULL;
$arguments189['title'] = NULL;
$arguments189['accesskey'] = NULL;
$arguments189['tabindex'] = NULL;
$arguments189['onclick'] = NULL;
$arguments189['name'] = NULL;
$arguments189['rel'] = NULL;
$arguments189['rev'] = NULL;
$arguments189['target'] = NULL;
$arguments189['action'] = 'new';
$arguments189['class'] = 'btn btn-default';

$output161 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output161 .= '
								</th>
								<th class="text-nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['key'] = NULL;
$arguments194['id'] = NULL;
$arguments194['default'] = NULL;
$arguments194['htmlEscape'] = NULL;
$arguments194['arguments'] = NULL;
$arguments194['extensionName'] = NULL;
$arguments194['key'] = 'tx_mask.content.image';

$output161 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext), ENT_QUOTES);

$output161 .= '
								</th>
								<th class="text-nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments196 = array();
$arguments196['key'] = NULL;
$arguments196['id'] = NULL;
$arguments196['default'] = NULL;
$arguments196['htmlEscape'] = NULL;
$arguments196['arguments'] = NULL;
$arguments196['extensionName'] = NULL;
$arguments196['key'] = 'tx_mask.content.titlekey';

$output161 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext), ENT_QUOTES);

$output161 .= '
								</th>
								<th class="text-nowrap col-title">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['key'] = NULL;
$arguments198['id'] = NULL;
$arguments198['default'] = NULL;
$arguments198['htmlEscape'] = NULL;
$arguments198['arguments'] = NULL;
$arguments198['extensionName'] = NULL;
$arguments198['key'] = 'tx_mask.content.description';

$output161 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext), ENT_QUOTES);

$output161 .= '
								</th>
								<th class="text-nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['key'] = NULL;
$arguments200['id'] = NULL;
$arguments200['default'] = NULL;
$arguments200['htmlEscape'] = NULL;
$arguments200['arguments'] = NULL;
$arguments200['extensionName'] = NULL;
$arguments200['key'] = 'tx_mask.content.count';

$output161 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext), ENT_QUOTES);

$output161 .= '
								</th>
								<th class="text-nowrap col-control">&nbsp;
								</td>
							</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
								<tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['then'] = NULL;
$arguments206['else'] = NULL;
$arguments206['condition'] = false;
$arguments206['then'] = 'element-hidden';

$output205 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= '">
									<td></td>
									<td>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['identifier'] = NULL;
$arguments213['size'] = 'small';
$arguments213['overlay'] = NULL;
$arguments213['state'] = 'default';
$arguments213['alternativeMarkupIdentifier'] = NULL;
$output215 = '';

$output215 .= 'mask-ce-';
$array216 = array (
);
$output215 .= $renderingContext->getVariableProvider()->getByPath('key', $array216);
$arguments213['identifier'] = $output215;
$arguments213['size'] = 'large';

$output212 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output212 .= '
										';
return $output212;
};
$arguments208 = array();
$arguments208['action'] = NULL;
$arguments208['arguments'] = array (
);
$arguments208['controller'] = NULL;
$arguments208['extensionName'] = NULL;
$arguments208['pluginName'] = NULL;
$arguments208['pageUid'] = NULL;
$arguments208['pageType'] = 0;
$arguments208['noCache'] = false;
$arguments208['noCacheHash'] = false;
$arguments208['section'] = '';
$arguments208['format'] = '';
$arguments208['linkAccessRestrictedPages'] = false;
$arguments208['additionalParams'] = array (
);
$arguments208['absolute'] = false;
$arguments208['addQueryString'] = false;
$arguments208['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments208['addQueryStringMethod'] = NULL;
$arguments208['additionalAttributes'] = NULL;
$arguments208['data'] = NULL;
$arguments208['class'] = NULL;
$arguments208['dir'] = NULL;
$arguments208['id'] = NULL;
$arguments208['lang'] = NULL;
$arguments208['style'] = NULL;
$arguments208['title'] = NULL;
$arguments208['accesskey'] = NULL;
$arguments208['tabindex'] = NULL;
$arguments208['onclick'] = NULL;
$arguments208['name'] = NULL;
$arguments208['rel'] = NULL;
$arguments208['rev'] = NULL;
$arguments208['target'] = NULL;
$arguments208['action'] = 'edit';
// Rendering Array
$array210 = array();
$array210['type'] = 'tt_content';
$array211 = array (
);$array210['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array211);
$arguments208['arguments'] = $array210;

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output205 .= '
									</td>
									<td class="text-nowrap">
										<p><strong>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$array225 = array (
);return $renderingContext->getVariableProvider()->getByPath('storage.label', $array225);
};
$arguments222 = array();
$arguments222['key'] = NULL;
$arguments222['id'] = NULL;
$arguments222['default'] = NULL;
$arguments222['htmlEscape'] = NULL;
$arguments222['arguments'] = NULL;
$arguments222['extensionName'] = NULL;
$array224 = array (
);$arguments222['key'] = $renderingContext->getVariableProvider()->getByPath('storage.label', $array224);

$output221 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext), ENT_QUOTES);

$output221 .= '
											';
return $output221;
};
$arguments217 = array();
$arguments217['action'] = NULL;
$arguments217['arguments'] = array (
);
$arguments217['controller'] = NULL;
$arguments217['extensionName'] = NULL;
$arguments217['pluginName'] = NULL;
$arguments217['pageUid'] = NULL;
$arguments217['pageType'] = 0;
$arguments217['noCache'] = false;
$arguments217['noCacheHash'] = false;
$arguments217['section'] = '';
$arguments217['format'] = '';
$arguments217['linkAccessRestrictedPages'] = false;
$arguments217['additionalParams'] = array (
);
$arguments217['absolute'] = false;
$arguments217['addQueryString'] = false;
$arguments217['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments217['addQueryStringMethod'] = NULL;
$arguments217['additionalAttributes'] = NULL;
$arguments217['data'] = NULL;
$arguments217['class'] = NULL;
$arguments217['dir'] = NULL;
$arguments217['id'] = NULL;
$arguments217['lang'] = NULL;
$arguments217['style'] = NULL;
$arguments217['title'] = NULL;
$arguments217['accesskey'] = NULL;
$arguments217['tabindex'] = NULL;
$arguments217['onclick'] = NULL;
$arguments217['name'] = NULL;
$arguments217['rel'] = NULL;
$arguments217['rev'] = NULL;
$arguments217['target'] = NULL;
$arguments217['action'] = 'edit';
// Rendering Array
$array219 = array();
$array219['type'] = 'tt_content';
$array220 = array (
);$array219['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array220);
$arguments217['arguments'] = $array219;

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output205 .= '
										</strong><br/>';
$array226 = array (
);
$output205 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('key', $array226), ENT_QUOTES);

$output205 .= '
										</p>
									</td>

									<td>
										<p>';
$array227 = array (
);
$output205 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('storage.description', $array227), ENT_QUOTES);

$output205 .= '</p>
										';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LinkViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments228 = array();
$arguments228['data'] = NULL;
$array230 = array (
);$arguments228['data'] = $renderingContext->getVariableProvider()->getByPath('key', $array230);

$output205 .= MASK\Mask\ViewHelpers\LinkViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output205 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
return '
												<i class="fa fa-plus-circle "></i>
											';
};
$arguments239 = array();
$arguments239['action'] = NULL;
$arguments239['arguments'] = array (
);
$arguments239['controller'] = NULL;
$arguments239['extensionName'] = NULL;
$arguments239['pluginName'] = NULL;
$arguments239['pageUid'] = NULL;
$arguments239['pageType'] = 0;
$arguments239['noCache'] = false;
$arguments239['noCacheHash'] = false;
$arguments239['section'] = '';
$arguments239['format'] = '';
$arguments239['linkAccessRestrictedPages'] = false;
$arguments239['additionalParams'] = array (
);
$arguments239['absolute'] = false;
$arguments239['addQueryString'] = false;
$arguments239['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments239['addQueryStringMethod'] = NULL;
$arguments239['additionalAttributes'] = NULL;
$arguments239['data'] = NULL;
$arguments239['class'] = NULL;
$arguments239['dir'] = NULL;
$arguments239['id'] = NULL;
$arguments239['lang'] = NULL;
$arguments239['style'] = NULL;
$arguments239['title'] = NULL;
$arguments239['accesskey'] = NULL;
$arguments239['tabindex'] = NULL;
$arguments239['onclick'] = NULL;
$arguments239['name'] = NULL;
$arguments239['rel'] = NULL;
$arguments239['rev'] = NULL;
$arguments239['target'] = NULL;
$arguments239['action'] = 'createHtml';
// Rendering Array
$array241 = array();
$array242 = array (
);$array241['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array242);
$arguments239['arguments'] = $array241;

$output238 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output238 .= '
										';
return $output238;
};
$arguments231 = array();
$arguments231['then'] = NULL;
$arguments231['else'] = NULL;
$arguments231['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array233 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\LinkViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments234 = array();
$arguments234['data'] = NULL;
$array236 = array (
);$arguments234['data'] = $renderingContext->getVariableProvider()->getByPath('key', $array236);
$array233['0'] = MASK\Mask\ViewHelpers\LinkViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$expression237 = function($context) {return ($context["node0"]);};
$arguments231['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression237(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array233)
					),
					$renderingContext
				);
$arguments231['__thenClosure'] = $renderChildrenClosure232;

$output205 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output205 .= '
									</td>
									<td class="text-center text-muted">
										';
// Rendering ViewHelper MASK\Mask\ViewHelpers\ElementCountViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['key'] = NULL;
$array245 = array (
);$arguments243['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array245);

$output205 .= htmlspecialchars(MASK\Mask\ViewHelpers\ElementCountViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext), ENT_QUOTES);

$output205 .= '
									</td>
									<td class="text-nowrap">
										<div class="btn-group" role="group">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments250 = array();
$arguments250['identifier'] = NULL;
$arguments250['size'] = 'small';
$arguments250['overlay'] = NULL;
$arguments250['state'] = 'default';
$arguments250['alternativeMarkupIdentifier'] = NULL;
$arguments250['identifier'] = 'sysnote-type-2';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);
};
$arguments246 = array();
$arguments246['action'] = NULL;
$arguments246['arguments'] = array (
);
$arguments246['controller'] = NULL;
$arguments246['extensionName'] = NULL;
$arguments246['pluginName'] = NULL;
$arguments246['pageUid'] = NULL;
$arguments246['pageType'] = 0;
$arguments246['noCache'] = false;
$arguments246['noCacheHash'] = false;
$arguments246['section'] = '';
$arguments246['format'] = '';
$arguments246['linkAccessRestrictedPages'] = false;
$arguments246['additionalParams'] = array (
);
$arguments246['absolute'] = false;
$arguments246['addQueryString'] = false;
$arguments246['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments246['addQueryStringMethod'] = NULL;
$arguments246['additionalAttributes'] = NULL;
$arguments246['data'] = NULL;
$arguments246['class'] = NULL;
$arguments246['dir'] = NULL;
$arguments246['id'] = NULL;
$arguments246['lang'] = NULL;
$arguments246['style'] = NULL;
$arguments246['title'] = NULL;
$arguments246['accesskey'] = NULL;
$arguments246['tabindex'] = NULL;
$arguments246['onclick'] = NULL;
$arguments246['name'] = NULL;
$arguments246['rel'] = NULL;
$arguments246['rev'] = NULL;
$arguments246['target'] = NULL;
$arguments246['action'] = 'showHtml';
// Rendering Array
$array248 = array();
$array249 = array (
);$array248['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array249);
$array248['table'] = 'tt_content';
$arguments246['arguments'] = $array248;
$arguments246['onclick'] = 'window.open(this.href, \'HTML\', \'width=800,height=600,resizable=yes,scrollbars=yes\');
												return false;';
$arguments246['class'] = 'btn btn-default';

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output205 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['identifier'] = NULL;
$arguments256['size'] = 'small';
$arguments256['overlay'] = NULL;
$arguments256['state'] = 'default';
$arguments256['alternativeMarkupIdentifier'] = NULL;
$arguments256['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);
};
$arguments252 = array();
$arguments252['action'] = NULL;
$arguments252['arguments'] = array (
);
$arguments252['controller'] = NULL;
$arguments252['extensionName'] = NULL;
$arguments252['pluginName'] = NULL;
$arguments252['pageUid'] = NULL;
$arguments252['pageType'] = 0;
$arguments252['noCache'] = false;
$arguments252['noCacheHash'] = false;
$arguments252['section'] = '';
$arguments252['format'] = '';
$arguments252['linkAccessRestrictedPages'] = false;
$arguments252['additionalParams'] = array (
);
$arguments252['absolute'] = false;
$arguments252['addQueryString'] = false;
$arguments252['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments252['addQueryStringMethod'] = NULL;
$arguments252['additionalAttributes'] = NULL;
$arguments252['data'] = NULL;
$arguments252['class'] = NULL;
$arguments252['dir'] = NULL;
$arguments252['id'] = NULL;
$arguments252['lang'] = NULL;
$arguments252['style'] = NULL;
$arguments252['title'] = NULL;
$arguments252['accesskey'] = NULL;
$arguments252['tabindex'] = NULL;
$arguments252['onclick'] = NULL;
$arguments252['name'] = NULL;
$arguments252['rel'] = NULL;
$arguments252['rev'] = NULL;
$arguments252['target'] = NULL;
$arguments252['action'] = 'edit';
// Rendering Array
$array254 = array();
$array254['type'] = 'tt_content';
$array255 = array (
);$array254['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array255);
$arguments252['arguments'] = $array254;
$arguments252['class'] = 'btn btn-default';

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output205 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
$output277 = '';

$output277 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments285 = array();
$arguments285['identifier'] = NULL;
$arguments285['size'] = 'small';
$arguments285['overlay'] = NULL;
$arguments285['state'] = 'default';
$arguments285['alternativeMarkupIdentifier'] = NULL;
$arguments285['identifier'] = 'actions-edit-unhide';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);
};
$arguments281 = array();
$arguments281['action'] = NULL;
$arguments281['arguments'] = array (
);
$arguments281['controller'] = NULL;
$arguments281['extensionName'] = NULL;
$arguments281['pluginName'] = NULL;
$arguments281['pageUid'] = NULL;
$arguments281['pageType'] = 0;
$arguments281['noCache'] = false;
$arguments281['noCacheHash'] = false;
$arguments281['section'] = '';
$arguments281['format'] = '';
$arguments281['linkAccessRestrictedPages'] = false;
$arguments281['additionalParams'] = array (
);
$arguments281['absolute'] = false;
$arguments281['addQueryString'] = false;
$arguments281['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments281['addQueryStringMethod'] = NULL;
$arguments281['additionalAttributes'] = NULL;
$arguments281['data'] = NULL;
$arguments281['class'] = NULL;
$arguments281['dir'] = NULL;
$arguments281['id'] = NULL;
$arguments281['lang'] = NULL;
$arguments281['style'] = NULL;
$arguments281['title'] = NULL;
$arguments281['accesskey'] = NULL;
$arguments281['tabindex'] = NULL;
$arguments281['onclick'] = NULL;
$arguments281['name'] = NULL;
$arguments281['rel'] = NULL;
$arguments281['rev'] = NULL;
$arguments281['target'] = NULL;
$arguments281['action'] = 'activate';
// Rendering Array
$array283 = array();
$array284 = array (
);$array283['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array284);
$arguments281['arguments'] = $array283;
$arguments281['class'] = 'btn btn-default';

$output280 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output280 .= '
												';
return $output280;
};
$arguments278 = array();

$output277 .= '';

$output277 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$output289 = '';

$output289 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments294 = array();
$arguments294['identifier'] = NULL;
$arguments294['size'] = 'small';
$arguments294['overlay'] = NULL;
$arguments294['state'] = 'default';
$arguments294['alternativeMarkupIdentifier'] = NULL;
$arguments294['identifier'] = 'actions-edit-hide';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);
};
$arguments290 = array();
$arguments290['action'] = NULL;
$arguments290['arguments'] = array (
);
$arguments290['controller'] = NULL;
$arguments290['extensionName'] = NULL;
$arguments290['pluginName'] = NULL;
$arguments290['pageUid'] = NULL;
$arguments290['pageType'] = 0;
$arguments290['noCache'] = false;
$arguments290['noCacheHash'] = false;
$arguments290['section'] = '';
$arguments290['format'] = '';
$arguments290['linkAccessRestrictedPages'] = false;
$arguments290['additionalParams'] = array (
);
$arguments290['absolute'] = false;
$arguments290['addQueryString'] = false;
$arguments290['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments290['addQueryStringMethod'] = NULL;
$arguments290['additionalAttributes'] = NULL;
$arguments290['data'] = NULL;
$arguments290['class'] = NULL;
$arguments290['dir'] = NULL;
$arguments290['id'] = NULL;
$arguments290['lang'] = NULL;
$arguments290['style'] = NULL;
$arguments290['title'] = NULL;
$arguments290['accesskey'] = NULL;
$arguments290['tabindex'] = NULL;
$arguments290['onclick'] = NULL;
$arguments290['name'] = NULL;
$arguments290['rel'] = NULL;
$arguments290['rev'] = NULL;
$arguments290['target'] = NULL;
$arguments290['action'] = 'hide';
// Rendering Array
$array292 = array();
$array293 = array (
);$array292['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array293);
$arguments290['arguments'] = $array292;
$arguments290['class'] = 'btn btn-default';

$output289 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);

$output289 .= '
												';
return $output289;
};
$arguments287 = array();
$arguments287['if'] = NULL;

$output277 .= '';

$output277 .= '
											';
return $output277;
};
$arguments258 = array();
$arguments258['then'] = NULL;
$arguments258['else'] = NULL;
$arguments258['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array274 = array();
$array275 = array (
);$array274['0'] = $renderingContext->getVariableProvider()->getByPath('storage.hidden', $array275);

$expression276 = function($context) {return ($context["node0"]);};
$arguments258['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression276(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array274)
					),
					$renderingContext
				);
$arguments258['__thenClosure'] = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments265 = array();
$arguments265['identifier'] = NULL;
$arguments265['size'] = 'small';
$arguments265['overlay'] = NULL;
$arguments265['state'] = 'default';
$arguments265['alternativeMarkupIdentifier'] = NULL;
$arguments265['identifier'] = 'actions-edit-unhide';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);
};
$arguments261 = array();
$arguments261['action'] = NULL;
$arguments261['arguments'] = array (
);
$arguments261['controller'] = NULL;
$arguments261['extensionName'] = NULL;
$arguments261['pluginName'] = NULL;
$arguments261['pageUid'] = NULL;
$arguments261['pageType'] = 0;
$arguments261['noCache'] = false;
$arguments261['noCacheHash'] = false;
$arguments261['section'] = '';
$arguments261['format'] = '';
$arguments261['linkAccessRestrictedPages'] = false;
$arguments261['additionalParams'] = array (
);
$arguments261['absolute'] = false;
$arguments261['addQueryString'] = false;
$arguments261['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments261['addQueryStringMethod'] = NULL;
$arguments261['additionalAttributes'] = NULL;
$arguments261['data'] = NULL;
$arguments261['class'] = NULL;
$arguments261['dir'] = NULL;
$arguments261['id'] = NULL;
$arguments261['lang'] = NULL;
$arguments261['style'] = NULL;
$arguments261['title'] = NULL;
$arguments261['accesskey'] = NULL;
$arguments261['tabindex'] = NULL;
$arguments261['onclick'] = NULL;
$arguments261['name'] = NULL;
$arguments261['rel'] = NULL;
$arguments261['rev'] = NULL;
$arguments261['target'] = NULL;
$arguments261['action'] = 'activate';
// Rendering Array
$array263 = array();
$array264 = array (
);$array263['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array264);
$arguments261['arguments'] = $array263;
$arguments261['class'] = 'btn btn-default';

$output260 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output260 .= '
												';
return $output260;
};
$arguments258['__elseClosures'][] = function() use ($renderingContext, $self) {
$output267 = '';

$output267 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments272 = array();
$arguments272['identifier'] = NULL;
$arguments272['size'] = 'small';
$arguments272['overlay'] = NULL;
$arguments272['state'] = 'default';
$arguments272['alternativeMarkupIdentifier'] = NULL;
$arguments272['identifier'] = 'actions-edit-hide';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);
};
$arguments268 = array();
$arguments268['action'] = NULL;
$arguments268['arguments'] = array (
);
$arguments268['controller'] = NULL;
$arguments268['extensionName'] = NULL;
$arguments268['pluginName'] = NULL;
$arguments268['pageUid'] = NULL;
$arguments268['pageType'] = 0;
$arguments268['noCache'] = false;
$arguments268['noCacheHash'] = false;
$arguments268['section'] = '';
$arguments268['format'] = '';
$arguments268['linkAccessRestrictedPages'] = false;
$arguments268['additionalParams'] = array (
);
$arguments268['absolute'] = false;
$arguments268['addQueryString'] = false;
$arguments268['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments268['addQueryStringMethod'] = NULL;
$arguments268['additionalAttributes'] = NULL;
$arguments268['data'] = NULL;
$arguments268['class'] = NULL;
$arguments268['dir'] = NULL;
$arguments268['id'] = NULL;
$arguments268['lang'] = NULL;
$arguments268['style'] = NULL;
$arguments268['title'] = NULL;
$arguments268['accesskey'] = NULL;
$arguments268['tabindex'] = NULL;
$arguments268['onclick'] = NULL;
$arguments268['name'] = NULL;
$arguments268['rel'] = NULL;
$arguments268['rev'] = NULL;
$arguments268['target'] = NULL;
$arguments268['action'] = 'hide';
// Rendering Array
$array270 = array();
$array271 = array (
);$array270['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array271);
$arguments268['arguments'] = $array270;
$arguments268['class'] = 'btn btn-default';

$output267 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output267 .= '
												';
return $output267;
};

$output205 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output205 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments315 = array();
$arguments315['identifier'] = NULL;
$arguments315['size'] = 'small';
$arguments315['overlay'] = NULL;
$arguments315['state'] = 'default';
$arguments315['alternativeMarkupIdentifier'] = NULL;
$arguments315['identifier'] = 'actions-edit-delete';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);
};
$arguments296 = array();
$arguments296['action'] = NULL;
$arguments296['arguments'] = array (
);
$arguments296['controller'] = NULL;
$arguments296['extensionName'] = NULL;
$arguments296['pluginName'] = NULL;
$arguments296['pageUid'] = NULL;
$arguments296['pageType'] = 0;
$arguments296['noCache'] = false;
$arguments296['noCacheHash'] = false;
$arguments296['section'] = '';
$arguments296['format'] = '';
$arguments296['linkAccessRestrictedPages'] = false;
$arguments296['additionalParams'] = array (
);
$arguments296['absolute'] = false;
$arguments296['addQueryString'] = false;
$arguments296['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments296['addQueryStringMethod'] = NULL;
$arguments296['additionalAttributes'] = NULL;
$arguments296['data'] = NULL;
$arguments296['class'] = NULL;
$arguments296['dir'] = NULL;
$arguments296['id'] = NULL;
$arguments296['lang'] = NULL;
$arguments296['style'] = NULL;
$arguments296['title'] = NULL;
$arguments296['accesskey'] = NULL;
$arguments296['tabindex'] = NULL;
$arguments296['onclick'] = NULL;
$arguments296['name'] = NULL;
$arguments296['rel'] = NULL;
$arguments296['rev'] = NULL;
$arguments296['target'] = NULL;
$arguments296['action'] = 'delete';
// Rendering Array
$array298 = array();
$array298['type'] = 'tt_content';
$array299 = array (
);$array298['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array299);
$arguments296['arguments'] = $array298;
$arguments296['class'] = 'deleteCe btn btn-default';
// Rendering Array
$array300 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments301 = array();
$arguments301['action'] = NULL;
$arguments301['arguments'] = array (
);
$arguments301['controller'] = NULL;
$arguments301['extensionName'] = NULL;
$arguments301['pluginName'] = NULL;
$arguments301['pageUid'] = NULL;
$arguments301['pageType'] = 0;
$arguments301['noCache'] = false;
$arguments301['noCacheHash'] = false;
$arguments301['section'] = '';
$arguments301['format'] = '';
$arguments301['linkAccessRestrictedPages'] = false;
$arguments301['additionalParams'] = array (
);
$arguments301['absolute'] = false;
$arguments301['addQueryString'] = false;
$arguments301['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments301['addQueryStringMethod'] = NULL;
$arguments301['action'] = 'purge';
// Rendering Array
$array303 = array();
$array303['type'] = 'tt_content';
$array304 = array (
);$array303['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array304);
$arguments301['arguments'] = $array303;
$array300['data-purge-url'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments305 = array();
$arguments305['key'] = NULL;
$arguments305['id'] = NULL;
$arguments305['default'] = NULL;
$arguments305['htmlEscape'] = NULL;
$arguments305['arguments'] = NULL;
$arguments305['extensionName'] = NULL;
$arguments305['key'] = 'tx_mask.field.titleDelete';
$array300['data-title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments307 = array();
$arguments307['key'] = NULL;
$arguments307['id'] = NULL;
$arguments307['default'] = NULL;
$arguments307['htmlEscape'] = NULL;
$arguments307['arguments'] = NULL;
$arguments307['extensionName'] = NULL;
$arguments307['key'] = 'tx_mask.all.confirmdelete';
$array300['data-content'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments309 = array();
$arguments309['key'] = NULL;
$arguments309['id'] = NULL;
$arguments309['default'] = NULL;
$arguments309['htmlEscape'] = NULL;
$arguments309['arguments'] = NULL;
$arguments309['extensionName'] = NULL;
$arguments309['key'] = 'tx_mask.all.abort';
$array300['data-button-close-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments311 = array();
$arguments311['key'] = NULL;
$arguments311['id'] = NULL;
$arguments311['default'] = NULL;
$arguments311['htmlEscape'] = NULL;
$arguments311['arguments'] = NULL;
$arguments311['extensionName'] = NULL;
$arguments311['key'] = 'tx_mask.all.delete';
$array300['data-button-ok-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['key'] = NULL;
$arguments313['id'] = NULL;
$arguments313['default'] = NULL;
$arguments313['htmlEscape'] = NULL;
$arguments313['arguments'] = NULL;
$arguments313['extensionName'] = NULL;
$arguments313['key'] = 'tx_mask.all.purge';
$array300['data-button-purge-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);
$arguments296['additionalAttributes'] = $array300;

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output205 .= '
										</div>
									</td>
								</tr>
							';
return $output205;
};
$arguments202 = array();
$arguments202['each'] = NULL;
$arguments202['as'] = NULL;
$arguments202['key'] = NULL;
$arguments202['reverse'] = false;
$arguments202['iteration'] = NULL;
$array204 = array (
);$arguments202['each'] = $renderingContext->getVariableProvider()->getByPath('storages.tt_content.elements', $array204);
$arguments202['as'] = 'storage';
$arguments202['key'] = 'key';

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output161 .= '
							</tbody>
						</table>
					</div>
				</div>
				<div class="typo3-messages">
					<div class="alert alert-info" style="background: #d8d8d8;color: #333;">
						<div class="media">
							<div class="media-left">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-info fa-stack-1x"></i>
								</span>
							</div>
							<div class="media-body"><p class="alert-message">Information about Mask for TYPO3 9: <a href="https://mask.webprofil.at/mask/typo3-9" target="_blank">https://mask.webprofil.at/mask/typo3-9</a></p></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

';
return $output161;
};
$arguments159 = array();
$arguments159['name'] = NULL;
$arguments159['name'] = 'content';

$output156 .= '';

$output156 .= '
';

return $output156;
}


}
#