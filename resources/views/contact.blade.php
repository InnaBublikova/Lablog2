@extends('layout')

@section('content')

 <div class="container"> 
      <div class="col-md-8">
 <h3 class="widget-title text-uppercase text-center">обратная связь</h3>
                        @include('admin.errors')

                        <form action="/contact" method="post">
                        {{csrf_field()}}
                            <input type="text" class="form-control"  name="name" placeholder="Ваше имя">
                            <input type="email" placeholder="Введите ваш email" name="email">
                            <input type="text" class="form-control"  name="phone" placeholder="Телефон (xxx)xxx-xx-xx">
                            <textarea class="form-control" rows="6"  name="msg" placeholder="Текст сообщения"></textarea>
                            <input type="submit" value="Отправить"
                                   class="text-uppercase text-center btn btn-subscribe">
                        </form>
                    </div>
                    
@include('pages._sidebar')     
</div>

 @endsection