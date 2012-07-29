<?php
/**
 * TbMenu class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2012-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package bootstrap.widgets
 */

Yii::import('bootstrap.widgets.TbBaseMenu');

class TbMenu extends TbBaseMenu
{
    // Menu types.
    const TYPE_TABS = 'tabs';
    const TYPE_PILLS = 'pills';
    const TYPE_LIST = 'list';

    /**
     * @var string the menu type.
     * Valid values are 'tabs' and 'pills'. Defaults to ''.
     */
    public $type;
    /**
     * @var boolean whether to stack navigation items.
     */
    public $stacked = false;
    /**
     * @var array the scroll-spy configuration.
     */
    public $scrollspy;

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();

        $classes = array('nav');

        $validTypes = array(self::TYPE_TABS, self::TYPE_PILLS, self::TYPE_LIST);

        if (isset($this->type) && in_array($this->type, $validTypes))
            $classes[] = 'nav-'.$this->type;

        if ($this->type !== self::TYPE_LIST && $this->stacked)
            $classes[] = 'nav-stacked';

        foreach ($this->items as $item)
        {
            if ($this->hasDropdown($item) && $this->isDropup($item))
            {
                $classes[] = 'dropup';
                break;
            }
        }

        if (!empty($classes))
        {
            $classes = implode(' ', $classes);
            if (isset($this->htmlOptions['class']))
                $this->htmlOptions['class'] .= ' '.$classes;
            else
                $this->htmlOptions['class'] = $classes;
        }

        if (isset($this->scrollspy) && is_array($this->scrollspy) && isset($this->scrollspy['spy']))
        {
            if (!isset($this->scrollspy['subject']))
                $this->scrollspy['subject'] = 'body';

            if (!isset($this->scrollspy['offset']))
                $this->scrollspy['offset'] = null;

            Yii::app()->bootstrap->spyOn($this->scrollspy['subject'], $this->scrollspy['spy'], $this->scrollspy['offset']);
        }
    }

    /**
     * Returns whether the given item has a dropdown.
     * @param array $item the item configuration
     * @return boolean the result
     */
    protected function hasDropdown($item)
    {
        return isset($item['items']) && !empty($item['items']);
    }

    /**
     * Returns whether the given item is a dropup.
     * @param array $item the item configuration
     * @return boolean the result
     */
    protected function isDropup($item)
    {
        return isset($item['dropup']) && $item['dropup'] === true;
    }

    /**
     * Returns the divider css class.
     * @return string the class name
     */
    public function getDividerCssClass()
    {
        return $this->type === self::TYPE_LIST ? 'divider' : 'divider-vertical';
    }
}
