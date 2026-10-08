<div class="container-fluid p-0 min-vh-100" style="background-color: #f8f9fa;">

    <style>
        .custom-link {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .custom-link:hover {
            background-color: #f3e8ff !important;
            color: #b356ff !important;
        }

        .custom-link.active {
            background-color: #f3e8ff !important;
            color: #b356ff !important;
            font-weight: 500;
        }

        .nav-item-cadastro {
            position: relative;
        }

        .submenu-cadastro {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            padding-top: 6px;
            z-index: 20;
        }

        .submenu-cadastro .submenu-inner {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            padding: 6px;
        }

        .nav-item-cadastro:hover .submenu-cadastro {
            display: block;
        }

        .submenu-cadastro a {
            display: flex;
            align-items: center;
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 0.85rem;
            color: #6c757d;
            text-decoration: none;
        }

        .submenu-cadastro a:hover {
            background-color: #f3e8ff;
            color: #b356ff;
        }
    </style>

    <div class="d-flex" style="min-height: 100vh;">

        <div class="d-flex flex-column flex-shrink-0 p-3 bg-white border-end" style="width: 280px; min-height: 100vh;">
            <div class="d-flex align-items-center mb-4 px-2" style="height: 50px;">
                <a class="navbar-brand fw-bold fs-4 text-uppercase" style="color: #c156ff;">PROJETO IOT</a>
            </div>
            <ul class="nav nav-pills flex-column mb-auto gap-1">
                <li><a href="/dashboard" class="nav-link custom-link"><i
                            class="bi bi-house-door me-3 fs-5"></i><span>DASHBOARD</span></a></li>
                <li class="nav-item-cadastro">
                    <a href="/ambiente/create" class="nav-link custom-link active ">
                        <i class="bi bi-geo-fill me-3 fs-5"></i><span>AMBIENTE</span>
                    </a>
                    <div class="submenu-cadastro">
                        <div class="submenu-inner">
                            <a href="/ambiente/create"><i class="bi bi-person-square me-3 fs-5"></i>CADASTRO - AMBIENTE</a>
                            <a href="ambiente/edit"><i class="bi bi-toggle2-on me-3 fs-5"></i>EDITAR - AMBIENTE</a>
                            <a href="ambiente/index"><i class="bi bi-book me-3 fs-5"></i>AMBIENTES CADASTRADOS</a>
                        </div>
                    </div>
                </li>
                <li><a href="http://127.0.0.1/matricula" class="nav-link custom-link"><i
                            class="bi bi-folder-check me-3 fs-5"></i><span>REGISTROS</span></a></li>
                <li><a href="#" class="nav-link custom-link"><i
                            class="bi-radar me-3 fs-5"></i><span>SENSORES</span></a></li>
        </div>

        <div class="flex-grow-1 d-flex flex-column">

            <nav class="navbar navbar-light bg-white px-4 border-bottom" style="height: 74px;">
                <div class="container-fluid d-flex align-items-center justify-content-between p-0">
                    <div style="width: 350px;">
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0 text-muted rounded-start-pill ps-3">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" class="form-control bg-light border-0 rounded-end-pill py-2"
                                placeholder="Pesquisar...">
                        </div>
                    </div>
                </div>
            </nav>
            <div class="card shadow-sm border-0 p-9 p-md-5 rounded-5 bg-white d-flex justify-content-center" style="width:600px">

                <div class="text-center mb-2">
                    <i class="bi bi-geo-fill" style="font-size: 4rem; color: rgb(223, 225, 229);"></i>
                    <h1 class="h2 fw-bold mb-8">CADASTRO - AMBIENTE</h1>

                    <p class="text-muted small">Preencha os campos abaixo para registrar um novo ambiente.</p>
                </div>

                <div class="mb-6">
                    <div class="d-flex flex-wrap justify-content-center gap-2">

                    </div>
                </div>
                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label for="nome" class="form-label small fw-bold text-secondary">NOME DO AMBIENTE</label>
                        <input type="text" class="form-control rounded-pill border-light-subtle" id="nome"
                            wire:model='nome' placeholder="Ex: Refeitório" required style="background-color: #fcfcfc;">
                    </div>

                    <div class="row">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1"
                                class="form-label small fw-bold text-secondary">DESCRIÇÃO</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label small fw-bold text-secondary">STATUS</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                                <label class="form-check-label" for="radioDefault1">
                                    Ativo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2"
                                    checked>
                                <label class="form-check-label" for="radioDefault2">
                                    Inativo
                                </label>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit"
                                class="btn btn-primary w-100 rounded-pill py-2 shadow-sm fw-bold">Cadastrar
                                ambiente</button>
                        </div>
                </form>

            </div>
        </div>
    </div>
</div>
