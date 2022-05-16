<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Admin | Login</title>

        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    </head>

    <body>
        <div class="container-fluid ps-md-0">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="login d-flex align-items-center py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 col-lg-8 mx-auto">
                                    <h3 class="login-heading mb-4 text-center">Encurtador de URL</h3>

                                    <form method="post" action="{{ route('login') }}">
                                        @csrf

                                        @if ($errors->any())
                                            <div class="font-medium text-red-600">
                                                Ops! Algo deu errado.
                                            </div>

                                            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        @endif

                                        <div class="form-floating mb-3">
                                            <input type="email" id="email" name="email"
                                            class="form-control"
                                            placeholder="name@example.com"
                                            value="{{ old('email') }}"
                                            required autofocus
                                        >
                                            <label for="email">E-mail</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="password" id="password" name="password"
                                                class="form-control"
                                                placeholder="Password"
                                                required
                                            >
                                            <label for="password">Senha</label>
                                        </div>

                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2">
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
