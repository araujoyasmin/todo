<x-layout>
    <x-slot:btn>
        <a href="{{route('task.create')}}" class="btn btn-primary">
            Criar Tarefa
        </a>
        <a href="{{route('logout')}}" class="btn btn-danger">
            Sair
        </a>
    </x-slot:btn>
     
    <section class="graph">
        <div class="graph_header">
            <h2> Progresso do Dia  </h2>
            {{-- <div class="header-line"> </div> --}}
            <hr>
            <div class="graph_header_date">
                <img src="/assets/images/icon-prev.png"/>    
                13 Dez
                <img src="/assets/images/icon-next.png"/>  
            </div>
           
        </div>
        <div class="graph_header_subtitle"> Tarefas <b>3/6</b> 
        </div>
        
        <div class="graph-placeholder"> 
           

        </div>
        <div class="task-left-footer"> 
            <img src="/assets/images/icon-info.png"/>
           Restam 3 tarefas para serem realizadas
        </div>
        
    </section>
    <section class="list">
       <div class="list-header"> 
            <select class="list-header-select"> 
                <option value="1"> Todas as tarefas </option>
            </select>
       </div>
       <div class="task-list"> 
            @foreach($tasks as $task)
                <x-task :data=$task/>
            @endforeach
       </div>
    </section>
</x-layout>