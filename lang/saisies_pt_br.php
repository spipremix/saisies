<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.net/tradlang_module/saisies?lang_cible=pt_br
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// B
	'bouton_parcourir_docs_article' => 'Procurar na matéria',
	'bouton_parcourir_docs_breve' => 'Procurar na nota',
	'bouton_parcourir_docs_rubrique' => 'Procurar na seção',
	'bouton_parcourir_mediatheque' => 'Procurar na biblioteca de mídia',

	// C
	'construire_action_annuler' => 'Cancelar',
	'construire_action_configurer' => 'Configurar',
	'construire_action_deplacer' => 'Deslocar',
	'construire_action_dupliquer' => 'Duplicar',
	'construire_action_dupliquer_copie' => '(cópia)',
	'construire_action_supprimer' => 'Excluir',
	'construire_ajouter_champ' => 'Incluir um campo',
	'construire_attention_enregistrer' => 'Lembre-se de gravar as suas alterações!',
	'construire_attention_modifie' => 'O formulário abaixo é diferente do formulário inicial.Você tem a possibilidade de revertê-lo ao estado em que estava, antes das suas alterações.',
	'construire_attention_supprime' => 'As suas alterações comportam exclusões de campos. Por favor, confirme a gravação desta nova versão do formulário.',
	'construire_aucun_champs' => 'No momento, não há nenhum campo no formulário.',
	'construire_confirmer_supprimer_champ' => 'Você quer realmente excluir este campo?',
	'construire_info_nb_champs_masques' => '@nb@ campo(s) invisível(eis) o tempo de configurar o grupo.',
	'construire_position_explication' => 'Indique o campo que este deve preceder.',
	'construire_position_fin_formulaire' => 'No fim do formulário',
	'construire_position_fin_groupe' => 'No fim do grupo @groupe@',
	'construire_position_label' => 'Posição do campo',
	'construire_reinitialiser' => 'Reverter o formulário',
	'construire_reinitialiser_confirmer' => 'Você perderá todas as suas modificações. Você quer realmente reverter à versão inicial do formulário?',
	'construire_verifications_aucune' => 'Nenhuma',
	'construire_verifications_label' => 'Tipo de verificação a ser usada',

	// E
	'erreur_generique' => 'Há erros nos campos abaixo. Por favor, verifique as informações digitadas',
	'erreur_option_nom_unique' => 'Este nome já está sendo usado por outro campo e deve ser único, neste formulário.',

	// I
	'info_configurer_saisies' => 'Página de teste das entradas',

	// L
	'label_annee' => 'Ano',
	'label_jour' => 'Dia',
	'label_mois' => 'Mes',

	// O
	'option_aff_art_interface_explication' => 'Exibir somente as matérias da idioma do usuário',
	'option_aff_art_interface_label' => 'Exibição multilíngue',
	'option_aff_langue_explication' => 'Exibi a idioma da matéria ou da seção selecionada ante do titulo',
	'option_aff_langue_label' => 'Exibir a idioma',
	'option_aff_rub_interface_explication' => 'Exibir somente as seções da idioma do usuário',
	'option_aff_rub_interface_label' => 'Exibição multilíngue',
	'option_afficher_si_explication' => 'Informe as condições para exibir o campo, em função do valor de outros campos. O identificador dos outros campos deve ser inserido entre <code>@</code>.<br />
Exemplo: code>@selection_1@=="Toto"</code> condiciona a exibição do campo a que o campo  <code>selection_1</code> tenha o valor <code>Toto</code>.',
	'option_afficher_si_label' => 'Exibição condicional',
	'option_afficher_si_remplissage_explication' => 'Ao contrário da opção anterior,  esta só condiciona a exibição enquanto o formulário está sendo respondido e não quando o resultado é exibido. Sua sintaxe é a mesma.',
	'option_afficher_si_remplissage_label' => 'Exibição condicional durante o preenchimento',
	'option_attention_explication' => 'Uma mensagem mais importante que a explicação.',
	'option_attention_label' => 'Aviso',
	'option_autocomplete_defaut' => 'Deixar por padrão',
	'option_autocomplete_explication' => 'Ao carregar a página, o seu navegador pode preencher previamente o campo em função do seu histórico',
	'option_autocomplete_label' => 'Preenchimento prévio do campo',
	'option_autocomplete_off' => 'Desativar',
	'option_autocomplete_on' => 'Ativar',
	'option_cacher_option_intro_label' => 'Esconder a primeira opção vazia.',
	'option_choix_alternatif_label' => 'Permitir a proposição duma outra opção',
	'option_choix_alternatif_label_defaut' => 'Outra opção',
	'option_choix_alternatif_label_label' => 'Rótulo desta outra opção',
	'option_choix_destinataires_explication' => 'Um ou vários autores que o usuário poderia escolher. Si nenhum autor esta selecionado, vai com o usuário que instalou o site.',
	'option_choix_destinataires_label' => 'Destinatários possíveis',
	'option_class_label' => 'Classes CSS suplementarias',
	'option_cols_explication' => 'Largura do bloco (em números de caracteres). Este opção não esta sempre aplicada, por a causa que os estilos de seu navegador podem cancelar eles.',
	'option_cols_label' => 'Largura',
	'option_datas_explication' => 'Você deve informar uma escolha para cada linha desse jeito "key|Titulo da escolha"',
	'option_datas_label' => 'Lista das opções possíveis',
	'option_datas_sous_groupe_explication' => 'Você deve indicar uma opção por linha, no formato "cle|Label" da opção.<br /> 
