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
  'ERR_INT_ONLY_EMAIL_PER_RUN' => '회당 전송 이메일 수를 정수가치만을 사용해 지정하십시오',
  'LBL_ALLOW_DEFAULT_SELECTION' => '사용자가 이 계정을 이용해 이메일 발신을 허용',
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => '이 항목이 선택되었을때 모든 사용자자 동일 발신 계정을 이용해 시스템 공지나 알림을 보낼수 있습니다. 만약 항목이 선택되지 않았다면 각자의 계정이 입력된후 발신메일 서버를 이용할수 있습니다.',
  'LBL_ATTACHMENT_AUDIT' => '전송되었습니다. 디스크 사용을 보존하기 위해 중복되지 않았습니다.',
  'LBL_CAMP_MESSAGE_COPY' => '캠페인 메세지 복사본 저장',
  'LBL_CAMP_MESSAGE_COPY_DESC' => '모든 캠페인동안 보내진 각각의 이메일 메세지의 전체 복사본을 저장하시겠습니까? 저장하지 않는 초기설정을 권장합니다. 이는 전송이 되었거나 각각의 메세지 재생성시 변이가 필요한 템플릿만 저장합니다.',
  'LBL_CHOOSE_EMAIL_PROVIDER' => '이메일 공급자를 선택하십시오.',
  'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS' => '캠페인 이메일 설정 형성',
  'LBL_CONFIGURE_SETTINGS' => '이메일 설정 구성하기',
  'LBL_CUSTOM_LOCATION' => '정의된 사용자',
  'LBL_DEFAULT_LOCATION' => '초기 설정',
  'LBL_DISCLOSURE_TEXT_SAMPLE' => '노트: 이 이메일 메세지는 의도한 수신자만을 위해 사용되며 기밀이나 특전 정보가 포함될수 있습니다. 권한없는 검토, 사용, 발표 또는 분배등은 금지되어 있습니다. 의도된 수신자가 아니라면 원 메세지를 삭제하고 발신자에 알려 기록이 수정될수 있도록 하십시오. 감사합니다.',
  'LBL_DISCLOSURE_TEXT_TITLE' => '발표 내용물',
  'LBL_DISCLOSURE_TITLE' => '매 이메일마다 발표 메세지 추가하기',
  'LBL_EMAILS_PER_RUN' => '회당 일정수의 이메일이 보내졌습니다.',
  'LBL_EMAIL_DEFAULT_CHARSET' => '이 문자 설정에서 이메일 메세지 작성하기',
  'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => '삭제된 이메일의 노트와 첨부물을 삭제하십시오',
  'LBL_EMAIL_DEFAULT_EDITOR' => '이 고객을 사용해 이메일 작성하기',
  'LBL_EMAIL_GMAIL_DEFAULTS' => 'Prefill Gmail&#153; 초기설정',
  'LBL_EMAIL_LINK_TYPE' => '이메일 고객',
  'LBL_EMAIL_LINK_TYPE_HELP' => 'Sugar 메일 고객:Sugar 어플리케이션에서 이메일 고객을 사용해 이메일 전송<br />외부 메일 고객: Microsoft Outlook 같은 Sugar 어플리케이션의 외부고객을 이용해 메일 전송',
  'LBL_EMAIL_OUTBOUND_CONFIGURATION' => '발신 이메일 형성',
  'LBL_EMAIL_PER_RUN_REQ' => '회당 일정수의 이메일이 보내졌습니다.',
  'LBL_EMAIL_SMTP_SSL' => 'Enable SMTP over SSL?',
  'LBL_EMAIL_USER_TITLE' => '사용자 이메일 초기설정',
  'LBL_EXCHANGE_LOGO' => '교환',
  'LBL_EXCHANGE_SMTPPASS' => '비밀번호 교환',
  'LBL_EXCHANGE_SMTPPORT' => '서버 포트 교환',
  'LBL_EXCHANGE_SMTPSERVER' => '서버 교환',
  'LBL_EXCHANGE_SMTPUSER' => '사용자명 교환',
  'LBL_FROM_ADDRESS_HELP' => '작동시 지정 사용자명과 이메일 주소는 이메일의 발신자 필드에 포함됩니다. 이 기능은 서버계정이 이 아닌 다른 이메일 계정에서의 발송을 허용하지 않는 SMTP서버와 같이 작동하지 않을수도 있습니다.',
  'LBL_GMAIL_LOGO' => 'Gmail',
  'LBL_GMAIL_SMTPPASS' => 'Gmail 비밀번호:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail 이메일 주소:',
  'LBL_HELP' => '도움말',
  'LBL_ID' => 'ID:',
  'LBL_INVALID_ENTRY_POINT' => '유효한 입력포인트가 아님',
  'LBL_IN_QUEUE' => '진행중',
  'LBL_IN_QUEUE_DATE' => '대기중은 날짜',
  'LBL_LIST_CAMPAIGN' => '캠페인:',
  'LBL_LIST_FORM_PROCESSED_TITLE' => '진행 완료',
  'LBL_LIST_FORM_TITLE' => '대기',
  'LBL_LIST_FROM_EMAIL' => '이메일로부터',
  'LBL_LIST_FROM_NAME' => '발신인',
  'LBL_LIST_IN_QUEUE' => '진행중',
  'LBL_LIST_MESSAGE_NAME' => '마케팅 메세지',
  'LBL_LIST_RECIPIENT_EMAIL' => '이메일 수신자',
  'LBL_LIST_RECIPIENT_NAME' => '수신자명',
  'LBL_LIST_SEND_ATTEMPTS' => '시범 보내기',
  'LBL_LIST_SEND_DATE_TIME' => 'Send On',
  'LBL_LIST_USER_NAME' => '사용자명',
  'LBL_LOCATION_ONLY' => '장소:',
  'LBL_LOCATION_TRACK' => '캠페인 추적 파일 위치',
  'LBL_MAIL_SENDTYPE' => '메일 이전 대행',
  'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP 인증서를 사용',
  'LBL_MAIL_SMTPPASS' => '비밀번호',
  'LBL_MAIL_SMTPPORT' => 'SMTP 포트:',
  'LBL_MAIL_SMTPSERVER' => 'SMTP 메일 서버:',
  'LBL_MAIL_SMTPUSER' => '사용자명',
  'LBL_MARKETING_ID' => '마케팅 ID',
  'LBL_MODULE_ID' => 'EmailMan',
  'LBL_MODULE_NAME' => '이메일 설정',
  'LBL_MODULE_NAME_SINGULAR' => '이메일 설정',
  'LBL_MODULE_TITLE' => '발신 이메일 대기 관리',
  'LBL_NO' => '아니오',
  'LBL_NOTIFICATION_ON_DESC' => '작동시 기록이 지정되었을때 이메일이 사용자에게 발송됩니다.',
  'LBL_NOTIFY_FROMADDRESS' => '발신 주소',
  'LBL_NOTIFY_FROMNAME' => '발신 이름',
  'LBL_NOTIFY_ON' => '과제 알림',
  'LBL_NOTIFY_SEND_BY_DEFAULT' => '새 사용자에게 알림 보내기',
  'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => '지정 사용자의 이메일 주소에서 알림 보내기',
  'LBL_NOTIFY_TITLE' => '이메일 선택 항목',
  'LBL_OLD_ID' => '예전 ID',
  'LBL_OUTBOUND_EMAIL_TITLE' => '발신 이메일 선택항목',
  'LBL_OUTGOING_SECTION_HELP' => '작업흐름 알림을 포함한 이메일통지 전송을 위한 초기설정 발신 메일서버를 형성합니다.',
  'LBL_PREPEND_TEST' => '[Test]:',
  'LBL_RELATED_ID' => '관련ID',
  'LBL_RELATED_TYPE' => '관련 형식',
  'LBL_SAVE_OUTBOUND_RAW' => '원 발신 이메일 저장',
  'LBL_SEARCH_FORM_PROCESSED_TITLE' => '진행된 검색',
  'LBL_SEARCH_FORM_TITLE' => '대기 검색',
  'LBL_SECURITY_APPLET' => 'Applet tag',
  'LBL_SECURITY_BASE' => '기본 태그',
  'LBL_SECURITY_DESC' => '다음 수신 이메일이나 전시된 이메일 모듈을 통해 허용되지 않는지 확인하십시오.',
  'LBL_SECURITY_EMBED' => '삽입된 태그',
  'LBL_SECURITY_FORM' => '형식 태그',
  'LBL_SECURITY_FRAME' => '구조 태그',
  'LBL_SECURITY_FRAMESET' => '구조설정 태그',
  'LBL_SECURITY_IFRAME' => 'iFrame 태그',
  'LBL_SECURITY_IMPORT' => '가져오기 태그',
  'LBL_SECURITY_LAYER' => 'Layer tag',
  'LBL_SECURITY_LINK' => '링크 태그',
  'LBL_SECURITY_OBJECT' => 'Object tag',
  'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Outlook의 최소 보안 설정의 초기설정 선택하십시오',
  'LBL_SECURITY_SCRIPT' => 'Script tag',
  'LBL_SECURITY_STYLE' => '스타일 태그',
  'LBL_SECURITY_TITLE' => '이메일 보안 설정',
  'LBL_SECURITY_TOGGLE_ALL' => '전체 항목 토글',
  'LBL_SECURITY_XMP' => 'Xmp tag',
  'LBL_SEND_ATTEMPTS' => '보내기 시도',
  'LBL_SEND_DATE_TIME' => '보내는 날짜',
  'LBL_UNAUTH_ACCESS' => '관리자에 승인되지 않은 접근입니다.',
  'LBL_VIEW_PROCESSED_EMAILS' => '진행된 이메일 보기',
  'LBL_VIEW_QUEUED_EMAILS' => '대기 이메일 보기',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! 메일 비밀번호',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! 메일 ID:',
  'LBL_YAHOO_MAIL_LOGO' => 'Yahoo 메일',
  'LBL_YES' => '예',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Config.php 설정 사이트 가치',
  'TXT_REMOVE_ME' => '이 이메일 목록에서 본인을 제거하려면',
  'TXT_REMOVE_ME_ALT' => '이 이메일 목록에서 본인을 제거하려면',
  'TXT_REMOVE_ME_CLICK' => '이곳을 클릭하십시오',
);

