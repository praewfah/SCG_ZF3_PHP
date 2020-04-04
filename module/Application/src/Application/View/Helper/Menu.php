<?php

namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;

// This view helper class displays a menu bar.
class Menu extends AbstractHelper 
{
    // Menu items array.
    protected $items = [];
    
    // Active item's ID.
    protected $activeItemId = '';

    // Constructor.
    public function __construct($items = []) 
    {
        $this->items = $items;
    }

    // Sets menu items.
    public function setItems($items) 
    {
        $this->items = $items;
    }

    // Sets ID of the active items.
    public function setActiveItemId($activeItemId) 
    {
        $this->activeItemId = $activeItemId;
    }

    // Renders the menu.
    public function render() 
    {
        if (count($this->items) == 0)
            return ''; // Do nothing if there are no items.
                
        $result = '';

        // Render items
        foreach ($this->items as $item) {
            $result .= $this->renderItem($item);
        }

        return $result;
    }

    // Renders an item.
    protected function renderItem($item) 
    {
        $id = isset($item['id']) ? $item['id'] : '';
        $isActive = ($id == $this->activeItemId);
        $label = isset($item['label']) ? $item['label'] : '';

        $result = $dropdown = '';

        if (isset($item['dropdown'])) {
            foreach ($item['dropdown'] as $list_item) {
                if ($list_item['id'] == $this->activeItemId) 
                    $isActive = true;
                
                $item_link = isset($list_item['link']) ? $list_item['link'] : '#';
                $item_label = isset($list_item['label']) ? $list_item['label'] : '';

                $dropdown .= '<a class="dropdown-item" href="' . $item_link . '">' . $item_label . '</a>';
            }
            
            $result .= '<li class="dropdown' . ($isActive ? ' active' : '') . '">';
            $result .= '<a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . $label . '</a>';
            $result .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown" id="submenu">';
            $result .= $dropdown;
            $result .= '</div>';
            $result .= '</li>';
        } else {
            $link = isset($item['link']) ? $item['link'] : '#';

            $result .= $isActive ? '<li class="active">' : '<li>';
            $result .= '<a class="nav-link" href="' . $link . '">' . $label . '</a>';
            $result .= '</li>';
        }
        
        return $result;
    }
}