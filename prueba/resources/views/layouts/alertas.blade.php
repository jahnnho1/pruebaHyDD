      @if($errors->any())                 
            <div class="alert alert-danger">
                <span class="close" data-dismiss="alert">×</span>
            @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                 @endforeach
            </div>
            @endif