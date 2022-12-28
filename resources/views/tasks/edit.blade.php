<x-layout page="Editar Tarefa">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Home
        </a>
    </x-slot:btn>
    <section id="create_task_section">
        <h1> Editar Tarefa</h1>
        <form method="POST" action="{{route('task.edit_action')}}">
            @csrf
            <input type="hidden" name="id" value="{{$task->id}}"/>
            <x-form.text_input name="title" label="Título da Tarefa" placeholder="Digite a tarefa" required="required" value="{{$task->title}}"/>
            <x-form.text_input name="due_date" label="Data de Realização" type="datetime-local" required="required" value="{{$task->due_date}}"/> 
            <x-form.select_input name="category_id" label="Categoria"  required="required"> 
                @foreach ($categories as $category)
                <option value="{{$category->id}}" @if($category->id == $task->category_id) selected @endif>{{$category->title}}</option>
                @endforeach
               
            </x-form.text_input>
            <x-form.textarea_input name="description" label="Descrição" placeholder="Digite a descrição"  required="required" value="{{$task->description}}"/> 
            <x-form.checkbox_input name="is_done" checked="{{$task->is_done}}"/>
            <x-form.form_button resetTxt="Resetar" submitTxt="Atualizar Tarefa"/>
        </form>
    </section>
</x-layout>