<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_f2microagendapsv_domain_model_event'] = array(
	'ctrl' => $TCA['tx_f2microagendapsv_domain_model_event']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'event_date,place,country,gmap_link,tickets_link,is_in_home,bodytext;;2;richtext:rte_transform[flag=rte_enabled|mode=ts];4-4-4'
	),
	'types' => array(
		'1' => array('showitem' => 'event_date,place,country,gmap_link,tickets_link,is_in_home,bodytext;;2;richtext:rte_transform[flag=rte_enabled|mode=ts];4-4-4')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_f2microagendapsv_domain_model_event',
				'foreign_table_where' => 'AND tx_f2microagendapsv_domain_model_event.uid=###REC_FIELD_l18n_parent### AND tx_f2microagendapsv_domain_model_event.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'event_date' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:f2microagenda_psv/Resources/Private/Language/locallang_db.xml:tx_f2microagendapsv_domain_model_event.event_date',
			'config'  => array(
				'type' => 'input',
				'size' => 12,
				'max' => 20,
				'eval' => 'datetime,required',
				'checkbox' => '0',
				'default' => '0'
			)
		),
		'place' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:f2microagenda_psv/Resources/Private/Language/locallang_db.xml:tx_f2microagendapsv_domain_model_event.place',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'country' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:f2microagenda_psv/Resources/Private/Language/locallang_db.xml:tx_f2microagendapsv_domain_model_event.country',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'gmap_link' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:f2microagenda_psv/Resources/Private/Language/locallang_db.xml:tx_f2microagendapsv_domain_model_event.gmap_link',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
								"wizards"  => array(
										"_PADDING" => 2,
										"link"     => array(
												"type"         => "popup",
												"title"        => "Link",
												"icon"         => "link_popup.gif",
												"script"       => "browse_links.php?mode=wizard",
												"JSopenParams" => "height=300,width=500,status=0,menubar=0,scrollbars=1",
						"params" => array(
							"blindLinkOptions" => "file, mail, page, spec, folder",
						)
										)
								)
			)
		),
		'tickets_link' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:f2microagenda_psv/Resources/Private/Language/locallang_db.xml:tx_f2microagendapsv_domain_model_event.tickets_link',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
								"wizards"  => array(
										"_PADDING" => 2,
										"link"     => array(
												"type"         => "popup",
												"title"        => "Link",
												"icon"         => "link_popup.gif",
												"script"       => "browse_links.php?mode=wizard",
												"JSopenParams" => "height=300,width=500,status=0,menubar=0,scrollbars=1",
						"params" => array(
							"blindLinkOptions" => "file, mail, page, spec, folder",
						)
										)
								)
			)
		),
		'is_in_home' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:f2microagenda_psv/Resources/Private/Language/locallang_db.xml:tx_f2microagendapsv_domain_model_event.is_in_home',
			'config'  => array(
				'type' => 'check',
				'default' => 1
			)
		),
		'bodytext' => Array (
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.text',
			'l10n_mode' => $l10n_mode,
			'config' => Array (
				'type' => 'text',
				'cols' => '48',
				'rows' => '5',
				'softref' => 'typolink_tag,images,email[subst],url',
				'wizards' => Array(
					'_PADDING' => 4,
					'RTE' => Array(
						'notNewRecords' => 1,
						'RTEonly' => 1,
						'type' => 'script',
						'title' => 'LLL:EXT:cms/locallang_ttc.php:bodytext.W.RTE',
						'icon' => 'wizard_rte2.gif',
						'script' => 'wizard_rte.php',
					),
				)
			)
		),
	),
);
?>
