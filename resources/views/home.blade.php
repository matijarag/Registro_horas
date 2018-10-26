@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" href="#usu_nrom" role="tab" data-toggle="tab">crear usuario normal</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#cre_mod_y_hor" role="tab" data-toggle="tab">crear modulos y horarios</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#tom_hor" role="tab" data-toggle="tab">tomar hora</a>
                            </li>
                          </ul>
                          
                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active <!-- fade-->" id="usu_nrom">crear usuario normal</div>
                            <div role="tabpanel" class="tab-pane <!-- fade-->" id="cre_mod_y_hor">crear modulos y horarios</div>
                            <div role="tabpanel" class="tab-pane <!-- fade-->" id="tom_hor">tomar hora</div>
                          </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
