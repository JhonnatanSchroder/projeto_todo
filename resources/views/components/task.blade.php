<div class="task">
    <div class="title">
        <input type="checkbox" {{$data->is_done ? 'checked' : null}}>
        <div class="task_title">{{$data->title ?? "Padrao"}}</div>
    </div>

    <div class="priority">
        <div class="circle"></div>
        <div>{{$data->category->title}}</div>
    </div>

    <div class="actions">
        <a href="{{route('task.edit', ['id' => $data->id])}}">
            <i class="fa-solid fa-pen"></i>
        </a>
        <a href="{{route('task.delete', ['id' => $data->id])}}">
            <i class="fa-solid fa-trash"></i>
        </a>
    </div>
</div>
