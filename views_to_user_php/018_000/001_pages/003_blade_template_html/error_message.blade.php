<!-- Blade syntax-->

@if(isset($_SESSION['ERROR_MESSAGE_TO_PAGE']))
<div class="alert alert-danger" role="alert">  
    <ul>

        @foreach($_SESSION['ERROR_MESSAGE_TO_PAGE'] as $error)
        <li> {!! $error!!}</li>
        @endforeach

    </ul>
</div>
<!--  <p> There are errors</p>    -->
@endif
