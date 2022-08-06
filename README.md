# Laravel components to AdminLTE 

This package provided some laravel components using AdminLTE template https://adminlte.io/ to use this template in laravel, this package require of ```jeroennoten/laravel-adminlte```

# Install

1. Require the package using composer:

        luisozparr/adminlte_laravel_components 

2. Add the service provider to the providers in config/app.php:

        Ozparr\AdminlteComponents\AdminlteComponentServiceProvider::class
        JeroenNoten\LaravelAdminLte\ServiceProvider::class,
        
3. Publish the public assets of ```jeroennoten/laravel-adminlte```:

        php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=assets

# Usage

**_Note:_** if you want use layout of AdminLTE we recommend read about usage of ```jeroennoten/laravel-adminlte``` https://github.com/jeroennoten/Laravel-AdminLTE#3-usage

You can use this components in the following way:

## Callout
* Parameters:
  * `icon` string (default 'fas fa-info')
  * `title` string
  * `col` (Like col-md-*)
* Slots:
  * `body` (or slot)
* Example:

```
<x-callout col="12" class="callout-info" title="Importante">
    Hola mundo :D
</x-callout>
```
    
## Card
* Parameters:
  * `title` string (default '')
* Slots:
  * `body` (or slot)
  * `tools`
  * `footer`
  * `actionbar`
* Example:

```
<x-card title="Card" class="collapsed-card card-primary">
    <x-slot name="tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
    </x-slot>
    
    This is the body :D
    
    <x-slot name="footer">
        <div class="pull-right">
            <button type="submit" class="btn btn-primary" >Success</button>
        </div>
    </x-slot>
</x-card>
```
    
## Form

### form

* Parameters:
  * `method` string
* Example:
```
<x-form.index :action="route('lotes.create')" method="GET">
    Form body :D
</x-form.index> 
```
    
### input

* Parameters:
  * `name` null|string (default null)
  * `icon` string|null (default null)
  * `iconPosition` string(left/right) (default left)
* Example:
```
<x-form.input icon="fas fa-barcode" name="example" id="example_id">
    This is a label
</x-form.input>
```
### select

* Slot:
  * `options`
* Example:
```
<x-form.select name="proveedor_id">
    This is a label
    
    <x-slot name="options">
        @foreach($items as $item)
            <option value="{!! $item->id !!}">Option :D </option>
        @endforeach
    </x-slot>
</x-form.select>
```

### textarea
* Parameters:
  * ``name`` string
```
<x-form.textarea name="description">
    Description
</x-form.textarea>
```

## Dropdown
* Parameters:
  * ``title`` string
* slot: 
  * `options`
* Example:
```
<x-dropdown title="Options">
    <a class="dropdown-item" href="#">
        <i class="fas fa-edit"></i>
        Edit
    </a>
    <a class="dropdown-item" href="#">
        <i class="fas fa-trash-alt"></i>
        Delete
    </a>
</x-dropdown>
```

## infoBox

* Parameters:
  * `iconColor` null|string (default null)
  * `icon` null|string icon (default null)
  * `number` null|string number (default null)
* Example:
```
<x-infoBox title="Vendidos" icon="fas fa-boxes" number="5"/>
```

## Modal

* Parameters:
  * `sizeModal` null|string  (default null)
  * `title` string (default '')
* Slots:
  * `footer`
* Example:
```
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    modal open
</button>

<x-modal title='Modal' id="myModal" size-modal="modal-xl">
    Hello world
    <x-footer>
         <button type="submit" class="btn btn-primary" >Success</button>
    </x-footer>
</x-modal>
```

## Tabs

* Slots:
  * `options` required tabs.option component
    * Parameters:
      * `reference` string
  * `contents` required tabs.content component
    * Parameters:
      * `reference` string 
* Example: 

```
<x-tabs.index>
    <x-slot name="options">
        <x-tabs.option class="active" reference="tab1">
            Option1
        </x-tabs.option>
        <x-tabs.option reference="tab2">
            Option2
        </x-tabs.option>
        <x-tabs.option reference="tab3">
            Option3
        </x-tabs.option>
    </x-slot>

    <x-slot name="contents">
        <x-tabs.content class="active show" reference="tab1">
            Hello world 1
        </x-tabs.content>
        <x-tabs.content reference="tab2">
            Hello world 2
        </x-tabs.content>
        <x-tabs.content reference="tab3">
            Hello world 3
        </x-tabs.content>
    </x-slot>
</x-tabs.index>
```
