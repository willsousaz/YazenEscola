<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SemedController extends Controller
{
    public function dashboard(){

        return view('semed.dashboard');

    }

    public function desempenhoRede(){

        return view('semed.desempenho-rede');

    }

    public function desempenhoComparativo(){

        return view('semed.desempenho-comparativo');

    }

    public function frequenciaRede(){

        return view('semed.frequencia-rede');

    }

    public function evasaoRegiao(){

        return view('semed.evasao-regiao');

    }

    public function predicaoEvasao(){

        return view('semed.predicao-evasao');

    }

    public function escolas(){

        return view('semed.escolas');

    }

    public function escolaDetalhe(){

        return view('semed.escola-detalhe');

    }

    public function gradeHoraria(){

        return view('semed.grade-horaria');

    }

    public function calendarioLetivo(){

        return view('semed.calendario-letivo');

    }

    public function frequenciaServidores(){

        return view('semed.frequencia-servidores');

    }

    public function transporte(){

        return view('semed.transporte');

    }

    public function merenda(){

        return view('semed.merenda');

    }

    public function patrimonio(){

        return view('semed.patrimonio');

    }

    public function orcamentoTi(){

        return view('semed.orcamento-ti');

    }

    public function projetos(){

        return view('semed.projetos');

    }

    public function relatorios(){

        return view('semed.relatorios');

    }

    public function importacao(){

        return view('semed.importacao');

    }

    public function auditoria(){

        return view('semed.auditoria');

    }

    public function lgpd(){

        return view('semed.lgpd');

    }

    public function integracoes(){

        return view('semed.integracoes');

    }

    public function suporte(){

        return view('semed.suporte');

    }
}
