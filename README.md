# HTML5 Twig Boilerplate for Symfony

## Introduction
> This Twig HTML5 boilerplate is designed to start a new Symfony project with a complete HTML5 skeleton who can be filled with defaults parameters for your app.<br>Just setup your parameters and globals in YAML config, and voilà !


## Setup
- Copy the file `base.html.twig` into your templates folder
- Setup your defaults parameters in `config/sevices.yaml`
- Set the params as globals for Twig in `config/twig.yaml`

```yaml
# in config/services.yaml

parameters:
    app_lang: "fr"
    app_name: "My App Name"
    app_desc: "My App Desc"
    app_author: "Publiko"
    app_author_url: "https://www.publiko.fr"
    app_og_title: '%app_name%'
    app_og_desc: '%app_desc%'
    app_og_img: "https://url-to-image.com"
    app_contact_mail: "contact@publiko.fr"
    app_noreply_mail: "noreply@publiko.fr"

# ------------------------------------------

#in config/twig.yaml

twig:
    globals :
        app_lang: '%app_lang%'
        app_name: '%app_name%'
        app_desc: '%app_desc%'
        app_author: '%app_author%'
        app_author_url: '%app_author_url%'
        app_og_title: '%app_og_title%'
        app_og_desc: '%app_og_desc%'
        app_og_img: '%app_og_img%'
```


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

> #### Parameters
> You can override all this variables by passing it to `render()` function

| PHP variable    | YAML param     | Description                   | Default                    |
|:----------------|:---------------|:------------------------------|:---------------------------|
| meta.lang       | app_lang       | Lang in html tag              | -                          |
| meta.title      | app_name       | Meta Title / Name of your app | -                          |
| meta.desc       | app_desc       | Meta Description              | -                          |
| meta.author     | app_author     | Meta Author                   | -                          |
| meta.author_url | app_author_url | Meta Author URL               | -                          |
| meta.canonical  | -              | Canonical URL                 | automatically generated    |
| meta.noindex    | -              | Add no-index & no-follow tags | disabled                   |
| meta.og_title   | app_og_title   | OpenGraph Title               | app_name                   |
| meta.og_desc    | app_og_desc    | OpenGraph Description         | app_desc                   |
| meta.og_image   | app_og_image   | OpenGraph Image               | -                          |
| meta.og_url     | -              | OpenGraph URL                 | meta.canonical / generated |
| meta.og_type    | app_og_type    | OpenGraph Type                | website                    |


>Feel free to contribute :)

