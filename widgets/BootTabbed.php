<?php
/**
 * BootTabs class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

Yii::import('bootstrap.widgets.BootMenu');
Yii::import('bootstrap.widgets.BootWidget');

/**
 * Bootstrap JavaScript tabs widget.
 * @since 0.9.8
 * @todo Fix event support. http://twitter.github.com/bootstrap/javascript.html#tabs
 */
class BootTabbed extends BootWidget
{
	/**
	 * @var string the type of tabs to display. Defaults to 'tabs'.
	 * Valid values are 'tabs' and 'pills'.
	 */
    public $type = BootMenu::TYPE_TABS;
	/**
	 * @var array the tab configuration.
	 */
    public $tabs = array();

	public $encodeLabel = true;

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();
        $this->registerScriptFile('bootstrap-tab.js');
    }

    /**
     * Run this widget.
     */
    public function run()
    {
        $id = $this->getId();
        if (isset($this->htmlOptions['id']))
            $id = $this->htmlOptions['id'];
        else
            $this->htmlOptions['id'] = $id;

	    $panes = array();
	    $items = $this->normalizeTabs($this->tabs, $panes);

	    echo CHtml::openTag('div', $this->htmlOptions);

	    $this->controller->widget('bootstrap.widgets.BootMenu', array(
			'type'=>$this->type,
		    'items'=>$items,
	    ));

	    echo '<div class="tab-content">';
		echo implode('', $panes);
	    echo '</div></div>';

	    $this->registerScript(__CLASS__.'#'.$id, "jQuery('{$id}').tab('show');");

	    /*
        // Register the "show" event-handler.
        if (isset($this->events['show']))
        {
            $fn = CJavaScript::encode($this->events['show']);
            Yii::app()->clientScript->registerScript(__CLASS__.'#'.$this->id.'.show',
	                "jQuery('#{$id} a[data-toggle=\"tab\"').on('show', {$fn});");
        }

        // Register the "shown" event-handler.
        if (isset($this->events['shown']))
        {
            $fn = CJavaScript::encode($this->events['shown']);
            Yii::app()->clientScript->registerScript(__CLASS__.'#'.$this->id.'.shown',
	                "jQuery('#{$id} a[data-toggle=\"tab\"').on('shown', {$fn});");
        }
	    */
    }

	/**
	 * Normalizes the tab configuration.
	 * @param array $tabs the tab configuration
	 * @param array $panes a reference to the panes array
	 * @param integer $i the current index
	 * @return array the items
	 */
	protected function normalizeTabs($tabs, &$panes, &$i = 0)
	{
		$id = $this->getId();
		$transitions = Yii::app()->bootstrap->transitions;

		$items = array();

	    foreach ($tabs as &$tab)
	    {
		    $i++;
		    $item = array();

		    $itemId = isset($tab['id']) ? $tab['id'] : $id.'_tab_'.$i;

		    $item['label'] = isset($tab['label']) ? $tab['label'] : '';

		    if (!isset($tab['items']))
			    $item['url'] = '#'.$itemId;

		    if (isset($tab['itemOptions']))
			    $item['itemOptions'] = $tab['itemOptions'];

		    if ($i === 1)
		    {
			    if (isset($item['itemOptions']['class']))
	                $item['itemOptions']['class'] .= ' active';
	            else
		            $item['itemOptions']['class'] = 'active';
		    }

		    if (isset($tab['items']))
				$item['items'] = $this->normalizeTabs($tab['items'], $panes, $i);

		    $item['linkOptions']['data-toggle'] = 'tab';

		    if (!isset($tab['content']))
			    $tab['content'] = '';

		    if (!isset($tab['paneOptions']))
			    $tab['paneOptions'] = array();

		    $tab['paneOptions']['id'] = $itemId;

		    if (isset($tab['paneOptions']['class']))
			    $tab['paneOptions']['class'] .= ' tab-pane';
		    else
			    $tab['paneOptions']['class'] = 'tab-pane';

		    if ($transitions)
		        $tab['paneOptions']['class'] .= ' fade';

		    if ($i === 1)
		    {
			    if ($transitions)
					$tab['paneOptions']['class'] .= ' in';

			    $tab['paneOptions']['class'] .= ' active';
		    }

		    $items[] = $item;
		    $panes[] = CHtml::tag('div', $tab['paneOptions'], $tab['content']);
	    }

		return $items;
	}
}
