@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">List of Permits</div>

                    @if(Auth::check())
                      <!-- Table -->
                      <table class="table">
                          <tr>
                              <th>Permits</th>
                              <th>Category</th>
							  <th>Date</th>
                          </tr>
                        
                            <tr>
                              <td></td><td></td><td></td>
                            </tr>
                         
                      </table>
                    @endif


            </div>
            @if(Auth::guest())
			
            @endif
        </div>
    </div>
</div>
@endsection