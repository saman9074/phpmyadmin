<?php
/* $Id$ */

$charset = 'windows-1251';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('����', '��', '��', '��');

$day_of_week = array('��', '��', '��', '��', '��', '��', '��');
$month = array('ѳ�', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y �., %H:%M';

$timespanfmt = '%s ����, %s �����, %s ������ � %s ������';

$strAPrimaryKey = '���� ������ ��������� ���� �� %s';
$strAbortedClients = '���������';
$strAccessDenied = '������ ����������';
$strAction = 'ĳ�';
$strAddDeleteColumn = '������/������� ������� �������';
$strAddDeleteRow = '������/������� ����� �������';
$strAddNewField = '������ ���� ����';
$strAddPriv = '������ ��� ������';
$strAddPrivMessage = '���� ������ ����� �������';
$strAddPrivilegesOnDb = '������ ����� ��� ���� ���� �����';
$strAddPrivilegesOnTbl = '������ ����� ��� ���� �������';
$strAddSearchConditions = '������ ����� ������ (��� ��� ����� "where"):';
$strAddToIndex = '������ �� �������&nbsp;%s&nbsp;��������(�)';
$strAddUser = '������ ������ �����������';
$strAddUserMessage = '���� ������ ������ �����������.';
$strAdministration = '������������';
$strAffectedRows = '������ �����:';
$strAfter = 'ϳ��� %s';
$strAfterInsertBack = '�����������';
$strAfterInsertNewInsert = '�������� ����� �����';
$strAll = '���';
$strAllTableSameWidth = '���������� �� ������� �������� ������?';
$strAlterOrderBy = '������ ������� �������';
$strAnIndex = '���� ������ ������ ��� %s';
$strAnalyzeTable = '����� �������';
$strAnd = '�';
$strAny = '��������';
$strAnyColumn = '������� �������';
$strAnyDatabase = '������ ���� �����';
$strAnyHost = '�������� ����';
$strAnyTable = '������� �������';
$strAnyUser = '�������� ����������';
$strAscending = '����������';
$strAtBeginningOfTable = '�� ������� �������';
$strAtEndOfTable = '� ���� �������';
$strAttr = '��������';
$strAutodetect = '��������������';  
$strAutomaticLayout = '������������ layout';  

$strBack = '�����';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' �������� ';
$strBinaryDoNotEdit = ' ������ ���� - �� ����������� ';
$strBookmarkDeleted = '�������� ���� ��������.';
$strBookmarkLabel = '̳���';
$strBookmarkQuery = '�������� �� SQL-�����';
$strBookmarkThis = '�������� �� ����� SQL-�����';
$strBookmarkView = '���� ��������';
$strBrowse = '�����������';
$strBzError = 'phpMyAdmin �� ���� ������������� dump ����� ���������� Bz2 ���������� � ��� ���� PHP. ����������� ���������� ���������� � ���������������� ���� ������ phpMyAdmin ��������� <code>$cfg[\'BZipDump\']</code> �� <code>FALSE</code>. ���� �� ������ ��������������� ��������� Bz2 �������������, ��� ��������� �������� ����� PHP. ���. ���������� � ������������ ��� ������� %s.';
$strBzip = '���������� � "bzip"';

$strCSVOptions = 'CSV �����';
$strCannotLogin = '�� ���� �������������� �� MySQL ������';
$strCantLoad = '�� ���� ����������� %s,<br />����� ��������� ������������ PHP.';
$strCantLoadMySQL = '���������� MySQL �� �����������,<br />�������� ������������ PHP.';
$strCantLoadRecodeIconv = '�� ���� ����������� iconv �� recode extension ��������� ��� ���� charset-�, ������������� php ���, ��� ����� ���� ��������������� �� extensions, ��� ���������� ���� charset-� � phpMyAdmin.';
$strCantRenameIdxToPrimary = '��������� ������������� ������ � PRIMARY!';
$strCantUseRecodeIconv = '�� ����  ����������� ��/��� iconv, ��/��� libiconv, ��/��� ������� recode_string ���� ���� ����������� extension reports. �������� ���� php ������������.';
$strCardinality = 'ʳ������ ��������';
$strCarriage = '���������� �������: \\r';
$strChange = '������';
$strChangeCopyMode = '�������� ������ ����������� � ������ � ������� � ...';
$strChangeCopyModeCopy = '... �������� �������.';
$strChangeCopyModeDeleteAndReload = ' ... ������� ������� � ������� ������������ �� ������������� ����� ���� ����.';
$strChangeCopyModeJustDelete = ' ... ������� ������� � ������� ������������.';
$strChangeCopyModeRevoke = ' ... ��������� �� ������� ����� ������� �����������, �������� ���� ���� ����.';
$strChangeCopyUser = '������ ����������� ���� / �������� �����������';
$strChangeDisplay = '������� ���� ��� �����������';
$strChangePassword = '������ ������';
$strCharset = '���� �������';
$strCharsetOfFile = '��������� �����:';
$strCheckAll = '³������ ���';
$strCheckDbPriv = '��������� ������ ���� �����';
$strCheckPrivs = '��������� �����';
$strCheckPrivsLong = '��������� ����� ��� ���� ����� &quot;%s&quot;.';
$strCheckTable = '��������� �������';
$strChoosePage = '����� ������� ������� ��� �����������';
$strColComFeat = '���������� �������� ��������';
$strColumn = '�������';
$strColumnNames = '����� �������';
$strColumnPrivileges = '�����, �� ���������� ������� �������';
$strCommand = '�������';
$strComments = '��������';
$strCompleteInserts = '����� �������';
$strConfigFileError = 'phpMyAdmin �� ���� ��������� ��������������� ���� <br />�� ���� ������� � ���� �������, ���� php ��������� �� ����������� ������� (parse error) � �����, ��� �� ���� ������ ������ �����.<br />���������� ��������������� ���� ������������� �� ��������� ��������� �������� ����� � ���������� �������� ����������� ��� ������� (php error messages). ��������� ���� � ���� ������ ����� ����� �� ���������.  <br />���� �� �������� ������� �������, - ������� ��� � �������.';
$strConfigureTableCoord = '����� �������������� ���������� ������� %s';
$strConfirm = '�� �������� ������ �� �������?';
$strConnections = '�\'������';
$strCookiesRequired = '� ����� ������� Cookies ������� ���� ���������.';
$strCopyTable = '��������� ������� � (���� �����<b>.</b>�������):';
$strCopyTableOK = '������� %s ���� ���������� � %s.';
$strCouldNotKill = 'phpMyAdmin �� ���� ��������� ������ %s. ³� ��� ������� ��� ���������.';
$strCreate = '��������';
$strCreateIndex = '�������� ������ ��&nbsp;%s&nbsp;��������';
$strCreateIndexTopic = '�������� ����� ������';
$strCreateNewDatabase = '�������� ���� ��';
$strCreateNewTable = '�������� ���� ������� � �� %s';
$strCreatePage = '�������� ���� �������';
$strCreatePdfFeat = '�������� PDF-����';
$strCriteria = '�������';

$strDBComment = '�������� ���� �����: ';
$strDBGContext = '��������';
$strDBGContextID = '�������� ID';
$strDBGHits = 'Hits';
$strDBGLine = '�����';
$strDBGMaxTimeMs = '���� ���, ��';
$strDBGMinTimeMs = '̳� ���, ��';
$strDBGModule = '������';
$strDBGTimePerHitMs = 'Time/Hit, ��';
$strDBGTotalTimeMs = '��������� ���, ��';
$strData = '����';
$strDataDict = '������� �����';
$strDataOnly = '���� ����';
$strDatabase = '�� ';
$strDatabaseHasBeenDropped = '���� ����� %s �������.';
$strDatabaseWildcard = '���� ����� (��������� ������������ ��������):';
$strDatabases = '���� �����';
$strDatabasesDropped = '%s ���(�\�) ����� ������ �������.';
$strDatabasesStats = '���������� ��� �����';
$strDatabasesStatsDisable = '���������� ����������';
$strDatabasesStatsEnable = '��������� ����������';
$strDatabasesStatsHeavyTraffic = '�������: ���������� ����� ���������� ���� ����� ���� ���������� ������� ������ �� ��� �������� �� ����� ����� MySQL.';
$strDbPrivileges = '�����, �� ���������� ���� �����';
$strDbSpecific = '����������� ��� ���� �����';
$strDefault = '�� ������������';
$strDefaultValueHelp = '��� ������� �� �������������, ������ ���� ��������, ��� ������������ ��������� ������ �� �����, � ������ ������: a';
$strDelOld = '�� ������� �� ��������� �� �������, ��� ��� ����. ������ �������� �� ���������?';  
$strDelete = '��������';
$strDeleteAndFlush = '������� ������������ � ��������������� ����� ���� �����.';
$strDeleteAndFlushDescr = '�� ������ �����, ����� ���������������� ���� ���� ��������� ������ ���.';
$strDeleteFailed = '��������� �� �������!';
$strDeleteUserMessage = '�������� ����������� %s.';
$strDeleted = '����� ��������';
$strDeletedRows = '�������� �������� �����:';
$strDeleting = '������� %s';
$strDescending = '���������';
$strDisabled = '�����������';
$strDisplay = '��������';
$strDisplayFeat = '�������� ���������';
$strDisplayOrder = '������� ���������:';
$strDisplayPDF = '�������� PDF �����';
$strDoAQuery = '�������� "����� ����� ��������" (������ �����������: "%")';
$strDoYouReally = '�� �������� ������ ';
$strDocu = '������������';
$strDrop = '�������';
$strDropDB = '������� �� %s';
$strDropSelectedDatabases = '������� ������� ���� �����';
$strDropTable = '�������� �������';
$strDumpComments = '�������� ������� ������ �� �������� SQL-��������';
$strDumpXRows = 'Ǵ��������� ���� %s ����� ��������� � %s -��.';
$strDumpingData = '���� ����� �������';
$strDynamic = '���������';

$strEdit = '����������';
$strEditPDFPages = '���������� PDF �������';
$strEditPrivileges = '����������� �������';
$strEffective = '������������';
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL ��������� ������ ��������� (����� ���� �����).';
$strEnabled = '���������';
$strEnd = 'ʳ����';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglishPrivileges = ' ����������: ������ MySQL ��������� ��-��������� ';
$strError = '�������';
$strExplain = '��������� SQL';
$strExport = '�������';
$strExportToXML = '������������ � XML ������';
$strExtendedInserts = '��������� �������';
$strExtra = '���������';

$strFailedAttempts = '�������� �����';
$strField = '����';
$strFieldHasBeenDropped = '���� %s ���� ��������';
$strFields = '����';
$strFieldsEmpty = ' �������� ������ ����! ';
$strFieldsEnclosedBy = '���� ����� �';
$strFieldsEscapedBy = '���� �����������';
$strFieldsTerminatedBy = '���� ��������';
$strFileNameTemplate = '������ ����� �����'; 
$strFileNameTemplateHelp = '����������� __DB__ �� ����� ���� �����, __TABLE__ �� ����� ������� � %s������� strftime%s ����� ��� ���������� ������ ����, ���������� ������ ������ �����������. ����-���� ����� ����� ���� ���������.';
$strFileNameTemplateRemember = '�����\'����� ������'; 
$strFixed = '����������';
$strFlushPrivilegesNote = '�������: phpMyAdmin ������ ����� ������������ ������������� � ������� ���� MySQL. ���� ���� ������� ���� ���������� �� ����, �� ���������������� ��������, ���� � �� ������� ��������� ���� ������. � ����� ������� ��� ��������� %s��������������� �����%s ����� ������������.';
$strFlushTable = '�������� ��� ������� ("FLUSH")';
$strFormEmpty = '�� ������ �������� ��� �����!';
$strFormat = '������';
$strFullText = '����� ������';
$strFunction = '�������';

$strGenBy = '�����������';
$strGenTime = '��� ���������';
$strGeneralRelationFeat = '�������� ���������';
$strGlobal = '����������';
$strGlobalPrivileges = '��������� �����';
$strGlobalValue = '�������� ��������';
$strGo = '������';
$strGrantOption = 'Grant';
$strGrants = '�����';
$strGzip = '���������� � "gzip"';

$strHasBeenAltered = '���� ������.';
$strHasBeenCreated = '���� ��������.';
$strHaveToShow = '��������� ������� ������� ���� �������� ��� ������';
$strHome = '�� �������';
$strHomepageOfficial = '�������� ������� phpMyAdmin';
$strHomepageSourceforge = '������������ phpMyAdmin � Sourceforge';
$strHost = '����';
$strHostEmpty = '������� ��\'� �����!';

$strId = 'ID';
$strIdxFulltext = '���������';
$strIfYouWish = '���� �� ������ ����������� ���� ���� ������� �������, ������� ��������� ������ ������ ����.';
$strIgnore = '������������';
$strImportDocSQL = '����������� docSQL �����';
$strInUse = '���������������';
$strIndex = '������';
$strIndexHasBeenDropped = '������ %s ���� �������';
$strIndexName = '����� �������&nbsp;:';
$strIndexType = '��� �������&nbsp;:';
$strIndexes = '�������';
$strInnodbStat = '������ InnoDB';  
$strInsecureMySQL = '��� ���� ������������ ������ ��������� (root ��� ������) �� ���������� �������������� ����������� MySQL. ��� MySQL ������ � ����� ������� �������� ��� ���������� � ���� ��� ����\'������ ��� ��������� �� ��������� � �������.';
$strInsert = '��������';
$strInsertAsNewRow = '�������� �� ����� �����';
$strInsertNewRow = '�������� ����� �����';
$strInsertTextfiles = '�������� ������� ����� � �������';
$strInsertedRows = '������ �����:';
$strInstructions = '����������';
$strInvalidName = '"%s" - ������������� �����, �� �� ������ ��������������� ���� ��� ����� ���� �����/�������/����.';

$strJumpToDB = '������� �� ���� ����� &quot;%s&quot;.';
$strJustDelete = '����� ������� ������������ � ������� ����.';
$strJustDeleteDescr = '&quot;������&quot; ����������� ��� �� �������� ������ �� ������� �� ��� ��, ���� �� ������ ��������������� �����.';

$strKeepPass = '�� �������� ������';
$strKeyname = '��\'� �����';
$strKill = '�����';

$strLaTeX = 'LaTeX';
$strLandscape = 'Landscape';
$strLength = '�������';
$strLengthSet = '�������/��������*';
$strLimitNumRows = '������ �� �������';
$strLineFeed = '������ ���� �����: \\n';
$strLines = '�����';
$strLinesTerminatedBy = '����� ��������';
$strLinkNotFound = '˳�� �� ��������';
$strLinksTo = '˳��� ��';
$strLocalhost = '���������';
$strLocationTextfile = '������ ������������ ���������� �����';
$strLogPassword = '������:';
$strLogUsername = '��\'� �����������:';
$strLogin = '���� � �������';
$strLoginInformation = '������ ���������� (Login)';
$strLogout = '����� � �������';

$strMIME_MIMEtype = 'MIME-type';
$strMIME_available_mime = '�������� MIME-types';
$strMIME_available_transform = '�������� ������������';
$strMIME_description = '����';
$strMIME_file = '����� �����';
$strMIME_nodescription = '���� ����� ��� ����� ������������.<br />����� �������� ������, �� ������ %s.';
$strMIME_transformation = '������������ ̲��-���� ���������';
$strMIME_transformation_note = '��� �������� ������ �������� ����� � �� MIME-type �����������, ��������� %s����� �����������%s';
$strMIME_transformation_options = '����� ������������';
$strMIME_transformation_options_note = '����� ������� �������� ����� ������������ � ������ ������: \'a\',\'b\',\'c\'...<br />���� ��������� ������ ��������� ���� ("\") �� �������� ����� ("\'") � ��� ���������, �������� ����� ���� ���������� ��������� ���� (��������� \'\\\\xyz\' �� \'a\\\'b\').';
$strMIME_without = 'MIME-types ������ �������� �� ����� ������� ������� ������������';
$strMissingBracket = '����� �����';
$strModifications = '����������� ���� ���������';
$strModify = '������';
$strModifyIndexTopic = '������ ������';
$strMoreStatusVars = '�������� �������� �����';
$strMoveTable = '��������� ������� � (���� �����<b>.</b>�������):';
$strMoveTableOK = '������� %s ���� ���������� � %s.';
$strMySQLCharset = 'MySQL Charset';
$strMySQLReloaded = 'MySQL ���������������.';
$strMySQLSaid = '³������ MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% �� %pma_s2% �� %pma_s3%';
$strMySQLShowProcess = '�������� �������';
$strMySQLShowStatus = '�������� ���� MySQL';
$strMySQLShowVars = '�������� �������� ����� MySQL';

$strName = '�����';
$strNext = '������';
$strNo = 'ͳ';
$strNoDatabases = '�� �������';
$strNoDatabasesSelected = '�� ������� ���� �����.';
$strNoDescription = '��� �����';
$strNoDropDatabases = '��������� "DROP DATABASE" ����������.';
$strNoExplain = '�� ��������� SQL';
$strNoFrames = '��� ������ phpMyAdmin ������� ������� � ��������� <b>������</b>.';
$strNoIndex = '������ �� ���������!';
$strNoIndexPartsDefined = '�� ��������� ������� �������!';
$strNoModification = '��� ����';
$strNoOptions = '��� ������ �� �� �����';
$strNoPassword = '��� ������';
$strNoPhp = '��� PHP ����';
$strNoPrivileges = '��� �������';
$strNoQuery = '�� ������ SQL-�����!';
$strNoRights = '�� ��� ����� ���� ����������� ����!';
$strNoTablesFound = '� �� �� �������� �������.';
$strNoUsersFound = '�� �������� �����������.';
$strNoValidateSQL = '�� ��������� SQL';
$strNone = '����';
$strNotNumber = '�� �� �����!';
$strNotOK = '�� OK';
$strNotSet = '������� <b>%s</b> �� �������� ��� �� ��������� � %s';
$strNotValidNumber = ' ����������� ������� �����!';
$strNull = '����';
$strNumSearchResultsInTable = '%s ��������� � ������� <i>%s</i>';
$strNumSearchResultsTotal = '<b>�����:</b> <i>%s</i> ���������';
$strNumTables = '�������';

$strOK = 'OK';
$strOftenQuotation = '�������� �����. �� ������ ������, �� ���� ���� char � varchar �������� � �����.';
$strOperations = '��������';
$strOptimizeTable = '����������� �������';
$strOptionalControls = '�� ������. ��������� ������� �� ��������� ����������� �������.';
$strOptionally = '�� ������';
$strOptions = '���������';
$strOr = '���';
$strOverhead = '������� �������';

$strPHP40203 = '�� ������������� ����� PHP 4.2.3, ��� �� �������� ������� ��� ����� � multi-byte strings (mbstring). ��� PHP bug report 19404. �� ����� PHP �� ������������� ��������������� � phpMyAdmin.';
$strPHPVersion = '����� PHP';
$strPageNumber = '����� �������:';
$strPartialText = '������� ������';
$strPassword = '������';
$strPasswordChanged = '������ ��� %s ������ ������.';
$strPasswordEmpty = '�������� ������!';
$strPasswordNotSame = '����� �� �������!';
$strPdfDbSchema = '����� ���� ����� "%s" - ������� %s';
$strPdfInvalidPageNum = '�� ����������� ����� PDF �������!';
$strPdfInvalidTblName = '������� "%s" �� ����!';
$strPdfNoTables = '������� ����';
$strPerHour = '�� ������';
$strPerMinute = '�� �������';
$strPerSecond = '�� �������';
$strPhp = '�������� PHP ���';
$strPmaDocumentation = '������������ �� phpMyAdmin';
$strPmaUriError = '����� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ������� ���� ����������� � ������ ���������������� ����!';
$strPortrait = 'Portrait';
$strPos1 = '�������';
$strPrevious = '�����';
$strPrimary = '���������';
$strPrimaryKey = '��������� ����';
$strPrimaryKeyHasBeenDropped = '��������� ���� ���� �������';
$strPrimaryKeyName = '��\'� ���������� ����� ������� ���� PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>�������</b> ���� ������ <b>����</b> ���������� �����!)';
$strPrint = '����';
$strPrintView = '����� ��� �����';
$strPrivDescAllPrivileges = '��������� �� ����� �� �������� GRANT.';
$strPrivDescAlter = '��������� �������� ��������� ������� �������.';
$strPrivDescCreateDb = '��������� ���������� ��� ���� ����� �� �������.';
$strPrivDescCreateTbl = '��������� ���������� ��� �������.';
$strPrivDescCreateTmpTable = '��������� ���������� �������� �������.';
$strPrivDescDelete = '��������� ��������� ���� � �������.';
$strPrivDescDropDb = '��������� ��������� ���� ����� �� �������.';
$strPrivDescDropTbl = '��������� ��������� �������.';
$strPrivDescExecute = '��������� ��������� ���������� ��������; ����������� ��� ���� ���� MySQL.';
$strPrivDescFile = '��������� ������ ����� � �����, �� ������� � �����.';
$strPrivDescGrant = '��������� ��������� ������������ �� ���� ��� ���������������� ������� ����.';
$strPrivDescIndex = '��������� ��������� �� �������� �������.';
$strPrivDescInsert = '��������� ������� �� ����� �����.';
$strPrivDescLockTables = '��������� ���������� ������� ��� ������ ������.';
$strPrivDescMaxConnections = '�������� ������� ����� ��\'������, �� ���������� ���� ���������� �������� ������.';
$strPrivDescMaxQuestions = '�������� ������� ������, �� ���������� ���� �������� ������� �������� ������.';
$strPrivDescMaxUpdates = '�������� ������� ������, �� ������� ���� �� ����-��� ������� �� ���� �����, �� ���������� ���� �������� �������� ������.';
$strPrivDescProcess3 = '��������� ��������� ������� ����� ������������.';
$strPrivDescProcess4 = '��������� �������� ������ ������ � ������ �������.';
$strPrivDescReferences = '����������� ��� ���� ���� MySQL.';
$strPrivDescReload = '��������� ���������������� ��������� �� �������� ���� �������.';
$strPrivDescReplClient = '������ ����������� ����� ���������� �� � slaves / masters.';
$strPrivDescReplSlave = '��������� ��� ��������� slaves.';
$strPrivDescSelect = '��������� ������� �����.';
$strPrivDescShowDb = '������ ������ �� ������� ������ ��� �����.';
$strPrivDescShutdown = '��������� ��������� �������.';
$strPrivDescSuper = '��������� ��\'�������, ����� ���� ��������� ����������� ������� ��\'������; ����\'������ ��� ������� ��������������� �������� ����� �� ������������ ���������� ������ �� ���������� ������� ����� ������������.';
$strPrivDescUpdate = '��������� ���� �����.';
$strPrivDescUsage = '���� ����.';
$strPrivileges = '������';
$strPrivilegesReloaded = '����� ������ ���������������.';
$strProcesslist = '������ �������';
$strProperties = '����������';
$strPutColNames = '���� ����� ���� � ������� �����';

$strQBE = '����� ����� ��������';
$strQBEDel = '��������';
$strQBEIns = '��������';
$strQueryFrame = '³��� ������';
$strQueryFrameDebug = '���������� ������� ������������';
$strQueryFrameDebugBox = '������� ����� ������:\nDB: %s\nTable: %s\nServer: %s\n\n��������� ����� ������:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';
$strQueryOnDb = 'SQL-����� �� �� <b>%s</b>:';
$strQuerySQLHistory = 'SQL-history';
$strQueryStatistics = '<b>���������� ������</b>: � ������� �������, �� ������� ���� �������� %s ������.';
$strQueryTime = '����� ����������� %01.4f ���';
$strQueryType = '��� ������';

$strReType = 'ϳ�����������';
$strReceived = '��������';
$strRecords = '������';
$strReferentialIntegrity = '������ ��������� ����� �� ���� ��������:';
$strRelationNotWorking = '��������� ��������� ������ �� ������������ ��������� ������������. ��� ����, ��� ��������� ����, ��������� %s���%s.';
$strRelationView = '�������� �����������';
$strRelationalSchema = '����� ��\'����';
$strReloadFailed = '�� ������� ��������������� MySQL.';
$strReloadMySQL = '��������������� MySQL';
$strReloadingThePrivileges = '���������������� ����';
$strRememberReload = '�� �������� ��������������� ������.';
$strRemoveSelectedUsers = '������� �������� ������������';
$strRenameTable = '������������� ������� �';
$strRenameTableOK = '������� %s ���� ������������� � %s';
$strRepairTable = '����������� �������';
$strReplace = '�������';
$strReplaceTable = '������� ���� ������� ������ � �����';
$strReset = '��������������';
$strResourceLimits = '��������� �������';
$strRevoke = '³������';
$strRevokeAndDelete = '³������ �� ������� ����� ������������ �� ������� �� ���� �����.';
$strRevokeAndDeleteDescr = '����������� ��� �� ������ ���� ����� ������������ (USAGE) �� ��� ��, ���� �� ������ ��������������� �����.';
$strRevokeGrant = '³������ ������� ����';
$strRevokeGrantMessage = '���� ������� ������� ���� ��� %s';
$strRevokeMessage = '�� ������ ������ ��� %s';
$strRevokePriv = '³������ ������';
$strRowLength = '������� �����';
$strRowSize = ' ����� ����� ';
$strRows = '�����';
$strRowsFrom = '����� �';
$strRowsModeFlippedHorizontal = '������������� (rotated headers)';
$strRowsModeHorizontal = ' ������������� ';
$strRowsModeOptions = '-�� %s � ��������� ��������� ����� ����� %s ����� ';
$strRowsModeVertical = ' ����������� ';
$strRowsStatistic = '���������� �����';
$strRunQuery = '�������� �����';
$strRunSQLQuery = '�������� SQL �����(�) �� �� %�';
$strRunning = '�� %s';

$strSQL = 'SQL';
$strSQLOptions = 'SQL �����';
$strSQLParserBugMessage = '������� �� ������� ������� � ������ SQL. ����� ���������� ��������� �� �������� ���� � �� ��������� ����� � ������ �����. ����� �������� �������� ������� ���� ���� �� �� �� ����������� ���� � ��������� ������ ���������� ���� ������ � ����� �������. ��������� �������� ��� ����� �� ��������� �������� MySQL � �������� ������. ����������� MySQL ������� ��� ������� ������ ����� (���� � ����) ����� ���� ��������� ��� � ���������� ��������. ���� � ��� ��� �� ��������� �������� �� ������ ���� �������, � � �������� ������ ������ �����������, ����� ��������� ��� ������ SQL ����� �� ������ ������, ���� ������ � ������� ��������, � ������ ����������� ��� ������� � ������� ����� � ����� CUT �����:';
$strSQLParserUserError = 'There seems to be an error in your SQL query. ����������� MySQL ������� ��� ������� ������ ����� (���� � ����) ����� ���� ��������� ��� � ���������� ��������.';
$strSQLQuery = 'SQL-�����';
$strSQLResult = 'SQL result';
$strSQPBugInvalidIdentifer = '����������� �������������';
$strSQPBugUnclosedQuote = '�� ������ �����';
$strSQPBugUnknownPunctuation = '�������� ������ ����������';
$strSave = '��������';
$strScaleFactorSmall = '������� ����� ������� ��� ����� ������� ���� �������';
$strSearch = '������';
$strSearchFormTitle = '������ � ��� �����';
$strSearchInTables = '��������� �������:';
$strSearchNeedle = '����� �� ��������, �� ������� ������ (�����: "%"):';
$strSearchOption1 = '������� ���� � ���';
$strSearchOption2 = '�� �����';
$strSearchOption3 = '����� �����';
$strSearchOption4 = '���������� �����';
$strSearchResultsFor = '���������� ������ "<i>%s</i>" %s:';
$strSearchType = '������:';
$strSelect = '�������';
$strSelectADb = '����� ������� ��';
$strSelectAll = '³������ ���';
$strSelectFields = '������� ���� (���������� ����):';
$strSelectNumRows = '�� ������';
$strSelectTables = '������� �������';
$strSend = '³������';
$strSent = '³���������';
$strServer = '������ %s';
$strServerChoice = '���� �������';
$strServerStatus = '���������� ��� ������ �������';
$strServerStatusUptime = '��� MySQL ������ ������ %s. ��������� %s.';
$strServerTabProcesslist = '�������';
$strServerTabVariables = '�����';
$strServerTrafficNotes = '<b>������ �������</b>: ������� ��������� ���������� ������������ ����� ��� MySQL �������� � ������� ���� �������.';
$strServerVars = '����� ������� �� ������������';
$strServerVersion = '����� �������';
$strSessionValue = '�������� ���';
$strSetEnumVal = '��� ���� ���� "enum" �� "set", ������ �������� ����� ������ �������: \'a\',\'b\',\'c\'...<br />���� ��� ���� ������� ������ �������� ���� ����� ("\"") ��� �������� ����� ("\'") ������� ��� �������, �������� ����� ���� �������� ���� ����� (���������, \'\\\\xyz\' �� \'a\\\'b\').';
$strShow = '��������';
$strShowAll = '�������� ���';
$strShowColor = '�������� ����';
$strShowCols = '�������� �������';
$strShowDatadictAs = '������ ��������';
$strShowFullQueries = '�������� ����� ������';  
$strShowGrid = '�������� ����';
$strShowPHPInfo = '�������� ���������� ��� PHP';
$strShowTableDimension = '�������� ������ �������';
$strShowTables = '�������� �������';
$strShowThisQuery = ' �������� ����� ����� ����� ';
$strShowingRecords = '�������� ������ ';
$strSingly = '(������)';
$strSize = '�����';
$strSort = '�����������';
$strSpaceUsage = '������, �� ���������������';
$strSplitWordsWithSpace = '����� �������� ������� (" ").';
$strStatCheckTime = '���������';
$strStatCreateTime = '��������';
$strStatUpdateTime = '���������';
$strStatement = '��������';
$strStatus = '������';
$strStrucCSV = 'CSV ����';
$strStrucData = '��������� � ����';
$strStrucDrop = '������ ��������� �������';
$strStrucExcelCSV = 'CSV ��� ����� MS Excel';
$strStrucOnly = '���� ���������';
$strStructPropose = '������������� ��������� �������';
$strStructure = '���������';
$strSubmit = '��������';
$strSuccess = '��� SQL-����� ���� ������ ��������';
$strSum = '������';
$strSwitchToTable = '������� �� ���������� �������';

$strTable = '������� ';
$strTableComments = '�������� �� �������';
$strTableEmpty = '������� ����� �������!';
$strTableHasBeenDropped = '������� %s ���� �������';
$strTableHasBeenEmptied = '������� %s ���� �������';
$strTableHasBeenFlushed = '���� ������� ��� ������� %s';
$strTableMaintenance = '������������� �������';
$strTableOfContents = '����';
$strTableStructure = '��������� �������';
$strTableType = '��� �������';
$strTables = '%s ������(�)';
$strTblPrivileges = '�����, �� ���������� �������';
$strTextAreaLength = ' ����� ������ �������,<br /> �� ���� �� ���� ���� ������������ ';
$strTheContent = '���� ����� ���� �����������.';
$strTheContents = '���� ����� ������ ���� ������� ��� ����� � ����������� ��������� ��� ����������� �������.';
$strTheTerminator = '������ ��������� ����.';
$strThisHost = '��� ����';
$strThreadSuccessfullyKilled = '������ %s ���������.';
$strTime = '���';
$strTotal = '������';
$strTotalUC = '�����';
$strTraffic = '������';
$strTransformation_image_jpeg__inline = '³������� clickable thumbnail; �����: ������, ������ � ������� (������ �������� ���������)';  
$strTransformation_image_jpeg__link = '³������� ��� �� ����� ������� (direct blob download, i.e.).';
$strTransformation_image_png__inline = '���. image/jpeg: inline';  
$strTransformation_text_plain__dateformat = '����� ���� TIME, TIMESTAMP �� DATETIME � ������������ ���� �������� �� ���������� ������� ����. ����� ����� - �� �������� (� �������) ���� ���� ������ �� ������ ���� (�� �������������: 0). ����� ����� - ����� ������ ���� �������� �� ��������� ������� ��� PHP strftime().';
$strTransformation_text_plain__external = 'LINUX ONLY: ������� �������� �������� � ���� ���� ����� ����������� ���. ������� ����������� ���� ��������. �� ������������� ��������� � Tidy, ��� ����� ����� HTML ���. � �������� �������, ��� ������� ��������� ������������ ���� libraries/transformations/text_plain__external.inc.php �� ������� �������� ��������� ��� �������. � ������ �������, ����� ����� - ������� �������, �� �� ������ ��������������� � ����� - ��������� ��� �������. ����� �����, ����������� � 1, ���� ����������� ���� �������������� htmlspecialchars() (�� �������������: 1). �������� �����, ����������� � 1, ���� �������� NOWRAP �� ����� ������ ��������, ��� �� ���� ���� ���� �������� ��� ���������������� (�� �������������: 1)';
$strTransformation_text_plain__formatted = '������ ��������� ������������ ����. �� ��������� �����������.';
$strTransformation_text_plain__imagelink = '������ ������� � ���, ���� ������ ����� �����; ����� ����� - �������, ������ �� "http://domain.com/", ����� - ������ � �������, ����� - ������.';  
$strTransformation_text_plain__link = '������ ���, ���� ������ ����� �����; ����� ����� - �������, ������ �� "http://domain.com/", ����� ����� - title ��� ����.';  
$strTransformation_text_plain__substr = '������ ���� ������� ������. ����� ����� - �� ������ ���� ������� � ����� ���� ������� �������� ���� ������ (�� �������������: 0). ����� ����� - ������� ������ ������ ���� ��������. ���� ���� ������� - ���������� ����� ������ ������. ����� ����� - ������� �� ������� ���� ������ ���� ���������� ���������� �������� (�� �������������: ...) .';
$strTransformation_text_plain__unformatted = '³������� HTML ��� �� HTML entities. HTML ������������ �� ����������.';
$strTruncateQueries = '������� �������� ������';  
$strType = '���';

$strUncheckAll = '����� �� ������';
$strUnique = '���������';
$strUnselectAll = '����� �� ������';
$strUpdComTab = '�� ����������� �� �������� ���� ������� Column_comments ����� �������� � ������������';  
$strUpdatePrivMessage = '���� ������ ������ ���';
$strUpdateProfile = '�������� �������:';
$strUpdateProfileMessage = '������� ���� ���������.';
$strUpdateQuery = '��������� �����';
$strUsage = '������������';
$strUseBackquotes = '�������� ����� � ������ ������� � ����';
$strUseHostTable = '��������������� ������� �����';  
$strUseTables = '��������������� �������';
$strUseTextField = '��������������� �������� ����';
$strUser = '����������';
$strUserAlreadyExists = '���������� %s ��� ����!';
$strUserEmpty = '������� �\'�� �����������!';
$strUserName = '��\'� �����������';
$strUserNotFound = '��������� ����������� �� �������� � ������� ����.';
$strUserOverview = '����� ������������';
$strUsers = '�����������';
$strUsersDeleted = '³������� ������������ ������ �������.';
$strUsersHavingAccessToDb = '�����������, ���� ����� ������ �� &quot;%s&quot;';

$strValidateSQL = '��������� SQL';
$strValidatorError = '�� ���� ��������� �������� SQL. ����� ��������������� �� ������������� ��������� php extensions �� ������� � %s������������%s.';
$strValue = '��������';
$strVar = '�����';
$strViewDump = '����������� ���� (�����) �������';
$strViewDumpDB = '����������� ���� (�����) ��';

$strWebServerUploadDirectory = '������� ���-������� ��� ������������ ����� (upload directory)';
$strWebServerUploadDirectoryError = '������������ ���� ������� ��� ������������ ����� �����������';
$strWelcome = '������� ������� �� %s';
$strWildcard = '������';
$strWithChecked = '� ���������:';
$strWrongUser = '������� ����/������. ������ �� ���������.';

$strXML = 'XML';

$strYes = '���';

$strZeroRemovesTheLimit = '�������: ������������ ���� ����� � 0 (����) ����� ���������.';
$strZip = '���������� � "zip"';
// To translate

$strAbsolutePathToDocSqlDir = 'Please enter the absolute path on webserver to docSQL directory';  //to translate
$strAddedColumnComment = 'Added comment for column';  //to translate
$strAddedColumnRelation = 'Added relation for column';  //to translate

$strCompression = 'Compression'; //to translate

$strDropUsersDb = 'Drop the databases that have the same names as the users.'; //to translate

$strFileCouldNotBeRead = 'File could not be read';  //to translate

$strIgnoringFile = 'Ignoring file %s';  //to translate
$strImportFiles = 'Import files';  //to translate
$strImportFinished = 'Import finished';  //to translate

$strNoUsersSelected = 'No users selected.'; //to translate

$strThisNotDirectory = 'This was not a directory';  //to translate

$strWritingCommentNotPossible = 'Writing of comment not possible';  //to translate
$strWritingRelationNotPossible = 'Writing of relation not possible';  //to translate

?>
