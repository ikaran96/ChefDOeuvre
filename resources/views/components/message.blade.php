<div>
@if(session()->has('message'))
    <div class="alert alert-success" style="color:green; text-align:center; width:300px; margin-left:auto;margin-right:auto">{{session()->get('message')}}</div>
    @endif

    <!-- @if(session()->has('error'))
    <div class="alert alert-danger" style="color:red;  text-align:center; width:300px; margin-left:auto;margin-right:auto">
    {{session()->get('error')}}
    </div>
    @endif -->

    @if($errors->any())
    <div class="alert alert-danger" style="color:red;  text-align:center; width:300px; margin-left:auto;margin-right:auto">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
    </div>
    @endif
</div>