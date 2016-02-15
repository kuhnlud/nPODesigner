@extends('layout')

@section('import_section')

<div class="header-right">
        <span class="header-item">
                <form class="control" action="import" method="post" enctype="multipart/form-data">
                        <p class="control is-grouped">
                                {{ csrf_field() }}
                                <input class="input" type="file" name="csvfile" id="csvfile">
                                <button class="button is-info" type="submit" name="submit">Import</button>
                        </p>
                </form>
        </span>
</div>

@stop
