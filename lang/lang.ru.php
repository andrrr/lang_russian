<?php

	$about = array(
		'name' => 'Русский',
		'author' => array(
			'name' => 'Александр Бирюков',
			'email' => 'info@alexbirukov.ru',
			'website' => 'http://alexbirukov.ru'
		),
		'release-date' => '2012-06-05'
	);

	/**
	 * Symphony Core
	 */
	$dictionary = array(

		'Are you sure you want to proceed?' => 
		'Вы уверены, что хотите продолжить?',

		'Reordering was unsuccessful.' => 
		'Пересортировка не удалась.',

		'Change Password' => 
		'Смена пароля',

		'Remove File' => 
		'Удалить файл',

		'Untitled Field' => 
		'Поле без названия',

		'The field “{$title}” ({$type}) has been removed.' => 
		'Поле “{$title}” ({$type}) будет удалено',

		'Undo?' => 
		'Отменить?',

		'Add item' => 
		'Добавить элемент',

		'Remove item' => 
		'Удалить элемент',

		'Ignore?' => 
		'Игнорировать?',

		'next' => 
		'далее',

		'at' => 
		'в',

		'just now' => 
		'сейчас',

		'a minute ago' => 
		'минуту назад',

		'{$minutes} minutes ago' => 
		'{$minutes} минут(ы) назад',

		'about 1 hour ago' => 
		'час назад',

		'about {$hours} hours ago' => 
		'{$hours} час(ов) назад',

		'Sort by %1$s %2$s' => 
		'Соритровать по %1$s %2$s',

		'ascending' => 
		'по возрастанию',

		'descending' => 
		'по убыванию',

		'You are not authorised to access this page.' => 
		'Вы не имеете прав для доступа к данной странице.',

		'A database error occurred while attempting to reorder.' => 
		'При пересортировке в базеданных произошла ошибка.',

		'%1$s &ndash; %2$s' => 
		'%1$s &ndash; %2$s',

		'Data Sources' => 
		'Источники данных',

		'Symphony' => 
		'Symphony',

		'Create New' => 
		'Добавить',

		'Create a new data source' => 
		'Добавить источник данных',

		'An error occurred while processing this form. See below for details.' => 
		'Во время обработки формы произошла ошибка. Для получения дополнительной информации смотрите детали обработки.',

		'Data source updated at %s.' => 
		'Источник данных обновлён в %s.',

		'Create another?' => 
		'Создать другой?',

		'View all Data sources' => 
		'Все источники данных',

		'Data source created at %s.' => 
		'Источник данных создан в %s.',

		'Untitled' => 
		'Без названия',

		'Essentials' => 
		'Основное',

		'Name' => 
		'Имя',

		'Source' => 
		'Источник',

		'System' => 
		'Система',

		'Authors' => 
		'Авторы',

		'Navigation' => 
		'Навигация',

		'Custom XML' => 
		'Пользовательский XML',

		'Dynamic XML' => 
		'Динамический XML',

		'Static XML' => 
		'Статический XML',

		'From extensions' => 
		'Из расширений',

		'Sections' => 
		false,

		'Filter Results' => 
		'Фильтр результатов',

		'Use %s syntax to filter by page parameters.' => 
		'Используйте синтаксис %s, чтобы фильтровать по параметрам страницы.',

		'$param' => 
		'$param',

		'Add filter' => 
		'Добавить фильтр',

		'Remove filter' => 
		'Удалить фильтр',

		'System ID' => 
		'Системный ID ',

		'Value' => 
		'Значение',

		'System Date' => 
		'Системная дата',

		'ID' => 
		'ID',

		'Username' => 
		'Имя пользователя',

		'First Name' => 
		'Имя',

		'Last Name' => 
		'Фамилия',

		'Email' => 
		'Email',

		'User Type' => 
		'Тип пользователя',

		'Parent Page' => 
		'Родительская страница',

		'Page Type' => 
		'Тип страницы',

		'Sorting and Limiting' => 
		'Сортировка и ограничение',

		'Use %s syntax to limit by page parameters.' => 
		'Используйте синтаксис %s, чтобы ограничить количество параметров страницы.',

		'Sort By' => 
		'Сортировать по',

		'Author ID' => 
		'ID Автора',

		'Status' => 
		'Статус',

		'Page ID' => 
		'ID Страницы',

		'Handle' => 
		'URI имя',

		'Sort Order' => 
		'Порядок сортировки',

		'random' => 
		'произвольно',

		'%1$s Paginate results, limiting to %2$s entries per page. Return page %3$s' => 
		'%1$s результаты ограничены %2$s записями на страницу. Страница для возврата %3$s',

		'Failing to paginate may degrade performance if the number of entries returned is very high.' => 
		'При слишком большом количестве выбираемых записей может возникнуть ошибка постраничной навигации.',

		'Output Options' => 
		'Опции вывода',

		'Required URL Parameter' => 
		'Требуемый параметр URL',

		'Optional' => 
		'Опционально',

		'An empty result will be returned when this parameter does not have a value.' => 
		'Если данный параметр не имеет значения будет возвращен пустой результат.',

		'%s Redirect to 404 page when no results are found' => 
		'%s Переадресовывать на страницу 404, если ничего не было найдено.',

		'Output Parameters' => 
		'Выходные параметры',

		'Use Fields' => 
		'Использовать поля',

		'XML Output' => 
		'XML Вывод',

		'Group By' => 
		'Группировать по',

		'None' => 
		'Нет',

		'Author' => 
		'Автор',

		'Included Elements' => 
		'Подключенные элементы',

		'%s Include a count of entries in associated sections' => 
		'%s выводить информацию о количестве записей в подразделах',

		'%s HTML-encode text' => 
		'%s Кодированный в HTML текст.',

		'URL' => 
		'URL',

		'Use %s syntax to specify dynamic portions of the URL.' => 
		'Используйте синтаксис %s, чтобы определить динамическую часть URL.',

		'Namespace Declarations' => 
		'Объявление пространств имен',

		'Add namespace' => 
		'Добавить пространство имен',

		'Remove namespace' => 
		'Удалить пространство имен',

		'Namespace' => 
		'Пространство имен',

		'URI' => 
		'URI',

		'Use an XPath expression to select which elements from the source XML to include.' => 
		'Использовать выражение XPath для выбора элементов из XML источника.',

		'Update cached result every %s minutes' => 
		'Обновлять кэш каждые %s минут(ы)',

		'Body' => 
		'Тело',

		'Save Changes' => 
		'Сохранить',

		'Create Data Source' => 
		'Создать источник данных',

		'Delete' => 
		'Удалить',

		'Delete this data source' => 
		'Удалить источник данных',

		'Are you sure you want to delete this data source?' => 
		'Вы уверены, что хотите удалить источник данных?',

		'%1$s &ndash; %2$s &ndash; %3$s' => 
		'%1$s &ndash; %2$s &ndash; %3$s',

		'Data Source' => 
		'Источник данных',

		'Version' => 
		'Версия',

		'%1$s released on %2$s' => 
		'%1$s опубликовано на %2$s',

		'Created by %1$s at %2$s' => 
		'Создано %1$s в %2$s',

		'Description' => 
		'Описание',

		'Example XML' => 
		'Пример XML',

		'Failed to delete %s.' => 
		'Ошибка удаления %s.',

		'Please check permissions on %s.' => 
		'Проверьте права на %s.',

		'This is a required field' => 
		'Обязательное поле',

		'XML is invalid' => 
		'Неверный XML',

		'Must be a valid number' => 
		'Должно быть числом',

		'Must be greater than zero' => 
		'Должно быть больше нуля',

		'A result limit must be set' => 
		'Должно быть установлено конечное ограничение',

		'Must be a valid number or parameter' => 
		'Должно быть числом или параметром',

		'A page number must be set' => 
		'Должен быть установлен номер страницы',

		'Please ensure name contains at least one Latin-based character.' => 
		'Проверьте, что имя содержит только латинские символы.',

		'A Data source with the name %s already exists' => 
		'Источник данных с именем <code>%s</code> уже существуют',

		'Failed to write Data source to disk.' => 
		'Ошибка записи источника данных на диск',

		'Invalid URL' => 
		'Неверный URL',

		'Request timed out. %d second limit reached.' => 
		'Время запроса истекло. Превышен лимит %d секунд.',

		'Failed to load URL, status code %d was returned.' => 
		'Ошибка загрузки URL, код ошибки %d.',

		'Events' => 
		'События',

		'Create a new event' => 
		'Созадть событие',

		'Event updated at %s.' => 
		'Событие обновлено %s.',

		'View all Events' => 
		'Посмотреть все события',

		'Event created at %s.' => 
		'Событие создано %s.',

		'Filter Options' => 
		'Параметры фильтра',

		'Admin Only' => 
		'Только для администратора',

		'Send Notification Email' => 
		'Отправить уведомление на почту',

		'Allow Multiple' => 
		'Разрешить множественный выбор',

		'Create Event' => 
		'Создать событие',

		'Delete this event' => 
		'Удалить событие',

		'Are you sure you want to delete this event?' => 
		'Вы уверены, что хотите удалить событие?',

		'An Event with the name %s already exists' => 
		'Событие с именем %s уже существует',

		'Success and Failure XML Examples' => 
		'Примеры успешного и неудачного XML кода',

		'When saved successfully, the following XML will be returned:' => 
		'При успешном сохранении будет возвращен следующий XML:',

		'Entry [created | edited] successfully.' => 
		'Запись [создана | отредактирована] успешно.',

		'When an error occurs during saving, due to either missing or invalid fields, the following XML will be returned' => 
		'Во время сохранения возникли ошибки из-за отсутствующих или неверных полей, слудющий XML код будет возвращён',

		'Notice that it is possible to get mixtures of success and failure messages when using the ‘Allow Multiple’ option' => 
		'Будте внимательны: при использовании "Множественного выбора" вы можете одновременно получить как сообщения об ошибках, так и сообщения об удачном завершении операции',

		'Entry encountered errors when saving.' => 
		'При сохранении записи возникли ошибки.',

		'The following is an example of what is returned if any options return an error:' => 
		'Это пример кода возвращаемого, если хотя бы один из фильтров не сработает:',

		'Recipient not found' => 
		'Получатель не найден',

		'Example Front-end Form Markup' => 
		'Пример кода формы для клиентской страницы',

		'This is an example of the form markup you can use on your frontend:' => 
		'Это пример кода формы, который вы можете использовать в клиентской части:',

		'Submit' => 
		'Принять',

		'To edit an existing entry, include the entry ID value of the entry in the form. This is best as a hidden field like so:' => 
		'Чтобы отредактировать существующую запись включите в форму ID записи. Лучше всего это сделать следующим образом:',

		'To redirect to a different location upon a successful save, include the redirect location in the form. This is best as a hidden field like so, where the value is the URL to redirect to:' => 
		'Для переадресации по новому адресу после успешного сохранения включите в форму ссылку на место переадресации. Лучше все это сделать при помощи скрытого поля, например таким образом, указав в качестве value URL:',

		'Upon the event successfully saving the entry, this option takes input from the form and send an email to the desired recipient.' => 
		'В случае успешного сохранения записи, данная опция позволит получить данные из формы и отправить их на почту заданному получателю.',

		'It currently does not work with ‘Allow Multiple’' => 
		'Работа с ‘Allow Multiple’ пока невозможна',

		'The following are the recognised fields:' => 
		'Следующие поля являются определенными:',

		'list of comma-separated author usernames.' => 
		'список имен авторов, разделённых запятыми.',

		'All of these fields can be set dynamically using the exact field name of another field in the form as shown below in the example form:' => 
		'Все эти поля могут быть созданы динамически с использованием названия другого поля формы, как показано ниже в примере:',

		'Message' => 
		'Сообщение',

		'Failed to write Event to disk.' => 
		'Ошибка записи события на диск.',

		'Pages' => 
		'Страницы',

		'Create a new page' => 
		'Создать новую страницу',

		'Title' => 
		'Заголовок',

		'Template' => 
		'Шаблон',

		'Universal Resource Locator' => 
		'Universal Resource Locator',

		'Parameters' => 
		'Параметры',

		'Type' => 
		'Тип',

		'Children' => 
		'Потомок',

		'None found.' => 
		'Не найден',

		'With Selected...' => 
		'С выбранными...',

		'Are you sure you want to delete the selected pages?' => 
		'вы уверены, что хотите удалить выбранные страницы?',

		'Page updated at %s.' => 
		'Страница обновлена %s.',

		'View all Pages' => 
		'Посмотреть все страницы',

		'Edit Page' => 
		'Редактировать страницу',

		'Edit Page Configuration' => 
		'Редактировать настройки страницы',

		'Utilities' => 
		'Утилиты',

		'Page created at %s.' => 
		'Страницы создана в %s.',

		'Edit Template' => 
		'Редактировать шаблон',

		'Edit Page Template' => 
		'Редактировать шаблон страницы',

		'Page Settings' => 
		'Параметры страницы',

		'URL Handle' => 
		'URL Имя',

		'URL Parameters' => 
		'URL Параметры',

		'Page Resources' => 
		'Ресурсы страницы',

		'Create Page' => 
		'Создать страницу',

		'Delete this page' => 
		'Удалить страницу',

		'Are you sure you want to delete this page?' => 
		'Вы уверены, что хотите удалить страницу?',

		'This is a required field.' => 
		'Данное поле является обязательным.',

		'This document is not well formed.' => 
		'Данный документ был сформирован неправильно.',

		'The following error was returned:' => 
		'Было получено следующее сообщение об ошибке:',

		'Page Template could not be written to disk.' => 
		'Шаблон страницы не может быть записан на диск.',

		'An index type page already exists.' => 
		'Страница и типом index уже существует.',

		'A 404 type page already exists.' => 
		'Страница для ошибки 404 уже существует.',

		'A 403 type page already exists.' => 
		'Страница для ошибки 403 уже существует.',

		'Please ensure handle contains at least one Latin-based character.' => 
		'Удостоверьтесь, что адрес страницы содержит только латинские символы.',

		'A page with that title already exists' => 
		'Страница с таким названием уже существует.',

		'A page with that handle already exists' => 
		'Сраница с таким обработчиком уже существует.',

		'Unknown errors occurred while attempting to save.' => 
		'При попытке сохранить возникли неизвестные ошибки.',

		'Check your activity log' => 
		'Проверьте лог активности',

		'Page could not be deleted because it does not exist.' => 
		'Невозможно удалить страницу, поскольку она не существует.',

		'Page could not be deleted because it has children.' => 
		'Невозможно удалить страницу поскольку у нее есть дочерние элементы.',

		'One or more pages could not be deleted.' => 
		'Одна или более страниц не могут быть удалены.',

		'Create a section' => 
		'Создать раздел',

		'Entries' => 
		'Записи',

		'Navigation Group' => 
		'Навигационная группа',

		'Are you sure you want to delete the selected sections?' => 
		'Вы уверены, что хотите удалить раздел?',

		'Delete Entries' => 
		'Удалить записи',

		'Are you sure you want to delete all entries in the selected sections?' => 
		'Вы уверены, что хотите удалить все записи в выбранном разделе?',

		'Set navigation group' => 
		'Установить навигационную группу',

		'Content' => 
		'Контент',

		'%s Hide this section from the back-end menu' => 
		'%s Скрыть этот раздел из меню',

		'Fields' => 
		'Поля',

		'Click to expand or collapse a field.' => 
		'Кликните для разворачинвания/сворачивания поля.',

		'Double click to expand or collapse all fields.' => 
		'Кликните два раза для разворачинвания/сворачивания всех полей.',

		'Add field' => 
		'Добавить поле',

		'Remove field' => 
		'Удалить поле',

		'Create Section' => 
		'Создать раздел',

		'Unknown Section' => 
		'Неизвестный раздел',

		'The Section you are looking for could not be found.' => 
		'Раздел, который вы ищете не может быть найден.',

		'Section updated at %s.' => 
		'Раздел обновлён в %s.',

		'View all Sections' => 
		'Просмотреть все разделы',

		'Section created at %s.' => 
		'Раздел создан в %s.',

		'View Entries' => 
		'Посмотреть записи',

		'View Section Entries' => 
		'Посмотреть записи раздела',

		'Delete this section' => 
		'Удалить раздел',

		'Are you sure you want to delete this section?' => 
		'Вы уверены. что хотите удалить раздел?',

		'A Section with the name %s already exists' => 
		'Раздел с именем %s уже существует',

		'A field with this handle already exists. All handle must be unique.' => 
		'Поле с указаным именем уже существует. Имя должно быть уникальным.',

		'There is already a field of type %s. There can only be one per section.' => 
		'Поле типа %s уже существует. В разделе возможно наличие только одного поля такого типа.',

		'An unknown database occurred while attempting to create the section.' => 
		'Во время создания сущности произошла неизвестная ошибка базы данных.',

		'Create a new utility' => 
		'Создать утилиту',

		'Utility updated at %s.' => 
		'Утилита была обновлена в %s.',

		'View all Utilities' => 
		'Посмотреть все утилиты',

		'Utility created at %s.' => 
		'Утилита создана в %s.',

		'Create Utility' => 
		'Создать утилиту',

		'Delete this utility' => 
		'Удалить утилиту',

		'Are you sure you want to delete this Utility?' => 
		'Вы уверены, что хотите удалить утилиту?',

		'Name is a required field.' => 
		'Необходимо указать имя.',

		'Body is a required field.' => 
		'Необходимо указать тело.',

		'A Utility with that name already exists. Please choose another.' => 
		'Утилита с указаным уменем уже существует. Укажите другое имя.',

		'Utility could not be written to disk.' => 
		'Утилита не может быть записана на диск.',

		'Login' => 
		'Войти',

		'An email containing a customised login link has been sent. It will expire in 2 hours.' => 
		'Письмо содержащее ссылку для входа было отправлено. Срок действия ссылки истекает через два часа.',

		'Enter your email address to be sent a remote login link with further instructions for logging in.' => 
		'Введите свой email адрес, куда будет выслана ссылка для продолжения регистрации.',

		'Email Address' => 
		'Email адрес',

		'There was a problem locating your account. Please check that you are using the correct email address.' => 
		'Ваш профиль не найден. Пожалуйста, убедитесь в правильности введенного адреса email.',

		'Send Email' => 
		'Отправить Email',

		'No username was entered.' => 
		'Не указано имя пользователя.',

		'Password' => 
		'Пароль',

		'The supplied password was rejected.' => 
		'Указанны пароль был отклонен.',

		'Retrieve password?' => 
		'Восстановить пароль?',

		'New Symphony Account Password' => 
		'Новый пароль для профиля в Symphony',

		'Hi %s,' => 
		'Привет, %s',

		'A new password has been requested for your account. Login using the following link, and change your password via the Authors area:' => 
		'Поступил запрос на создание нового пароля для вашего аккаунта. Войдите в систему используя данную ссылку, и измените свой пароль в разделе для Авторов:',

		'It will expire in 2 hours. If you did not ask for a new password, please disregard this email.' => 
		'Срок действия - два часа. Если вы не запрашивали смену пароля просто проигнорируйте это письмо',

		'Best Regards,' => 
		'С уважением,',

		'The Symphony Team' => 
		'Команда Symphony',

		'The Section you are looking for, %s, could not be found.' => 
		'Раздел, который вы ищете, %s, не может быть найден.',

		'Create a new entry' => 
		'Создать новую запись',

		'Edit Section' => 
		'Редактировать раздел',

		'Edit Section Configuration' => 
		'Редактировать настройки раздела',

		'An error occurred while retrieving filtered entries. Showing all entries instead.' => 
		'Во время обработки отфильтрованых записей произошли ошибки. Показаны все записи.',

		'Are you sure you want to delete the selected entries?' => 
		'Вы уверены, что хотите удалить все выбранные записи?',

		'Set %s' => 
		'установить %s',

		'First' => 
		'Первый',

		'&larr; Previous' => 
		'&larr; Предыдущие',

		'Viewing %1$s - %2$s of %3$s entries' => 
		'Показано %1$s - %2$s из %3$s записей',

		'Go to page …' => 
		'Перейти к странице ...',

		'Page %1$s of %2$s' => 
		'Страница %1$s из %2$s',

		'Next &rarr;' => 
		'Далее &rarr;',

		'Last' => 
		'Последний',

		'Fields must be added to this section before an entry can be created.' => 
		'Все поля должны быть добавлены перед тем, как ва начнёте добавлять записи в раздел.',

		'Add fields' => 
		'Добавить поля',

		'Create Entry' => 
		'Создать запись',

		'Some errors were encountered while attempting to save.' => 
		'При попытке сохранить запись возникло несколько ошибок.',

		'Unknown Entry' => 
		'Неизвестная запись',

		'The entry you are looking for could not be found.' => 
		'Запись, которую вы ищете не может быть найдена.',

		'Entry updated at %s.' => 
		'Запись обновлена в %s.',

		'View all Entries' => 
		'Посмотреть все записи',

		'Entry created at %s.' => 
		'Запись создана в %s.',

		'Delete this entry' => 
		'Удалить запись',

		'Are you sure you want to delete this entry?' => 
		'Вы уверены, что хотите удалить запись?',

		'Create a new author' => 
		'Добавить нового автора',

		'Last Seen' => 
		'Последний визит',

		'Language' => 
		'Язык',

		'Email this author' => 
		'Email автора',

		'Unknown' => 
		'Неизвестно',

		'Developer' => 
		'Разработчик',

		'System Default' => 
		'Системные значения',

		'Are you sure you want to delete the selected authors?' => 
		'вы уверены, что хотите удалить выбранного автора?',

		'Access Denied' => 
		'Доступ запрещён',

		'Author updated at %s.' => 
		'Автор обновлен в %s.',

		'View all Authors' => 
		'Показать всех авторов',

		'Author created at %s.' => 
		'Автор создан в %s.',

		'Author not found' => 
		'Автор не найден',

		'The author profile you requested does not exist.' => 
		'Профиль запрошенного атвора не существует.',

		'You are not authorised to edit other authors.' => 
		'Вы не авторизованы для редактирования авторов.',

		'Login Details' => 
		'Детали',

		'Leave password fields blank to keep the current password' => 
		'Оставьте поля пустыми, чтобы сохранить текущий пароль',

		'Old Password' => 
		'Старый пароль',

		'New Password' => 
		'Новый пароль',

		'Confirm Password' => 
		'Подтвердите пароль',

		'%s Allow remote login via' => 
		'%s Разрешить удаленный вход через',

		'Default Area' => 
		'Начальная страница',

		'Sections Index' => 
		'Список разделов',

		'Custom Preferences' => 
		'Пользовательские настройки',

		'Create Author' => 
		'Создать автора',

		'Delete this author' => 
		'Удалить автора',

		'Are you sure you want to delete this author?' => 
		'Вы уверены, что хотите удалить указанного автора?',

		'Passwords did not match' => 
		'Пароли не совпадают',

		'There were some problems while attempting to save. Please check below for problem fields.' => 
		'Возникли некоторые проблемы при сохранении. Проверьте внимательно все поля.',

		'Wrong password. Enter old password to change it.' => 
		'Неверный пароль. Укажите старый пароль для его изменения.',

		'Wrong password. Enter old one to change email address.' => 
		'Неверный пароль. Укажите старый пароль для изменение email адреса.',

		'You cannot remove yourself as you are the active Author.' => 
		'Вы не можете удалить сами себя, т.к. вы являетесь текущим автором.',

		'Extensions' => 
		'Расширения',

		'Installed Version' => 
		'Установленная версия',

		'Enabled' => 
		'Включено',

		'Not Installed' => 
		'Не установлен',

		'Enable to install %s' => 
		'Установить %s',

		'Requires Symphony %s' => 
		'Необходима Symphony %s',

		'Yes' => 
		'Да',

		'New version %1$s, Requires Symphony %2$s' => 
		'Новая версия %1$s, Требуется Symphony %2$s',

		'Enable to update to %s' => 
		'Включить для обновления %s',

		'Disabled' => 
		'Выключено',

		'Enable/Install' => 
		'Включить/Установить',

		'Disable' => 
		'Выключить',

		'Uninstall' => 
		'Удалить',

		'Are you sure you want to uninstall the selected extensions?' => 
		'Вы уверены, что хотите удалить выбранное расширение?',

		'Preferences' => 
		'Настройки',

		'The Symphony configuration file, %s, is not writable. You will not be able to save changes to preferences.' => 
		'Конфигурационный файл Symphony, %s, недоступен для записи. Вы не сможете сохранить нстройки.',

		'Preferences saved.' => 
		'Настройки сохранены',

		'System Language' => 
		'Системный язык',

		'Authors can set up a differing language in their profiles.' => 
		'Авторы могут сами выбирать системный язык для своих профилей.',

		'Default Email Settings' => 
		'Стандартные параметры Email',

		'Gateway' => 
		'Почтовый шлюз',

		'An extension requires updating.' => 
		'Требуется обновить расширение.',

		'View extensions' => 
		'Посмотреть расширения',

		'An update has been found in your installation to upgrade Symphony to %s.' => 
		'Найдено новое обновление для Symphony, %s.',

		'View update.' => 
		'Посмотр расширения',

		'Your Symphony installation is up to date, but the installer was still detected. For security reasons, it should be removed.' => 
		'Ваша система Symphony уже установлена, но установщик не удалён. По соображениям безопасности его следует удалить.',

		'Remove installer?' => 
		'Удалить установщик?',

		'An update script has been found in your installation.' => 
		'Скрипт обновления найден в вашем установщике.',

		'Cannot request a page callback without first specifying the page.' => 
		'Перед запросом вызова обратной связи страницы, сначала необходимо указать страницу.',

		'Page Not Found' => 
		'Страница не найдена',

		'The page you requested does not exist.' => 
		'Запрашиваемая страница не существует.',

		'Invalid timezone %s' => 
		'Неверный часовой пояс %s',

		'no leading zeros' => 
		'без нулей',

		'The page you requested, %s, does not exist.' => 
		'Запращиваемая страница, %s, не существует.',

		'No suitable engine object found' => 
		'Не найден подходящий объект движка',

		'There was a problem whilst attempting to establish a database connection. Please check all connection information is correct.' => 
		'Ошибка возникла при попытке соединения с базой данных. Проверьте параметры подключения к базе данных.',

		'Log out' => 
		'Выход',

		'First name is required' => 
		'Укажите имя',

		'Last name is required' => 
		'Укажите фамилию',

		'E-mail address is required' => 
		'Укажите Email',

		'E-mail address entered is invalid' => 
		'Введён некорректный Email',

		'E-mail address is already taken' => 
		'Указанный Email уже используется',

		'Username is required' => 
		'Укажите имя пользователя',

		'Username is already taken' => 
		'Указанное имя пользователя уже используется',

		'Password is required' => 
		'Укажите пароль',

		'No records found.' => 
		'Записи не найдены.',

		'Could not find Data Source %s.' => 
		'Не удалось найти источник данных %s.',

		'If it was provided by an Extension, ensure that it is installed, and enabled.' => 
		'Предусматривалось использование расширения, проверьте установлено ли оно.',

		'Edit' => 
		'Править',

		'Utility' => 
		'Утилита',

		'Email Gateway Error' => 
		'Ошибка шлюза Email',

		'Sender Email Address can not contain carriage return or newlines.' => 
		'Адрес отправителя не может содержать символов перевода строки или символов новой строки.',

		'Sender Name can not contain carriage return or newlines.' => 
		'Bvz отправителя не может содержать символов перевода строки или символов новой строки.',

		'%1$s is not a supported encoding type. Please use %2$s or %3$s. You can also use %4$s for no encoding.' => 
		'%1$s неподдерживаемый тип кодировки. Используйте %2$s или %3$s. Так же вы можете использовать %4$s для работы без перекодирования.',

		'Reply-To Email Address can not contain carriage return or newlines.' => 
		'Адрес ответа не может содержать символов перевода строки или символов новой строки.',

		'Reply-To Name can not contain carriage return or newlines.' => 
		'Имя отправителя не может содержать символов перевода строки или символов новой строки.',

		'%s accepts strings only; arrays are not allowed.' => 
		'%s принимает только строки; массивы не поддерживаются.',

		'Email subject cannot be empty.' => 
		'Тема письма не может быть пустой.',

		'Sender email address cannot be empty.' => 
		'Адрес отправителя не может быть пустым.',

		'Recipient email address cannot be empty.' => 
		'Адрес получаетеля не может быть пустым.',

		'The email address ‘%s’ is invalid.' => 
		'Неверный email ‘%s’.',

		'No attachments or body text was set. Can not send empty email.' => 
		'Нет текста письма или вложений. Пустое письмо не может быть отправлено.',

		'The %1$s gateway does not support the use of %2$s' => 
		'Шлюз %1$s не поддерживает работу с %2$s',

		'This gateway can not be found. Can not save as default.' => 
		'Шлюз не найден. Использовать по умолчанию его нельзя.',

		'Could not find Email Gateway %s.' => 
		'Не удаётся найти Email шлюз %s.',

		'Entry limit specified was not a valid type. String or Integer expected.' => 
		'Неверно указан лимит записей. Необходимо указать строку или число.',

		'This event has been customised and cannot be viewed from Symphony.' => 
		'Данное событие было изменено и не может быть просмотрено через Symphony.',

		'Could not find Event %s.' => 
		'Не удаётся найти событие %s.',

		'The field ‘%s’, provided by the Extension ‘%s’, is currently in use.' => 
		'Поле ‘%s’, предоставляется расширением ‘%s’, которое в данный момент используется.',

		'Please remove it from your sections prior to uninstalling or disabling.' => 
		'Перед удалением, удалите его из всех разделов.',

		'The Data Source ‘%s’, provided by the Extension ‘%s’, is currently in use.' => 
		'Источник данных ‘%s’, предоставляется расширением ‘%s’, которое в данный момент используется.',

		'Please remove it from your pages prior to uninstalling or disabling.' => 
		'Перед удалением, удалите его из всех разделов.',

		'The Event ‘%s’, provided by the Extension ‘%s’, is currently in use.' => 
		'Событие ‘%s’, предоставляется расширением ‘%s’, которое в данный момент используется.',

		'The Text Formatter ‘%s’, provided by the Extension ‘%s’, is currently in use.' => 
		'Парсер текста ‘%s’, предоставляется расширением ‘%s’, которое в данный момент используется.',

		'Please remove it from your fields prior to uninstalling or disabling.' => 
		'Перед удалением, удалите его из всех разделов.',

		'Missing default namespace definition.' => 
		'Отсутствует определение пространства имён.',

		'The %1$s file for the %2$s extension is not valid XML: %3$s' => 
		'Файл %1$s расширения %2$s имеет не валидный XML код: %3$s',

		'Could not find extension %s at location %s' => 
		'Не удаётся найти расширение %s по указаанному пути %s',

		'New Field' => 
		'Новое поле',

		'Label' => 
		'Наименование',

		'Placement' => 
		'Расположение',

		'Main content' => 
		'Основная панель',

		'Sidebar' => 
		'Боковая панель',

		'Formatting' => 
		'Форматирование',

		'Validation Rule' => 
		'Правило валидации',

		'%s Make this a required field' => 
		'%s Сделать обязательным полем',

		'%s Display in entries table' => 
		'%s Отображать в таблице записей',

		'%s Display relationship in entries table' => 
		'%s Отображать смежные записи в таблице',

		'Invalid element name. Must be valid %s.' => 
		'Неверное имя элемента. Укажите корректное имя %s.',

		'A field with that element name already exists. Please choose another.' => 
		'Поле с таким именем уже существует. Укажите другое имя.',

		'‘%s’ is a required field.' => 
		'Поле ‘%s’ обязательно для заполнения.',

		'Data source output grouping is not supported by the %s field' => 
		'Вывод источника данных не поддерживает группировку по полю %s',

		'Could not find Field %1$s at %2$s.' => 
		'Не удалось найти поле %1$s в %2$s.',

		'Please login to view this page.' => 
		'Авторизуйтесь для доступа к странице.',

		'Take me to the login page' => 
		'Перейти на страницу авторизации',

		'Forbidden' => 
		'Доступ запрещён',

		'Unable to remove - %s' => 
		'Не удалось удалить - %s',

		'Unable to remove file - %s' => 
		'Не удалось удалить файл - %s',

		'Enforced type `%1$s` for argument `$%2$s` does not match any known variable types.' => 
		'Указаный тип `%1$s` для аргумента `$%2$s` не совпадает ни с одним известным типом данных.',

		'Argument `$%1$s` is not of type `%2$s`, given `%3$s`.' => 
		'Аргумент `$%1$s` имеет тип отличный от `%2$s`, укажите `%3$s`.',

		'No errors.' => 
		'Ошибок нет.',

		'Maximum stack depth exceeded.' => 
		'Превышен максимальный размер стека.',

		'Underflow or the modes mismatch.' => 
		'Неверный режим.',

		'Unexpected control character found.' => 
		'Обнаружен некорректный символ.',

		'Syntax error, malformed JSON.' => 
		'Синтаксические ошибки при разборе JSON.',

		'Malformed UTF-8 characters, possibly incorrectly encoded.' => 
		'Неправильный UTF-8, возможно, неправильно закодирован.',

		'Unknown JSON error' => 
		'Неизвестная ошибка JSON',

		'JSON not formatted correctly' => 
		'Неверный формат JSON',

		'The selected language, %s, could not be found. Using default English dictionary instead.' => 
		'Выбранный язык %s не найден. Используется Английский язык.',

		'MySQL Error (%1$s): %2$s in query: %3$s' => 
		'Ошибка MySQL (%1$s): %2$s в запросе: %3$s',

		'Unable to find a Manager class for this resource.' => 
		'Не удалось найти менеджер классов для данного ресурса.',

		'Release Date' => 
		'Дата публикации',

		'Attach to Page' => 
		'Присоединить к странице',

		'Detach from Page' => 
		'Отсоединить от страницы',

		'All' => 
		'Все',

		'Please check permissions on %s' => 
		'Проверьте права на %s',

		'Unsupported SSL type' => 
		'Неподдерживаемый тип SSL',

		'No connection has been established to %s' => 
		'Не удалось подключиться к %s',

		'Header fields can only contain strings' => 
		'Поля заголовоков могут содержать только строки',

		'Can not call HELO on existing session' => 
		'Не удалось отправить команду HELO в текущей сессии',

		'Must call EHLO (or HELO) before calling MAIL' => 
		'Необходимо отправить EHLO (или HELO) перед вызовом MAIL',

		'Only one call to MAIL may be made at a time.' => 
		'Только один вызов MAIL может быть выполнен за раз.',

		'Must call MAIL before calling RCPT' => 
		'Необходимо отправить MAIL перед вызовом RCPT',

		'Must call RCPT before calling DATA' => 
		'Необходимо отправить RCPT перед вызовом DATA',

		'Must call EHLO (or HELO) before calling AUTH' => 
		'Необходимо отправить EHLO (или HELO) перед вызовом AUTH',

		'Can not call AUTH again.' => 
		'Невозможно опять отправить AUTH',

		'Unable to connect via TLS' => 
		'Не удалось подключиться через TLS',

		'Could not send request: %s' => 
		'Не удаётся отправить запрос: %s',

		'%s has timed out' => 
		'%s таймаут превышен',

		'Could not read from %s' => 
		'Не удалось прочитать из %s',

		'Unable to open socket. Unknown error' => 
		'Не удалось открыть сокет. Неизвестная ошибка',

		'Unable to open socket. %s' => 
		'Не удалось открыть сокет. %s',

		'Unable to set timeout.' => 
		'Не удалось установить таймаут.',

		'Could not find Text Formatter %s.' => 
		'Не удалось найти парсер текста %s.',

		'Apply' => 
		'Применить',

		'No suitable XSLT processor was found.' => 
		'Не найден подходящий XSLT процессор.',

		'Data returned is invalid.' => 
		'Полученные данные некорректны.',

		'The %s class failed to acquire a lock, check that %s exists and is writable.' => 
		'Для класса %s не удалось получить блокировку, убедитесь, что %s существует и доступен для записи.',

		'Transformed XML is invalid.' => 
		'XML код невалидный.',

		'The section associated with the data source %s could not be found.' => 
		'Раздел связанный с источником данных %s не может быть найден.',

		'XML is invalid.' => 
		'Некорректный XML',

		'Sendmail (default)' => 
		'Sendmail (по умолчанию)',

		'Email: Sendmail' => 
		'Email: Sendmail',

		'From Name' => 
		'От имени',

		'From Email Address' => 
		'От адресата',

		'SMTP' => 
		'SMTP',

		'Email: SMTP' => 
		'Email: SMTP',

		'Host' => 
		'Хост',

		'Port' => 
		'Порт',

		'No encryption' => 
		'Без шифрования',

		'SSL encryption' => 
		'SSL шафрование',

		'TLS encryption' => 
		'TSL шифрование',

		'For a secure connection, SSL and TLS are supported. Please check the manual of your email provider for more details.' => 
		'Поддержка SSL и TLS для безопасного подключения. Проверьте минимальные требования у своего провайдера почты.',

		'%s Requires authentication' => 
		'%s Требуется аутентификация',

		'Some SMTP connections require authentication. If that is the case, enter the username/password combination below.' => 
		'Для SMTP подключения требуется пройти аутентификацию. Сначала необходимо указать логин и пароль.',

		'Section is invalid' => 
		'Неверный раздел',

		'Invalid Entry ID specified. Could not create Entry object.' => 
		'Было указано неверное ID. Невозможно создать объект записи.',

		'Unknown errors where encountered when saving.' => 
		'Произошла неизвестная ошибка во время сохранения.',

		'[Symphony] A new entry was created on %s' => 
		'[Symphony] Новая запись будет создана в %s',

		'Entry edited successfully.' => 
		'Запись успешно отредактирована.',

		'Entry created successfully.' => 
		'Запись успешно создана.',

		'%s Allow selection of multiple authors' => 
		'%s Разрешить выбор нескольких авторов',

		'%s Select current user by default' => 
		'%s Использовать пользователя по умолчанию',

		'Checkbox' => 
		'Чекбокс',

		'No' => 
		'Нет',

		'%s Checked by default' => 
		'%s Включено по умолчанию',

		'Date' => 
		'Дата',

		'%s Pre-populate with current date' => 
		'%s Предустановка текущей даты',

		'The date specified in ‘%s’ is invalid.' => 
		'Даныне переданые в ‘%s’ некорректны.',

		'Text Input' => 
		'Текстовая строка',

		'‘%s’ contains invalid data. Please check the contents.' => 
		'‘%s’ содержит некорректные данные. Проверьте содержимое.',

		'Select Box' => 
		'Select Box',

		'Predefined Values' => 
		'Стандартные значения',

		'Dynamic Values' => 
		'Динамические значения',

		'%s Allow selection of multiple options' => 
		'%s Разрешить множественное выделение',

		'Available when using Dynamic Values' => 
		'Доступно при использовании динамических значений',

		'%s Sort all options alphabetically' => 
		'%s Сортировать все опции в алфавитном порядке',

		'At least one source must be specified, dynamic or static.' => 
		'По крайней мере один динамический или статический источник даных должен быть определен.',

		'Tag List' => 
		'Список тегов',

		'Suggestion List' => 
		'Список предложений',

		'Existing Values' => 
		'Существующие значения',

		'\'%s\' contains invalid data. Please check the contents.' => 
		'\'%s\' содержит неверный формат данных. Пожалуйста проверьте содержимое.',

		'Textarea' => 
		'Текстовое поле',

		'Number of default rows' => 
		'Количество строк по умолчанию',

		'Text Formatter' => 
		'Парсер текста',

		'‘%s’ contains invalid XML.' => 
		'‘%s’ содержит невелидный XML код.',

		'File Upload' => 
		'Загрузка файла',

		'Destination Directory' => 
		'Целевой каталог',

		'Directory %s does not exist.' => 
		'Каталог %s не существует.',

		'Destination folder is not writable.' => 
		'Целевой каталог закрыт для записи.',

		'The destination directory, %s, does not exist.' => 
		'Целевой каталог, %s, не существует.',

		'The file uploaded is no longer available. Please check that it exists, and is readable.' => 
		'Загруженные файл больше недоступен. Проверьте существует ли он и доступе ли для чтения.',

		'File chosen in ‘%s’ does not match allowable file types for that field.' => 
		'Выбранный файл ‘%s’ не соответствует допустимым типам файлов для данного поля.',

		'File chosen in ‘%1$s’ exceeds the maximum allowed upload size of %2$s specified by your host.' => 
		'Выбранный файл ‘%1$s’ превышает максимально допустимое значение размера %2$s, установленное на вашем хостинге.',

		'File chosen in ‘%1$s’ exceeds the maximum allowed upload size of %2$s, specified by Symphony.' => 
		'Выбранный файл ‘%1$s’ превышает максимально допустимое значение размера %2$s, установленное в Symphony.',

		'File chosen in ‘%s’ was only partially uploaded due to an error.' => 
		'Выбранный файл ‘%1$s’ превышает максимально допустимое значение размера %2$s, установленное в Symphony.',

		'Uploading ‘%s’ failed. Could not write temporary file to disk.' => 
		'Загрузка ‘%s’ завершилась неудачно. Неудаётся записать временный файл на диск.',

		'Uploading ‘%s’ failed. File upload stopped by extension.' => 
		'Загрузка ‘%s’ завершилась неудачно. Загрузка файла прервана.',

		'A file with the name %1$s already exists in %2$s. Please rename the file first, or choose another.' => 
		'Файл с именем %1$s уже существует в %2$s. Пожалуйста, сначала переименуйте уже имеющийся файл или укажите другое имя.',

		'There was an error while trying to upload the file %1$s to the target directory %2$s.' => 
		'Произошла ошибка при попытке загрузки файла %1$s в целевой каталог %2$s.',

		'Database Error' => 
		'Ошибка БД',

		'Symphony Database Error' => 
		'Ошибка БД Symphony',

		'XSLT Processing Error' => 
		'Ошибка обработки XSLT',

		'This page could not be rendered due to the following XSLT processing errors:' => 
		'Данная страница не может быть обработана из-за ошибок XSLT:',

		'General' => 
		'Основные настройки',

		'Show debug view' => 
		'Показать окно отладчика',

		'Debug' => 
		'Отладчик',

		'Show debug view for %s' => 
		'Показать окно отладчика для %s',

		'Show line %d in debug view' => 
		'Показать строку %d в окне отлидчика',

		'Blueprints' => 
		'Структура',

		'yesterday' => 
		'вчера',

		'today' => 
		'сегодня',

		'tomorrow' => 
		'завтра',

		'now' => 
		'сейчас',

		'Sunday' => 
		'Воскресенье',

		'Monday' => 
		'Понедельник',

		'Tuesday' => 
		'Вторник',

		'Wednesday' => 
		'Среда',

		'Thursday' => 
		'Четверг',

		'Friday' => 
		'Пятница',

		'Saturday' => 
		'Суббота',

		'Sun' => 
		'Вс.',

		'Mon' => 
		'Пн.',

		'Tue' => 
		'Вт.',

		'Wed' => 
		'Ср.',

		'Thu' => 
		'Чт.',

		'Fri' => 
		'Пт.',

		'Sat' => 
		'Сб.',

		'January' => 
		'Январь',

		'February' => 
		'Февраль',

		'March' => 
		'Март',

		'April' => 
		'Апрель',

		'May' => 
		'Май',

		'June' => 
		'Июнь',

		'July' => 
		'Июль',

		'August' => 
		'Август',

		'September' => 
		'Сентябрь',

		'October' => 
		'Октябрь',

		'November' => 
		'Ноябрь',

		'December' => 
		'Декабрь',

		'Jan' => 
		'Янв',

		'Feb' => 
		'Фев',

		'Mar' => 
		'Мар',

		'Apr' => 
		'Апр',

		'Jun' => 
		'Июнь',

		'Jul' => 
		'Июль',

		'Aug' => 
		'Сентябрь',

		'Sep' => 
		'Сен',

		'Oct' => 
		'Окт',

		'Nov' => 
		'Нояб',

		'Dec' => 
		'Дек',

		'sec' => 
		'сек',

		'second' => 
		'секунда',

		'min' => 
		'мин',

		'minute' => 
		'минута',

		'hour' => 
		'час',

		'day' => 
		'день',

		'fortnight' => 
		'неделя',

		'forthnight' => 
		'недель',

		'month' => 
		'месяц',

		'year' => 
		'год',

		'secs' => 
		'сек',

		'seconds' => 
		'секунд',

		'mins' => 
		'мин',

		'minutes' => 
		'минут',

		'hours' => 
		'часов',

		'days' => 
		'дней',

		'fortnights' => 
		'2-х недель',

		'forthnights' => 
		'вчера',

		'months' => 
		'месяцев',

		'years' => 
		'лет',

		'weekday' => 
		'будний день',

		'weekdays' => 
		'будни',

		'week' => 
		'неделя',

		'weeks' => 
		'недель',

		'first' => 
		'первый',

		'third' => 
		'третий',

		'fourth' => 
		'четвертый',

		'fifth' => 
		'пятый',

		'sixth' => 
		'шестой',

		'seventh' => 
		'седьмой',

		'eighth' => 
		'восьмой',

		'ninth' => 
		'девятый',

		'tenth' => 
		'десятый',

		'eleventh' => 
		'одиннадцатый',

		'twelfth' => 
		'двенадцатый',

		'last' => 
		'последний',

		'previous' => 
		'предыдущий',

		'this' => 
		'текущий',

	);

	/**
	 * Transliterations
	 */
	$straight = array(

		// Uppercase letters
		
	 	'À' => 'A', 	'Á' => 'A', 	'Â' => 'A', 	'Ã' => 'A', 	'Ä' => 'Ae',
	 	'Å' => 'A', 	'Ā' => 'A', 	'Ą' => 'A', 	'Ă' => 'A', 	'Æ' => 'Ae',
	 	'Ç' => 'C', 	'Ć' => 'C', 	'Č' => 'C', 	'Ĉ' => 'C', 	'Ċ' => 'C',
	 	'Ď' => 'D', 	'Đ' => 'D', 	'Ð' => 'D', 	'È' => 'E', 	'É' => 'E',
	 	'Ê' => 'E', 	'Ë' => 'E', 	'Ē' => 'E', 	'Ę' => 'E', 	'Ě' => 'E',
	 	'Ĕ' => 'E', 	'Ė' => 'E', 	'Ĝ' => 'G', 	'Ğ' => 'G', 	'Ġ' => 'G',
	 	'Ģ' => 'G', 	'Ĥ' => 'H', 	'Ħ' => 'H', 	'Ì' => 'I', 	'Í' => 'I',
	 	'Î' => 'I', 	'Ï' => 'I', 	'Ī' => 'I', 	'Ĩ' => 'I', 	'Ĭ' => 'I',
	 	'Į' => 'I', 	'İ' => 'I', 	'Ĳ' => 'Ij', 	'Ĵ' => 'J', 	'Ķ' => 'K',
	 	'Ł' => 'L', 	'Ľ' => 'L', 	'Ĺ' => 'L', 	'Ļ' => 'L', 	'Ŀ' => 'L',
	 	'Ñ' => 'N', 	'Ń' => 'N', 	'Ň' => 'N', 	'Ņ' => 'N', 	'Ŋ' => 'N',
	 	'Ò' => 'O', 	'Ó' => 'O', 	'Ô' => 'O', 	'Õ' => 'O', 	'Ö' => 'Oe',
	 	'Ø' => 'O', 	'Ō' => 'O', 	'Ő' => 'O', 	'Ŏ' => 'O', 	'Œ' => 'Oe',
	 	'Ŕ' => 'R', 	'Ř' => 'R', 	'Ŗ' => 'R', 	'Ś' => 'S', 	'Š' => 'S',
	 	'Ş' => 'S', 	'Ŝ' => 'S', 	'Ș' => 'S', 	'Ť' => 'T', 	'Ţ' => 'T',
	 	'Ŧ' => 'T', 	'Ț' => 'T', 	'Ù' => 'U', 	'Ú' => 'U', 	'Û' => 'U',
	 	'Ü' => 'Ue', 	'Ū' => 'U', 	'Ů' => 'U', 	'Ű' => 'U', 	'Ŭ' => 'U',
	 	'Ũ' => 'U', 	'Ų' => 'U', 	'Ŵ' => 'W', 	'Ý' => 'Y', 	'Ŷ' => 'Y',
	 	'Ÿ' => 'Y', 	'Y' => 'Y', 	'Ź' => 'Z', 	'Ž' => 'Z', 	'Ż' => 'Z',
	 	'Þ' => 'T',

		// Lowercase letters
		
	 	'à' => 'a', 	'á' => 'a', 	'â' => 'a', 	'ã' => 'a', 	'ä' => 'ae',
	 	'å' => 'a', 	'ā' => 'a', 	'ą' => 'a', 	'ă' => 'a', 	'æ' => 'ae',
	 	'ç' => 'c', 	'ć' => 'c', 	'č' => 'c', 	'ĉ' => 'c', 	'ċ' => 'c',
	 	'ď' => 'd', 	'đ' => 'd', 	'ð' => 'd', 	'è' => 'e', 	'é' => 'e',
	 	'ê' => 'e', 	'ë' => 'e', 	'ē' => 'e', 	'ę' => 'e', 	'ě' => 'e',
	 	'ĕ' => 'e', 	'ė' => 'e', 	'ĝ' => 'g', 	'ğ' => 'g', 	'ġ' => 'g',
	 	'ģ' => 'g', 	'ĥ' => 'h', 	'ħ' => 'h', 	'ì' => 'i', 	'í' => 'i',
	 	'î' => 'i', 	'ï' => 'i', 	'ī' => 'i', 	'ĩ' => 'i', 	'ĭ' => 'i',
	 	'į' => 'i', 	'ı' => 'i', 	'ĳ' => 'ij', 	'ĵ' => 'j', 	'ķ' => 'k',
	 	'ł' => 'l', 	'ľ' => 'l', 	'ĺ' => 'l', 	'ļ' => 'l', 	'ŀ' => 'l',
	 	'ñ' => 'n', 	'ń' => 'n', 	'ň' => 'n', 	'ņ' => 'n', 	'ŋ' => 'n',
	 	'ò' => 'o', 	'ó' => 'o', 	'ô' => 'o', 	'õ' => 'o', 	'ö' => 'oe',
	 	'ø' => 'o', 	'ō' => 'o', 	'ő' => 'o', 	'ŏ' => 'o', 	'œ' => 'oe',
	 	'ŕ' => 'r', 	'ř' => 'r', 	'ŗ' => 'r', 	'ś' => 's', 	'š' => 's',
	 	'ş' => 's', 	'ŝ' => 's', 	'ș' => 's', 	'ť' => 't', 	'ţ' => 't',
	 	'ŧ' => 't', 	'ț' => 't', 	'ù' => 'u', 	'ú' => 'u', 	'û' => 'u',
	 	'ü' => 'ue', 	'ū' => 'u', 	'ů' => 'u', 	'ű' => 'u', 	'ŭ' => 'u',
	 	'ũ' => 'u', 	'ų' => 'u', 	'ŵ' => 'w', 	'ý' => 'y', 	'ŷ' => 'y',
	 	'ÿ' => 'y', 	'y' => 'y', 	'ź' => 'z', 	'ž' => 'z', 	'ż' => 'z',
	 	'þ' => 't', 	'ß' => 'ss', 	'ſ' => 'ss', 	'ƒ' => 'f', 	'ĸ' => 'k',
	 	'ŉ' => 'n',

		// Symbolic
		
	 	'\(' => null, 	'\)' => null, 	',' => null,
	 	'–' => '-', 	'－' => '-', 	'„' => '"',
	 	'“' => '"', 	'”' => '"', 	'—' => '-',
	 	'¿' => null, 	'‽' => null, 	'¡' => null,
	 	'©' => 'c', 	'«' => '"', 	'»' => '"',

		// Special characters
		
	 	'Nº' => 'number',
	 	'№' => 'number',
	 	'°' => 'deg',
	 	'º' => null,

		// Other characters
		
		'/А/' => 'A',
		'/а/' => 'a',
		'/Б/' => 'B',
		'/б/' => 'b',
		'/В/' => 'V',
		'/в/' => 'v',
		'/Г/' => 'G',
		'/г/' => 'g',
		'/Д/' => 'D',
		'/д/' => 'd',
		'/Е/' => 'E',
		'/е/' => 'e',
		'/Ё/' => 'E',
		'/ё/' => 'e',
		'/Ж/' => 'ZH',
		'/ж/' => 'zh',
		'/З/' => 'Z',
		'/з/' => 'z',
		'/И/' => 'I',
		'/и/' => 'i',
		'/Й/' => 'J',
		'/й/' => 'j',
		'/К/' => 'K',
		'/к/' => 'k',
		'/Л/' => 'L',
		'/л/' => 'l',
		'/М/' => 'M',
		'/м/' => 'm',
		'/Н/' => 'N',
		'/н/' => 'n',
		'/О/' => 'O',
		'/о/' => 'o',
		'/П/' => 'P',
		'/п/' => 'p',
		'/Р/' => 'R',
		'/р/' => 'r',
		'/С/' => 'S',
		'/с/' => 's',
		'/Т/' => 'T',
		'/т/' => 't',
		'/У/' => 'U',
		'/у/' => 'u',
		'/Ф/' => 'F',
		'/ф/' => 'f',
		'/Х/' => 'H',
		'/х/' => 'h',
		'/Ц/' => 'TS',
		'/ц/' => 'ts',
		'/Ч/' => 'CH',
		'/ч/' => 'ch',
		'/Ш/' => 'SH',
		'/ш/' => 'sh',
		'/Щ/' => 'SCH',
		'/щ/' => 'sch',
		'/Ъ/' => '',
		'/ъ/' => '',
		'/Ы/' => 'Y',
		'/ы/' => 'y',
		'/Ь/' => '',
		'/ь/' => '',
		'/Э/' => 'E',
		'/э/' => 'e',
		'/Ю/' => 'YU',
		'/ю/' => 'yu',
		'/Я/' => 'YA',
		'/я/' => 'ya',
	);
	
	$regexp = array(
	
		// Ampersands

		'/^&(?!&)$/' => 'и',
		'/^&(?!&)/' => 'и-',
		'/&(?!&)&/' => '-и',
		'/&(?!&)/' => '-и-',

		// Other characters
		
	
	);

	$transliterations = array(
		'straight' => $straight,
		'regexp' => $regexp
	);
