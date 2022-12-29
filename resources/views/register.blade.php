<x-layout page="Login">
    <x-slot:btn>
        <a href="{{route('login')}}" class="btn btn-primary">
            Já possui conta? Faça login
        </a>
    </x-slot:btn>
    <section id="create_task_section">
        <h1> Registrar-se</h1>
        <form method="POST" action="{{route('user.register_action')}}">
            @csrf
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            @endif

            {{-- flashmsg para erro na tela de login --}}
            @if (session()->has('loginError'))
                <div>
                    <li>{{ session()->get('loginError') }}</li>
                </div>
            @endif
            <x-form.text_input name="name" label="Nome" placeholder="Digite seu nome" required="required"/>
            <x-form.text_input name="email" label="Email" type="email" placeholder="Digite seu email"  required="required"/> 
            <x-form.text_input name="password" label="Senha" type="password" placeholder="Digite sua senha"  required="required"/> 
            <x-form.text_input name="password_confirmation" label="Confirma sua Senha" type="password" placeholder="Confirme sua senha" required="required"/> 
            
            
            <x-form.form_button resetTxt="Resetar" submitTxt="Registrar"/>
        </form>
    </section>
</x-layout>

