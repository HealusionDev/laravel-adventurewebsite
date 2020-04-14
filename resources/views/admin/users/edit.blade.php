@extends ('layouts.app')


@section('content')
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                          <div class="card-header">Edit user : {{ $users->name }}</div>
                              <div class="card-body">
                                  <form action="{{ route('admin.users.update', $users) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}

                                    @foreach($roles as $role)
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $role->id }}">
                                        <label class="form-check-label" >{{ $role->name }}</label>
                                      </div>
                                    @endforeach
                                    <button type="submit" class="btn btn-primary">Update</button> 
                                  </form> 
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection