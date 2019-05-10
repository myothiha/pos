<div class="row">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
        <div class="col-lg-12">
            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">  &times;</a></p>
        </div>
            {{ Session::forget('alert-' . $msg) }}
      @endif
    @endforeach
    @if ($errors->any())
    <div class="col-lg-12 alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
