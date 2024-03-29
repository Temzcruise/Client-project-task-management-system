@extends('layouts.inner')

@section('title', 'Letter types')

@section('header', 'Letter Types')

@section('sub_header', 'Show')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.letterType.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.letterType.fields.id') }}
                        </th>
                        <td>
                            {{ $letterType->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.letterType.fields.name') }}
                        </th>
                        <td>
                            {{ $letterType->name }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection
