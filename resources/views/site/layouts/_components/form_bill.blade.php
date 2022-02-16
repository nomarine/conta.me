{{ $slot }}
<div class="container">
    <form action={{ route('site.bill.save') }} method="post">
        @csrf
        <input name="description" type="text" placeholder="Descrição" class="">

        <input name="value" type="text" placeholder="Valor" class="">
        <select name="bill_categories_id" class="">
            <option value="">Qual o motivo do contato?</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
        </select>
        <input type="submit" class=""></button>
    </form>
</div>

@if(session()->exists('success'))
<div class="sucess">
    <p>Conta registrada com sucesso!</p>
</div>
@endif

<!-- <div style="position: sticky; background-color: red; top: 0px; left: 0px; width: 100%">
    <pre>
        {{ print_r($errors) }}
    </pre>
</div> -->