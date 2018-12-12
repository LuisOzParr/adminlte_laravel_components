## Laravel components to AdminLTE 

This package provided some laravel components using AdminLTE template https://adminlte.io/ to use this template in laravel, this package require of ```jeroennoten/laravel-adminlte```

## Install

1. Require the package using composer:

        luisozparr/adminlte_laravel_components 

2. Add the service provider to the providers in config/app.php:

        Ozparr\AdminlteComponents\AdminlteComponentServiceProvider::class
        
3. Publish the public assets of ```jeroennoten/laravel-adminlte```:

        php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=assets

## Usage

**_Note:_** if you want use layout of AdminLTE we recommend read about usage of ```jeroennoten/laravel-adminlte``` https://github.com/jeroennoten/Laravel-AdminLTE#3-usage

You can use this components in the following way:

#### box

- Parameter: 
  - ```className```: like class in html
  - ```title```: box title
- Slots: 
  - buttons
  - footer
- Example:

``` 
@box(['className'=>'blue', 'title'=>'HelloWorld'])
    <p>Hello World</p>
    
    @slot('buttons')
    @endslot
    
    @slot('footer')
    @endslot
@endbox 
```

#### modal

Parameters:
- Parameter: 
  - ```id```: like id in html
  - ```size```: width of modal
  - ```title```: modal title  
- Slots: 
  - footer
- Example:

``` 
@modal(['id'=>'','size'=>'','title'=>''])
    <p>Here your content</p>
    
    @slot('footer')
        here your footer
    @endslot
@endmodal 
```