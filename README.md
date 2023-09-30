# HTML5 Twig Boilerplate for Symfony

## Introduction
> This Twig HTML5 boilerplate is designed to start a new Symfony project with a complete HTML5 skeleton who can be filled with defaults ENV variables for your app. Just setup you app variables in .env, and voilà !<br>
You can surcharge your AbstractController with AbstractWebController to automatically inject defaults variables into your view (for example meta title, meta description, Open Graph values etc... ).


## Setup
> - Download or clone the repo into a temp folder
> - Install Symfony the normal way into your new project folder
> - copy the ENV variables from `.env.example` into your own `.env` file
> - copy the file `base.html.twig` into your templates folder
> - copy the file `AbstractWebController` into your Controller folder
> - extends all your controllers who load this view from `AbstractWebController`


## Usage
> That's all !<br>
Your ENV variables will now be injected by default into the base template.<br>
> But you can easily replace them for each page your load with render method :

```php
    return $this->render( 'base.html.twig', [
        'meta' => [
            'title' => 'Your new title',
            'desc' => 'Your new desc',
            'lang' => 'fr',
            'og_image' => 'The new URL of your image'
        ];
    ]);
```

## Documentation
> #### ENV variables
> Automatically injected (from your .env file) by `AbstractWebController`:

| ENV variable  | Twig tag              |
|:--------------|:----------------------|
| APP_LANG      | Lang in html tag      |
| APP_NAME      | Meta Title            |
| APP_DESC      | Meta Description      |
| APP_AUTHOR    | Meta Author           |
| APP_OG_TITLE  | OpenGraph Title       |
| APP_OG_DESC   | OpenGraph Description |
| APP_OG_IMG    | OpenGraph Image       |



> #### PHP variables
> You can override all this variables by passing it to `render()` function

| PHP variable   | Twig tag                        |
|:---------------|:--------------------------------|
| meta.lang      | Lang in html tag                |
| meta.title     | Meta Title                      |
| meta.desc      | Meta Description                |
| meta.author    | Meta Author                     |
| meta.canonical | Canonical URL                   |
| meta.noindex   | Add no index, no follow tags    |
| meta.og_title  | OpenGraph Title                 |
| meta.og_desc   | OpenGraph Description           |
| meta.og_image  | OpenGraph Image                 |
| meta.og_url    | OpenGraph URL                   |
| meta.og_type   | OpenGraph Type                  |



> #### Defaults
> Those variables are already defined in the Twig template in case you don't pass them<br>

| Twig Tag      | Default value               |
|---------------|:----------------------------|
| Lang          | en                          |
| Canonical URL | automatically generated     |
| Favicon       | asset('img/favicon.png')    |
| Apple Icon    | asset('img/apple-icon.png') |
| OpenGraph URL | Canonical URL               |




>Feel free to contribute :)

