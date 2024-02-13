@extends('templates.layout')

@section('conteudo')
    <div class="container mb-5 mb-md-5 mb-lg-0">
        <h4 class="text-center text-primary mb-5"><strong>Consulta de equipamentos</strong></h4>
        <div class="col-12 d-flex justify-content-center mb-4">
            <div class="col-12 col-md-10 col-lg-6 d-flex p-4 border border-primary-subtle rounded row">
                <label for="" class="col-12 col-md-3 me-md-2 fs-5 text-center">Equipamento:</label>
                <div class="dropdown col-12 col-md-6 text-center">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ isset($equip['nome']) ? $equip['nome'] : 'Selecione uma opção' }}
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="px-2"><input type="text" id="searchInput" class="form-control"
                                    placeholder="Buscar"></div>
                        </li>
                        @foreach ($equipamentos as $equipamento)
                            <li><a class="dropdown-item item" href="#" data-id="{{ $equipamento['id'] }}"
                                    data-value="{{ $equipamento['nome'] }}">{{ $equipamento['id'] . ' - ' . $equipamento['nome'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <button class="col-12 col-md-2 btn btn-outline-primary mt-3 mt-md-0" id="filtroBtn"
                    data-route="{{ route('page.calibracao') }}">Filtrar</button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center border border-primary-subtle rounded">
                        <th scope="col" class="">Laboratório</th>
                        <th scope="col" class="">Certificado</th>
                        <th scope="col" class="">Norma</th>
                        <th scope="col" class="">DtCalibração</th>
                        <th scope="col" class="">Prazo Calibração</th>
                        <th scope="col" class="">Prox. Calibração</th>
                        <th scope="col" class="">Opçoes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($calibra as $calibracao)
                        <tr class="border border-primary-subtle rounded">
                            <td>{{ isset($calibracao->laboratorio) ? $calibracao->laboratorio : '' }}</td>
                            <td>{{ isset($calibracao->certificado) ? $calibracao->certificado : '' }}</td>
                            <td>{{ isset($calibracao->norma) ? $calibracao->norma : '' }}</td>
                            <td>{{ isset($calibracao->dtcalibracao) ? $calibracao->dtcalibracao : '' }}</td>
                            <td>{{ isset($calibracao->prazocalibracao) ? $calibracao->prazocalibracao : '' }}</td>
                            <td>{{ isset($calibracao->proxcalibracao) ? $calibracao->proxcalibracao : '' }}</td>
                            <td class="text-center">
                                <a href="{{ isset($calibracao->arquivo) ? asset($calibracao->arquivo) : '#' }}"
                                    target="_blank" class="btn btn-primary">Arquivo</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="tabela"></div>
    </div>
@endsection
