<x-layout page="Login">
    <x-slot:btn>
        <a href="{{route('register')}}" class="btn btn-primary">
            Registre-se
        </a>
    </x-slot:btn>
    {{-- <a href="{{route('home')}}" class="btn btn-primary">
        Home
    </a> --}}
    <section id="create_task_section">
        <h1> Login</h1>
        <form method="POST" action="{{route('user.login_action')}}">
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
            <x-form.text_input name="email" label="Email" type="email" placeholder="Digite seu email"  required="required"/> 
            <x-form.text_input name="password" label="Senha" type="password" placeholder="Digite sua senha"  required="required"/> 
            
            
            <x-form.form_button resetTxt="Resetar" submitTxt="Login"/>
        </form>
    </section>
</x-layout>