<div class="my-5">
    <div class="card bd-white d-block">
        <div class="card-body">
            <div class="row">
                <div class="span-12">
                    <img src="{{$info['image']}}" alt="" class="float-start me-5 mb-3 rounded" width="250px">
                    <h3 class="card-title">{{$info['title']}}</h3>
                    <h6 class="card-subtitle text-muted">{{$info['subtitle']}}</h6>
                    <hr/>
                    @foreach($info['texts'] as $text)
                    <p class="card-text">{{$text}}</p>   
                    @endforeach
                </div>
            </div>
        </div>
        @if ($info['documentacion'])
        <ul class="list-group list-group-flush">
            @foreach($info['documentacion'] as $apartado)
                <li class="list-group-item">
                    <h5>{{$apartado['name']}}</h5>
                    <ul>
                    @foreach($apartado['content'] as $documento)
                        <li><a href="{{$documento['href']}}" target="_blank" rel="noopener noreferrer">{{$documento['name']}}</a></li>
                    @endforeach
                    </ul>
            @endforeach
        </ul>
        @endif
    </div>
</div>