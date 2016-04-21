<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
	

$mod_strings = array (
  'ERR_FORECAST_AMOUNT' => 'O Registro de Valor é obrigatório, e deverá ser um número.',
  'LBL_AMOUNT' => 'Valor',
  'LBL_BASE_RATE' => 'Taxa básica',
  'LBL_COMMIT_HEADER' => 'Registar Previsão',
  'LBL_COMMIT_MESSAGE' => 'Pretende registrar estes valores',
  'LBL_COMMIT_NOTE' => 'Introduza os valores que pretende Registrar para o Período selecionado',
  'LBL_COMMIT_STAGE' => 'Fase comprometimento',
  'LBL_CREATED_BY' => 'Criado por',
  'LBL_CURRENCY' => 'Moeda',
  'LBL_CURRENCY_ID' => 'ID Moeda',
  'LBL_CURRENCY_RATE' => 'Taxa Moeda',
  'LBL_DATE_CLOSED' => 'Data Prevista de fechamento',
  'LBL_DATE_COMMITTED' => 'Data de Registro',
  'LBL_DATE_ENTERED' => 'Data da Criação',
  'LBL_DATE_MODIFIED' => 'Data de Modificação',
  'LBL_DELETED' => 'Deletado',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Oportunidades Previstas',
  'LBL_DV_FORECAST_PERIOD' => 'Período da Previsão',
  'LBL_DV_FORECAST_ROLLUP' => 'Revisão da Previsão',
  'LBL_DV_HEADER' => 'Previsões: Panilha',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Último Valor Registrado',
  'LBL_DV_LAST_COMMIT_DATE' => 'Última Data de Registro:',
  'LBL_DV_MY_FORECASTS' => 'As Minhas Previsões',
  'LBL_DV_MY_TEAM' => 'As Previsões da Minha Equipe',
  'LBL_DV_TIMEPERIOD' => 'Período',
  'LBL_DV_TIMEPERIODS' => 'Períodos :',
  'LBL_DV_TIMPERIOD_DATES' => 'Intervalo de Datas:',
  'LBL_EDITABLE_INVALID' => 'Valor Inválido para {{field_name}}',
  'LBL_EDITABLE_INVALID_RANGE' => 'Valor deve estar entre  {{min}} and {{max}}',
  'LBL_FC_START_DATE' => 'Data de início:',
  'LBL_FC_USER' => 'Agendar Para:',
  'LBL_FDR_ADJ_AMOUNT' => 'Valor Ajustado',
  'LBL_FDR_COMMIT' => 'Valor Registrado:',
  'LBL_FDR_DATE_COMMIT' => 'Data do Registro',
  'LBL_FDR_OPPORTUNITIES' => 'Oportunidades na previsão',
  'LBL_FDR_USER_NAME' => 'Relatório Direto',
  'LBL_FDR_WEIGH' => 'Valor Ponderado das Oportunidades:',
  'LBL_FORECAST' => 'Previsão',
  'LBL_FORECAST_HISTORY' => 'Previsões: Histórico',
  'LBL_FORECAST_HISTORY_TITLE' => 'Histórico',
  'LBL_FORECAST_ID' => 'ID Previsões',
  'LBL_FORECAST_OPP_COUNT' => 'Total Contagem de Oportunidades',
  'LBL_FORECAST_OPP_WEIGH' => 'Valor Ponderado',
  'LBL_FORECAST_PIPELINE_OPP_COUNT' => 'Oportunidades Pipeline',
  'LBL_FORECAST_TIME_ID' => 'ID do Período da Previsão',
  'LBL_FORECAST_TYPE' => 'Tipo de Previsão',
  'LBL_FORECAST_USER' => 'Usuário',
  'LBL_FS_CASCADE' => 'Cascata?',
  'LBL_FS_CREATED_BY' => 'Criado por',
  'LBL_FS_DATE_ENTERED' => 'Data da Criação',
  'LBL_FS_DATE_MODIFIED' => 'Data de Modificação',
  'LBL_FS_DELETED' => 'Deletado',
  'LBL_FS_END_DATE' => 'Data Final',
  'LBL_FS_FORECAST_FOR' => 'Agendar Para:',
  'LBL_FS_FORECAST_START_DATE' => 'Data de Início da Previsão',
  'LBL_FS_MODULE_NAME' => 'Agenda de Previsões',
  'LBL_FS_START_DATE' => 'Data de início:',
  'LBL_FS_STATUS' => 'Status',
  'LBL_FS_TIMEPERIOD' => 'Período',
  'LBL_FS_TIMEPERIOD_ID' => 'Id do Período',
  'LBL_FS_USER_ID' => 'Id do Usuário',
  'LBL_HISTORY_LOG' => 'Ultimo registro',
  'LBL_LIST_FORM_TITLE' => 'Previsões Registradas',
  'LBL_LOADING_COMMIT_HISTORY' => 'Carregando comprometimento',
  'LBL_LV_COMMIT' => 'Valor Registrado:',
  'LBL_LV_COMMIT_DATE' => 'Data de Registro',
  'LBL_LV_OPPORTUNITIES' => 'Oportunidades',
  'LBL_LV_TIMPERIOD' => 'Período',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Data Final',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Data de início:',
  'LBL_LV_TYPE' => 'Tipo de Previsão',
  'LBL_LV_WEIGH' => 'Valor Ponderado',
  'LBL_MANGER_SAVED' => 'Gerente Salvo',
  'LBL_MODIFIED_USER_ID' => 'Modificado Por',
  'LBL_MODULE_NAME' => 'Planilhas de gerenciamento de previsões',
  'LBL_MODULE_NAME_SINGULAR' => 'Planilha de gerenciamento de previsões',
  'LBL_MODULE_TITLE' => 'Planilhas de gerenciamento de previsões',
  'LBL_MY_MANAGER_LINE' => '{{full_name}} (me)',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Não existem Períodos ativos para a Previsão.',
  'LBL_NO_COMMIT' => 'Sem registros anteriores',
  'LBL_OW_ACCOUNTNAME' => 'Conta',
  'LBL_OW_DESCRIPTION' => 'Descrição',
  'LBL_OW_MODULE_TITLE' => 'Planilha Oportunidades',
  'LBL_OW_NEXT_STEP' => 'Próximo Passo',
  'LBL_OW_OPPORTUNITIES' => 'Oportunidade',
  'LBL_OW_PROBABILITY' => 'Probabilidade',
  'LBL_OW_REVENUE' => 'Valor',
  'LBL_OW_TYPE' => 'Tipo',
  'LBL_OW_WEIGHTED' => 'Valor Ponderado',
  'LBL_PERCENT' => 'Percentual',
  'LBL_PRODUCT_ID' => 'ID do Produto',
  'LBL_QC_COMMIT_BUTTON' => 'Submeter',
  'LBL_QC_COMMIT_VALUE' => 'Valor Registrado:',
  'LBL_QC_DIRECT_FORECAST' => 'As Minhas Previsões Diretas',
  'LBL_QC_HEADER_DELIM' => 'Para',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Último Valor Registro:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Última Data de Registro:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Contador de Oportunidades:',
  'LBL_QC_ROLLUP_FORECAST' => 'As Minhas Previsões de Grupo',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Valor Submetido "Rollup"',
  'LBL_QC_TIME_PERIOD' => 'Período:',
  'LBL_QC_UPCOMING_FORECASTS' => 'As Minhas Previsões',
  'LBL_QC_WEIGHT_VALUE' => 'Valor Ponderado:',
  'LBL_QC_WORKSHEET_BUTTON' => 'Folha de Trabalho',
  'LBL_QUOTA' => 'Cota',
  'LBL_QUOTA_ADJUSTED' => 'Quota (Ajustada)',
  'LBL_QUOTA_ID' => 'Id Cota',
  'LBL_REPORTS_TO_USER_NAME' => 'Reporta a',
  'LBL_RESET_CHECK' => 'Todas as Planilhas de Trabalho para os Períodos  selecionados e Usuários autenticados serão removidos, continuar?',
  'LBL_RESET_WOKSHEET' => 'Reiniciar Planilha',
  'LBL_SALES_STAGE' => 'Fase',
  'LBL_SAVE_WOKSHEET' => 'Gravar Planilha',
  'LBL_SEARCH' => 'Selecionar',
  'LBL_SEARCH_LABEL' => 'Selecionar',
  'LBL_SHOW_CHART' => 'Visualizar Gráfico',
  'LBL_SVFS_CASCADE' => 'Relatórios em Cascata?',
  'LBL_SVFS_FORECASTDATE' => 'Agendar Data de Início',
  'LBL_SVFS_HEADER' => 'Agendamento de Previsões',
  'LBL_SVFS_STATUS' => 'Status',
  'LBL_SVFS_USER' => 'Para',
  'LBL_TIMEPERIOD_NAME' => 'Período',
  'LBL_USER_NAME' => 'Nome do Usuário',
  'LBL_VERSION' => 'Versão',
  'LBL_WK_REVISION' => 'Revisão',
  'LBL_WK_VERSION' => 'Versão',
  'LB_FS_KEY' => 'ID',
  'LNK_FORECAST_LIST' => 'Histórico de Previsões',
  'LNK_NEW_OPPORTUNITY' => 'Criar Oportunidades',
  'LNK_NEW_TIMEPERIOD' => 'Criar Período',
  'LNK_QUOTA' => 'Quota',
  'LNK_TIMEPERIOD_LIST' => 'Visualizar Períodos',
  'LNK_UPD_FORECAST' => 'Planilha de gerenciamento de previsões',
);

