{{ $slot }}
<div class="container">
    <form action={{ route('site.bill.save') }} method="post">
        @csrf
        <input name="description" type="text" placeholder="Descrição" class="">

        <input name="value" type="number" placeholder="Valor" step="0.01">
        <select name="bill_categories_id" class="">
            <option value="">Qual o motivo do contato?</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
        </select>

        <div class="buttons">
            <input type="submit"></input>    
            <button type="button" class="btn-evaluate" {{ session()->exists('success') ? 'enabled' : 'disabled'}}>Teste</button>
        </div>

        
    </form>
</div>

@if(session()->exists('success'))
<div class="sucess">
    <p>Conta registrada com sucesso!</p>
</div>
@endif

@if($errors->any())
<div style="position: sticky; background-color: red; top: 0px; left: 0px; width: 100%">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
</div>
@endif