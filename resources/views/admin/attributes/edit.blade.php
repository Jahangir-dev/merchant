@extends('admin.master')
@section('title') {{translateText($pageTitle) }} @endsection
@section('content')
<div class="container-fluid">
    <div class="row user">
    <div class="app-title col-md-12" >
        <div>
            <h1><i class="fa fa-cogs"></i> {{translateText( $pageTitle) }}</h1>
        </div>
    </div>
          <div class="col-md-3">
            <div class="tile p-0">
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#general" data-toggle="tab">{{translateText('General')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#values" data-toggle="tab">{{translateText('Attribute Values')}}</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active" id="general">
                    <div class="tile">
                        <form action="{{ route('admin.attributes.update') }}" method="POST" role="form">
                            @csrf
                            <h3 class="tile-title">{{translateText('Attribute Information')}}</h3>
                            <hr>
                            <div class="tile-body">
                                <div class="form-group">
                                    <label class="control-label" for="code">{{translateText('Code')}}</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        placeholder="Enter attribute code"
                                        id="code"
                                        name="code"
                                        value="{{ old('code', $attribute->code) }}"
                                    />
                                </div>
                                <input type="hidden" name="id" value="{{ $attribute->id }}">
                                <div class="form-group">
                                    <label class="control-label" for="name">{{translateText('Name')}}</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        placeholder="Enter attribute name"
                                        id="name"
                                        name="name"
                                        value="{{ old('name', $attribute->name) }}"
                                    />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="frontend_type">{{translateText('Frontend Type')}}</label>
                                    @php $types = ['select' => 'Select Box', 'radio' => 'Radio Button', 'text' => 'Text Field', 'text_area' => 'Text Area']; @endphp
                                    <select name="frontend_type" id="frontend_type" class="form-control">
                                        @foreach($types as $key => $label)
                                            @if ($attribute->frontend_type == $key)
                                                <option value="{{ $key }}" selected>{{translateText($label )}}</option>
                                            @else
                                                <option value="{{ $key }}">{{translateText( $label )}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input"
                                                   type="checkbox"
                                                   id="is_filterable"
                                                   name="is_filterable"
                                                {{ $attribute->is_filterable == 1 ? 'checked' : '' }}/>{{translateText('Filterable')}}
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input"
                                                   type="checkbox"
                                                   id="is_required"
                                                   name="is_required"
                                                {{ $attribute->is_required == 1 ? 'checked' : '' }}/>{{translateText('Required')}}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="tile-footer">
                                <div class="row d-print-none mt-2">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>{{translateText('Update Attribute')}}</button>
                                        <a class="btn btn-danger" href="{{ route('admin.attributes.index') }}"><i class="fa fa-fw fa-lg fa-arrow-left"></i>{{translateText('Go Back')}}</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane" id="values">
                    <attribute-values :attributeid="{{ $attribute->id }}"></attribute-values>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="{{ asset('backend/js/app.js') }}"></script>
@endpush
