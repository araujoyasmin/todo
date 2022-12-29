<x-layout page="Criar Tarefa">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Home
        </a>
    </x-slot:btn>
    <section id="create_task_section">
        <h1> Criar Tarefa</h1>
        <form method="POST" action="{{route('task.create_action')}}">
            @csrf
            <x-form.text_input name="title" label="Título da Tarefa" placeholder="Digite a tarefa" required="required"/>
            <x-form.text_input name="due_date" label="Data de Realização" type="datetime-local" required="required"/> 
            <x-form.select_input name="category_id" label="Categoria"  required="required"> 
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
               
            </x-form.select_input>
            <x-form.textarea_input name="description" label="Descrição" placeholder="Digite a descrição"  required="required"/> 
            
            <x-form.form_button resetTxt="Resetar" submitTxt="Criar Tarefa"/>
        </form>
    </section>
</x-layout>