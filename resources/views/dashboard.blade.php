<div>
    <h1>Dashboard</h1>

    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif

    <a href="{{ route('links.create') }}">Criar</a>

    <ul>
        @foreach ($links as $link)
        <li><a href="{{ route('links.edit', $link) }}">{{ $link->name }}</a></li>
        <form action="{{ route('links.destroy', $link) }}" method="post" onsubmit="return confirm('Deseja realmente deletar esse registro?')">
            @csrf
            @method('DELETE')
            
            <button>Deletar</button>
        </form>
        @endforeach
    </ul>
</div>
