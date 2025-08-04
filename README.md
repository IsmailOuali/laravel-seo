# Laravel SEO

A simple and flexible SEO meta tag generator for Laravel.  
Handles standard SEO tags, Open Graph, and Twitter Cards — with full customization.

## 📦 Features

- Set custom `title`, `description`, `canonical`, and `image`
- Auto-inject Open Graph + Twitter Card tags
- Configurable default meta values
- Easy-to-use API and Blade rendering

---

## 🚀 Installation

### 1. Require the package via Composer

If you're using it locally via path repository:

```bash
composer require yourvendor/laravel-seo:dev-main
```

> Replace `"yourvendor"` with your namespace.

If published to Packagist:

```bash
composer require yourvendor/laravel-seo
```

---

### 2. (Optional) Publish the config

```bash
php artisan vendor:publish --tag=seo-config
```

This will create `config/seo.php` so you can define default meta tags.

---

## ⚙️ Configuration

In `config/seo.php`, you can set default values:

```php
return [
    'defaults' => [
        'title' => 'Default Site Title',
        'description' => 'Default SEO description.',
        'image' => 'https://example.com/default.jpg',
    ]
];
```

---

## 🧠 Usage

### In a Controller or Route:

```php
use Seo;

Seo::title('Custom Page Title')
    ->description('This is a custom SEO description.')
    ->image('https://example.com/image.jpg');
```

### In Your Blade Layout:

Add this inside the `<head>` tag of your main layout:

```blade
{!! Seo::render() !!}
```

---

## ✨ Example Output

```html
<title>Custom Page Title</title>
<meta name="description" content="This is a custom SEO description.">
<link rel="canonical" href="https://your-site.com/page">

<!-- Open Graph -->
<meta property="og:title" content="Custom Page Title">
<meta property="og:description" content="This is a custom SEO description.">
<meta property="og:image" content="https://example.com/image.jpg">
<meta property="og:type" content="website">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Custom Page Title">
<meta name="twitter:description" content="This is a custom SEO description.">
<meta name="twitter:image" content="https://example.com/image.jpg">
```

---

## 🧪 Testing Locally

To test this package in a local Laravel project:

1. Add a path repository in the Laravel project’s `composer.json`:
   ```json
   "repositories": [
     {
       "type": "path",
       "url": "../laravel-seo"
     }
   ]
   ```

2. Require the package:
   ```bash
   composer require yourvendor/laravel-seo:dev-main
   ```

---

## 📄 License

MIT © [Ismail Ouali](https://github.com/IsmailOuali)
