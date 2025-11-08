<?php

namespace App\View\Components;

use Closure;
use App\Models\Menu;
use App\Models\Setting;
use App\Models\MenuItem;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Header extends Component
{
    /**
     * Create a new component instance.
     */

    public $logoPath;
    public $menuItems;

    public function __construct()
    {
        $logoSetting = Setting::where('code', 'logo')->first();
        $this->logoPath = $logoSetting?->value_text ?? 'images/default-logo.png';

        $headerMenu = Menu::where('position', 'Main Menu')->where('status', 1)->first();

        if ($headerMenu) {
            $allItems = MenuItem::where('menu_id', $headerMenu->id)
                ->orderBy('menu_order', 'asc')
                ->get(['id', 'title', 'url', 'parent_id', 'menu_order']);
            $this->menuItems = $this->buildMenuTree($allItems);
        } else {
            $this->menuItems = collect();
        }
       
    }
    private function buildMenuTree($items, $parentId = 0)
    {
        return $items
            ->where('parent_id', $parentId)
            ->map(function ($item) use ($items) {
                $item->setRelation('children', $this->buildMenuTree($items, $item->id));
                return $item;
            });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('client.components.header');
    }
}
