<?php
use App\Http\Controllers\ProfController;
use App\Http\Controllers\SemedController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/',[MainController::class,'index']);

Route::get('/login',[AuthController::class,'login']);

// Professor
Route::get('/dashboard',[ProfController::class,'dashboard']);
Route::get('/professor/frequencia',[ProfController::class,'frequencia']);
Route::get('/professor/notas',[ProfController::class,'notas']);
Route::get('/professor/plano-intervencao',[ProfController::class,'planoIntervencao']);
Route::get('/professor/aee',[ProfController::class,'aee']);

// SEMED
Route::get('/semed/dashboard',[SemedController::class,'dashboard']);
Route::get('/semed/desempenho-rede',[SemedController::class,'desempenhoRede']);
Route::get('/semed/desempenho-comparativo',[SemedController::class,'desempenhoComparativo']);
Route::get('/semed/frequencia-rede',[SemedController::class,'frequenciaRede']);
Route::get('/semed/evasao-regiao',[SemedController::class,'evasaoRegiao']);
Route::get('/semed/predicao-evasao',[SemedController::class,'predicaoEvasao']);
Route::get('/semed/escolas',[SemedController::class,'escolas']);
Route::get('/semed/escola-detalhe',[SemedController::class,'escolaDetalhe']);
Route::get('/semed/grade-horaria',[SemedController::class,'gradeHoraria']);
Route::get('/semed/calendario-letivo',[SemedController::class,'calendarioLetivo']);
Route::get('/semed/frequencia-servidores',[SemedController::class,'frequenciaServidores']);
Route::get('/semed/transporte',[SemedController::class,'transporte']);
Route::get('/semed/merenda',[SemedController::class,'merenda']);
Route::get('/semed/patrimonio',[SemedController::class,'patrimonio']);
Route::get('/semed/orcamento-ti',[SemedController::class,'orcamentoTi']);
Route::get('/semed/projetos',[SemedController::class,'projetos']);
Route::get('/semed/relatorios',[SemedController::class,'relatorios']);
Route::get('/semed/importacao',[SemedController::class,'importacao']);
Route::get('/semed/auditoria',[SemedController::class,'auditoria']);
Route::get('/semed/lgpd',[SemedController::class,'lgpd']);
Route::get('/semed/integracoes',[SemedController::class,'integracoes']);
Route::get('/semed/suporte',[SemedController::class,'suporte']);

