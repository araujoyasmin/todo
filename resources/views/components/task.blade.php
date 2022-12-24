<div class="task">
    <div class="title">
        <input type="checkbox" @if($data && $data['done']) checked @endif/>
        <div class="task-title">{{$data['title'] ?? ''}} </div>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <div> {{$data['description']}} </div>
    </div>
    <div class="actions">
        <a href="{{route('task.edit')}}"> 
            <img src="/assets/images/icon-edit.png"/>    
        </a> 
        <a href="{{route('task.delete')}}"> 
            <img src="/assets/images/icon-delete.png"/>    
        </a>
    </div>
</div>