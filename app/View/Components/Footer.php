<?php

namespace App\View\Components;

use Closure;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Widget;
use App\Models\Setting;
use App\Models\MenuItem;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */
    public $logoPath;
    public $footerMenuItems;
    public $quickLinkItems;
    public $brochureFilePath;
    public $settings;

    public function __construct()
    {
        $this->settings = Setting::all()->keyBy('code');
        $logoSetting = Setting::where('code', 'logo_small')->first();
        $this->logoPath = $logoSetting?->value_text ?? 'images/default-logo.png';

        $footerMenu = Menu::where('position', 'Footer Menu')->where('status', 1)->first();
        $footerQuickLinks = Menu::where('position', 'Footer Quick Links')->where('status', 1)->first();

        $brochure = Widget::where('code','brochure')->first();

        $this->brochureFilePath = $brochure->content['media_id1']['file_path'] ?? 'asset/pdf/Lemon-Interiors-Brochure.pdf';


        if ($footerMenu) {
            $this->footerMenuItems = MenuItem::where('menu_id', $footerMenu->id)
                ->orderBy('id', 'asc')
                ->select('title', 'url')
                ->get();
        } else {
            $this->footerMenuItems = collect();
        }

        if ($footerQuickLinks) {
            $this->quickLinkItems = MenuItem::where('menu_id', $footerQuickLinks->id)
                ->orderBy('id', 'asc')
                ->select('title', 'url')
                ->get();
        } else {
            $this->quickLinkItems = collect();
        }

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('client.components.footer');
    }
}
