# Активные вызовы для Dzvin PBX

[![GitHub release](https://img.shields.io/github/v/release/dzvinpbx/dzvinpbx-module-monitoractivecalls)](https://github.com/dzvinpbx/dzvinpbx-module-monitoractivecalls/releases)
[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

**[Українською](README.uk.md)** | **Русская версия** | **[English](README.md)**

Модуль для Dzvin PBX для мониторинга текущих разговоров и работы супервизора с активными вызовами. Бесплатный, GPL-3.0-or-later.

> Это форк модуля MikoPBX **ModuleMonitorActiveCalls** для Dzvin PBX — см. раздел [Происхождение](#происхождение) ниже.

## Основные возможности

- Отображение всех активных вызовов
- Действия над вызовом: Подслушать, Шепнуть, Присоединиться, Завершить
- Отображение состояния выбранной очереди (ожидающие вызовы и агенты)
- Многопользовательский режим, совместимость с модулем «Управление доступом в систему»

## Требования

- Dzvin PBX версии 2024.1.114 или выше

## Установка

1. В веб-интерфейсе Dzvin PBX откройте **Модули** → **Маркетплейс** и установите «Активные вызовы».
2. Или скачайте `.zip` из [релизов](https://github.com/dzvinpbx/dzvinpbx-module-monitoractivecalls/releases) и установите через **Модули** → **Установка модуля**.
3. Откройте модуль «Активные вызовы» и при необходимости выберите сотрудника и очередь.

## Поддержка

Вопросы и ошибки: [GitHub Issues](https://github.com/dzvinpbx/dzvinpbx-module-monitoractivecalls/issues).

## Лицензия

GPL-3.0-or-later — см. файл [LICENSE](LICENSE).

## Происхождение

Это форк Dzvin PBX модуля [`mikopbx/ModuleMonitorActiveCalls`](https://github.com/mikopbx/ModuleMonitorActiveCalls)
(от тега `v1.11`, коммит `dbf4c18`), (C) MIKO LLC, Alexey Portnov и Nikolay Beketov,
лицензия GPL-3.0-or-later. Форк переименовывает пространство имён ядра PBX, от которого зависит модуль
(`MikoPBX\` -> `DzvinPBX\`), убирает метаданные лицензирования, дополняет украинские строки
интерфейса и адаптирует ссылки и процесс релизов под этот репозиторий. Оригинальные заголовки
авторских прав и лицензии в каждом файле кода оставлены без изменений; ядро, для которого создан
модуль, — [MikoPBX Core](https://github.com/mikopbx/Core).
