<?php

namespace YourVendor\LaravelSeo;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;

class SeoManager
{
    protected array $meta;

    public function __construct()
    {
        $this->meta = [
            'title' => Config::get('seo.defaults.title'),
            'description' => Config::get('seo.defaults.description'),
            'canonical' => Request::url(),
            'image' => Config::get('seo.defaults.image'),
        ];
    }

    public function title(string $value): self
    {
        $this->meta['title'] = $value;
        return $this;
    }

    public function description(string $value): self
    {
        $this->meta['description'] = $value;
        return $this;
    }

    public function canonical(string $value): self
    {
        $this->meta['canonical'] = $value;
        return $this;
    }

    public function image(string $value): self
    {
        $this->meta['image'] = $value;
        return $this;
    }

    public function render(): string
    {
        return View::make('seo::meta', ['meta' => $this->meta])->render();
    }

    public function toArray(): array
    {
        return $this->meta;
    }
}
