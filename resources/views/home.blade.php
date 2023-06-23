<x-layout>

    <x-slot:btn>
        <x-button href="{{route('task.create')}}">
            Criar Tarefa
        </x-button>
    </x-slot:btn>

    <section class="graph">
        <div class="graph_header">
            <h2>
                Progresso do dia
            </h2>
            <div class="line_header"></div>
            <div class="graph_header-date">
                <i class="fa-solid fa-chevron-left"></i>
                13 de dez
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>

        <div class="graph_header-subtitle">
            Tarefas: <b>3/6</b>
        </div>

        <div class="graph_placeholder">

        </div>

        <div class="tasks_left_footer">
            <i class="fa-solid fa-circle-exclamation"></i>
            Restam apenas 3 tarefas para serem realizadas
        </div>
    </section>

    <section class="list">
        <div class="list_header">
            <select name="" id="" class="list_header-select">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>

        <div class="task_list">
            @foreach ($tasks as $task)
                <x-task :data=$task />
            @endforeach
        </div>
    </section>
</x-layout>
