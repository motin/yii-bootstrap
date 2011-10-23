<?php
/**
 * BootCrumb class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

Yii::import('zii.widgets.CBreadcrumbs');
class BootCrumb extends CBreadcrumbs
{
	/**
	 * @property array the HTML attributes for the breadcrumbs container tag.
	 */
	public $htmlOptions=array('class'=>'breadcrumb');
	/**
	 * @property string the separator between links in the breadcrumbs. Defaults to ' / '.
	 */
	public $separator = '/';

	/**
	 * Renders the content of the widget.
	 */
	public function run()
	{
		$links = array();

		if ($this->homeLink === null)
		{
			if (!empty($this->links))
			{
				$content = BootHtml::link(Yii::t('bootstrap', 'Home'), Yii::app()->homeUrl);
				$links[] = $this->renderItem($content);
			}
			else
				$links[] = $this->renderItem(Yii::t('bootstrap', 'Home'), true);
		}
		else if ($this->homeLink !== false)
			$links[] = $this->homeLink;

		foreach ($this->links as $label=>$url)
		{
			if (is_string($label) || is_array($url))
			{
				$label = $this->encodeLabel ? BootHtml::encode($label) : $label;
				$content = BootHtml::link($label, $url);
				$links[] = $this->renderItem($content);
			}
			else
				$links[] = $this->renderItem($this->encodeLabel ? BootHtml::encode($url) : $url, true);
		}

		echo BootHtml::openTag('ul', $this->htmlOptions);
		echo implode('', $links);
		echo '</ul>';
	}

	/**
	 * Renders a single breadcrumb item.
	 * @param string $content the content.
	 * @param boolean $active whether the item is active.
	 * @return string the markup.
	 */
	protected function renderItem($content, $active=false)
	{
		$separator = !$active ? '<span class="divider">'.$this->separator.'</span>' : '';
		
		ob_start();
		echo BootHtml::openTag('li', $active ? array('class'=>'active') : array());
		echo $content.$separator;
		echo '</li>';
		return ob_get_clean();
	}
}
