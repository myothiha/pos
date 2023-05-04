<div class="form-inline mb-3 float-right">
    <label for="limit" class="mr-2">no of rows</label>

    <select name="limit" id="limit" class="form-control mr-3" onchange="paginationLimit(this.value)">
        @foreach(range(10, 100, 10) as $limit)
            <option value="{{ $limit }}"
                {{ (Request::input('limit') == $limit) ? 'selected' : '' }}
            >
                {{ $limit }}
            </option>
        @endforeach
    </select>
    {{ $collection->appends($_GET)->links() }}
</div>