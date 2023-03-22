
@if (Auth::user()->is_favorite($micropost->id))
        {{-- アンフォローボタンのフォーム --}}
        <form method="POST" action="{{ route('favorites.unfavorite', $micropost->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-error btn-block normal-case" 
                onclick="return confirm('id = {{ $micropost->id }} のおきにいりを解除します。よろしいですか？')">Unfavorite</button>
        </form>
@else
        {{-- フォローボタンのフォーム --}}
        <form method="POST" action="{{ route('favorites.favorite', $micropost->id) }}">
            @csrf
            <button type="submit" class="btn btn-primary btn-block normal-case">Favorite</button>
        </form>
@endif
