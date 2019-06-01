@extends('layouts.app')
@section('content')
<html>
    <head>
        <title>Registrar Libro</title>
    </head>
    {{-- load jquery --}}
    <script src="js/jquery.min.js"></script>
    {{-- load ajax file (function to get estantes) --}}
    <script src="js/cargar_estantes.js"></script>
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
      </script>
    <body>
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">{{ __('Register Book') }}</h2>
                    <form method="POST" action="registrar_libro">
                        @csrf
                        <div class="form-group">
                            <label for="book-title"><i class="zmdi zmdi-book zmdi-hc-fw"></i></label>
                            <input id="book-title" type="text" class="form-inline" name="book-title" value="{{ old('book-title') }}" placeholder="{{ __('Book Title') }}" required autofocus>

                        </div>


                        <div class="form-group">

                                <select name="book-category" id="book_category" class="custom-select">
                                    <option disabled>{{__('Choose a category')}}</option>
                                    <option value="{{__('Romance')}}">{{__('Romance')}}</option>
                                    <option value="{{__('Terror')}}">{{__('Terror')}}</option>
                                    <option value="{{__('Drama')}}">{{__('Drama')}}</option>
                                    <option value="{{__('Mystery')}}">{{__('Mystery')}}</option>
                                    <option value="{{__('Science')}}">{{__('Science')}}</option>
                                    <option value="{{__('Culture')}}">{{__('Culture')}}</option>
                                    <option value="{{__('Economics')}}">{{__('Economics')}}</option>
                                    <option value="Fantasia">Fantasia</option>
                                    <option value="Aventura">Aventura</option>
                                    <option value="{{__('Infantil')}}">{{__('Infantil')}}</option>
                                </select>

                        </div>

                        <div class="form-group">
                            <label for="book-editorial"><i class="zmdi zmdi-bookmark"></i></label>
                            <input id="book-editorial" type="text" class="form-inline" name="book-editorial" value="{{old("book-editorial")}}" placeholder="{{ __('Editorial') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="book-year"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i></label>
                            <input type="number" id="book-year" name="book-year" value="{{old("book-year")}}" placeholder="{{__('Year')}}" min="1800" max="2100">
                        </div>

                        <div class="form-group">
                            <label for="book-pages"><i class="zmdi zmdi-format-list-numbered zmdi-hc-fw"></i></label>
                            <input type="number" id="book-pages" name="book-pages" value="{{old("book-pages")}}" placeholder="{{__('Number Pages')}}" min="1">
                        </div>
                        <div class="form-group">
                            <label for="book-author"><i class="zmdi zmdi-account zmdi-hc-fw"></i></label>
                            <input id="book-author" type="text" class="form-inline" name="book-author" value="{{ old('book-author') }}" placeholder="{{ __('Author') }}" required>

                        </div>
                        <div class="form-group">
                            <select name="book-lugar" id="book-lugar" class="custom-select">
                                <option value="" disabled>Elija un estante</option>
                            </select>
                        </div>

                        <div class="form-group form-button">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="images/libros.png" ></figure>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection