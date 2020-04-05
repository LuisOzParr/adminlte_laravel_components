#Components documentation

### Tabs

To use this component you must assigning a reference to each of the options and contents. This reference must be equal tanto como para la opción como para el contenido.

Example: 
    
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
                Hola mundo
            </x-tabs.content>
            <x-tabs.content reference="tab2">
                Hola mundo1
            </x-tabs.content>
            <x-tabs.content reference="tab3">
                Hola mundo2
            </x-tabs.content>
        </x-slot>
    </x-tabs.index>
    
------
### Modal

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        modal open
    </button>

    <x-modal.index id="myModal" size-modal="modal-xl">
        <x-slot name="title">
            Detalles de venta
        </x-slot>
        <x-slot name="body">
            Hola mundo
        </x-slot>
    </x-modal.index>
    
## Form

### form

    <x-form.index  :action="route('lotes.create')" method="GET">
        
    </x-form.index>     
    
### input
    <x-form.input icon="fas fa-barcode" name="codigo" id="nuevoLote">
        Código de Barras
    </x-form.input>

### select

    <x-form.select name="proveedor_id">
        Proveedores
        <x-slot name="options">
            @foreach($proveedores as $proveedor)
                <option value="{!! $proveedor->id !!}" @if(isset($lote) && $lote->proveedor_id == $proveedor->id) selected @endif>{!! $proveedor->nombre !!} - {!! $proveedor->rfc !!}</option>
            @endforeach
        </x-slot>
    </x-form.select>

