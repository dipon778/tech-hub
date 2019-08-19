@extends('layouts.app')

@section('content')
<div class="container">
    
    <h1>Edit Query</h1>
    
    {{-- <form action="/add" method="POST">        
            
            <table>
                <tr>
                        <td><textarea>Input your text</textarea></td>
                </tr>
                <tr>
                    <td> <input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
         

    </form> --}}
    {!! Form::open([
        //'route' => 'tasks.store'
    ]) !!}
    
    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('query', $std->query, ['class' => 'form-control']) !!}
    </div>
    
    {!! Form::submit('Submit Query', ['class' => 'btn btn-primary']) !!}
    
    {!! Form::close() !!}
    
</div>
@endsection
