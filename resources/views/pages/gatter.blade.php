@extends('layout')

@section('content')
                <div class="column is-quarter">
                        <table class="table is-bordered is-striped is-narrow">
                                <thead>
                                        <tr>
                                                <th>Gate Name</th>
                                                <th>Description</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        @foreach( $gatters as $gatter )
                                                <tr>
                                                        <td>    {{ $gatter['long_gate_name' ]}} </td>
                                                        <td>    {{ $gatter['description' ]}}    </td>
                                                </tr>
                                        @endforeach
                                </tbody>
                        </table>
                </div>
@stop
