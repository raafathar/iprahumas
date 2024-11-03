<form class="form-horizontal r-separator"
    {{ isset($method) ? (strtolower($method) === 'post' || strtolower($method) === 'get' ? 'method=' . strtolower($method) . '' : 'method=POST') : 'method=POST' }}
    action="{{ $url }}">
    @csrf
    @if (
        (isset($method) && strtolower($method) === 'put') ||
            strtolower($method) === 'delete' ||
            strtolower($method) === 'patch')
        @method(strtolower($method))
    @endif

    <div class="card-body">
        <h5>{{ isset($title) ? $title : '' }}</h5>
        @foreach ($listForm as $item)
            @switch($item["type"])
                @case('text')
                    <div class="form-group mb-0">
                        <div class="row align-items-center">
                            <label for="inputText3" class="col-form-label">{{ $item['field'] }}</label>
                            <div class="col-9 pb-2 pt-2">
                                <input type="text" name="{{ $item['name'] }}"
                                    value="{{ isset($item['value']) ? $item['value'] : '' }}" class="form-control"
                                    placeholder="{{ $item['field'] }}">
                                @foreach ((array) $errors->get($item['name']) as $message)
                                    <x-message-error-dashboard>
                                        {{ $message }}
                                    </x-message-error-dashboard>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @break

                @case('select')
                    <div class="form-group mb-0">
                        <div class="row align-items-center">
                            <label for="inputText3" class="col-form-label">{{ $item['field'] }}</label>
                            <select class="form-control select2-hidden-accessible" id="select2-with-placeholder"
                                data-select2-id="select2-data-select2-with-placeholder" tabindex="-1" aria-hidden="true">
                                @foreach ($item as $value)
                                    <option value="{{ $value['value'] }}" data-select2-id="select2-data-42-aspz">
                                        {{ $value['nama'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @break

                @default
            @endswitch
        @endforeach
    </div>
    <div class="form-group mb-0 text-end">
        <button type="submit" class="btn btn-primary">
            Tambahkan
        </button>
        <button type="reset" class="btn bg-danger-subtle text-danger ms-6">
            Ulangi
        </button>
    </div>
</form>
