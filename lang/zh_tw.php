<?php

/*
        yourTinyTodo language pack
        Language: Chinese Traditional
        Original name: 正體中文

        This file is part of yourTinyTodo by the yourTinyTodo community.
        Copyrights for portions of this file are retained by their owners.

        Based on myTinyTodo by Max Pozdeev
        (C) Copyright 2009-2010 Max Pozdeev <maxpozdeev@gmail.com>

        Licensed under the GNU GPL v3 license. See file COPYRIGHT for details.
*/

$lang_js = array
(
	'confirmDelete' => "確定要刪除此任務?",
	'confirmLeave' => "資料尚未儲存，確定要離開嗎?",
	'actionNoteSave' => "儲存",
	'actionNoteCancel' => "取消",
	'error' => "發生錯誤(點擊查看詳情)",
	'denied' => "存取拒絕",
	'invalidpass' => "密碼錯誤",
	'invalidlogin' => "憑證錯誤",
	'tagfilter' => "標籤:",
	'addList' => "輸入新增清單名稱",
	'renameList' => "重新命名清單名稱",
	'deleteList' => "將會刪除清單內所有的任務。\n確定刪除嗎?",
	'clearCompleted' => "將會刪除清單內所有完成的任務。\n確定刪除嗎?",
	'settingsSaved' => "設定已儲存。重新讀取中...",
	'um_usercreated' => "使用者已建立",
	'um_userupdated' => "使用者已更新",
	'um_userdeleted' => "使用者已刪除",
	'um_createerror1' => "無效的資料",
	'um_createerror2' => "使用者名稱已存在",
	'um_createerror3' => "無法建立使用者",
	'um_updateerror1' => "無法更新使用者",
	'um_deleteerror1' => "無法刪除使用者",
);

$lang_inc = array
(
	'htab_newtask' => "新增任務",
	'htab_search' => "搜尋",
	'btn_add' => "新增",
	'btn_search' => "搜尋",
	'advanced_add' => "進階",
	'searching' => "正在搜尋",
	'tasks' => "所有任務",
	'taskdate_inline_created' => "%s 新增",
	'taskdate_inline_completed' => "%s 完成日期",
	'taskdate_inline_duedate' => "%s 到期",
	'taskdate_created' => "建立日期",
	'taskdate_completed' => "完成",
	'go_back' => "&lt;&lt; 上一頁",
	'edit_task' => "編輯任務",
	'add_task' => "新增任務",
	'priority' => "優先權",
	'task' => "任務名稱",
	'note' => "內容",
	'tags' => "標籤",
	'save' => "儲存",
	'cancel' => "取消",
	'password' => "密碼",
	'btn_login' => "登入",
	'a_login' => "登入",
	'a_logout' => "登出",
	'public_tasks' => "開放任務",
	'tagcloud' => "標籤雲",
	'tagfilter_cancel' => "取消篩選",
	'sortByHand' => "自行排序",
	'sortByPriority' => "按優先權排序",
	'sortByDueDate' => "按到期日排序",
	'sortByDateCreated' => "按建立日排序",
	'sortByDateModified' => "按修改日排序",
	'due' => "到期日",
	'daysago' => "%d 天前",
	'indays' => "在 %d 天",
	'months_short' => array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"),
	'months_long' => array("January","February","March","April","May","June","July","August","September","October","November","December"),
	'days_min' => array("Su","Mo","Tu","We","Th","Fr","Sa"),
	'days_long' => array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"),
	'today' => "今天",
	'yesterday' => "昨天",
	'tomorrow' => "明天",
	'f_past' => "超過到期日",
	'f_today' => "今天和明天",
	'f_soon' => "即將到期",
	'action_edit' => "編輯",
	'action_note' => "編輯內容",
	'action_delete' => "刪除",
	'action_priority' => "優先權",
	'action_move' => "移至",
	'notes' => "內容:",
	'notes_show' => "顯示",
	'notes_hide' => "隱藏",
	'list_new' => "新增清單",
	'list_rename' => "重新命名清單",
	'list_delete' => "刪除清單",
	'list_publish' => "開放清單",
	'list_showcompleted' => "顯示已完成任務",
	'list_clearcompleted' => "清除已完成任務",
	'list_select' => "選擇任務",
	'list_export' => "匯出",
	'list_export_csv' => "匯出CSV",
	'list_export_ical' => "匯出iCalendar",
	'list_rssfeed' => "RSS Feed",
	'alltags' => "所有標籤:",
	'alltags_show' => "顯示所有標籤",
	'alltags_hide' => "穩藏所有標籤",
	'a_settings' => "設定",
	'rss_feed' => "RSS Feed",
	'feed_title' => "%s",
	'feed_completed_tasks' => "完成任務",
	'feed_modified_tasks' => "修改任務",
	'feed_new_tasks' => "新任務",
	'alltasks' => "所有任務",

	/* Settings */
	'set_header' => "設定",
	'set_title' => "標題",
	'set_title_descr' => "(如果想變更預設標題名稱。)",
	'set_language' => "語言",
	'set_protection' => "密碼保護",
	'set_enabled_single' => "單人模式 (僅需要ㄧ組密碼)",
	'set_enabled_multi' => "多人模式",
	'set_manage_users' => "管理使用者",
	'set_enabled' => "開啟",
	'set_disabled' => "關閉",
	'set_newpass' => "設定新密碼",
	'set_newpass_descr' => "(若不想改密碼，請留白。)",
	'set_smartsyntax' => "智慧語法",
	'set_smartsyntax_descr' => "新增任務時，使用進階參數(/priority/ task /tags/)",
	'set_timezone' => "時區",
	'set_autotag' => "自動標籤",
	'set_autotag_descr' => "(新增任務時，自動增加目前標籤篩選器內的標籤)",
	'set_sessions' => "Session處理機制",
	'set_sessions_php' => "PHP",
	'set_sessions_files' => "Files",
	'set_firstdayofweek' => "每週的第一天",
	'set_custom' => "自訂",
	'set_date' => "日期格式",
	'set_date2' => "簡短的日期格式",
	'set_shortdate' => "簡短的日期格式(今年)",
	'set_clock' => "時間格式",
	'set_12hour' => "12小時制",
	'set_24hour' => "24小時制",
	'set_submit' => "確定送出",
	'set_cancel' => "取消",
	'set_showdate' => "在清單顯示任務新增日期",

	/* user management */
	'um_header' => "使用者管理",
	'um_username' => "使用者名稱",
	'um_email' => "E-Mail",
	'um_role' => "存取等級",
	'um_password' => "密碼",
	'um_rolename_1' => "管理者",
	'um_rolename_2' => "讀/寫",
	'um_rolename_3' => "唯讀",
	'um_nousers' => "沒有任何使用者",
	'um_createuser' => "建立使用者",

);
