@if (count($errors)>0)
@foreach ($errors->all() as $errors)
<div class="alert container alert-danger">
    {{$errors}}

</div>
    
@endforeach
    
@endif
@if (session('success'))
<div class="alert container alert-success">
    {{session('success')}}
</div>
    
@endif
@if (session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>
    
@endif