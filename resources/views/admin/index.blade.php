@extends('layouts.app')

@section('content')
<div class="container">
   @if (session()->has('success'))
        <div class="col-md-offset-2 col-md-8" >
              <div class="alert alert-success">
                <strong>{{ session('success') }}</strong>
              </div>
        </div>
    @endif
    @if (isset($errors) && count($errors) > 0)
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">
                    <strong>{{ $error }}</strong>
                </li>
            @endforeach
        </ul>
    @endif
    <form method="POST" enctype="multipart/form-data" action="{{url('admin/update/'. 1)}}" class="form-inline">
        {{ csrf_field() }}
        <div class="form-horizontal col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <fieldset>
                <legend>ფასების განახლება</legend>    

                 <div class="form-group">
                 <label class="label" >შავი კარკასი (სახლი)</label>
                    <div class="input-group">
                      <input type="text" class="form-control" value="{{$prices[0]->black_home}}" name="black_home" >
                      <div class="input-group-addon"><i class="lari lari-normal"></i></div>
                    </div>
                  </div>

                 <div class="form-group">
                 <label class="label">თეთრი კარკასი (სახლი)</label>
                    <div class="input-group">
                      <input type="text" class="form-control" value="{{$prices[0]->white_home}}" name="white_home" >
                      <div class="input-group-addon"><i class="lari lari-normal"></i></div>
                    </div>
                  </div>

                 <div class="form-group">
                 <label class="label">შავი (კორპორატიული)</label>
                    <div class="input-group">
                      <input type="text" class="form-control" value="{{$prices[0]->black_comercial}}" name="black_comercial" >
                      <div class="input-group-addon"><i class="lari lari-normal"></i></div>
                    </div>
                  </div>

                 <div class="form-group">
                 <label class="label">თეთრი (კორპორატიული)</label>
                    <div class="input-group">
                      <input type="text" class="form-control" value="{{$prices[0]->white_comercial}}" name="white_comercial" >
                      <div class="input-group-addon"><i class="lari lari-normal"></i></div>
                    </div>
                  </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label class="col-sm-10 col-md-10 col-lg-10 control-label" for="add"></label>
                    <div class="col-md-2">
                        <button class="btn btn-primary">განახლება</button>
                        <input type="hidden" value="put" name="_method">                    
                    </div>
                </div>

            </fieldset>
        </div>
    </form>
</div>
@endsection