Você pode indicar o início de um subgrupo, no formato "*Título do subgrupo". Para encerrar um subgrupo, você pode iniciar um outro ou inserir uma linha contendo apenas "/*".',
	'option_defaut_label' => 'Valor padrão',
	'option_disable_avec_post_explication' => 'Igual na opção anterior, mas envia ainda o valor dentro um campo escondido.',
	'option_disable_avec_post_label' => 'Desativar mas enviar',
	'option_disable_explication' => 'O campo não pode mas estar foco.',
	'option_disable_label' => 'Desativar o campo',
	'option_erreur_obligatoire_explication' => 'Você pode personalizar a mensagem de erro exibida para indicar a obrigatoriedade (se não, deixe em branco.',
	'option_erreur_obligatoire_label' => 'Mensagem de obrigatoriedade',
	'option_explication_explication' => 'Si precisa, uma pequena sentencia descrevendo o objeto do campo.',
	'option_explication_label' => 'Explicação',
	'option_groupe_affichage' => 'Exibição',
	'option_groupe_description' => 'Descrição',
	'option_groupe_utilisation' => 'Utilização',
	'option_groupe_validation' => 'Validação',
	'option_heure_pas_explication' => 'Ao usar o horário, é exibido um menu para ajudar na entrada de horas e minutos. Você pode escolher o intervalo de tempo entre cada opção (30 min por padrão)',
	'option_heure_pas_label' => 'Intervalo de minutos no menu de apoio à entrada de dados',
	'option_horaire_label' => 'Horário',
	'option_horaire_label_case' => 'Permitir informar também o horário',
	'option_id_groupe_label' => 'Grupo de palavras',
	'option_info_obligatoire_explication' => 'Você pode alterar o valor padrão da indicação d’obrigação : <i>[Obrigatório]</i>.',
	'option_info_obligatoire_label' => 'Indicação d’obrigação',
	'option_inserer_barre_choix_edition' => 'barra d’edição completa',
	'option_inserer_barre_choix_forum' => 'barra dos fóruns',
	'option_inserer_barre_explication' => 'Inserir uma barra de ferramentas do Porte Plume, si esse plugin esta ativado.',
	'option_inserer_barre_label' => 'Inserir uma barra de ferramentas ',
	'option_label_case_label' => 'Etiqueta localizada no lado de caixa de verificação',
	'option_label_explication' => 'O titulo que será exibido.',
	'option_label_label' => 'Etiqueta',
	'option_maxlength_explication' => 'O usuário não poderia teclar mais caracteres que esse número.',
	'option_maxlength_label' => 'Número máximo de caracteres.',
	'option_multiple_explication' => 'O usuário poderia selecionar vários valores.',
	'option_multiple_label' => 'Seleção múltipla',
	'option_nom_explication' => 'Um nome informático que vai identificar o campo.  Só pode conter letras minúsculas, números e traços "_".',
	'option_nom_label' => 'Nome do campo',
	'option_obligatoire_label' => 'Campo obrigatório',
	'option_option_destinataire_intro_label' => 'Legenda da primeira opção vazia (quando em formato de lista)',
	'option_option_intro_label' => 'Etiqueta da primeira escolha vazia.',
	'option_option_statut_label' => 'Exibir os status',
	'option_placeholder_label' => 'Placeholder',
	'option_pliable_label' => 'Expansível',
	'option_pliable_label_case' => 'O grupo de campos poderá ser expandido',
	'option_plie_label' => 'Já retraído',
	'option_plie_label_case' => 'Se o grupo de campos é expansível, ele já estará contraído na exibição do formulário.',
	'option_previsualisation_explication' => 'Si o plugin Porte Plume esta ativado, adiciona uma aba para visualizar o texto digitado.',
	'option_previsualisation_label' => 'Ativar a visualização',
	'option_readonly_explication' => 'O campo pode ser lido, selecionado, mas não pode ser alterado.',
	'option_readonly_label' => 'Só leitura',
	'option_rows_explication' => 'Altura do bloco em número de linhas. Esta opção não esta sempre aplicada, porque os estilos CSS do seu navegador pode cancelar eles.',
	'option_rows_label' => 'O número informando quantas linhas tem.',
	'option_size_explication' => 'Largura do campo em número de caractéres. Esta opção não é sempre aplicável, já que os estilos CSS do seu site poderão sobrepor-se.',
	'option_size_label' => 'Tamanho do campo',
	'option_type_choix_plusieurs' => 'Permitir que o usuário escolha <strong>diversos</strong> destinatários.',
	'option_type_choix_tous' => 'Incluir <strong>todos</strong> estes autores como destinatários. O usuário não terá nenhuma escolha.',
	'option_type_choix_un' => 'Permitir ao usuário escolher <strong>um único</strong> destinatário (no formato de lista).',
	'option_type_choix_un_radio' => 'Permite ao usuário escolher <strong>um único</strong> destinatário (no formato de checkboxes).',
	'option_type_explication' => 'Em modo "invisível", o conteúdo do campo não será visível.',
	'option_type_label' => 'Tipo do campo',
	'option_type_password' => 'Texto escondido durante o enchimento.',
	'option_type_text' => 'Normal',
	'option_valeur_non_explication' => 'Valor postado se o checkbox não estiver selecionado',
	'option_valeur_non_label' => 'Valor não',
	'option_valeur_oui_explication' => 'VAlor postado se o checkbox estiver selecionado',
	'option_valeur_oui_label' => 'Valor sim',

	// S
	'saisie_auteurs_explication' => 'Permite selecionar um ou mais autores',
	'saisie_auteurs_titre' => 'Autores',
	'saisie_case_explication' => 'Permite de ativar ou desativar algo.',
	'saisie_case_titre' => 'Caixa de verificação única.',
	'saisie_checkbox_explication' => 'Permite de escolher varias opções com caixas de verificação.',
	'saisie_checkbox_titre' => 'Caixas de verificação.',
	'saisie_date_explication' => 'Permite de inserir uma data com a ajuda do calendário.',
	'saisie_date_titre' => 'Data',
	'saisie_destinataires_explication' => 'Permite escolher um ou mais destinatários entre autores pré-selecionados.',
	'saisie_destinataires_titre' => 'Destinatários',
	'saisie_explication_explication' => 'Um texto explicativo geral.',
	'saisie_explication_titre' => 'Explicação',
	'saisie_fieldset_explication' => 'Uma área que poderá englobar vários campos.',
	'saisie_fieldset_titre' => 'Grupo de campos',
	'saisie_file_explication' => 'Envio de um arquivo',
	'saisie_file_titre' => 'Arquivo',
	'saisie_hidden_explication' => 'Um campo preenchido previamente, que o usuário não poderá ver.',
	'saisie_hidden_titre' => 'Campo invisível',
	'saisie_input_explication' => 'Uma simples linha de texto podendo ser visível ou mascarada (senha).',
	'saisie_input_titre' => 'Linha de texto',
	'saisie_mot_explication' => 'Uma ou mais palavras-chave de um grupo de palavras',
	'saisie_mot_titre' => 'Palavra-chave',
	'saisie_oui_non_explication' => 'Sim ou não, está claro? ;)',
	'saisie_oui_non_titre' => 'Sim ou não',
	'saisie_radio_defaut_choix1' => 'Um',
	'saisie_radio_defaut_choix2' => 'Dois',
	'saisie_radio_defaut_choix3' => 'Três',
	'saisie_radio_explication' => 'Permite escolher uma opção entre várias disponíveis.',
	'saisie_radio_titre' => 'Botões rádio',
	'saisie_selecteur_article' => 'Exibe u, navegador de seleção de matéria',
	'saisie_selecteur_article_titre' => 'Seletor de matéria',
	'saisie_selecteur_document' => 'Exibe um seletor de documento',
	'saisie_selecteur_document_titre' => 'Seletor de documento',
	'saisie_selecteur_rubrique' => 'Exibe um navegador de seleção de seção',
	'saisie_selecteur_rubrique_article' => 'Exibe um navegador de seleção de matéria ou de seção',
	'saisie_selecteur_rubrique_article_titre' => 'Seletor de matéria ou seção',
	'saisie_selecteur_rubrique_titre' => 'Seletor de seção',
	'saisie_selection_explication' => 'Escolher uma opção em uma lista',
	'saisie_selection_multiple_explication' => 'Permite escolher várias opções em uma lista',
	'saisie_selection_multiple_titre' => 'Seleção múltipla',
	'saisie_selection_titre' => 'Lista',
	'saisie_textarea_explication' => 'Um campo de texto em várias linhas.',
	'saisie_textarea_titre' => 'Bloco de texto',

	// T
	'tous_visiteurs' => 'Todos os visitantes (mesmo os não registrados)',
	'tout_selectionner' => 'Selecionar todo',

	// V
	'vue_sans_reponse' => '<i>Sem resposta</i>',

	// Z
	'z' => 'zzz'
);

?>
